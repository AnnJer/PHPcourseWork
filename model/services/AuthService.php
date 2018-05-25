<?php


class AuthService
{
    public static function setUser(array $user)
    {
        $_SESSION['USER'] = $user;
    }

    public static function clearUser()
    {
        $_SESSION['USER'] = null;
    }

    public static function getEmail()
    {
        return $_SESSION['USER']['email'];
    }

    public static function getName()
    {
        return $_SESSION['USER']['name'];
    }

    public static function isAuth()
    {
        if(isset($_SESSION['USER']) && $_SESSION['USER']){
            return true;
        }

        return false;
    }

    public static function isAdmin()
    {
        if (self::isAuth()) {
            return $_SESSION['USER']['type'] == 'admin';
        }
        return false;
    }

}
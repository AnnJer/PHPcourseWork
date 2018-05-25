<?php

require_once 'ControllerTrait.php';

class AuthController
{
    use ControllerTrait;


    public function showLoginForm()
    {

        if (AuthService::isAuth()) {
            $this->redirect(ROOT_DIR);
        }

        $params = [
            'title' => APP_TITLE,
            'page' => 'Login'
        ];

        return \core\view('login', $params);
    }

    public function processLogin()
    {

        if (!isset($_POST['email']) || !isset($_POST['password'])) {

            AuthService::clearUser();

            $params = [
                'title' => APP_TITLE,
                'page' => 'Login',

                'error' => 'Undefined login or password'
            ];
            return \core\view('login', $params);
        }

        $email = $_POST['email'];
        $password = md5(trim($_POST['password']));

        $user = $this->getDB()
            ->table(['clients'])->select()
            ->where([
                \database\sql\equals('email', $email),
                \database\sql\equals('password', $password)]
            )->exec()->getData();


        if (!$user) {
            AuthService::clearUser();

            $params = [
                'title' => APP_TITLE,
                'page' => 'Login',

                'error' => 'Invalid login or password'
            ];
            return \core\view('login', $params);
        } else {
            AuthService::setUser($user[0]);
            $this->redirect(ROOT_DIR);
        }
    }


    public function logout()
    {
        AuthService::clearUser();



        $this->redirect(ROOT_DIR.'/login');
    }


    public function showRegistrationForm()
    {
        if (AuthService::isAuth()) {
            $this->redirect(ROOT_DIR);
        }

        $params = [
            'title' => APP_TITLE,
            'page' => 'Registration'
        ];

        return \core\view('register', $params);
    }

    public function processRegistration()
    {

        if (!isset($_POST['name']) || !isset($_POST['email'] ) ||
            !isset($_POST['password']) || !isset($_POST['confPassword'] )) {

            AuthService::clearUser();

            $params = [
                'title' => APP_TITLE,
                'page' => 'Registration',
                'error' => 'Information entered incorrectly'
            ];
            return \core\view('register', $params);
        }


        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = md5(trim($_POST['password']));
        $confPassword = md5(trim($_POST['confPassword']));



        $user = $this->getDB()
            ->table(['clients'])->select()
            ->where([\database\sql\equals('email', $email)])
            ->exec()->getData();

        if($password !== $confPassword ) {
            AuthService::clearUser();

            $params = [
                'title' => APP_TITLE,
                'page' => 'Registration',
                'error' => 'Пароли не совпадают'
            ];
            return \core\view('register', $params);

        }

        if( $user ){
            AuthService::clearUser();

            $params = [
                'title' => APP_TITLE,
                'page' => 'Registration',
                'error' => 'Этот email уже использовался'
            ];
            return \core\view('register', $params);
        }

        $this->getDB()->table(['clients'])->insert(['name', 'email', 'password', 'confirmed'],
            [[$name, $email, $password, 'False']])->exec()->getQuery;
//
//        $mail = mail($email, 'Confirm mail', '
//             Подтердить имеил '.$_SERVER['HTTP_HOST'].
//            ROOT_DIR.'/confirm?email='.$email.'&sig='.md5($email.'bober'));

        $this->redirect(ROOT_DIR.'/login');

    }

    public function confirm(){
        $email = $_GET['email'];
        echo $email;
    }
}
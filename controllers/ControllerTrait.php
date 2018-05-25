<?php


trait ControllerTrait
{
    private function redirect(string $location) {
        header('Location: ' . $location );
        die();
    }

    private function getDB(): \database\builder\SQL
    {
        return  \database\sql\sql();
    }

}
<?php

/**
 * Created by PhpStorm.
 * User: vladimirvahrusev
 * Date: 14.09.16
 * Time: 18:28
 */
class ControllerRegister
{
    public function showRegister()
    {
        if (isset($_SESSION['id'])) {
            $this->showMain();
        } else {
            include_once 'view/register.html';
        }

    }

    public function checkPassword()
    {
        $a = new User;
        if ($a->addLoginPassword()) {
            $this->showMain();
        } else {
            $this->showRegister();
        }
    }

    public function showMain()
    {
        include_once 'view/main.php';
    }
}
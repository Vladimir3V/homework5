<?php
//session_start();
/**
 * Created by PhpStorm.
 * User: vladimirvahrusev
 * Date: 14.09.16
 * Time: 18:27
 */
class ControllerLogin
{
    public function checkUser() {//psr-2
        $a = new User();
        if ($a->checkLoginPassword()) {
            $this->showMain();
        } else {
            $this->showLogin();
        }
    }
    public function showLogin()
    {
        include_once 'view/login.html';
    }

    public function showMain()
    {
        include_once 'view/main.php';
    }

    public function logout()
    {
        $a = new User();
        if ($a->logoutUser()) {
            $this->showLogin();
        }
    }
}
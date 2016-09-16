<?php

/**
 * Created by PhpStorm.
 * User: vladimirvahrusev
 * Date: 14.09.16
 * Time: 18:28
 */
class ControllerRegister
{
    public $user;
    public $toview;

    function __construct()
    {
        $this->user   = new User();
        $this->toview = new ToView();
    }

    public function showRegister()
    {
        if (isset($_SESSION['id'])) {
            $this->showMain();
        } else {
            $this->toview->pRegister();
        }

    }

    public function checkPassword()
    {
        if ($this->user->addLoginPassword()) {
            $this->showMain();
        } else {
            $this->showRegister();
        }
    }

    public function showMain()
    {
        $this->toview->pMain();
    }
}
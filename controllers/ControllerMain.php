<?php

/**
 * Created by PhpStorm.
 * User: vladimirvahrusev
 * Date: 14.09.16
 * Time: 18:29
 */
class ControllerMain
{


    public function showMain()
    {
        include_once 'view/main.php';
    }

    public function addAvatar()
    {
        $a = new User();
        if ($a->addAvatar()) {
            $this->showMain();
        }
    }

    public function addPicture()
    {
        $a = new User();
        if ($a->addPicture()) {
            $this->showMain();
        }
    }

    public function addUserInfo()
    {
        $a = new User();
        if ($a->addNameAgeAbout()) {
            $this->showMain();
        }
    }

    public function getPhotoList()
    {
        $a = new User();
        if ($a->getAllPhoto()) {
            $this->showMain();
        }
    }

    public function getUserList()
    {
        $a = new User();
        if ($a->getAllUser()) {
            $this->showMain();
        }
    }

    public function delUser()
    {
        $a = new User();
        if ($a->deletUser()) {
            include_once 'view/login.html';
        }
    }

}
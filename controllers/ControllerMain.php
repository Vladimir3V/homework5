<?php

/**
 * Created by PhpStorm.
 * User: vladimirvahrusev
 * Date: 14.09.16
 * Time: 18:29
 */
class ControllerMain
{
    public $user;
    public $toview;

    function __construct()
    {
        $this->user   = new User();
        $this->toview = new ToView();
    }


    public function showMain()
    {
        $this->toview->pMain();
    }

    public function addAvatar()
    {
        //так как ты везде создаешь экземпляр User
        //можешь его проинициализивароть в конструкторе и записать в свойстве
        //тем самым избавив себя от дублирования кода -- Понял, поправил
        if ($this->user->addAvatar()) {
            $this->showMain();
        }
    }

    public function addPicture()
    {
        if ($this->user->addPicture()) {
            $this->showMain();
        }
    }

    public function addUserInfo()
    {
        if ($this->user->addNameAgeAbout()) {
            $this->showMain();
        }
    }

    public function getPhotoList()
    {
        if ($this->user->getAllPhoto()) {
            $this->showMain();
        }
    }

    public function getUserList()
    {
        if ($this->user->getAllUser()) {
            $this->showMain();
        }
    }

    public function delUser()
    {
        if ($this->user->deletUser()) {
            $this->toview->pLogin();
        }
    }

}
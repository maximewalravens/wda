<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 8-8-2017
 * Time: 12:40
 */
class User
{
    public $userId;
    public $username;
    public $email;
    public $isActive;
    public $wachtwoord;
    public $creationDate;
    public $isAdmin;

    public function __construct($userId, $username, $email,$isActive,$wachtwoord,$creationDate,$isAdmin) {
        $this ->userId = $userId;
       $this ->username = $username;
       $this ->email = $email;
        $this ->isActive = $isActive;
        $this ->wachtwoord = $wachtwoord;
       $this ->creationDate = $creationDate;
       $this ->isAdmin = $isAdmin;
    }
}
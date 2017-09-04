<?php
include_once 'Database/CRUD/UserDb.php';
include_once 'Database/CRUD/FotoDb.php';
session_start();
/**
 * Created by PhpStorm.
 * User: max
 * Date: 14-8-2017
 * Time: 00:38
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $error = "";
    $success = "";
    if(isset($_POST["username"]) && isset($_POST["password"]))
    {
        $username = isset($_POST["username"]) ? $_POST["username"] : "";
        $psw1 = isset($_POST["password"]) ? $_POST["password"] : "";

        //dat hieronder gebruiken voor register
        $psw = password_hash($psw1,PASSWORD_BCRYPT);
        $user = userDb::login($username,$psw1);
        if($user != false)
        {
            if(isset($_POST["remember"]))
            {
                $cookie = password_hash($username,PASSWORD_BCRYPT);
                UserDb::stayLoggedIn($user->userId,$cookie);
               setcookie('loggedIn',$cookie,time()+60*60*7);
            }
            $_SESSION["userId"] = $user->userId;
        }
        else{
            $error = "gebruikersnaam of wachtwoord is fout!";

        }

    }
    else if (!isset($_POST["username"]) && !isset($_POST["password"]))
    {
        $error = "Gelieve alles in te vullen";
    }
    else if(!isset($_POST["username"]))
    {
        $error = "Gelieve je username in te vullen";
    }
    else
    {
        $error = "Gelieve je wachtwoord in te vullen";
    }

header("Location:index.php");
}
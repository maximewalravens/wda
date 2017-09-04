<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 20-8-2017
 * Time: 12:12
 */
include_once 'Database/CRUD/UserDb.php';
include_once 'include/functions.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.php");
}
$success  = "";
$error = "";
$username = isset($_POST["username"]) ? checkInvoer($_POST["username"]) : "";
$email = isset($_POST["email"]) ? checkInvoer($_POST["email"]) : "";
$wachtwoord = isset($_POST["wachtwoord"]) ? checkInvoer($_POST["wachtwoord"]) : "";
$herhWachtwoord = isset($_POST["herhWachtwoord"]) ? checkInvoer($_POST["herhWachtwoord"]) : "";

if($username != "" && $email != "" && $wachtwoord != "" && $herhWachtwoord != "") {
    if ($wachtwoord == $herhWachtwoord) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Gelieve een geldig e-mailadres in te vullen";
       }
       else
       {
           if(!UserDb::checkUsername($username))
           {
               if(!UserDb::checkEmail($email))
               {
                   $success = "u hebt zich succesvol geregistreerd !";
                   $datum = date('Y-m-d');
                   $wachtwoord = password_hash($herhWachtwoord,PASSWORD_BCRYPT);
                   UserDb::addUser(new User(-1, $username, $email, 1, $wachtwoord,$datum , 0));

               }
               else{
                   $error = "er bestaat al een account met dit emailadres";
               }

           }
           else
           {
               $error = "username bestaat al";
           }
      }
    }
    else {
        $error = "wachtwoorden komen niet overeen";
    }
}
else {
    $error = "gelieve alle velden in te vullen";
}

echo "{\"success\": \"$success\", \"error\": \"$error\"}";
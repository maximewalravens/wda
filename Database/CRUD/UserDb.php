<?php
include_once 'Data/User.php';
include_once 'Database/Verbinding/DatabaseFactory.php';
/**
 * Created by PhpStorm.
 * User: max
 * Date: 8-8-2017
 * Time: 16:38
 */
class UserDb
{
    private static function getVerbinding()
    {
        return DatabaseFactory::getDatabase();
    }

    public static function getAll()
    {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Users");

        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getById($id)
    {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Users WHERE userId=? AND isActive = 1", array($id));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }
    }
    public static function login($username,$psw)
    {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Users WHERE username='$username' AND isActive = 1");
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            $user = self::converteerRijNaarObject($databaseRij);
            if(password_verify($psw,$user->wachtwoord))
            {
                return $user;
            }
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }
    }
    public static function stayLoggedIn($userId,$cookie)
    {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("UPDATE Users SET cookie = '$cookie' WHERE userId = '$userId' AND isActive = 1");

    }
    public static function isLoggedIn($cookie)
{
    $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT userId,cookie FROM Users WHERE cookie='$cookie' AND isActive = 1");
    if ($resultaat->num_rows == 1) {
        $databaseRij = $resultaat->fetch_array();

        if(password_verify($cookie,$databaseRij["cookie"]))
        {
            $user = self::getById($databaseRij["userId"]);
            return $user;
        }
    } else {
        //Er is waarschijnlijk iets mis gegaan
        return false;
    }
}
    public static function checkUsername($username)
    {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("    SELECT count(*) as 'total' FROM Users WHERE username = '$username';");

        $row = mysqli_fetch_array($resultaat);
        $totaal = $row['total'];
          if ($totaal == 0) {
            return false;
        } else {

            return true;
        }
    }
    public static function checkEmail($email)
    {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("    SELECT count(*) as 'total' FROM Users WHERE email = '$email';");
        $row = mysqli_fetch_array($resultaat);
        $totaal = $row['total'];
        if ($totaal == 0) {
            return false;
        } else {
            return true;
        }
    }
    public static function addUser($user)
    {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("INSERT INTO `Users` (`userId`, `username`, `email`, `isActive`, `wachtwoord`, `creationDate`, `isAdmin`, `cookie`) VALUES (NULL, '$user->username', '$user->email', 1, '$user->wachtwoord', '$user->creationDate', 0, NULL);");

    }

    protected static function converteerRijNaarObject($databaseRij)
    {
        return new User(
            $databaseRij['userId'],
            $databaseRij['username'],
            $databaseRij['email'],
            $databaseRij['isActive'],
            $databaseRij['wachtwoord'],
            $databaseRij['creationDate'],
            $databaseRij['isAdmin']);
    }
}
<?php
//In deze klasse moet je in principe alleen de connectiegegevens voor jou mysql server aanpassen.
include_once 'Database/Verbinding/Database.php';

class DatabaseFactory {

    //Singleton
    private static $verbinding;

    public static function getDatabase() {

        if (self::$verbinding == null) {
            $mijnComputernaam = "dt5.ehb.be";
            $mijnGebruikersnaam = "WDA038";
            $mijnWachtwoord = "76341295";
            $mijnDatabase = "WDA038";
            self::$verbinding = new Database($mijnComputernaam, $mijnGebruikersnaam, $mijnWachtwoord, $mijnDatabase);
        }
        return self::$verbinding;
    }

}
?>


<?php
include_once 'Data/Categorie.php';
include_once 'Database/Verbinding/DatabaseFactory.php';
/**
 * Created by PhpStorm.
 * User: max
 * Date: 10-8-2017
 * Time: 12:51
 */
class CategorieDb
{
    private static function getVerbinding()
    {
        return DatabaseFactory::getDatabase();
    }

    public static function getAll()
    {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM categorieen");

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
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM categorieen WHERE categorieID=?", array($id));

        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }
    }
    public static function checkNaam($naam)
    {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("    SELECT count(*) as 'total' FROM categorieen WHERE naam = '$naam';");

        $row = mysqli_fetch_array($resultaat);
        $totaal = $row['total'];
        if ($totaal == 0) {
            return false;
        } else {

            return true;
        }
    }
    public static function addCategorie($categorie)
    {
        $result = self::getVerbinding()->voerSqlQueryUit("INSERT INTO `categorieen` (`categorieID`, `naam`, `beschrijving`) VALUES (NULL, '$categorie->naam', '$categorie->beschrijving');");
    }

    protected static function converteerRijNaarObject($databaseRij)
    {
        return new Categorie(
            $databaseRij['categorieID'],
            $databaseRij['naam'],
            $databaseRij['beschrijving']);
    }
}
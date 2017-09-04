<?php
include_once 'Data/Foto.php';
include_once 'Database/Verbinding/DatabaseFactory.php';
/**
 * Created by PhpStorm.
 * User: max
 * Date: 9-8-2017
 * Time: 15:52
 */
class FotoDb
{
    private static function getVerbinding()
    {
        return DatabaseFactory::getDatabase();
    }

    public static function getAll()
    {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Fotos");

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
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Fotos WHERE blogId=?", array($id));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return new Foto(-1,$id,"http://placehold.it/900x300",-1);
        }
    }
    public static function getByUserId($id)
    {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Fotos WHERE userId=?", array($id));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return new Foto(-1,$id,"noImage.jpg",-1);
        }
    }
    public static function addFotoBlog($foto)
    {

            str_replace('img/', '', $foto->naam);
        $result = self::getVerbinding()->voerSqlQueryUit("INSERT INTO `Fotos` (`fotoId`, `blogId`, `naam`, `userId`) VALUES (NULL, '$foto->blogId', '$foto->naam', NULL);");
        return $result;
    }


    protected static function converteerRijNaarObject($databaseRij)
    {
        return new Foto(
            $databaseRij['fotoId'],
            $databaseRij['blogId'],
            $databaseRij['naam'],
            $databaseRij['userId']);
    }
}
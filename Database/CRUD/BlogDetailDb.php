<?php
include_once 'Data/BlogDetail.php';
include_once 'Database/Verbinding/DatabaseFactory.php';
/**
 * Created by PhpStorm.
 * User: max
 * Date: 8-8-2017
 * Time: 16:08
 */
class BlogDetailDb
{
    private static function getVerbinding()
    {
        return DatabaseFactory::getDatabase();
    }

    public static function getAll()
    {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM BlogDetail");

        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getByBlogId($id)
    {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM BlogDetail WHERE blogId=?", array($id));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }
    }
    public static function addBlogDetail($blogDetail)
    {
        self::getVerbinding()->voerSqlQueryUit("INSERT INTO `BlogDetail` (`blogDetailId`, `blogId`, `tekst`, `beschrijving`) VALUES (NULL, '$blogDetail->blogId', '$blogDetail->tekst', '$blogDetail->beschrijving');");
    }

    protected static function converteerRijNaarObject($databaseRij)
    {
        return new BlogDetail(
            $databaseRij['blogDetailId'],
            $databaseRij['blogId'],
            $databaseRij['tekst'],
            $databaseRij['beschrijving']);
    }
}
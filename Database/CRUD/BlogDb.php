<?php
include_once 'Data/Blog.php';
include_once 'Database/Verbinding/DatabaseFactory.php';
include_once 'Database/CRUD/FotoDB.php';
/**
 * Created by PhpStorm.
 * User: max
 * Date: 8-8-2017
 * Time: 10:58
 */
class BlogDb
{
    private static function getVerbinding()
    {
        return DatabaseFactory::getDatabase();
    }
    public static function getAllAdmin()
    {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Blogs");

        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getAll()
    {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Blogs where isDeleted=0");

        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getHot()
    {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Blogs where isDeleted=0 order by totalComments DESC limit 3");

        $resultatenArray = array();

        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }

        return $resultatenArray;
    }
    public static function getRandom()
    {
        $maand = date('n');
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Blogs where isDeleted=0 AND MONTH(datum) =? limit 3",array($maand));

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
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Blogs WHERE blogId=? AND isDeleted=0", array($id));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }
    }

    public static function getFiltered($categorie,$maand)
    {
    /*    if($categorie != "" and $maand != "")
        {
            $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Blogs where isDeleted=0 and MONTH(datum)= ? and categorieID=?", array($maand),array($categorie));

            $resultatenArray = array();

            for ($index = 0; $index < $resultaat->num_rows; $index++) {
                $databaseRij = $resultaat->fetch_array();
                $nieuw = self::converteerRijNaarObject($databaseRij);
                $resultatenArray[$index] = $nieuw;
            }

            return $resultatenArray;
        }*/
        if ($categorie != "") {
            $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Blogs where isDeleted=0 and categorieID=?", array($categorie));

            $resultatenArray = array();

            for ($index = 0; $index < $resultaat->num_rows; $index++) {
                $databaseRij = $resultaat->fetch_array();
                $nieuw = self::converteerRijNaarObject($databaseRij);
                $resultatenArray[$index] = $nieuw;
            }

            return $resultatenArray;
        }
        elseif($maand != ""){
            $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Blogs where isDeleted=0 and MONTH(datum)= ?", array($maand));

            $resultatenArray = array();

            for ($index = 0; $index < $resultaat->num_rows; $index++) {
                $databaseRij = $resultaat->fetch_array();
                $nieuw = self::converteerRijNaarObject($databaseRij);
                $resultatenArray[$index] = $nieuw;
            }

            return $resultatenArray;
        }
        else{
            return self::getAll();
        }
    }
    public static function relevanteBlogs($blogId,$categorieId)
    {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Blogs where isDeleted=0 AND categorieId = ? AND blogId != ".$blogId." limit 3",array($categorieId));

        $resultatenArray = array();

            for ($index = 0; $index < $resultaat->num_rows; $index++) {
                $databaseRij = $resultaat->fetch_array();
                $nieuw = self::converteerRijNaarObject($databaseRij);
                $resultatenArray[$index] = $nieuw;
            }

        return $resultatenArray;
    }
    public static function getTotalComments($blogId)
    {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Blogs where isDeleted=0 AND blogId = ?",array($blogId));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            $blog = self::converteerRijNaarObject($databaseRij);
            return $blog->totalComments;
        } else {
            //Er is waarschijnlijk iets mis gegaan
            return false;
        }
    }
    public static function addBlog($blog,$blogDetail,$foto)
    {

      $result = self::getVerbinding()->voerSqlQueryUit("INSERT INTO `Blogs` (`blogId`, `titel`, `datum`, `isDeleted`, `userId`, `categorieID`, `totalComments`) VALUES (NULL, '$blog->titel', '$blog->datum', '0', '$blog->userId', '$blog->categorieId', '0');");
      var_dump("INSERT INTO `Blogs` (`blogId`, `titel`, `datum`, `isDeleted`, `userId`, `categorieID`, `totalComments`) VALUES (NULL, '$blog->titel', '$blog->datum', '0', '$blog->userId', '$blog->categorieId', '0');");

          $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Blogs where isDeleted=0 AND titel = '$blog->titel' and datum = '$blog->datum' and userId = '$blog->userId' and categorieId = '$blog->categorieId' and totalComments = '0';");

          if ($resultaat->num_rows == 1) {
              $databaseRij = $resultaat->fetch_array();
              $deBlog = self::converteerRijNaarObject($databaseRij);
              $blogDetail->blogId = $deBlog->blogId;
              $foto->blogId = $deBlog->blogId;
              BlogDetailDb::addBlogDetail($blogDetail);
              FotoDb::addFotoBlog($foto);
              return $blog;

          } else {
              //Er is waarschijnlijk iets mis gegaan
              return false;
          }
      }


    protected static function converteerRijNaarObject($databaseRij)
    {
        return new Blog(
            $databaseRij['blogId'],
                $databaseRij['titel'],
                $databaseRij['datum'],
                $databaseRij['isDeleted'],
                $databaseRij['userId'],
                $databaseRij['categorieID'],
                $databaseRij['totalComments']);
    }
}
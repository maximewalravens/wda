<?php
include_once 'Data/Comment.php';
include_once 'Database/Verbinding/DatabaseFactory.php';
include_once 'Database/CRUD/BlogDb.php';

/**
 * Created by PhpStorm.
 * User: max
 * Date: 18-8-2017
 * Time: 23:11
 */
class CommentDb
{
    private static function getVerbinding()
    {
        return DatabaseFactory::getDatabase();
    }
    public static function getAllAdmin($blogId)
    {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Comments where blogId = ?",array($blogId));

        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getAll($blogId)
    {
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM Comments where blogId = ? AND isActive = 1",array($blogId));

        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function addComment($comment)
    {
       $result = self::getVerbinding()->voerSqlQueryUit("INSERT INTO `Comments` (`commentId`, `userId`, `datum`, `tekst`, `blogId`, `isActive`, `titel`) VALUES (NULL, '$comment->userId', '$comment->datum', '$comment->tekst','$comment->blogId',' 1', '$comment->titel');");

       

       $totalComments = BlogDb::getTotalComments($comment->blogId);

       $totalComments = $totalComments + 1;
       self::getVerbinding()->voerSqlQueryUit("UPDATE `Blogs` SET `totalComments` = '$totalComments' WHERE `blogId` = ?",array($comment->blogId));
    }


    protected static function converteerRijNaarObject($databaseRij)
    {
        return new Comment(
            $databaseRij['commentId'],
            $databaseRij['userId'],
            $databaseRij['datum'],
            $databaseRij['tekst'],
            $databaseRij['blogId'],
            $databaseRij['isActive'],
            $databaseRij['titel']);
    }
}
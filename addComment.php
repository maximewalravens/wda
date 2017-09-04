<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 16-8-2017
 * Time: 14:24
 */
include_once 'Database/CRUD/CommentDb.php';
include_once 'include/functions.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.php");
}
    $comment = isset($_POST["comment"]) ? checkInvoer($_POST["comment"]) : "";
    $titel = isset($_POST["titel"]) ? checkInvoer($_POST["titel"]) : "";
    $userId = isset($_POST["userId"]) ? checkInvoer($_POST["userId"]) : "";
    $blogId = isset($_POST["blogId"]) ? checkInvoer($_POST["blogId"]) : "";
    $datum = isset($_POST["datum"]) ? checkInvoer($_POST["datum"]) : "";
    if($comment != "" && $titel != "" && $userId != "" && $blogId != "" && $datum != "")
    {

        CommentDb::addComment(new Comment(-1,$userId,$datum,$comment,$blogId,1,$titel));
    }
else
{
    var_dump("gelieve alles in te vullen en niet met de javascript te spelen :)");
}

$comments = CommentDb::getAll($blogId);
    include "deComments.php";


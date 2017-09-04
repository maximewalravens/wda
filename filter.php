<?php
include_once 'Database/CRUD/BlogDb.php';
include_once 'Database/CRUD/BlogDetailDb.php';
include_once 'Database/CRUD/UserDb.php';
include_once 'Database/CRUD/CategorieDb.php';

if(isset($_POST["type"]) or isset($_POST["maand"])) {

        $categorie = isset($_POST["type"]) ? $_POST["type"] : "";
        $maand = isset($_POST["maand"]) ? $_POST["maand"] : "";
        $blogs = BlogDb::getFiltered($categorie,$maand);
    }
else {

    $blogs = BlogDb::getAll();
}
include "deBlogs.php";
?>


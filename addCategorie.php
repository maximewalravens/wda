<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 20-8-2017
 * Time: 14:22
 */
include_once 'Database/CRUD/CategorieDb.php';
include_once 'include/functions.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.php");
}
$naam = isset($_POST["categorieNaam"]) ? checkInvoer($_POST["categorieNaam"]) : "";
$beschrijving = isset($_POST["categorieBeschrijving"]) ? checkInvoer($_POST["categorieBeschrijving"]) : "";

if($naam != "" && $beschrijving)
{
    if(!CategorieDb::checkNaam($naam))
    {

        CategorieDb::addCategorie(new Categorie(-1,$naam,$beschrijving));
    }
    else{
        echo "sorry deze categorieNaam bestaat al";
    }
}

else
{
    var_dump("gelieve alles in te vullen en niet met de javascript te spelen :)");
}



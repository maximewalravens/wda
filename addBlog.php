<?php
/**
 * data:{categorie:categorie,
 * titel:titel,
 * userId:userId,
 * datum:datum,
 * tekst:tekst,
 * foto:foto},

 * Created by PhpStorm.
 * User: max
 * Date: 19-8-2017
 * Time: 14:36
 */
include_once 'Database/CRUD/BlogDb.php';
include_once 'Database/CRUD/BlogDetailDb.php';
include_once 'include/functions.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.php");
}

$categorie = isset($_POST["blogCategorie"]) ? checkInvoer($_POST["blogCategorie"]) : "";
$titel = isset($_POST["blogTitel"]) ? checkInvoer($_POST["blogTitel"]) : "";
$userId = isset($_POST["userId"]) ? checkInvoer($_POST["userId"]) : "";
$tekst = isset($_POST["blogTekst"]) ? checkInvoer($_POST["blogTekst"]) : "";
$datum = isset($_POST["blogDatum"]) ? checkInvoer($_POST["blogDatum"]) : "";
$beschrijving = isset($_POST["blogBeschrijving"]) ? checkInvoer($_POST["blogBeschrijving"]) : "";
if (isset($_FILES["bestand"]["type"])) {
    if ($_FILES["bestand"]["type"] == "image/jpeg" || $_FILES["bestand"]["type"] == "image/png") {
        $bestandsnaam = $_FILES["bestand"]["name"];
        move_uploaded_file($_FILES["bestand"]["tmp_name"], "./img/" . $bestandsnaam);
    $bestandsnaam = $bestandsnaam+".jpg";
        ?>
        <p>de foto is geupload</p>

        <?php
    } else {
        ?>
        <p>Sorry, enkel jpeg of png files kunnen geupload worden.</p>
        <?php
    }
}
else
{
    $bestandsnaam = null;
}
?>
<?php
if($categorie != "" && $titel != "" && $userId != "" && $tekst != "" && $datum != "" && $beschrijving != "")
{
    $blog = BlogDb::addBlog(new Blog(-1,$titel,$datum,0,$userId,$categorie,0),new BlogDetail(-1,-1,$tekst,$beschrijving),new Foto(-1,-1,$bestandsnaam,-1));
    if($blog == false)
    {
    echo "de blog is niet toegevoegd";
    }
    else
    {
        echo "de blog is toegevoegd !";
       header("Location: index.php");
    }
}
else
{


    echo "de blog is niet toegevoegd";
}


?>

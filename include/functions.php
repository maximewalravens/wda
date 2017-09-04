<?php

function checkInvoer($data)
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
function addImage( $image ,  $imageUrl ,  $imageExt)
{

    $isUploadVoltooid = true;
    //checkt op extensie
    if($imageExt !="jpg" && $imageExt !="png" && $imageExt !="jpeg" && $imageExt !="gif")
    {
        $imageInputError = "Enkel deze bestanden  zijn toegestaan: .jpg .jpeg .png .gif";
        $isUploadVoltooid = false;
    }

//checkt of het bestandsnaam al reeds bestaat
    if(file_exists($imageUrl)){
        $imageInputError = 'Dit bestand bestaat al';
        $isUploadVoltooid = false;
    }
//checkt op grootte van file
    if($_FILES["image"]["size"] > 3000000){
        $imageInputError ="Het bestand is te groot, maximale grootte toegestaant: 3MB";
        $isUploadVoltooid = false;
    }
//checkt op grootte van file
    if($_FILES["image"]["size"] > 3000000){
        $imageInputError ="Het bestand is te groot, maximale grootte toegestaant: 3MB";
        $isUploadVoltooid = false;
    }

    if($isUploadVoltooid)
    {
        //move_uploaded_file wordt hier uitgevoerd naar naar het juiste pad, indien het niet lukt, krijgt men een foutmelding
        if(!move_uploaded_file($_FILES["image"]["tmp_name"],$imageUrl))
        {

            $imageInputError = "Er was een fout tijdens  het uploaden";
            $isUploadVoltooid = false;

        }
    }
    return $isUploadVoltooid;
}


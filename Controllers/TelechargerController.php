<?php

//le controlleur inclut le ou les modèles
include('Models/Wetransfer.php');





if (isset($_GET['id'])){
$idComplex=$_GET['id'];
$toDownload=pourTelecharger($idComplex);

$nom=$toDownload['nomDossier'].'.zip';


// var_dump($toDownload);
// $telecharge =trim(strip_tags($_GET['dossier'])).'/'.$_GET['fichier'];
$telecharge=$toDownload['chemin_local'].'.zip';




if (file_exists($telecharge)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    

    // header('Expires: 0');
    // header('Cache-Control: must-revalidate');
    // header('Pragma: public');
    header('Content-Disposition: attachment; filename="'.$nom.'"'); //Nom du fichier.
    header('Content-Length: ' . filesize($telecharge));
    readfile($telecharge);
    exit;
}

// header('Content-Transfer-Encoding: binary'); //Transfert en binaire (fichier).
//     header('Content-Disposition: attachment; filename="Archive.zip"'); //Nom du fichier.
//     header('Content-Length: '.filesize('Archive.zip')); //Taille du fichier.
     
    // readfile('Archive.zip');
}


//inclure la vue
//include('Views/TelechargerView.php');

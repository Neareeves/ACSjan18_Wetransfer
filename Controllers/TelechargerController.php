<?php

//le controlleur inclut le ou les modèles
include('Models/Wetransfer.php');





if (isset($_GET['id'])){
$idComplex=$_GET['id'];
$toDownload=pourTelecharger($idComplex);


// var_dump($toDownload);
// $telecharge =trim(strip_tags($_GET['dossier'])).'/'.$_GET['fichier'];
$telecharge=$toDownload;


var_dump($telecharge) ;

if (file_exists($telecharge)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($telecharge).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($telecharge));
    readfile($telecharge);
    exit;
}
}


//inclure la vue
include('Views/TelechargerView.php');

?>
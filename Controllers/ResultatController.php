<?php include('Models/Wetransfer.php');

if (isset($_GET['id'])) {
$uniqId=$_GET['id'];

$url_cible='https://'.$_SERVER['HTTP_HOST'].'/Projet_15_wetransfer/?page=Telecharger&id='.$uniqId;

}
 include('Views/ResultatView.php');?>

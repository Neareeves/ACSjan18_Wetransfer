<?php

//Le modèle contient toutes les fonctions d'appel à la base de données.
include('Models/ConnectionBDD.php');
$uniqId=uniqid();
echo $uniqId;
function InsertInfo($uniqId,$nom, $destinataire,$expediteur,$message, $definitive_folder_path) {

    global $dbh;

    $file = $dbh->prepare('INSERT INTO `wetransfer`(`uniqid`,`nom_exp`, `destinataire`, ` expediteur`, `message`, `chemin_local`,`date_ajout`) VALUES (?,?,?,?,?,?,NOW());');

    $file->execute([$uniqId,$nom, $destinataire,$expediteur,$message, $definitive_folder_path]);

    // ajouter les informations (`chemin_local`, `chemin_absolu`,)sont les fichiers téléchargés dans execute

    // $file->fetchAll();

    $lastId=$dbh->lastInsertId();
    return $lastId;
//     $id= $dbh ->prepare("SELECT * FROM `wetransfer` WHERE `id` = ".$lastId.";");
//     $requeteOK=$id->execute();
// echo $requeteOK; 

//     // (si 0, pas fait, si 1, ok)
// $id = $id->fetch();
// var_dump($id);
// return $id;
}


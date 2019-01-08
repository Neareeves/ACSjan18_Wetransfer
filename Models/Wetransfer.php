<?php

//Le modèle contient toutes les fonctions d'appel à la base de données.
include('Models/ConnectionBDD.php');


function InsertInfo($nom, $destinataire,$expediteur,$message) {
	
    global $dbh;

    $file = $dbh->prepare('INSERT INTO `wetransfer`(`nom_exp`, `destinataire`, ` expediteur`, `message`, `date_ajout`) VALUES (?,?,?,?,NOW())');

    $file->execute([$nom, $destinataire,$expediteur,$message]);

    // ajouter les informations (`chemin_local`, `chemin_absolu`,)sont les fichiers téléchargés dans execute

    return $file->fetchAll();
}


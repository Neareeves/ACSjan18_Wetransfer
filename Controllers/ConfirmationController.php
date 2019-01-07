<?php

//le controlleur inclut le ou les modèles
include('Models/Wetransfer.php');

// stocker dans $message_confirmation avec un if : si message envoyé : "votre message a bien été envoyé". si failure : "nous n'avons pas pu accueillir vos fichiers"




//inclure la vue
include('Views/ConfirmationView.php');

?>
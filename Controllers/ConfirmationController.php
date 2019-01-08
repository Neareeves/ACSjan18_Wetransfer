<?php

//le controlleur inclut le ou les modèles
include('Models/Wetransfer.php');

// stocker dans $message_confirmation avec un if : si message envoyé : "votre message a bien été envoyé". si failure : "nous n'avons pas pu accueillir vos fichiers"
 

 //basename() pour protéger?

if (isset($_POST['envoyer'])) {
	$destinataire = $_POST['destinataire'];
	$expediteur= $_POST['expediteur'];
	$nom= htmlspecialchars($_POST['nom'], ENT_QUOTES); 
	$message=htmlspecialchars($_POST['message'], ENT_QUOTES);
	InsertInfo($nom, $destinataire,$expediteur,$message);

	$nomDossier = htmlspecialchars($_POST['nomDossier'], ENT_QUOTES);
	$temporaryUploadpath = $_FILES['upload']['tmp_name'];
	$definitivePathName = 'uploads/'. $_FILES['upload']['name'];
// (add .$nomDossier.'/ dans le chemin, mais comment créer le dossier?)






$extension = substr(strrchr($_FILES['upload']['name'], "."), 1);
move_uploaded_file($temporaryUploadpath, $definitivePathName); 


// // Import PHPMailer classes into the global namespace
// // These must be at the top of your script, not inside a function
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// //Load Composer's autoloader
// require 'vendor/autoload.php';

// $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
// try {
//     //Server settings
//     $mail->SMTPDebug = 2;                                 // Enable verbose debug output
//     $mail->isSMTP();                                      // Set mailer to use SMTP
//     $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
//     $mail->SMTPAuth = true;                               // Enable SMTP authentication
//     $mail->Username = 'user@example.com';                 // SMTP username
//     $mail->Password = 'secret';                           // SMTP password
//     $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
//     $mail->Port = 587;                                    // TCP port to connect to

//     //Recipients
//     $mail->setFrom('from@example.com', 'Mailer');
//     $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
//     $mail->addAddress('ellen@example.com');               // Name is optional
//     $mail->addReplyTo('info@example.com', 'Information');
//     $mail->addCC('cc@example.com');
//     $mail->addBCC('bcc@example.com');

//     //Attachments
//     $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//     $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

//     //Content
//     $mail->isHTML(true);                                  // Set email format to HTML
//     $mail->Subject = 'Here is the subject';
//     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
// }
}

//inclure la vue
include('Views/ConfirmationView.php');

?>
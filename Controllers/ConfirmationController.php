<?php

//le controlleur inclut le ou les modèles
include('Models/Wetransfer.php');

// stocker dans $message_confirmation avec un if : si message envoyé : "votre message a bien été envoyé". si failure : "nous n'avons pas pu accueillir vos fichiers"

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

 //basename() pour protéger?

if (isset($_POST['envoyer'])) {
	$destinataire = $_POST['destinataire'];
	$expediteur= $_POST['expediteur'];
	$nom= htmlspecialchars($_POST['nom'], ENT_QUOTES); 
	$message=htmlspecialchars($_POST['message'], ENT_QUOTES);
	$nomDossier = htmlspecialchars($_POST['nomDossier'], ENT_QUOTES);

	$total = count($_FILES['upload']['tmp_name']);
	

	$dossier = mkdir('uploads/'.$nomDossier,0777,TRUE);
	

	$definitive_folder_path='uploads/'.$nomDossier;

	for ($i=0; $i < $total; $i++) { 
		$temporaryUploadpath = $_FILES['upload']['tmp_name'][$i];

		$definitivePathName = 'uploads/'.$nomDossier.'/'. $_FILES['upload']['name'][$i];

		$message_confirmation[]="";

		$extension = substr(strrchr($_FILES['upload']['name'][$i], "."), 1);
		if (1 == 1){  

			if (move_uploaded_file($temporaryUploadpath, $definitivePathName)){
				$message_confirmation[] .= 'Le fichier "'.$_FILES['upload']['name'][$i].'"" a bien été uploadé.<br>';

			} else {
				$message_confirmation[] .='Le fichier "'.$_FILES['upload']['name'][$i].'" a fait naufrage avec le Titanic.';

			} 
		}
	}
// (add .$nomDossier.'/ dans le chemin, mais comment créer le dossier?)

	$new_file=InsertInfo($uniqId,$nom, $destinataire,$expediteur,$message,$definitive_folder_path,$nomDossier);

$url_telechargement='https://'.$_SERVER['HTTP_HOST'].'/Projet_15_wetransfer/?page=Resultat&id='.$uniqId;

// HZip::zipDir(path)
//zipping

$rootPath = realpath($definitive_folder_path);


// Initialize archive object
$zip = new ZipArchive();
$zip->open('uploads/'.$nomDossier.'.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);

//initialize empty list
$filesToDelete =array();

// Create recursive directory iterator
/** @var SplFileInfo[] $files */
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($rootPath),
    RecursiveIteratorIterator::LEAVES_ONLY
);

foreach ($files as $name => $file)
{
    // Skip directories (they would be added automatically)
    if (!$file->isDir())
    {
        // Get real and relative path for current file
        $filePath = $file->getRealPath();
        $relativePath = substr($filePath, strlen($rootPath) + 1);

        // Add current file to archive
        $zip->addFile($filePath, $relativePath);
          // Add current file to "delete list"
        // delete it later cause ZipArchive create archive only after calling close function and ZipArchive lock files until archive created)
        if ($file->getFilename() != 'important.txt')
        {
            $filesToDelete[] = $filePath;
        }
    }
}

// Zip archive will be created only after closing object
$zip->close();

//remove directory:
// Delete all files from "delete list"
foreach ($filesToDelete as $file)
{
    unlink($file);
}
rmdir($rootPath);




//php mailer:


require ('../vendor/autoload.php');
$mail = new PHPMailer(true);  // Passing `true` enables exceptions
$mail->CharSet = 'UTF-8';
$content='<!doctype html><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><title></title><!--[if !mso]><!-- --><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]--><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><style type="text/css">#outlook a { padding:0; }
          .ReadMsgBody { width:100%; }
          .ExternalClass { width:100%; }
          .ExternalClass * { line-height:100%; }
          body { margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%; }
          table, td { border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt; }
          img { border:0;height:auto;line-height:100%; outline:none;text-decoration:none;-ms-interpolation-mode:bicubic; }
          p { display:block;margin:13px 0; }</style><!--[if !mso]><!--><style type="text/css">@media only screen and (max-width:480px) {
            @-ms-viewport { width:320px; }
            @viewport { width:320px; }
          }</style><!--<![endif]--><!--[if mso]>
        <xml>
        <o:OfficeDocumentSettings>
          <o:AllowPNG/>
          <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
        </xml>
        <![endif]--><!--[if lte mso 11]>
        <style type="text/css">
          .outlook-group-fix { width:100% !important; }
        </style>
        <![endif]--><!--[if !mso]><!--><link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet" type="text/css"><style type="text/css">@import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);</style><!--<![endif]--><style type="text/css">@media only screen and (min-width:480px) {
        .mj-column-per-100 { width:100% !important; max-width: 100%; }
.mj-column-px-400 { width:400px !important; max-width: 400px; }
      }</style><style type="text/css">@media only screen and (max-width:480px) {
      table.full-width-mobile { width: 100% !important; }
      td.full-width-mobile { width: auto !important; }
    }</style></head><body style="background-color:#b6d3d5;"><div style="background-color:#7FC8EA;"><div style="background-color:#b6d3d5;"><!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="background:#b6d3d5;background-color:#b6d3d5;Margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#b6d3d5;background-color:#b6d3d5;width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]--><div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"><tr><td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;"><tbody><tr><td style="width:150px;"><img height="auto" src="https://aletha.promo-24.codeur.online/Projet_15_wetransfer/Images/logoIcon.png" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;" width="150"></td></tr></tbody></table></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="background:#173253;background-color:#173253;Margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#173253;background-color:#173253;width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:400px;" ><![endif]--><div class="mj-column-px-400 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border:solid 5px #c77574;vertical-align:top;" width="100%"><tr><td align="center" style="font-size:0px;padding:25px 25px;word-break:break-word;"><div style="font-family:Arial, sans-serif;font-size:14px;line-height:28px;text-align:center;color:#7FC8EA;">Vous avez reçu des documents!<br></div></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]--><div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"><tr><td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;"><tbody><tr><td style="width:550px;"><img height="auto" src="https://aletha.promo-24.codeur.online/Projet_15_wetransfer/Images/logoIcon.pngf" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;" width="550"></td></tr></tbody></table></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:20px 0px 20px 0px;text-align:center;vertical-align:top;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]--><div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"><tr><td align="center" style="font-size:0px;padding:0px 25px 0px 25px;word-break:break-word;"><div style="font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:14px;line-height:28px;text-align:center;color:#173253;"><mj-text align="center" color="#7FC8EA" font-family="Arial, sans-serif" font-size="14px" line-height="28px" padding="25px 25px">'.$nom.' vous a envoyé un fichier.<br><br>Voici son message :<br><br><p>'.$message.'</p>Pour le récupèrer, cliquez sur <a style="color:#173253" href="'.$url_telechargement.'"><b>ERA</b></a>. Si besoin, entrez l\'identifiant suivant : '.$uniqId.'.<br></mj-text></div></td></tr><tr><td align="center" style="font-size:0px;padding:0px 25px 0px 25px;word-break:break-word;"><div style="font-family:Arial-Bold, sans-serif;font-size:14px;line-height:28px;text-align:center;color:#173253;"><strong>L\'équipe ERA</strong></div></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="background:#173253;background-color:#173253;Margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#173253;background-color:#173253;width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]--><div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"><tr><td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;"><div style="font-family:Arial, sans-serif;font-size:13px;line-height:22px;text-align:center;color:#7FC8EA;">Faites voyager vos fichiers en un éclair avec <a style="color:#ffffff" href="http://localhost/ACSjan18_Wetransfer"><b>ERA</b></a></div></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="Margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:20px 0px 20px 0px;text-align:center;vertical-align:top;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--></div></div></body></html>';

//Set who the message is to be sent from
$mail->setFrom($expediteur, 'ERA, faites voyager vos fichiers');
//Set an alternative reply-to address
$mail->addReplyTo($expediteur, $nom);
//Set who the message is to be sent to
$mail->addAddress($destinataire, $destinataire);
//Set the subject line
$mail->Subject = 'Retrouvez sur ERA les documents qu\'on vous envoie';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
// $mail->msgHTML(file_get_contents('contents.html'), __DIR__);
//Replace the plain text body with one created manually
$mail->Body    = $content;
$mail->AltBody = 'On vous a fait parvenir des fichiers sur ERA';
//Attach an image file
// $mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    // echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    // echo "Message sent!";
}





}



//inclure la vue
include('Views/ConfirmationView.php');

?>
<?php include('Views/headView.php');?>

<main>
	
	<div class="container">
		<div id="cartepostale">
			<div id="cartepostaleContenu">
				
				<form action="Controller/ConfirmationController.php" method="post">
					<div class="cartepostale">
						<div class="blocFichiers">
							<div>Ajoutez des fichiers</div>
							<input type="file" name="upload" accept="image/png, image/jpeg, image/gif, image/jpg, docx, .doc, .xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" placeholder='envoyer' multiple/>
						</div>
						<div class="blocRenseignements">
							<input type="mail" name="destinataire" placeholder="Envoyer à "><br>
							<input type="mail" name="expediteur" placeholder="De la part de (mail)"><br>
							<input type="text" name="nom" placeholder="signé "><br>
							<textarea type="text" name="message" placeholder="Message :"></textarea><br>
							<input type="submit" name="envoyer" value="Envoyer">
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="dessinVille">
			<img src="Images/ville.png">
		</div>
	</div>
</main>




<?php include('Views/FooterView.php');?>
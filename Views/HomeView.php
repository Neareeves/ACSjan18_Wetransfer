<?php include('Views/headView.php');?>

<main>
	
	<div class="container">
		<div id="cartepostale">
			<div id="cartepostaleContenu">
				
				<h1 class="titreHome">Utilisez Era pour transférer vos fichiers de manière rapide et sécurisée. </h1>
				<form action="?page=confirmation" method="post" enctype="multipart/form-data">
					<div class="cartepostale">
						<div class="blocFichiers">
							<div>Ajoutez des fichiers</div>
							<label id="uploadID"><input id="uploadID" type="file" name="upload[]" accept="image/*, docx, .doc, .xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"  multiple required></label>
							<input type="hidden" name="MAX_FILE_SIZE" value="2000000000" />
						</div>
						<div class="blocRenseignements">
							<input id="email" type="email" name="destinataire" placeholder="Envoyer à " required><br>
							<input id="email" type="email" name="expediteur" placeholder="De la part de (mail)" required><br>
							<input id="nom_expediteur" type="text" name="nom" placeholder="signé "><br>
							<input id="nom_dossier" type="text" name="nomDossier" placeholder="Nom du dossier" required><br>
							<textarea id="message" type="text" name="message" placeholder="Message :"></textarea><br>
							<input id="envoyer" type="submit" name="envoyer" value="Envoyer">
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
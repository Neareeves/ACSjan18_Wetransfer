<?php include('Views/headView.php');?>

<main>
	
	<div class="container">
		<div id="cartepostale">
			<div id="cartepostaleContenu">
				
				<form action="?page=confirmation" method="post" enctype="multipart/form-data">
					<div class="cartepostale">
						<div class="blocFichiers">
							<div>Ajoutez des fichiers</div>
							<input type="file" name="upload[]" accept="image/*, docx, .doc, .xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"  multiple required>
						</div>
						<div class="blocRenseignements">
							<input id="emaildes" type="email" name="destinataire" placeholder="Envoyer à " required><br>
							<input id="emailexp" type="email" name="expediteur" placeholder="De la part de (mail)" required><br>
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
<?php include('Views/headView.php');?>

<main>
	
	<div class="container">
		<div id="cartepostale">
			<div id="cartepostaleContenu">
				
				<form>
					<div class="cartepostale">
						<div class="blocFichiers">
							<div>Ajoutez des fichiers</div>
							<input type="file" name="upload" accept="image/png, image/jpeg, image/gif, image/jpg" placeholder='envoyer' multiple/>
						</div>
						<div class="blocRenseignements">
							<input type="mail" name="destinataire" placeholder="Envoyer à "><br>
							<input type="mail" name="expediteur" placeholder="De la part de "><br>
							<textarea type="text" name="message" placeholder="Message :"></textarea><br>
							<input type="submit" name="envoyer" value="Envoyer">
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="dessinVille">
			<img src="Images/">
		</div>
	</div>
</main>




<?php include('Views/FooterView.php');?>
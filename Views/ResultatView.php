<?php include('Views/headView.php');?>

<main>
	<div class="container">
		<div id="cartepostale">
			<div id="cartepostaleContenu">
				<div id="resultat">
					
				<h1>Vous avez reçu des fichiers</h1>
				<p>Pour télécharger les fichers, cliquez sur: <a href="<?=$url_cible;?>"><button id="boutonTel"> ce bouton </button></a></p>
				<p>Merci d'avoir utilisé Era</p>
				</div>
			</div>
		</div>
		<div class="dessinAvion" id="avion">
<img src="Images/avion_004.gif">
</div>
<div  id="Ville">
<img src="Images/ville.png">
</div>
<div id="ile" class="dessinIle">
<img src="Images/ile.png">
</div>
	</div>
</main>
<script>

var ville = document.getElementById("Ville");
var click = document.getElementById('boutonTel');

let avion=document.getElementById('avion');
let ile =document.getElementById('ile');
ile.style.display= 'none';
avion.style.display="none";
ville.style.left = "0px";
ville.style.bottom = "0px";
ville.style.opacity = 1;

function dispaVille(){
if(ville.style.opacity == 0){
ville.style.opacity = 1;
}
else{
ville.style.opacity = 0;
}
}
function appaIle() {
	ile.style.display= 'block';
avion.style.display="block";
}
click.addEventListener("click", function(){
dispaVille();
});
click.addEventListener('click', appaIle);



// CLICK.addEventListener("click", apparait);
// function apparait(){
// ville.style.display = "block";
// }



</script>
<?php include('Views/FooterView.php');?>
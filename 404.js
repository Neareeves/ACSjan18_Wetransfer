var poissons = document.getElementById('poissons');
var switcher = 1;

poissons.addEventListener('animationiteration', function(){
    switcher = switcher * -1;
    poissons.style.transform= "scaleX("+switcher+")";  
});

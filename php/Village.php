<div id="VILLAGE" div class="menu">

<div id="village1" class="menuVillage">

<div class="legende" width="100" height="100">

<h3>La Commune de La Forestière, située à la frontière entre Brie et Champagne, est heureuse de vous accueillir.
   Venez profitez des richesses de notre terroir dans un cadre reposant, dominé par la majestueuse forêt domaniale de la Traconne.</h3>
<div id="Ancre1" class="btnPerso">Découvrez notre village</div>
</div>

<div class="menu2Village"><img src="Ressources/vignoble.jpg" width="500" height="350"></div>

</div>


<div id="village2" class="menuVillage">

    <div id="carrouselVillage">
            <ul>
                <li><img src="Ressources/carrouselAccueil/1.png" width="500" height="350"></li>
                <li><img src="Ressources/carrouselAccueil/2.png" width="500" height="350"></li>
                <li><img src="Ressources/carrouselAccueil/3.png" width="500" height="350"></li>
                <li><img src="Ressources/carrouselAccueil/4.png" width="500" height="350"></li>
            </ul>
        </div>

      <div class="legende">
         
      <h3>Petit village typique, vivant au rythme de son église, cernée par la nature et le chant des oiseaux</h3>
         <div id="Ancre2" class="btnPerso">Que faire sur La Forestière ?</div>
      </div>

</div>


<div id=village3 class="menuVillage">

   <div class="legende">

      <h3>Entre Patrimoine, terroir, randonnées et activités, les coteaux sézannais regorgent d'activités détentes et découvertes</h3>
   
         <ul>
            <li><div id="Ancre3" class="btnPerso">Venir à La Forestière</div></li>
            <li><a href="http://www.sezanne-tourisme.fr/index.php" target="_blank"><div id="toSezanne" class="btnPerso">Découvrir Sézanne et sa région</div></a></li>

   </div>

   <div class="menu2Village"><img src="Ressources/Nesle.jpg" width="500" height="350"></div>

</div>


<div id=village4 class="menuVillage">

   <div class="legende"><h3>A une heure de Reims et de Troyes,
      à 25 minutes de Provins et Romilly, La Forestière est déservable par la N4</h3>

      <div id="Ancre4" class=btnPerso>Retour Menu</div>

   </div>

   <div id=Maps><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50142.92394321374!2d3.572628870849011!3d48.66126001470179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47eed4b272498737%3A0x40a5fb99a3b5130!2s51120%20La%20Foresti%C3%A8re!5e0!3m2!1sfr!2sfr!4v1588411750198!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>

</div>


<script>

   $(function(){

      $(function(carrouselVillage){
      setInterval(function(){
         $("#carrouselVillage ul").animate({marginLeft:-500},1000,function(){
            $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
         })
      }, 3500);
   });

// --------------- Fonctions Ancre Menu Village ------------------------ //

target1 = document.getElementById('village2'),
target2 = document.getElementById('village3'),
target3 = document.getElementById('village4'),
target4 = document.getElementById('navigation'),

button1 = document.getElementById('Ancre1'),
button2 = document.getElementById('Ancre2'),
button3 = document.getElementById('Ancre3');
button4 = document.getElementById('Ancre4');



button1.addEventListener('click', function(){
	
	target1.scrollIntoView({
		block: 'center',
		behavior: 'smooth',
		inline: 'nearest'
	});
	
 });



 button2.addEventListener('click', function(){
	
	target2.scrollIntoView({
		block: 'center',
		behavior: 'smooth',
		inline: 'nearest'
	});
	
 });

 button3.addEventListener('click', function(){
	
	target3.scrollIntoView({
		block: 'center',
		behavior: 'smooth',
		inline: 'nearest'
	});
	
 });

 button4.addEventListener('click', function(){
	
	target4.scrollIntoView({
		block: 'start',
		behavior: 'smooth',
		inline: 'nearest'
	});
	
 });

});

</script>





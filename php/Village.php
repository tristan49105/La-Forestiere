<div id="VILLAGE" div class="menu">

<div id="village1">

<h1>La Commune de La Forestière, située à la frontière entre Brie et Champagne, est heureuse de vous accueillir.</h1>
<p>Venez profitez des richesses de notre terroir dans un cadre reposant, dominé par la majestueuse forêt domaniale de la Traconne.</p>
<div id="Ancre1" class="btnPerso2">Découvrez notre village</div>

</div>

</div>


<div id="village2" class="menuVillage">

   <div id="carrouselVillage">
            <ul>
                <li><div class="imgCarrouselVillage"><img src="Ressources/CarrouselAccueil/1.PNG"></div></li>
                <li><div class="imgCarrouselVillage"><img src="Ressources/CarrouselAccueil/2.PNG"></div></li>
                <li><div class="imgCarrouselVillage"><img src="Ressources/CarrouselAccueil/3.PNG"></div></li>
                <li><div class="imgCarrouselVillage"><img src="Ressources/CarrouselAccueil/4.png"></div></li>
            </ul>
   </div>

   <div id="photoNavMobile"><img src="Ressources/CarrouselAccueil/1.PNG"></div>

      <div class="legende">

         <p>Petit village typique, vivant au rythme de son église, cernée par la nature et le chant des oiseaux</p>

      </div>
</div>


<div id=village3 class="menuVillage">

   <div class="legende">

      <h2>Que faire à La Forestière ?</h2>
      <p>Entre Patrimoine, terroir, randonnées et activités, les coteaux sézannais regorgent d'activités détentes et découvertes</p>
   
            <a href="http://www.sezanne-tourisme.fr/index.php" target="_blank"><div id="toSezanne" class="btnPerso">Découvrir Sézanne et sa région</div></a>

   </div>

   <div class="menu2Village"><img src="Ressources/Nesle.jpg"></div>

</div>


<div id=village4 class="menuVillage">

   <div id=Maps>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50142.92394321374!2d3.572628870849011!3d48.66126001470179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47eed4b272498737%3A0x40a5fb99a3b5130!2s51120%20La%20Foresti%C3%A8re!5e0!3m2!1sfr!2sfr!4v1588411750198!5m2!1sfr!2sfr" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
   </div>


   <div class="legende">
      <h2>Venir à La Forestière</h2>
      <p>A une heure de Reims et de Troyes, à 25 minutes de Provins et Romilly, La Forestière est déservable par la N4</p>
   </div>

</div>




<script>

// --------------- Fonctions Ancre Menu Village ------------------------ //

function NavigationVillage () {

target1 = document.getElementById('village2'),
button1 = document.getElementById('Ancre1'),



button1.addEventListener('click', function(){
	
	target1.scrollIntoView({
		block: 'center',
		behavior: 'smooth',
		inline: 'nearest'
	});
	
 });

};

NavigationVillage ();

</script>





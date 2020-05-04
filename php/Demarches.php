<div id="DEMARCHES" div class="menu">

<h2>Quelle démarche souhaitez-vous réaliser ?</h2>

    <div id="choixDemarche" class="menu">
 
       <div id="etatcivil" class="btnPerso3"><img src="Ressources/LogoActeNone3.png" width="25" height="25"><p>Faire une demande d'état civil</p></div> 
       <div id="autreDem" class="btnPerso3"><img src="Ressources/logoActeOther3.png" width="25" height="25"><p>Faire une demande d'état civil</p></div> 

    </div>

    <div id="menuAutreDemarche" class="closed">
    
        <h2>Cliquez sur l’image pour accéder au site Service-Public.fr<h3>
            <a href="https://www.service-public.fr/" target="_blank">
                <img src="Ressources/servicePublic.png" alt="Logo Service Public" width="200" height="200">
            </a>

    </div>


    <div id="menuEtatCivil" class="closed">

        <div class="Naissance"><div id="Naissance" class="choixActe"></div><h3>Naissances</h3></div>
        <div class="Mariage"><div id="Mariage" class="choixActe"></div><h3>Mariage</h3></div>
        <div class="Deces"><div id="Deces" class="choixActe"></div><h3>Décès</h3></div>
       
    </div>


    <div id="menuNaissance" class="menuDemarches closed">

        <h3>MENU NAISSANCE</h3>

    </div>

    <div id="menuMariage" class="menuDemarches closed" style="flex-direction: column">

        <h3>Quelle est la qualité du demandeur ?</h3>

        <select name="demandeur" id="demandeur">
            <option value="lui-même">La personne concernée par l'acte</option>
            <option value="parent">Son père ou sa mère</option>
            <option value="conjoint">Son conjoint ou sa conjointe</option>
            <option value="enfants">Son fils ou sa fille</option>
        </select>

        <div class="btnPerso3"><p>Continuer</p></div>
    
    </div>

    <div id="menuDeces" class="menuDemarches closed">

        <h3>MENU DECES</h3>

    </div>

</div>


<script>

// Début du formulaire : Selon le bouton cliqué, affiche le menu demandé. 
// Si le menu est déselectionné, on referme tous les menus suivants dans le formulaire


$('.btnPerso3').click(function() {

    if ($(this)[0].id == "autreDem") {
        $('#menuAutreDemarche').toggleClass("closed");
        //$('#autreDem').toggleClass("active");

        $('#menuEtatCivil').addClass("closed");
        //$('#etatcivil').removeClass("active");
    }


    if ($(this)[0].id == "etatcivil") {
        $('#menuEtatCivil').toggleClass("closed");
        //$('#etatcivil').toggleClass("active");

        $('#menuAutreDemarche').addClass("closed");
        //$('#autreDem').removeClass("active");
    }


    if (($('#menuEtatCivil').hasClass('closed')) == true) {
        $('.menuDemarches').addClass('closed');
        $('.choixActe').removeClass('active');
    }

});

// En choisissant un acte, on ouvre son menu et on active son icone. 
// Si on change d'acte, on réinitialise les autres choix

$('.choixActe').click(function() {

    $('.choixActe').removeClass('active');
    $(this).addClass('active');
    $('.menuDemarches').addClass('closed');
    $('#menu'+$(this)[0].id).toggleClass('closed');

});


</script>
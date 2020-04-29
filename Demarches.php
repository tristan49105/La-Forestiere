<div id="DEMARCHES" div class="menu">

    <div id="choixDemarche" class="menu">

       <h2>Quelle démarche souhaitez-vous réaliser ?</h2>
 
       <div class="etatCivil"><div id="EtatCivil" class="choixDemarche"></div><h3>Demande d'acte d'état civil</h3></div> 
    
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

        <div class="btnContinue">Continuer</div>
    
    </div>

    <div id="menuDeces" class="menuDemarches closed">

        <h3>MENU DECES</h3>

    </div>

</div>


<script>

// Début du formulaire : Selon le bouton cliqué, affiche le menu demandé. 
// Si le menu est déselectionné, on referme tous les menus suivants dans le formulaire

$('.etatCivil').click(function() {
    $('#menuEtatCivil').toggleClass("closed");
    $('#EtatCivil').toggleClass("active");

    if (($('#menuEtatCivil').hasClass('closed')) == true) {

        $('.menuDemarches').addClass('closed');  

    }

});

// En choisissant un acte, on ouvre son menu et on active son icone. 
// Si on change d'acte, on réinitialise les autres choix

$('.choixActe').click(function() {

$choixMenu = $(this);
$('.choixActe').removeClass('active');
$(this).addClass('active');
$('.menuDemarches').addClass('closed');
//$('#menu'+$choixMenu[0].id).toggleClass('closed');
$('#menu'+$(this)[0].id).toggleClass('closed');

});


</script>
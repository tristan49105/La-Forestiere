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


    
<script>

// Début du formulaire : Selon le bouton cliqué, affiche le menu demandé. 
// Si le menu est déselectionné, on referme tous les menus suivants dans le formulaire


$('.btnDemarche').click(function() {

    if ($(this)[0].id == "autreDem") {
        $('#menuAutreDemarche').toggleClass("closed");
        //$('#autreDem').toggleClass("active");

        $('#menuEtatCivil').addClass("closed");
        //$('#etatcivil').removeClass("active");
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
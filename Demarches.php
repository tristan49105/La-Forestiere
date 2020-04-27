<div id="DEMARCHES" div class="menu">

    <div id="menuDemarches1" class="menu">

       <h2>Quelle démarche souhaitez-vous réaliser ?</h2>
 
       <div class="etatCivil"><div id="etatCivil" class="choixDemarche"></div><h3>Demande d'acte d'état civil</h3></div> 

    </div>


    <div class="menuDemarches2"><h2>Quel acte est concerné par votre demande ?</h2></div>
    
       <div id="menuEtatCivil1" class="menuDemarches2">

          <div class="Naissance"><div id="Naissance" class="choixActe"></div><h3>Naissances</h3></div>
          <div class="Mariage"><div id="Mariage" class="choixActe"></div><h3>Mariage</h3></div>
          <div class="Deces"><div id="Deces" class="choixActe"></div><h3>Décès</h3></div>
       
        </div>
 
    </div>

    <div id="menuMariage" class="menuDemarches3">

        <h3>Quelle est la qualité du demandeur ?</h3>
        <select name="demandeur" id="demandeur">
            <option value="lui-même">La personne concernée par l'acte</option>
            <option value="parent">Son père ou sa mère</option>
            <option value="conjoint">Son conjoint ou sa conjointe</option>
            <option value="enfants">Son fils ou sa fille</option>
        </select>
    
    </div>




<script>
$('#etatCivil').click(function() { //Choix de l'état civil

    $choixDemarche= this.id;
    $etatCivil = $('#etatCivil');
    console.log(this.id);
    $etatCivil[0].classList.toggle('active');
    $menu1 = $('.menuDemarches2');
    $menu1[0].classList.toggle('opened'); //titre
    $menu1[1].classList.toggle('opened'); //contenu

});

//Mettre un if

if ($choixDemarche == "etatCivil") {

$('.choixActe').click(function() {

    $('.choixActe').removeClass('active');
    $choixActe = (this);
    $choixActe.classList.toggle('active');
    //Afficher bouton "suivant"

});

}



</script>
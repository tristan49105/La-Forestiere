<div id="menuEtatCivil">

    <div id="formulaire1" class="menuFormulaire">

        <h2>Quelle est la nature de l'acte souhaité ?</h2>

            <select name="natureActe" id="natureActe">
                <option value="naissance">Naissance</option>
                <option value="mariage">Mariage</option>
                <option value="deces">Décès</option>
            </select>

    </div>

    <div id="formualaire2" class="menuFormulaire closed" >

        <h2>Désignation de l'acte demandé</h2>

        <label class="radio-inline">
            <input type="radio" name="Designation" checked>Copie intégrale
        </label>

        <label class="radio-inline">
            <input type="radio" name="Designation">Extrait avec filiation
        </label>

        <label class="radio-inline">
            <input type="radio" name="Designation">Extrait sans filiation
        </label>
      
    </div>

    

    <div id="formualaire3" class="menuFormulaire closed">

        <h2>Votre identité</h2>

        <input type="radio" name="civiliteDemandeur" value="monsieur" id="monsieur" /> <label for="monsieur">Monsieur</label>
        <input type="radio" name="civiliteDemandeur" value="madame" id="madame" /> <label for="madame">Madame</label><br /><br />

        <input type="text" id="nameDemandeur" name="nameDemandeur" placeholder="Votre nom" required>
        <input type="text" id="prenomDemandeur" name="prenomDemandeur" placeholder="Votre prénom" required></br></br>

    </div>


    <div id="formualaire4" class="menuFormulaire closed">

        <h2>Identité de la personne faisant l’objet de la demande</h2>


        <input type="radio" name="civiliteActe" value="monsieur" id="monsieur" /> <label for="monsieur">Monsieur</label>
        <input type="radio" name="civiliteActe" value="madame" id="madame" /> <label for="madame">Madame</label><br /><br />


        <input type="text" id="nameActe" name="nameActe" placeholder="Votre nom" required>
        <input type="text" id="prenomActe" name="prenomActe" placeholder="Votre prénom" required><br /><br />
        <input type="text" id="lieuNaissance" name="lienNaissance" placeholder="Lieu de Naissance" required>
        <input type="date" id="dateNaissance" name="dateNaissance" placeholder="Date de Naissance" required>

    </div>


    <div id="btnFormulaire" class="btnPerso3"><p>Continuer</p></div>

</div>

<script>

    $menuformulaire = $('.menuFormulaire').length

    var i = 2;

    $('#btnFormulaire').click(function() {
    
    if (i <= ($menuformulaire)) {
    $("#formualaire" + i).removeClass('closed');
    i++;   
    }


    else {

        alert('envoi');
        
    }

  });

</script>
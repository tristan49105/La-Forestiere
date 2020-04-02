//Création des variables du menu navigation //

let btnAccueil = document.getElementById("btnAccueil")
    btnVillage = document.getElementById("btnVillage")
    btnMairie = document.getElementById("btnMairie")
    btnDemarches = document.getElementById("btnDemarches")
    btnContact = document.getElementById("btnContact")

//Création des variables des sous-menus //
   
    menuAccueil = document.getElementById("accueil")
    menuVillage = document.getElementById("village")
    menuMairie = document.getElementById("mairie")
    menuDemarches = document.getElementById("demarches")
    menuContact = document.getElementById("contact")

//Arrivée sur le site de La Forestière//
menuAccueil.style.display = 'block';
menuVillage.style.display = 'none';
menuMairie.style.display = 'none';
menuDemarches.style.display = 'none';
menuContact.style.display = 'none';

//Fonctions de navigation entre les menus//

//Menu Accueil//
btnAccueil.addEventListener('click', function() {
    
    menuAccueil.style.display = 'block';
    menuVillage.style.display = 'none';
    menuMairie.style.display = 'none';
    menuDemarches.style.display = 'none';
    menuContact.style.display = 'none';
});

//Menu Village//
btnVillage.addEventListener('click', function() {
    
    menuAccueil.style.display = 'none';
    menuVillage.style.display = 'block';
    menuMairie.style.display = 'none';
    menuDemarches.style.display = 'none';
    menuContact.style.display = 'none';
});

//Menu Mairie//
btnMairie.addEventListener('click', function() {
    
    menuAccueil.style.display = 'none';
    menuVillage.style.display = 'none';
    menuMairie.style.display = 'block';
    menuDemarches.style.display = 'none';
    menuContact.style.display = 'none';
});

//Menu Demarches//
btnDemarches.addEventListener('click', function() {
    
    menuAccueil.style.display = 'none';
    menuVillage.style.display = 'none';
    menuMairie.style.display = 'none';
    menuDemarches.style.display = 'block';
    menuContact.style.display = 'none';
});

//Menu Contact//
btnContact.addEventListener('click', function() {
    
    menuAccueil.style.display = 'none';
    menuVillage.style.display = 'none';
    menuMairie.style.display = 'none';
    menuDemarches.style.display = 'none';
    menuContact.style.display = 'block';
});
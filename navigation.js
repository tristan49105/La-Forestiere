// ==========> Script Navigation <==========

$(document).ready(function(){

$btn = $('.btn'),
$currentMenu = '';
$main = $('#main');

//Par défaut, l'accueil s'affiche

if ($currentMenu == '') {

  $currentMenu = 'Accueil';
  $('#Accueil').addClass('active');
  $("#main").hide().load("Accueil.html").fadeIn('500');  

}

// On navigue entre les menus

$btn.click(function(){

  $btn.removeClass('active');
  $(this).addClass('active');
  $("#main").hide().load(this.id + ".html").fadeIn('500');
  //console.log(this.id + ".html");

});

// ==========> Script Demarches <==========
/*
$('.menuDemarches').addClass('closed')

$('#etatCivil').click(function(){

  $('#menuEtatCivil1').addClass('opened');
  console.log('#menuEtatCivil1');

});
*/
});

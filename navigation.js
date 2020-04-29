// ==========> Script Navigation <==========

$(document).ready(function(){

$btn = $('.btn'),
$currentMenu = '';
$main = $('#main');

//Par défaut, l'accueil s'affiche

if ($currentMenu == '') {

  $currentMenu = 'Accueil.php';
  $btn.removeClass('active');
  $('#Accueil').addClass('active');
  $("#main").hide().load($currentMenu).fadeIn('500');  

}

// On navigue entre les menus

$btn.click(function(){

  $btn.removeClass('active');
  $(this).addClass('active');
  $currentMenu = (this.id + ".php");
  $("#main").hide().load($currentMenu).fadeIn('500');
});

});
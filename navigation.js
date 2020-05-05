// ==========> Script Navigation <==========

$(document).ready(function(){

$btn = $('.btn'),
$currentMenu = '';
$main = $('#main');

$Demarches = $('#DEMARCHES') ;
$position = "0"; 

//Par défaut, l'accueil s'affiche

if ($currentMenu == '') {

  $currentMenu = 'php/Accueil.php';
  $btn.removeClass('btnactive');
  $('#Accueil').addClass('btnactive');
  $("#main").hide().load($currentMenu).fadeIn('500');  

}

// On navigue entre les menus

$btn.click(function(){

  $btn.removeClass('btnactive');
  $(this).addClass('btnactive');
  $currentMenu = ('php/' + this.id + ".php");
  $("#main").hide().load($currentMenu).fadeIn('500');

if ($position == "1") {

   $Demarches.animate ({
      opacity: 0,
      top: "-=300"
   }, 350, function() {
      $position = "0";
      console.log($position);
   });

}

});



//Choix DEMARCHES 



$('.btnDemarche').click(function() {

if ($position == "0") {

   $Demarches.animate ({
   opacity: 1,
   top: "+=300"
   }, 350, function() {
      $position = "1";
      console.log($position);
   });

}

 else if ($position == "1") {

   $Demarches.animate ({
      opacity: 0,
      top: "-=300"
   }, 350, function() {
      $position = "0";
      console.log($position);
   });

}

   });

// ========================= Carrousel Accueil =============================

function carrouselAccueil () {

  $(function(){
        setInterval(function(){
           $("#carrouselAccueil ul").animate({marginLeft:-400},1000,function(){
              $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
           })
        }, 3500);
     });
  
  };
  
  carrouselAccueil();


  // =============================== Carrousel Village ==================================
  
  function carrouselVillage () {

    $(function(){
          setInterval(function(){
             $("#carrouselVillage ul").animate({marginLeft:-500},1000,function(){
                $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
             })
          }, 3500);
       });
    
    };
    
    carrouselVillage();
    

});


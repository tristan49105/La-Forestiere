// ==========> Script Navigation <==========

$(document).ready(function(){

$btn = $('.btn'),
$currentMenu = '';
$main = $('#main');

$Demarches = $('#DEMARCHES') ;
$Mairie = $('#MAIRIE');
$positionDemarches = "0";
$positionMairie = "0"; 

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
  $('.btnDemarche').removeClass('btnactive');
  $(this).addClass('btnactive');
  $currentMenu = ('php/' + this.id + ".php");
  $("#main").hide().load($currentMenu).fadeIn('500');

if ($positionDemarches == "1") {

   $Demarches.animate ({
      opacity: 0,
      top: "-=300"
   }, 350, function() {
      $positionDemarches = "0";
      console.log($positionDemarches);
   });

}

});



//Choix DEMARCHES 

$('.btnDemarche').click(function() {

if ($positionDemarches == "0") {
   
   $Demarches.removeClass("closed");
   $Demarches.animate ({
   opacity: 1,
   top: "+=300"
   }, 350, function() {
      $positionDemarches = "1";
   });

}

 else if ($positionDemarches == "1") {

   $Demarches.animate ({
      opacity: 0,
      top: "-=300"
   }, 350, function() {
      $positionDemarches = "0";
      $Demarches.addClass("closed");
   });

}

   });


   $('.btnChoixDemarche').click(function() {

         $currentMenu = ('php/' + this.id + ".php");
         $("#main").hide().load($currentMenu).fadeIn('500');
         $btn.removeClass('btnactive');
         $('.btnDemarche').addClass('btnactive');


         $Demarches.animate ({
            opacity: 0,
            top: "-=300"
         }, 450, function() {
            $positionDemarches = "0";
         });
   
  
  });
  
  // En choisissant un acte, on ouvre son menu et on active son icone. 
  // Si on change d'acte, on réinitialise les autres choix
  
  $('.choixActe').click(function() {
  
      $('.choixActe').removeClass('active');
      $(this).addClass('active');
      $('.menuDemarches').addClass('closed');
      $('#menu'+$(this)[0].id).toggleClass('closed');
  
  });

// Choix MAIRIE

$('.btnMairie').click(function() {

   if ($positionMairie == "0") {
      

      $Mairie.removeClass("closed");

      $Mairie.animate ({
      opacity: 1,
      top: "+=300"
      }, 350, function() {
         $positionMairie = "1";
      });
   
   }
   
    else if ($positionMairie == "1") {
   
      $Mairie.animate ({
         opacity: 0,
         top: "-=300"
      }, 350, function() {
         $positionMairie = "0";
         $Mairie.addClass("closed");
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


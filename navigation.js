// ==========> Script Navigation <==========

$(document).ready(function(){

$btn = $('.btn'),
$currentMenu = '',
$main = $('#main'),

$Demarches = $('#DEMARCHES') ,
$Mairie = $('#MAIRIE'),
$positionDemarches = "0",
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

if (this.id == "Accueil" || this.id == "Village" || this.id == "Contact") {

  $btn.removeClass('btnactive');
  $(this).addClass('btnactive');
  $currentMenu = ('php/' + this.id + ".php");
  $("#main").hide().load($currentMenu).fadeIn('500');
  $('#logo').removeClass('hide');

if ($positionDemarches == "1") {

   $Demarches.animate ({
      opacity: 0,
      top: "-=300"
   }, 350, function() {
      $positionDemarches = "0";
      $('#logo').removeClass('hide');
   });

}

if ($positionMairie == "1") {
   
   $Mairie.animate ({
      opacity: 0,
      top: "-=200"
   }, 350, function() {
      $positionMairie = "0";
      $Mairie.addClass("closed");
      $('#logo').removeClass('hide');
   });

}

}

if (this.id == "Demarches") {

   if ($positionMairie == "1") {

      $('#logo').addClass('hide');
   
      $Mairie.animate ({
         opacity: 0,
         top: "-=200"
      }, 200, function() {
         $positionMairie = "0";
         $Mairie.addClass("closed");
         
      });
   
   }
   
   if ($positionDemarches == "0") {

      $('#logo').addClass('hide');
   
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
         $('#logo').removeClass('hide');
      });
   
   }
}

if (this.id == "Mairie") {

   if ($positionDemarches == "1") {

      $('#logo').addClass('hide');

      $Demarches.animate ({
         opacity: 0,
         top: "-=300"
      }, 350, function() {
         $positionDemarches = "0";
         
      });
   
   }

if ($positionMairie == "0") {

   $Mairie.removeClass("closed");
   $('#logo').addClass('hide');

   $Mairie.animate ({
   opacity: 1,
   top: "+=200"
   }, 350, function() {
      $positionMairie = "1";

   });

}

 else if ($positionMairie == "1") {

   $Mairie.animate ({
      opacity: 0,
      top: "-=200"
   }, 350, function() {
      $positionMairie = "0";
      $Mairie.addClass("closed");
      $('#logo').removeClass('hide');
   });

}

}

if ($menuMobileVisible == true) {

   $('#navigationMobile').animate ({
      top: "-=300"
   }, 450, function () {
      $menuMobileVisible = false;
   });
}

}); // ========================Fin Script Navigation=============================


// =========================== Choix Démarches ============================================


$('.btnChoixDemarche').click(function() {

         $currentMenu = ('php/' + this.id + ".php");
         $("#main").hide().load($currentMenu).fadeIn('500');
         $btn.removeClass('btnactive');
         $('#Demarches').addClass('btnactive');


         $Demarches.animate ({
            opacity: 0,
            top: "-=300"
         }, 450, function() {
            $positionDemarches = "0";
         }); 
  
  });

  // ======================= Navigation version MOBILE =================================

  $menuMobileVisible = false;

  $('#logoMenu').click(function() {

   $('#logo').removeClass('hide');

   if ($menuMobileVisible == false) {

   $('#navigationMobile').animate ({

      top: "+=300"
   }, 450, function () {
      $menuMobileVisible = true;
   });
   }

   else if ($menuMobileVisible == true) {

      $('#navigationMobile').animate ({
         top: "-=300"
      }, 450, function () {
         $menuMobileVisible = false;
      });
   }

   if  ($positionMairie == "1") {

      $Mairie.animate ({
         opacity: 0,
         top: "-=200"
      }, 350, function() {
         $positionMairie = "0";
         $Mairie.addClass("closed");
      });
   
   }

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

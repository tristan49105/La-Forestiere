<div id="CONTACT" div class="menu">

   <div id="formulaireContact">

      <form action="Contact.php" method="post">

         <div id="CoordonneesContact">

            <div class="nomContact">
               <!-- <label for="name">Votre nom :</label> -->
               <input type="text" id="name" name="name" placeholder="Votre nom" required>
            </div>

            <div class="nomContact">
               <!-- <label for="mail">Votre e-mail :</label> -->
               <input type="email" id="mail" name="mail" placeholder="Votre Email" required>
            </div>
         
         </div>

         
         <div id="messageContact">
            <!-- <label for="msg">Votre message :</label> -->
            <textarea id="msg" name="msg" placeholder="Votre message" required></textarea>
         </div>
         
         <button type="submit" id="submit" class="btnPerso4">Envoyer</button>
         
         <div id="ErrorMailContact" class=closed><h3 color red>Une erreur est survenue. Merci de réessayer</h3></div>
         <div id="SuccessMailContact" class=closed><h3 color red>Message envoyé avec succès !</h3></div>
   
      </form>

   </div>

</div>

<script>

function contact () {

$("#formulaireContact").submit(function(event){
    event.preventDefault();
    fonctionContact();
});

function fonctionContact (){

   var name = $("#name").val();
       email = $("#mail").val();
       message = $("#msg").val();

   $.ajax({
      type: "POST",
      url: "php/mailContact.php",
      data: "name=" + name + "&email=" + email + "&message=" + message,

      success : function(text){

            if (text == "success"){
               $('#SuccessMailContact').removeClass('closed');
            }
            else {
               $('#ErrorMailContact').removeClass('closed');
            }

      }  

   });
};

};

contact();

</script>

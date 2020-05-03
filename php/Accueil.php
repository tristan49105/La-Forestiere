<div id="ACCUEIL" div class="menu">

    <div id="MenuAccueil">

        <div id="carrouselAccueil">
            <ul>
                <li><img src="Ressources/CarrouselAccueil/1.png" width="400" height="300"></li>
                <li><img src="Ressources/CarrouselAccueil/2.png" width="400" height="300"></li>
                <li><img src="Ressources/CarrouselAccueil/3.png" width="400" height="300"></li>
                <li><img src="Ressources/CarrouselAccueil/4.png" width="400" height="300"></li>
            </ul>
        </div>


        <div id="meteo" class="menu">

        <h3> Météo du jour </h3>

        <div id="MeteoLigne1">

            <div id=contenuMeteo>
                <div id="logoMeteo"></div>
                <h3><div id="InfosMeteo"><div id="legende"></div></br><div id="temperature"></div></h3></div>
            </div>

        </div>

        <div id="MeteoLigne2">
        
            <div id="Vent"></div>
            <div id="Humidity"></div>

        </div>

    </div>

</div>

<script>

$(function(){
      setInterval(function(){
         $("#CarrouselAccueil ul").animate({marginLeft:-400},1000,function(){
            $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
         })
      }, 3500);
   });


function meteo(){

let $weather, $temperature, $legende = $('#legende'), request =

    $.ajax ({

        url : "http://api.openweathermap.org/data/2.5/weather?id=3019549&appid=23109f10e7cc3047a12724ca781c863b&units=metric",
        dataType : "json"
        //clé openweathermap du tuto = c21a75b667d6f7abb81f118dcf8d4611
    });

    request.done(function(data) {

        $temperature = Math.round(data.main.temp);
        $('#temperature').text($temperature + " C°");

        $weather = (data.weather[0].main);
        //console.log($weather);
        $('#logoMeteo').css({
            
            background : 'url(Ressources/meteo/' + $weather + '.png) 0 0 no-repeat',
            "background-size" : "cover"

        });

        switch ($weather) {
            case "Clear":
                $legende.text("Ensoleillé");
            break;

            case "Thunderstorm":
                $legende.text("Orageux");
            break;

            case "Drizzle":
                $legende.text("Bruine");
            break;

            case "Rain":
                $legende.text("Pluvieux");
            break;

            case "Snow":
                $legende.text("Neige");
            break;

            case "Clouds":
                $legende.text("Nuageux");
            break;

            default:
                $legende.text("Météo indisponible");
        
//Ajouter partie "atmosphère"

        }
            
        
    });

    request.fail(function (error) {
	   
        console.log("la requête Ajax n'a pas abouti");

        $('#logoMeteo').css({
            
            background : 'url(Ressources/meteo/error.png) 0 0 no-repeat',
            "background-size" : "cover"

        });

        $('#InfosMeteo').text("Météo indisponible");

    });

    request.always(function () {
	   
       //console.log("Requête Ajax terminée");

   });

};

meteo();

</script>
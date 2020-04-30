<div id="ACCUEIL" div class="menu">

    <h2>Bienvenue sur le site de La Forestière</h2>

    <div id="MenuAccueil">

        <div id="news" class="menu">

            <h3>Les dernières nouvelles de la commune</h3>

            <h1>Information - Covid 19</h1>

            <p>Depuis l’émergence de cette nouvelle maladie, COVID-19, en janvier 2020, tous les agents de Santé publique France sont mobilisés et la complémentarité de leur métier s’exprime pleinement au service de la population.
Leur action consiste à surveiller et comprendre la dynamique de cette épidémie, anticiper les différents scénarii et mettre en place des actions pour prévenir et limiter la transmission de ce virus sur le territoire national. La réserve sanitaire est fortement mobilisée depuis le début de l’épidémie.
Les connaissances sur les caractéristiques du COVID-19 et de ce virus évoluant très rapidement jour après jour, la mobilisation est totale en coordination avec les instances françaises (Ministère des Solidarités et de la santé, Agences régionales de santé…) et internationales (Organisation mondiale de la santé, Centre européen de contrôle et de prévention des maladies).</p>

        </div>


        <div id="meteo" class="menu">

        <h3> Météo du jour </h3>

            <div id=contenuMeteo>
                <div id="logoMeteo"></div>
                <h3><div id="InfosMeteo"><div id="legende"></div></br><div id="temperature"></div></h3></div>
            </div>

    </div>

</div>

<script>

function meteo(){

let $weather, $temperature, $legende = $('#legende'), request =

    $.ajax ({

        url : "http://api.openweathermap.org/data/2.5/weather?id=3019549&appid=c21a75b667d6f7abb81f118dcf8d4611&units=metric",
        dataType : "json"
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

/* ------------- Fonction de type un à étudier
function meteo() {
    var url = "https://api.openweathermap.org/data/2.5/weather?q=Paris,fr&appid=c21a75b667d6f7abb81f118dcf8d4611&units=metric"
 
    $.get(url, callBackGetSuccess).done(function() {
        //alert( "second success" );
      })
      .fail(function() {
        alert( "error" );
      })
      .always(function() {
        //alert( "finished" );
      });
}

var callBackGetSuccess = function(data) {
    //var element = document.getElementById("zone_meteo");
    element.innerHTML = "La temperature est de " + data.main.temp;
}

meteo();
*/
</script>
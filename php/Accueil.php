<div id="ACCUEIL" div class="menu">

<h2>Bienvenue sur le site de La Forestière</h2>

        <div id="MenuAccueil">

            <div id="AccueilPart1">
              <img src="Ressources/CarrouselAccueil/4.png">
            </div>


            <div id=AccueilPart2>

                <div id="meteo" class="menu">
                   <h3> Météo du jour </h3>
                    
                        <div id=contenuMeteo>
                            <div id="logoMeteo"></div>
                            <h3>
                            <div id="InfosMeteo">
                                <div id="legende"></div></br>
                                <div id="temperature"></div>
                            </div></h3>
                        </div>
                </div>

                <div id="logoNews" class="btnPerso3">
                    <p>Voir les dernières actualités</p>
                </div>

            </div>

        </div>

        <div id="menuNews">

            <div id="ongletNews1" class="ongletNews">
                <div class="imageOnglet"><img src="Ressources/covid.png"></div> 
                <div class="titreOnglet"><p>Informations Coronavirus</p></div>
            </div>

            <div id="ongletNews2" class="ongletNews">
                <div class="imageOnglet"><img src="Ressources/spring.png"></div>
                <div class="titreOnglet"><p>Le printemps est là</p></div> 
            </div>

            <div id="ongletNews2" class="ongletNews">
                <div class="imageOnglet"><img src="Ressources/elections.png"></div> 
                <div class="titreOnglet"><p>Elections municipales 2020</p></div>
            </div>

        </div>

</div>



        <script>

        function meteo(){

        let $weather, $temperature, $legende = $('#legende'), request =

            $.ajax ({

                url : "https://api.openweathermap.org/data/2.5/weather?id=3019549&appid=23109f10e7cc3047a12724ca781c863b&units=metric",
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


function AncreNews () {

targetNews = document.getElementById('menuNews'),
buttonNews = document.getElementById('logoNews'),



buttonNews.addEventListener('click', function(){
	
	targetNews.scrollIntoView({
		block:'center',
		behavior: 'smooth',
		inline: 'nearest'
	});
	
 });

};

        AncreNews ();
        meteo();

</script>

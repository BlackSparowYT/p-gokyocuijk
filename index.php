<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home | Gokyo Cuijk</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="icon" type="image/x-icon" href="./images/favicon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hanalei+Fill&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    </head>

    <body id="home">

        <header>
            <?php include("./files/components/navbar-home.php"); ?>
        </header>

        <main class="home">


                <!-------------------------------------------------->

                    <!-- Popup STAAT UIT VANAF BLIJVEN! 
                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <h2>Voordat je verder gaat graag even dit bericht lezen.</h2>
                            <br>
                            <h3>
                                Heb je dit bericht al een keer gelezen? Dan mag je het weg klikken. Zo niet, lees het dan veder.
                            </h3>
                            <br>
                            <br>
                            <p>
                                <strong>Graag willen wij even aandacht duiden naar de volgende 2 dingen:</strong>
                                <br>
                                > De site is bijna geschikt voor telefoons maar voor nu raden we nog steeds aan om op een computer te bekijken. Dit probleem zal binnenkort opgelost zijn.
                                <br>
                                <br>
                                > Natuurlijk is het niet de bedoeling dat je problemen ondervindt tijdens het bezoeken van de site, vind je er toch wel een? doe dan het volgende. 
                                    <br>1. Maak een foto (of video) van het probleem.
                                    <br>2. Stuur de foto (of video) samen met waar je het op de site hebt gevonden in een email naar: <a href="mailto:bugs@design-atlas.nl">bugs@design-atlas.nl</a>.
                            </p>
                        </div>
                    </div>

                    <script>
            
                    //GRAAG VANAF BLIJVEN!!!
                
                
                        // checks if one day has passed. 
                        function hasOneDayPassed() {
                    
                        // get today's date. eg: "7/37/2007"
                        var date = new Date().toLocaleDateString();
                    
                        // if there's a date in localstorage and it's equal to the above: 
                        // inferring a day has yet to pass since both dates are equal.
                        if( localStorage.yourapp_date == date ) 
                            return false;
                    
                        // this portion of logic occurs when a day has passed
                        localStorage.yourapp_date = date;
                        return true;
                        }
                    
                    
                        // some function which should run once a day
                        function runOncePerDay(){
                            if( !hasOneDayPassed() ) return false;
                    
                    
                    
                    
                    
                    
                    
                            // Get the modal
                            var modal = document.getElementById("myModal");
                            
                            // Get the button that opens the modal
                            var btn = document.getElementById("myBtn");
                            
                            // Get the <span> element that closes the modal
                            var span = document.getElementsByClassName("close")[0];
                            
                            //automaticly open the popup
                            window.addEventListener("load", function(){
                            setTimeout(
                                function open(event){
                                    modal.style.display = "block";
                                },
                                1000
                            )
                            }); 
                    
                            // When the user clicks on <span> (x), close the modal
                            span.onclick = function() {
                            modal.style.display = "none";
                            }
                            
                            // When the user clicks anywhere outside of the modal, close it
                            window.onclick = function(event) {
                            if (event.target == modal) {
                                modal.style.display = "none";
                            }
                            }
                    
                        }
                    
                    
                        runOncePerDay();
                        runOncePerDay();
                    </script>
    
                ------------------------------------------------>
    
                


            <div class="home-hero">
                <div class="overlay">
                    <div class="hero-text">
                        <h1>Gokyo Cuijk</h1>
                    </div>
                </div>
            </div>
            <div class="separator1">
                <div class="separator"></div>
            </div>
            <div class="text-block-1">
                <div class="item-text-1">
                    <h3>Wat is judo?</h3>
                    <p>
                        Judo werd door Jugoro Kano (1860 1938) ontwikkeld vanuit de traditionele Japanse vechtkunst Jiu-Jitsu. Voor de pedagoog Kano was judo niet zomaar een sport. Hij beschouwde het vooral als een opvoedkundige methode.
                        <br>
                        <br>
                        Judoka's trachten elkaar met een judoworp op de mat te werpen of hun tegenstander met behulp van een grondtechniek onder controle te krijgen. Een judoka gebruikt de kracht van de tegenstander om deze te overmeesteren. 
                        <br>
                        <br>
                        Door judo leer je positief omgaan met agressie. 
                        <br>
                        Judo is bovendien beschaafd. Zonder je tegenstander te blesseren leer je hem of haar te overmeesteren.
                    </p>
                </div>
            </div>
            <div class="separator2">
                <div class="separator"></div>
            </div>
            <div class="text-block-2">
                <div class="item-text-2">
                    <h3>Judo kun je alleen maar leren door het te doen!</h3>
                    <p>
                        Judo is een sport voor iedereen!
                        <br>
                        Voor jong of oud en voor zowel de heren als de dames. 
                        <br>
                        Al tienduizenden judoka's beoefenen de judosport met veel enthousiasme. 
                        <br>
                        <br>
                        Tevens is judo ook nog eens een Olympische sport. Er zijn al meerdere Nederlanders wereld- / Europees Olympisch kampioen geworden. 
                        <br>
                        Een aantal judoka's zijn actief in de wedstrijdsport maar het merendeel beperkt zich tot het trainen bij de club. 
                        <br>
                        Recreatief bezig zijn is dus ook heel belangrijk.
                        <br>
                        <br>
                        <br>
                        Wil jij het een keer mee doen?
                        <br>
                        Kom eens een keer langs voor een proefles! Je kan 3 proeflessen gratis volgen om te kijken of je het leuk vind. 
                        <br>
                        Wanneer je een les kan volgen kun je hier onder vinden.
                    </p>
                    <div id="bttns-block">
                        <a href="./informatie/lestijden/index.html">Lestijden</a>
                        <a href="./contact/index.html#locatie-link">Locatie</a>
                    </div>
                </div>
            </div>
            <div class="separator3">
                <div class="separator"></div>
            </div>
            
        </main>
        
        <footer>
            <?php include("./files/components/footer-home.php"); ?>
        </footer>

    </body>
</html>


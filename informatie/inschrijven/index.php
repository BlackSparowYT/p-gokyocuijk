<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Your description goes here">
        <title>Inschrijven | Gokyo Cuijk</title>
        <link rel="stylesheet" href="../../styles.css">
        <link rel="icon" type="image/x-icon" href="../../images/favicon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hanalei+Fill&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    </head>

    <body id="inschrijven">
        <header>
            <nav>
                <div id="navbar-v1">
                    <div class="navbar-v1-sitelogo">
                        <a><img src="../../images/navbar-logo.png"></a>
                    </div>
                    <div class="navbar-v1-items">
                        <a href="../../index.html" class="hoverbtn"><h3>Home</h3></a>
                        <div class="dropdown">
                            <a onclick="myFunction3()" class="dropbtn hoverbtn"><h3 class="dropbtn">Informatie</h3></a>
                            <div id="dropdownMenu" class="dropdown-content">
                                <a href="https://www.facebook.com/gokyocuijk/">Nieuws</a>
                                <a href="../../informatie/lestijden/index.html">Les Tijden</a>
                                <a href="../../informatie/agenda/index.html">Agenda</a>
                                <a href="../../informatie/huisregels/index.html">Huisregels</a>
                                <a href="../../informatie/examens/index.html">Examens</a>
                                <a href="../../informatie/inschrijven/index.html#gokyo">Inschrijven Gokyo</a>
                                <a href="../../informatie/inschrijven/index.html#toernooi">Inschrijven Toernooien</a>
                                <a href="../../informatie/protocollen/index.html">Gedragsregels & Protocollen</a>
                                <a href="../../informatie/recent/index.html">Recent</a>
                            </div>
                        </div>
                        <a href="../../contact/index.html" class="hoverbtn"><h3>Contact</h3></a>
                        <a href="../../over-ons/index.html" class="hoverbtn"><h3>Over Ons</h3></a>
                        <a href="../../sponsors/index.html" class="hoverbtn"><h3>Sponsors</h3></a>
                    </div>
                </div>

                <script>
                    /* When the user clicks on the button, 
                    toggle between hiding and showing the dropdown content */
                    function myFunction3() {
                      document.getElementById("dropdownMenu").classList.toggle("show");
                    }
                    
                    // Close the dropdown if the user clicks outside of it
                    window.onclick = function(event) {
                      if (!event.target.matches('.dropbtn')) {
                        var dropdowns = document.getElementsByClassName("dropdown-content");
                        var i;
                        for (i = 0; i < dropdowns.length; i++) {
                          var openDropdown = dropdowns[i];
                          if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                          }
                        }
                      }
                    }
                </script>


                
                <div id="navbar-v2">
                    <div class="navbar-v2-sitelogo">
                        <a><img src="../../images/navbar-logo.png"></a>
                    </div>
                    <div class="navbar-v2-items">
                        <a onclick="openNav()"><h2>&#9776;</h2></a>
                    </div>
                    <div id="navbar-v2-fullscreen" class="nav-overlay">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <div class="nav-overlay-content">
                            <a href="../../index.html"><h3>Home</h3></a>
                            <a href="../../informatie/index.html" class="active"><h3>Informatie</h3></a>
                            <a href="../../contact/index.html"><h3>Contact</h3></a>
                            <a href="../../over-ons/index.html"><h3>Over Ons</h3></a>
                            <a href="../../sponsors/index.html"><h3>Sponsors</h3></a>
                        </div>
                    </div>
                </div>


                <script>
                    function openNav() { document.getElementById("navbar-v2-fullscreen").style.height = "100%"; }
                    function closeNav() { document.getElementById("navbar-v2-fullscreen").style.height = "0%"; }
                </script>
            </nav>
        </header>
        <main class="inschrijven">
            <div class="inschrijven-hero">
                <div class="overlay">
                    <div class="hero-text">
                        <h1 id="gokyo">Inschrijven</h1>
                    </div>
                </div>
            </div>
            
            <div class="block block-MT">
                <h2>Inschrijven bij Gokyo Cuijk:</h2>
                <p>
                    Wil je graag bij onze club inschrijven?
                    Je kunt hieronder het inschrijf formulier invullen.
                    <br>
                    Zorg ervoor dat je dit goed doorleest. Na het invullen zullen wij contact met u openen via de opgegeven email.
                </p>
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScTfKRPGl39syvFFTRcVk7qqIdYKJacRQhKnB5Nfx2SPnA-qw/viewform"></iframe>
                <a class="tele-btn" href="https://docs.google.com/forms/d/e/1FAIpQLScTfKRPGl39syvFFTRcVk7qqIdYKJacRQhKnB5Nfx2SPnA-qw/viewform">Open formulier</a>
                <p class="help-text" id="toernooi">Laad of werkt het formulier niet? Klik dan <a href="https://docs.google.com/forms/d/e/1FAIpQLScTfKRPGl39syvFFTRcVk7qqIdYKJacRQhKnB5Nfx2SPnA-qw/viewform" target="_blank">hier</a></p>
            </div>

            <h2>Inschrijven Toernooien:</h2>
            <div class="flex-box">
                <div class="block block-LT">
                    <?php 

                        // Huidige datum
                        $date = date("Y/m/d");

                        // Datum dat het inschrijven dicht gaat.
                        $expDate = "2023/03/24";

                        // Link van het formulier
                        $formLink = "https://docs.google.com/forms/d/e/1FAIpQLSeQl_Ha1ir-wVirVezyu1TqDQl-rtXZJXPFodeWnwCH-YpXVg/viewform";

                        // Kijk of de huidige datum voor de einddatum ligt, ja dan laat het formulier zien, nee laat niks zien.
                        if (strtotime($date) < strtotime($expDate)) {
                            echo '
                                <h3>[Toernooi Naam]:</h3>
                                <p>
                                    Wil jij je inschrijven voor de [Toernooi Naam] doe dat dan hieronder!
                                    <br>
                                    Dit toernooi vind zich plaats in [toernooi plaats] op [toernooi datum]. Inschrijven is mogenlijk tot '.$expDate.'.
                                </p>
                                <iframe src="'.$formLink.'"></iframe>
                                <a class="tele-btn" href="'.$formLink.'">Open formulier</a>
                                <p class="help-text" >Laad of werkt het formulier niet? Klik dan <a href="'.$formLink.'" target="_blank">hier</a></p>
                            ';
                        } else {
                            echo '
                                <h3>Er zijn tijdelijk geen toernooien</h3>
                            ';

                            $geenToernooi = 1;
                        }
                        

                    ?>
                </div>
                <div class="block block-RT">
                    <?php 

                        // Huidige datum
                        $date = date("Y/m/d");

                        // Datum dat het inschrijven dicht gaat.
                        $expDate = "2023/03/24";

                        // Link van het formulier
                        $formLink = "https://docs.google.com/forms/d/e/1FAIpQLSeQl_Ha1ir-wVirVezyu1TqDQl-rtXZJXPFodeWnwCH-YpXVg/viewform";

                        // Kijk of de huidige datum voor de einddatum ligt, ja dan laat het formulier zien, nee laat niks zien.
                        if (strtotime($date) < strtotime($expDate)) {
                            echo '
                                <h3>[Toernooi Naam]:</h3>
                                <p>
                                    Wil jij je inschrijven voor de [Toernooi Naam] doe dat dan hieronder!
                                    <br>
                                    Dit toernooi vind zich plaats in [toernooi plaats] op [toernooi datum]. Inschrijven is mogenlijk tot '.$expDate.'.
                                </p>
                                <iframe src="'.$formLink.'"></iframe>
                                <a class="tele-btn" href="'.$formLink.'">Open formulier</a>
                                <p class="help-text" >Laad of werkt het formulier niet? Klik dan <a href="'.$formLink.'" target="_blank">hier</a></p>
                            ';
                        } else if (strtotime($date) > strtotime($expDate) && $geenToernooi == 1) {
                            // laat dit alleen zien als beide blokken geen formulier bevat
                            echo "ㅤ"; 
                        } else {
                            echo '
                                <h3>Er zijn tijdelijk geen toernooien</h3>
                            ';
                        }


                    ?>
                </div>
            </div>
        </main>

        <footer>
            <div class="flex-box-1">
                <div class="block-1">
                    <img src="../../images/footer-logo.png">
                    <h3>Page Version: v1.5</h3>
                    <h3>Site Version: v1.1</h3>
                </div>
                <div class="block-2">
                    <div class="block-2-1">
                        <h3>Over deze site:</h3>
                        <p>
                            Deze site is gemaakt voor de vereniging Gokyo Cuijk, over Gokyo Cuijk kun je meer vinden op onze <a href="../../over-ons/index.html">over ons</a> pagina.
                        </p>
                    </div>
                    <div class="block-2-2-v1">
                        <h3>Alle Pagina's:</h3>
                        <div class="block-2-2-1">
                            <p>- <a href="../../index.html">Home</a></p>
                            <p>- <a href="../../informatie/index.html">Informatie</a></p>
                            <p>-- <a href="https://www.facebook.com/gokyocuijk/" target="_blank">Nieuws</a></p>
                            <p>-- <a href="../informatie/lestijden/index.html">Les Tijden</a></p>
                            <p>-- <a href="../informatie/agenda/index.html">Agenda</a></p>
                            <p>-- <a href="../informatie/huisregels/index.html">Huisregels</a></p>
                        </div>
                        <div class="block-2-2-2">
                            <p>-- <a href="../../informatie/exameneisen/index.html">Examen Eisen</a></p>
                            <p>-- <a href="../../informatie/inschrijven/index.html">Inschrijven</a></p>
                            <p>-- <a href="../../informatie/recent/index.html">Recent</a></p>
                            <p>- <a href="../../contact/index.html">Contact</a></p>
                            <p>- <a href="../../over-ons/index.html">Over ons</a></p>
                            <p>- <a href="../../sponsors/index.html">Sponsors</a></p>
                        </div>
                    </div>
                    <div class="block-2-2-v2">
                        <h3>Alle Pagina's:</h3>
                        <div class="block-2-2-1">
                            <a href="../../index.html">Home</a>
                            <a href="../../informatie/index.html">Informatie</a>
                            <a href="https://www.facebook.com/gokyocuijk/" target="_blank">Nieuws</a>
                            <a href="../../informatie/lestijden/index.html">Les Tijden</a>
                            <a href="../../informatie/agenda/index.html">Agenda</a>
                            <a href="../../informatie/huisregels/index.html">Huisregels</a>
                        </div>
                        <div class="block-2-2-2">
                            <a href="../../informatie/exameneisen/index.html">Examen Eisen</a>
                            <a href="../../informatie/inschrijven/index.html">Inschrijven</a>
                            <a href="../../informatie/recent/index.html">Recent</a>
                            <a href="../../contact/index.html">Contact</a>
                            <a href="../../over-ons/index.html">Over ons</a>
                            <a href="../../sponsors/index.html">Sponsors</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="block-3">
                <h3>&#169;<script>document.write(new Date().getFullYear())</script> - Gokyo Cuijk | <a href="https://design-atlas.nl" target="_blank">Design Atlas</a></h3>
            </div>
        </footer>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Your description goes here">
        <title>Inschrijven | Gokyo Cuijk</title>
        <link rel="stylesheet" href="../../styles.css">
        <link rel="icon" type="image/x-icon" href="../../files/images/favicon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hanalei+Fill&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    </head>

    <body id="inschrijven">

        <header>
            <?php include("../../files/components/navbar-info.php"); ?>
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
            <?php include("../../files/components/footer-info.php"); ?>
        </footer>
        
    </body>
</html>

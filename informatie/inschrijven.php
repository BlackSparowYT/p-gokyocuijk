<?php

    $page['name'] = "inschrijven";
    $page['categorie'] = "informatie";
    $page['path_lvl'] = 2;
    $page['sidebar'] = false;
    require_once("../files/config.php");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <?= get_page_title() ?>
        <?php echo '<link rel="stylesheet" href="' . $path . 'files/styles/core.css">' ?>
        <?php echo '<link rel="icon" type="image/x-icon" href="' . $path . 'files/logos/favicon.png">' ?>
    </head>

    <body id="inschrijven">

        <?php include($path.'files/components/header.php'); ?>
        
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
                
                <?php 

                    // Huidige datum
                    $date = date("Y/m/d");

                    // Datum dat het inschrijven dicht gaat.
                    $expDate = "2023/03/24";

                    // Link van het formulier
                    $formLink = "https://docs.google.com/forms/d/e/1FAIpQLSeQl_Ha1ir-wVirVezyu1TqDQl-rtXZJXPFodeWnwCH-YpXVg/viewform";

                    // Informatie van het toernooi
                    $toerNaam = "Clubkampioenschappen";     // De naam van het toernooi
                    $toerPlaats = "onze eigen Dojo";        // Waar vind het plaats (zorg dat het in de zin past)
                    $toerDatum = "09/05/2023";              // De datum in DD/MM/YYYY

                    // Kijk of de huidige datum voor de einddatum ligt, ja dan laat het formulier zien, nee laat niks zien.
                    if (strtotime($date) < strtotime($expDate)) {
                        echo '
                            <div class="block block-LT">
                                <h3>[Toernooi Naam]:</h3>
                                <p>
                                Wil jij je inschrijven voor de '.$toerNaam.' doe dat dan hieronder!
                                <br>
                                Dit toernooi vind zich plaats in '.$toerPlaats.' op '.$toerDatum.'. Inschrijven is mogenlijk tot '.$expDate.'.
                                </p>
                                <iframe src="'.$formLink.'"></iframe>
                                <a class="tele-btn" href="'.$formLink.'">Open formulier</a>
                                <p class="help-text" >Laad of werkt het formulier niet? Klik dan <a href="'.$formLink.'" target="_blank">hier</a></p>
                            </div>';
                    } else {
                        echo '';

                        $geenToernooi = 1;
                    }
                    

                ?>
                <?php 

                    // Huidige datum
                    $date = date("Y/m/d");

                    // Datum dat het inschrijven dicht gaat.
                    $expDate = "2023/03/24";

                    // Link van het formulier
                    $formLink = "https://docs.google.com/forms/d/e/1FAIpQLSeQl_Ha1ir-wVirVezyu1TqDQl-rtXZJXPFodeWnwCH-YpXVg/viewform";

                    // Informatie van het toernooi
                    $toerNaam = "Clubkampioenschappen";     // De naam van het toernooi
                    $toerPlaats = "onze eigen Dojo";        // Waar vind het plaats (zorg dat het in de zin past)
                    $toerDatum = "09/05/2023";              // De datum in DD/MM/YYYY

                    // Kijk of de huidige datum voor de einddatum ligt, ja dan laat het formulier zien, nee laat niks zien.
                    if (strtotime($date) < strtotime($expDate)) {
                        echo '
                            <div class="block block-RT">
                                <h3>[Toernooi Naam]:</h3>
                                <p>
                                    Wil jij je inschrijven voor de '.$toerNaam.' doe dat dan hieronder!
                                    <br>
                                    Dit toernooi vind zich plaats in '.$toerPlaats.' op '.$toerDatum.'. Inschrijven is mogenlijk tot '.$expDate.'.
                                </p>
                                <iframe src="'.$formLink.'"></iframe>
                                <a class="tele-btn" href="'.$formLink.'">Open formulier</a>
                                <p class="help-text" >Laad of werkt het formulier niet? Klik dan <a href="'.$formLink.'" target="_blank">hier</a></p>
                        
                            </div>';
                    } else if (strtotime($date) > strtotime($expDate) && $geenToernooi == 1) {
                        // laat dit alleen zien als beide blokken geen formulier bevat
                        echo '
                            <div class="block block-MT">
                                <h3>Er zijn tijdelijk geen toernooien</h3>
                            </div>'; 
                    } else {
                        echo '';
                    }


                ?>
            </div>
        </main>

        <footer>
            <?php include("../files/components/footer.php"); ?>
        </footer>
        
    </body>
</html>

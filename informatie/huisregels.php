<?php

    $page['name'] = "huisregels";
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

    <body id="huisregels">

        <?php include($path.'files/components/header.php'); ?>

        <main class="huisregels">
            <div class="regels-hero">
                <div class="overlay">
                    <div class="hero-text">
                        <h1>Huisregels</h1>
                    </div>
                </div>
            </div>
            <div class="regels-text">
                <h3>Huisregels Judovereniging Gokyo Cuijk:</h3>
                <ul id="regels-ul-1">
                    <li><p>Bij het betreden van de dojo gaat u akkoord met de huisregels van Judovereniging Gokyo Cuijk.</p></li>
                    <li><p>Wij raden u aan om waardevolle spullen mee te nemen de dojo in.</p></li>
                    <li><p>De judoka’s komen in gewone kleding naar de judo en kleden zich in de daarvoor bestemde kleedkamers om.</p></li>
                    <li><p>Het dragen van schoenen in de dojo is niet toegestaan.</p></li>
                    <li><p>Ouders mogen tijdens de les kijken, echter mogen zij zich niet met de les bemoeien of de judoka’s afleiden.</p></li>
                    <li><p>Ongewenste en/of gewenste intimiteiten worden niet getolereerd.</p></li>
                    <li><p>Judovereniging Gokyo Cuijk is niet aansprakelijk voor verlies, schade en/of diefstal van uw eigendommen en/of lichamelijk letsel in en om de dojo en de kleedkamers.</p></li>
                    <li>
                        <p>
                            <i>ALGEMENE HYGIËNE IS ZEER BELANGRIJK TIJDENS DE JUDOLESSEN:</i>
                            <br>- Een schoon judopak.
                            <br>- Korte nagels van zowel handen als voeten.
                            <br>- Schone handen en voeten.
                            <br>- Aangename lichaamsgeur.
                            <br>- Slippers, sokken of schoenen aan de voeten voor het betreden van de dojo.
                            <br>- Geen verf in het hoofdhaar of beschilderde gezichten/lichaamsdelen (i.v.m. afgeven op pakken en de mat).
                        </p>
                    </li>
                    <li>
                        <p>
                            <i>VEILIGHEID IS ZEER BELANGRIJK TIJDENS JUDOLESSEN:</i>
                            <br>- Geen sieraden om tijdens de judoles (m.u.v. de judoleraren).
                            <br>- Geen gaten of loszittende stiksels in het judopak.
                            <br>- Geen snoep of kauwgom in de mond tijdens de judoles.
                            <br>- Geen metalen of harde haarbanden en geen elastiekjes met metalen plaatje in het haar
                            <br>- Lang haar dient in een staart of knot gedragen te worden
                        </p>
                    </li>
                    <li><p>Judovereniging Gokyo Cuijk is altijd bevoegd om, wegens haar moverende redenen, personen tijdelijk of blijvend de toegang te ontzeggen.</p></li>
                </ul>
                <br>
                <h3>Vergeet niet om ook onze <a href="protocollen.php">gedragsregels</a> te lezen!</h3>
            </div>
        </main>

        <footer>
            <?php include("../files/components/footer.php"); ?>
        </footer>

    </body>
</html>
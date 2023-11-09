<?php

    $page['name'] = "protocollen";
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

    <body id="protocollen">
        
        <?php include($path.'files/components/header.php'); ?>

        <main class="protocollen">
            <div class="protocollen-hero">
                <div class="overlay">
                    <div class="hero-text">
                        <h1>Gedragsregels & Protocollen</h1>
                    </div>
                </div>
            </div>
            <div class="protocollen-text">
                <p>Als sportclub hebben wij ook gedragsregels en protocollen om vervelende situaties te voorkomen. Ook voor de judoka zijn er een paar gedragsregels, lees deze graag door omdat deze los staan van onze <a href="../huisregels/index.php">huisregels.</a></p>
                <div class="links">
                    <a href="../files/pdf/protocollen/Gedragcodes sporters Gokyo pdf.pdf" target="_blank">Gedragsregels</a>
                    <a href="../files/pdf/protocollen/Aanname beleid Gokyo.docx.pdf" target="_blank">Aanname beleid</a>
                    <a href="../files/pdf/protocollen/Pest protocol Gokyo.pdf" target="_blank">Pest protocol</a>
                    <a href="../files/pdf/protocollen/Protocol omtrent (seksuele) intimidatie Gokyo.pdf" target="_blank">Protocol omtrent (seksuele) intimidatie</a>
                    <a href="../files/pdf/protocollen/Vertrouwens persoon Gokyo Cuijk.docx.pdf" target="_blank">Vertrouwens persoon</a>
                </div>
            </div>
        </main>

        <footer>
            <?php include("../files/components/footer.php"); ?>
        </footer>

    </body>
</html>
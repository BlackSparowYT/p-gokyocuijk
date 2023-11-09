<?php

    $page['name'] = "informatie";
    $page['categorie'] = "informatie";
    $page['path_lvl'] = 2;
    $page['sidebar'] = false;
    require_once("../files/config.php");

?>

<!DOCTYPE html>
<html lang="en" class="informatie">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <?= get_page_title() ?>
        <?php echo '<link rel="stylesheet" href="' . $path . 'files/styles/core.css">' ?>
        <?php echo '<link rel="icon" type="image/x-icon" href="' . $path . 'files/logos/favicon.png">' ?>
    </head>

    <body id="informatie">
        
        <?php include($path.'files/components/header.php'); ?>

        <main class="informatie">
            <div class="info-hero">
                <div class="info-flex-box">
                    <a href="https://www.facebook.com/gokyocuijk/"><!--./nieuws.php-->
                        <div class="block block1">
                            <div class="overlay">
                                <h3>Nieuws</h3>
                            </div>
                        </div>
                    </a>
                    <a href="./lestijden.php">
                        <div class="block block2">
                            <div class="overlay">
                                <h3>Les Tijden</h3>
                            </div>
                        </div>
                    </a>
                    <a href="./agenda.php">
                        <div class="block block3">
                            <div class="overlay">
                                <h3>Agenda</h3>
                            </div>
                        </div>
                    </a>
                    <a href="./inschrijven.php#gokyo">
                        <div class="block block4">
                            <div class="overlay">
                                <h3>Inschrijven Gokyo</h3>
                            </div>
                        </div>
                    </a>
                    <a href="./inschrijven.php#toernooi">
                        <div class="block block5">
                            <div class="overlay">
                                <h3>Inschrijven Toernooien</h3>
                            </div>
                        </div>
                    </a>
                    <a href="./protocollen.php">
                        <div class="block block6">
                            <div class="overlay">
                                <h3>Gedragsregels & Protocollen</h3>
                            </div>
                        </div>
                    </a>
                    <a href="./huisregels.php">
                        <div class="block block7">
                            <div class="overlay">
                                <h3>Huisregels</h3>
                            </div>
                        </div>
                    </a>
                    <a href="./examens.php">
                        <div class="block block8">
                            <div class="overlay">
                                <h3>Examens</h3>
                            </div>
                        </div>
                    </a>
                    <a href="./fotos.php">
                        <div class="block block9">
                            <div class="overlay">
                                <h3>Foto's</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </main>

        <footer>
            <?php include("../files/components/footer.php"); ?>
        </footer>

    </body>
</html>
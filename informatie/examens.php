<?php

    $page['name'] = "examens";
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

    <body id="examen">

        <?php include($path.'files/components/header.php'); ?>

        <main class="examen">
            <div class="examen-hero">
                <div class="overlay">
                    <div class="hero-text">
                        <h1>Examens</h1>
                    </div>
                </div>
            </div>
            <h2>Examens:</h2>
            <div class="examen-flex-box-1">
                <div class="examen-block">
                    <h4>Zomer 2023:</h4>
                    <p>
                        Zondag 2 juli 2023 in de <a href="../contact/index.php#locatie-link">   dojo</a>.
                    </p>
                </div>
                <div class="examen-block">
                    <h4>Winter 2023:</h4>
                    <p>
                        Nog niet bepaald.
                    </p>
                </div>
                <div class="examen-block">
                    <h4>Zomer 2024:</h4>
                    <p>
                        Nog niet bepaald.
                    </p>
                </div>
            </div>
            <h2>Examen Eisen:</h2>
            <h3>Klik op de foto om hem te vergroten.</h3>
            <div class="examen-flex-box-2">
                <a href="../files/images/informatie/examens/gele-band.png" target="_blank">
                    <img src="../files/images/informatie/examens/gele-band.png">
                </a>
                <a href="../files/images/informatie/examens/oranje-band.png" target="_blank">
                    <img src="../files/images/informatie/examens/oranje-band.png">
                </a>
                <a href="../files/images/informatie/examens/groene-band.png" target="_blank">
                    <img src="../files/images/informatie/examens/groene-band.png">
                </a>
                <a href="../files/images/informatie/examens/blauwe-band.png" target="_blank">
                    <img src="../files/images/informatie/examens/blauwe-band.png">
                </a>
                <a href="../files/images/informatie/examens/bruine-band.png" target="_blank">
                    <img src="../files/images/informatie/examens/bruine-band.png">
                </a>
            </div>
        </main>
        
        <footer>
            <?php include("../files/components/footer.php"); ?>
        </footer>

    </body>
</html>
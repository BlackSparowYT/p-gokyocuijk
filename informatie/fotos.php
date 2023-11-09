<?php

    $page['name'] = "fotos";
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

    <body id="recent">
        
        <?php include($path.'files/components/header.php'); ?>

        <main class="recent">
            <div class="recent-hero">
                <div class="overlay">
                    <div class="hero-text">
                        <h1>Foto's</h1>
                    </div>
                </div>
            </div>
            <div class="main-block">
                <h2>Nieuwschierig naar onze foto's?</h2>
                <h3>Klik de link hieronder en bekijk ze op google drive!</h3>
                <a href="https://drive.google.com/drive/folders/1yZinBMsLsF5wPzf4-a49jFI1fG4cRsvU?usp=share_link" target="_blank"><img src="../files/images/informatie/recent/link.png"></a>
            </div>
        </main>

        <footer>
            <?php include("../files/components/footer.php"); ?>
        </footer>

    </body>
</html>
<?php

    $page['name'] = "sponsors";
    $page['categorie'] = "sponsors";
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

    <body id="sponsors">
        
        <?php include($path.'files/components/header.php'); ?>

        <main class="sponsors">
            <div class="sponsors-hero">
                <div class="overlay">
                    <div class="hero-text">
                        <h1>Sponsors</h1>
                    </div>
                </div>
            </div>
            <div class="flex-box">
                <div class="sponsors1 block-flex">
                    <h3><a href="https://www.anma-tech.nl/" target="_blank">AnMa-tech:</a></h3>
                    <a href="https://www.anma-tech.nl/" target="_blank">
                        <img src="../files/images/sponsors/anma-tech.jpg">
                    </a>
                </div>
                <div class="sponsors2 block-flex">
                    <h3><a>Klerks Administraties:</a></h3>
                    <a>
                        <img src="../files/images/sponsors/klerks_admin.png">
                    </a>
                </div>
                <div class="sponsors3 block-flex">
                    <h3><a href="https://lichaamoptimaal.nl/" target="_blank">Lichaam Optimaal:</a></h3>
                    <a href="https://lichaamoptimaal.nl/" target="_blank">
                        <img src="../files/images/sponsors/lichaam-opti.png">
                    </a>
                </div>
                <div class="sponsors4 block-flex">
                    <h3><a href="https://design-atlas.nl/" target="_blank">Design Atlas:</a></h3>
                    <a href="https://design-atlas.nl/" target="_blank">
                        <img src="../files/images/sponsors/design-atlas.png">
                    </a>
                </div>
            </div>
            
        </main>

        <footer>
            <?php include("../files/components/footer.php"); ?>
        </footer>

    </body>
</html>
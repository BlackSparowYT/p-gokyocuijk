<?php

    $page['name'] = "over-ons";
    $page['categorie'] = "over-ons";
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

    <body id="over-ons">

        <?php include($path.'files/components/header.php'); ?>

        <main class="over-ons">
            <div class="over-ons-hero">
                <div class="overlay">
                    <div class="hero-text">
                        <h1>Over Ons</h1>
                    </div>
                </div>
            </div>
            <div class="over-gokyo">
                <h2>Over Gokyo:</h2>
                <p>
                    Judovereniging Gokyo bestaat sinds 1975. 
                    <br>
                    <br>
                    Gokyo heeft sinds oprichten als visie judo te promoten vanuit een recreatieve beleving. Met name de kwaliteit van het judo, het respect voor de sport en voor andere mensen staat voor Gokyo centraal. 
                    <br>
                    <br>
                    Ook is er natuurlijk ruimte voor judoka's die mee willen doen aan wedstrijden. 
                    <br>
                    Regelmatig vinden er toernooien plaats waar je gratis of tegen een kleine vergoeding aan meegedaan kan worden!
                </p>
            </div>    
        </main>

        <footer>
            <?php include("../files/components/footer.php"); ?>
        </footer>

    </body>
</html>
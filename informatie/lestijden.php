<?php

    $page['name'] = "lestijden";
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

    <body id="lestijden">
        
        <?php include($path.'files/components/header.php'); ?>

        <main class="lestijden">
            <div class="lestijden-hero">
                <div class="overlay">
                    <div class="hero-text">
                        <h1>Lestijden</h1>
                    </div>
                </div>
            </div>
            <div class="main-block">
                <div class="block-left">
                    <h2>Lestijden</h2>
                    <table>
                        <tr>
                            <th class="left-top"></th>
                            <th><p>Maandag</p></th>
                            <th class="right-top"><p>Woensdag</p></th>
                        </tr>
                        <tr>
                            <th><p>Groep 1</p></th>
                            <td><p>18.30 t/m 19.30</p></td>
                            <td><p>18.30 t/m 19.30</p></td>
                        </tr>
                        <tr>
                            <th><p>Groep 2</p></th>
                            <td><p>19.30 t/m 20.30</p></td>
                            <td><p>19.30 t/m 20.30</p></td>
                        </tr>
                        <tr>
                            <th><p>Groep 3</p></th>
                            <td><p>n.v.t.</p></td>
                            <td><p></p>20.30 t/m 21.30</td>
                        </tr>
                        <tr>
                            <th class="left-bottom"><p>Jiu Jitsu Training</p></th>
                            <td><p>20.30 t/m 21.30</p></td>
                            <td class="right-bottom"><p>n.v.t.</p></td>
                        </tr>
                    </table>
                </div>
                <div class="block-right">
                    <h2>Les Informatie</h2>
                    <div class="right-text">
                        <p>
                            <strong>Judoleraren: </strong>
                            <br>Maandag: Remko Jansen & André van Nijnatten 
                            <br>Woensdag: Frank &  Gijs van Kaathoven
                            <br>Over de Judoleraren kun je meer vinden bij de <a href="../contact/index.php">contact pagina</a>.
                            <br>
                            <br>
                            <br><strong>Leeftijden:</strong>
                            <br>Groep 1: Jeugd 5 t/m 8 jaar
                            <br>Groep 2: Jeugd 9 t/m 12 jaar
                            <br>Groep 3: Jeugd vanaf 13 & volwassen
                            <br>Jiu Jitsu Training: Jeugd vanaf 13 & volwassen
                        </p>
                    </div>
                </div>
            </div>
        </main>

        <footer>
            <?php include("../files/components/footer.php"); ?>
        </footer>

    </body>
</html>
<?php

    $page['name'] = "agenda";
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

    <body id="agenda">

        <?php include($path.'files/components/header.php'); ?>

        <main class="agenda">
            <div class="agenda-hero">
                <div class="overlay">
                    <div class="hero-text">
                        <h1>Agenda</h1>
                    </div>
                </div>
            </div>
            <div class="flex-box">

                <?php
                
                    // Enter the last date it was edited (Format = dd/mm/yyyy (use a 01))
                    $date_input = "09/11/2023";

                    $last_edit_day = explode('/',$date_input)[0];
                    $last_edit_month = explode('/',$date_input)[1];
                    $last_edit_year = explode('/',$date_input)[2];

                    // Loop through the months and apply the logic
                    for ($i = 1; $i <= 12; $i++) {
                        // Check if the current month is before the last edited month
                        if ($i < $last_edit_month) {
                            // If the month is before the last edited month, use the last edited year
                            $adjusted_year = $last_edit_year + 1;
                        } else {
                            // If the month is after the last edited month, use the last edited year + 1
                            $adjusted_year = $last_edit_year;
                        }

                        // Combine the adjusted year with the current month
                        $adjusted_months[$i] = $i.'/'.$adjusted_year;
                    }

                    $date_input = "01/2024";
                ?>
                <div class="block">
                    <div class="jaartalblock">
                        <h3>Januari</h3>
                    </div>
                    <p>
                        <?php if ($adjusted_months[1] >= $date_input) : ?>
                            <i>Kerstvakantie: </i>
                            <br>
                            24 december &nbsp;<script>document.write(new Date().getFullYear())</script> 
                            <br>
                            t/m 
                            <br>
                            07 januari &nbsp;<script>document.write(new Date().getFullYear()+1)</script>
                        <?php else: ?>
                            n.v.t.
                        <?php endif; ?>
                    </p>
                </div>
                <div class="block">
                    <div class="jaartalblock">
                        <h3>Februari</h3>
                    </div>
                    <p>
                        <?php if ($adjusted_months[2] >= $date_input) : ?>
                            <i>Voorjaarsvakantie:</i>
                            <br>
                            10 februari t/m 18 februari
                        <?php else: ?>
                            n.v.t.
                        <?php endif; ?>
                    </p>
                </div>
                <div class="block">
                    <div class="jaartalblock">
                        <h3>Maart</h3>
                    </div>
                    <p>
                        <?php if ($adjusted_months[3] >= $date_input) : ?>
                            <i>Jaarvergadering:</i> 7 maart
                        <?php else: ?>
                            n.v.t.
                        <?php endif; ?>
                    </p>
                </div>
                <div class="block">
                    <div class="jaartalblock">
                        <h3>April</h3>
                    </div>
                    <p>
                        <?php if ($adjusted_months[4] >= $date_input) : ?>
                            <i>Pasen:</i> 01 april
                            <br>
                            <br>
                            <i>Meivakantie: </i>
                            <br>
                            27 april t/m 05 mei
                        <?php else: ?>
                            n.v.t.
                        <?php endif; ?>
                    </p>
                </div>
                <div class="block">
                    <div class="jaartalblock">
                        <h3>Mei</h3>
                    </div>
                    <p>
                        <?php if ($adjusted_months[5] >= $date_input) : ?>
                            <i>Pinksteren:</i> 20 mei
                            <br>
                            <br>
                            <i>Meivakantie</i>
                            <br>
                            27 april t/m 5 mei
                        <?php else: ?>
                            n.v.t.
                        <?php endif; ?>
                    </p>
                </div>
                <div class="block">
                    <div class="jaartalblock">
                        <h3>Juni</h3>
                    </div>
                    <p>
                        <?php if ($adjusted_months[6] >= $date_input) : ?>
                            <i>Cuijk Keigoed:</i> 9 juni
                            <br>
                            <br>
                            <i>ouder-kind judo:</i> 10 & 12 juni 2024
                            <br>
                            <br>
                            <i>band- en slipexamens:</i> 17 & 19 juni
                        <?php else: ?>
                            n.v.t.
                        <?php endif; ?>
                    </p>
                </div>
                <div class="block">
                    <div class="jaartalblock">
                        <h3>Juli</h3>
                    </div>
                    <p>
                        <?php if ($adjusted_months[7] >= $date_input) : ?>
                            <i>Zomervakantie: </i>
                            <br>
                            08 juli t/m 25 augustus
                        <?php else: ?>
                            n.v.t.
                        <?php endif; ?>
                    </p>
                </div>
                <div class="block">
                    <div class="jaartalblock">
                        <h3>Augustus</h3>
                    </div>
                    <p>
                        <?php if ($adjusted_months[8] >= $date_input) : ?>
                            <i>Zomervakantie: </i>
                            <br>
                            08 juli t/m 25 augustus
                        <?php else: ?>
                            n.v.t.
                        <?php endif; ?>
                    </p>
                </div>
                <div class="block">
                    <div class="jaartalblock">
                        <h3>September</h3>
                    </div>
                    <p>
                        <?php if ($adjusted_months[9] >= $date_input) : ?>
                            n.v.t.
                        <?php else: ?>
                            n.v.t.
                        <?php endif; ?>
                    </p>
                </div>
                <div class="block">
                    <div class="jaartalblock">
                        <h3>Oktober</h3>
                    </div>
                    <p>
                        <?php if ($adjusted_months[10] >= $date_input) : ?>
                            <i>Herfstvakantie: </i>
                            <br>
                            14 oktober t/m 22 oktober
                        <?php else: ?>
                            n.v.t.
                        <?php endif; ?>
                    </p>
                </div>
                <div class="block">
                    <div class="jaartalblock">
                        <h3>November</h3>
                    </div>
                    <p>
                        <?php if ($adjusted_months[11] >= $date_input) : ?>
                            n.v.t.
                        <?php else: ?>
                            n.v.t.
                        <?php endif; ?>
                    </p>
                </div>
                <div class="block">
                    <div class="jaartalblock">
                        <h3>December</h3>
                    </div>        
                    <p>
                        <?php if ($adjusted_months[12] >= $date_input) : ?>
                            <i>Examens:</i> 18 & 20 december
                            <br>
                            <br>
                            <i>Kerstvakantie: </i>
                            <br>
                            24 december &nbsp;<script>document.write(new Date().getFullYear())</script> 
                            <br>
                            t/m 
                            <br>
                            07 januari &nbsp;<script>document.write(new Date().getFullYear()+1)</script>
                        <?php else: ?>
                            n.v.t.
                        <?php endif; ?>
                    </p>
                </div>
            </div>
            <p style="color: white; margin: 30px;">Laatst bewerkt op: <?=$date_input?></p>
        </main>


        <footer>
            <?php include("../files/components/footer.php"); ?>
        </footer>
    </body>
</html>

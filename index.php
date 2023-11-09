<?php

    $page['name'] = "home";
    $page['categorie'] = "default";
    $page['path_lvl'] = 1;
    $page['sidebar'] = false;
    require_once("./files/config.php");

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

    <body id="home">

        <?php include($path.'files/components/header.php'); ?>

        <main class="home">


                <!-------------------------------------------------->

                    <!-- Popup STAAT UIT VANAF BLIJVEN! 
                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <h2>Voordat je verder gaat graag even dit bericht lezen.</h2>
                            <br>
                            <h3>
                                Heb je dit bericht al een keer gelezen? Dan mag je het weg klikken. Zo niet, lees het dan veder.
                            </h3>
                            <br>
                            <br>
                            <p>
                                <strong>Graag willen wij even aandacht duiden naar de volgende 2 dingen:</strong>
                                <br>
                                > De site is bijna geschikt voor telefoons maar voor nu raden we nog steeds aan om op een computer te bekijken. Dit probleem zal binnenkort opgelost zijn.
                                <br>
                                <br>
                                > Natuurlijk is het niet de bedoeling dat je problemen ondervindt tijdens het bezoeken van de site, vind je er toch wel een? doe dan het volgende. 
                                    <br>1. Maak een foto (of video) van het probleem.
                                    <br>2. Stuur de foto (of video) samen met waar je het op de site hebt gevonden in een email naar: <a href="mailto:bugs@design-atlas.nl">bugs@design-atlas.nl</a>.
                            </p>
                        </div>
                    </div>

                    <script>
            
                    //GRAAG VANAF BLIJVEN!!!
                
                
                        // checks if one day has passed. 
                        function hasOneDayPassed() {
                    
                        // get today's date. eg: "7/37/2007"
                        var date = new Date().toLocaleDateString();
                    
                        // if there's a date in localstorage and it's equal to the above: 
                        // inferring a day has yet to pass since both dates are equal.
                        if( localStorage.yourapp_date == date ) 
                            return false;
                    
                        // this portion of logic occurs when a day has passed
                        localStorage.yourapp_date = date;
                        return true;
                        }
                    
                    
                        // some function which should run once a day
                        function runOncePerDay(){
                            if( !hasOneDayPassed() ) return false;
                    
                    
                    
                    
                    
                    
                    
                            // Get the modal
                            var modal = document.getElementById("myModal");
                            
                            // Get the button that opens the modal
                            var btn = document.getElementById("myBtn");
                            
                            // Get the <span> element that closes the modal
                            var span = document.getElementsByClassName("close")[0];
                            
                            //automaticly open the popup
                            window.addEventListener("load", function(){
                            setTimeout(
                                function open(event){
                                    modal.style.display = "block";
                                },
                                1000
                            )
                            }); 
                    
                            // When the user clicks on <span> (x), close the modal
                            span.onclick = function() {
                            modal.style.display = "none";
                            }
                            
                            // When the user clicks anywhere outside of the modal, close it
                            window.onclick = function(event) {
                            if (event.target == modal) {
                                modal.style.display = "none";
                            }
                            }
                    
                        }
                    
                    
                        runOncePerDay();
                        runOncePerDay();
                    </script>
    
                ------------------------------------------------>
    
                

            <section class="da-block da-block-header da-block-header--home">
                <div class="header">
                    <div class="header__text">
                        <h1><?= get_block(1)['title'] ?></h1>
                    </div>
                </div>
            </section>
            <section class="da-block da-block-text">
                <div class="separator1">
                    <div class="separator"></div>
                </div>
                <div class="da-text da-bg-red">
                    <h3><?= get_block(2)['title'] ?></h3>
                    <p>
                        <?= get_block(2)['text'] ?>
                    </p>
                </div>
                <div class="separator2">
                    <div class="separator"></div>
                </div>
            </section>
            <section class="da-block da-block-text">
                <div class="da-text">
                    <h3><?= get_block(3)['title'] ?></h3>
                    <p>
                        <?= get_block(3)['text'] ?>
                    </p>
                    <div class="btn-group">
                        <?php foreach(get_block(3)['buttons'] as $button) : ?>
                            <a class="btn btn--primary" href="<?= $button['link'] ?>"><?= $button['text'] ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="separator3">
                    <div class="separator"></div>
                </div>
            </section>
            
        </main>
        
        <footer>
            <?php include("./files/components/footer.php"); ?>
        </footer>

    </body>
</html>


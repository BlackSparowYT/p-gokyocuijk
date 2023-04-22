<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nieuws | Gokyo Cuijk</title>
        <link rel="stylesheet" href="../../styles.css">
        <link rel="icon" type="image/x-icon" href="../../files/images/favicon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hanalei+Fill&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    </head>

    <body id="nieuws">
    
        <header>
            <?php include("../../files/components/navbar-info.php"); ?>
        </header>

        <main class="nieuws">
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v15.0" nonce="3l5PYuLD"></script>


            <div class="nieuws-hero">
                <div class="overlay">
                    <div class="hero-text">
                        <h1>Nieuws</h1>
                    </div>
                </div>
            </div>
            <h3>Het nieuws kun je vinden op onze facebook pagina!</h3>
            <div class="fb-page" data-href="https://www.facebook.com/gokyocuijk" data-tabs="timeline" data-width="500" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/gokyocuijk" class="fb-xfbml-parse-ignore">
                    <a href="https://www.facebook.com/gokyocuijk">Judovereniging Gokyo Cuijk</a>
                </blockquote>
            </div>
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v15.0" nonce="WfxzQPhl">
                
            </script>
        </main>
        
        <footer>
            <?php include("../../files/components/footer-info.php"); ?>
        </footer>

    </body>
</html>
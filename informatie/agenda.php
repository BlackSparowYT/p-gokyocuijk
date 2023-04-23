<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agenda | Gokyo Cuijk</title>
        <link rel="stylesheet" href="../styles.css">
        <link rel="icon" type="image/x-icon" href="../files/images/favicon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hanalei+Fill&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    </head>

    <body id="agenda">

        <header>
            <?php include("../files/components/navbar.php"); ?>
        </header>

        <main class="agenda">
            <div class="agenda-hero">
                <div class="overlay">
                    <div class="hero-text">
                        <h1>Agenda</h1>
                    </div>
                </div>
            </div>
            <div class="flex-box">
                <div class="block">
                    <div class="jaartalblock">
                        <h3>Januari</h3><h3 class="jaartal">&nbsp;<script>document.write(new Date().getFullYear())</script></h3>
                    </div>
                    <p>
                        n.v.t.
                    </p>
                </div>
                <div class="block">
                    <div class="jaartalblock">
                        <h3>Februari</h3><h3 class="jaartal">&nbsp;<script>document.write(new Date().getFullYear())</script></h3>
                    </div>
                    <p>
                        <i>Voorjaarsvakantie:</i>
                        <br>
                        n.v.t.
                    </p>
                </div>
                <div class="block">
                    <div class="jaartalblock">
                        <h3>Maart</h3><h3 class="jaartal">&nbsp;<script>document.write(new Date().getFullYear())</script></h3>
                    </div>
                    <p>
                        <i>Jaarvergadering: </i>
                        <br>
                        9 maart
                    </p>
                </div>
                <div class="block">
                    <div class="jaartalblock">
                        <h3>April</h3><h3 class="jaartal">&nbsp;<script>document.write(new Date().getFullYear())</script></h3>
                    </div>
                    <p>
                        <i>clubkampioenschappen: </i> 9 april
                        <br>
                        <br>
                        <i>Meivakantie: </i>
                        <br>
                        24 april t/m 5 mei
                    </p>
                </div>
                <div class="block">
                    <div class="jaartalblock">
                        <h3>Mei</h3><h3 class="jaartal">&nbsp;<script>document.write(new Date().getFullYear())</script></h3>
                    </div>
                    <p>
                        <i>Meivakantie</i>
                        <br>
                        24 april t/m 5 mei
                    </p>
                </div>
                <div class="block">
                    <div class="jaartalblock">
                        <h3>Juni</h3><h3 class="jaartal">&nbsp;<script>document.write(new Date().getFullYear())</script></h3>
                    </div>
                    <p>
                        n.v.t.
                    </p>
                </div>
                <div class="block">
                    <div class="jaartalblock">
                        <h3>Juli</h3><h3 class="jaartal">&nbsp;<script>document.write(new Date().getFullYear())</script></h3>
                    </div>
                    <p>
                        <i>Examens: </i>
                        <br>
                        2 juli (<a href="../examens/index.php">lees meer</a>)
                        <br>
                        <br>
                        <i>Zomervakantie: </i>
                        <br>
                        10 juli t/m 25 augustus
                    </p>
                </div>
                <div class="block">
                    <div class="jaartalblock">
                        <h3>Augustus</h3><h3 class="jaartal">&nbsp;<script>document.write(new Date().getFullYear())</script></h3>
                    </div>
                    <p>
                        <i>Zomervakantie: </i>
                        <br>
                        10 juli t/m 25 augustus
                    </p>
                </div>
                <div class="block">
                    <div class="jaartalblock">
                        <h3>September</h3><h3 class="jaartal">&nbsp;<script>document.write(new Date().getFullYear())</script></h3>
                    </div>
                    <p>
                        n.v.t.
                    </p>
                </div>
                <div class="block">
                    <div class="jaartalblock">
                        <h3>Oktober</h3><h3 class="jaartal">&nbsp;<script>document.write(new Date().getFullYear())</script></h3>
                    </div>
                    <p>
                        <i>Herfstvakantie: </i>
                        <br>
                        Niet bekent
                    </p>
                </div>
                <div class="block">
                    <div class="jaartalblock">
                        <h3>November</h3><h3 class="jaartal">&nbsp;<script>document.write(new Date().getFullYear())</script></h3>
                    </div>
                    <p>
                        n.v.t.
                    </p>
                </div>
                <div class="block">
                    <div class="jaartalblock">
                        <h3>December</h3><h3 class="jaartal">&nbsp;<script>document.write(new Date().getFullYear())</script></h3>
                    </div>        
                    <p>
                        <i>Kerstvakantie: </i>
                        <br>
                        Niet bekent
                        <div style="display: none;">
                            25 december &nbsp;<script>document.write(new Date().getFullYear())</script> 
                            <br>
                            t/m 
                            <br>
                            08 januari &nbsp;<script>document.write(new Date().getFullYear()+1)</script>
                        </div>
                    </p>
                </div>
            </div>
        </main>

        <footer>
            <?php include("../files/components/footer.php"); ?>
        </footer>
    </body>
</html>
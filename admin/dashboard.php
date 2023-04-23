<?php

    // start the session
    session_start();

    // check if you are logged in or not, if not then send back to login
    if (!isset($_SESSION['loggedin'])) {
        header("Location: login.php");
    }
    // Get the username from the session
    $username = $_SESSION['name'];

?>

<!DOCTYPE html>
<html>

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sono:wght@300;600;800&display=swap" rel="stylesheet">

        <title>Dashboard</title>
        <link rel="stylesheet" href="../styles.css">

        <link rel="icon" type="image/x-icon" href="../images/favicon.png">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hanalei+Fill&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    </head>

    <body>
        
        <header>
            <?php include("../files/components/navbar.php"); ?>
        </header>

        <main class="dashboard account-pagina">
            <div class="hero">
                <div class="hero-text">
                    <h1 class="t1">Welkom, <?php echo $username; ?>!</h1>
                </div>
            </div>
            <div class="content">
                <div class="buttons">
                    <a href="loguit.php"><h4>Log uit</h4></a>
                    <a href="reset-ww.php"><h4>Verander Wachtwoord</h4></a>
                    <a href="reset-mail.php"><h4>Verander Email</h4></a>
                    <a href="reset-naam.php"><h4>Verander Naam</h4></a>
                </div>
                <div class="buttons">
                    <a href="admin-pages.php"><h4>Pagina's</h4></a>
                </div>
            </div>
        </main>

        <footer>
            <?php include("../files/components/footer.php"); ?>
        </footer>

    </body>

</html>
<?php

    session_start();

    if (!isset($_SESSION['loggedin'])) {
        header("location: login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sono:wght@300;600;800&display=swap" rel="stylesheet">

        <title>Pagina's</title>
        <link rel="stylesheet" href="../styles.css">
    </head>

    <body>
        
        <header>
            <?php include("../files/components/navbar.php"); ?>
        </header>

        <main class="admin-paginas account-pagina">

            <div class="hero">
                <div class="hero-text">
                    <h1 class="t1">Pagina's</h1>
                </div>
            </div>

            <div class="pages-content">
                <div class="table-content admin-menu">
                    <?php
                        require_once('../files/config.php');

                        $query = "SELECT * FROM `pages`";

                        echo "<div class='table-block'>";
                            echo "<h3>Pagina's op de site:</h3>";
                            echo "<p id='btn-back'><a href='dashboard.php'>&#x2190; Terug</a></p>";
                            echo "<div class='admin-table'>";
                                echo "<table>";
                                    echo '<tr>';
                                        echo '<th><p>Pagina ID</p></th>';
                                        echo '<th><p>Pagina Naam</p></th>';
                                        echo '<th><p>Pagina Zichtbaar</p></th>';
                                    echo '</tr>';

                        if ($is_run = mysqli_query($link, $query)) {
                            while ($result = mysqli_fetch_assoc($is_run)) {
                                if ($result['page_show'] == 1) { $page_show = "Ja"; }
                                else { $page_show = "Nee"; }
                                    echo '<tr>';
                                        echo '<td><p>'.$result['id'].'</p></td>';
                                        echo '<td><p>'.$result['name'].'</p></td>';
                                        echo '<td><p>'.$page_show.'</p></td>';
                                        echo '<td><p><a href="admin-pages-edit.php?id=' . $result['id'] . '&action=edit">&#9998; Bewerken</a></p></td>';
                                        echo '<td><p><a href="admin-pages-edit.php?id=' . $result['id'] . '&action=delete">&#215; Verwijderen</a></p></td>';
                                    echo '</tr>';
                            }
                        } else {
                            echo "Er is iets mis gegaan!";
                        }

                                echo "</table>";
                            echo "</div>";
                        echo "</div>";
                    ?>
                </div>
            </div>
        </main>

        <footer>
            <?php include("../files/components/footer.php"); ?>
        </footer>


    </body>
</html>
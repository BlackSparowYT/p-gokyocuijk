<?php
    // Start a session
    session_start();

    if (!isset($_SESSION['loggedin'])) {
        header("location: login.php");
    }

    // Connect to the database
    require_once("../files/config.php");

    // Check if the user has submitted the form
    if (isset($_POST['change_username'])) {
        // Get the password from the form
        $new_username = $_POST['new_username'];
        $confirm_username = $_POST['confirm_username'];
        $password = $_POST['password'];

        // Validate the inputs
        $errors = array();
        if ($new_username === "") {
            $errors[] = "Please enter your new username.";
        }
        if ($confirm_username === "") {
            $errors[] = "Please confirm your new username.";
        }
        if ($new_username !== $confirm_username) {
            $errors[] = "The new username and confirmation do not match.";
        }
        if ($password === "") {
            $errors[] = "Please enter your password.";
        }

        // Check if the password is correct
        $stmt = $link->prepare("SELECT * FROM `users` WHERE email = ?");
        $stmt->bind_param("s", $_SESSION['email']);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        if (!password_verify($password, $user['password'])) {
            $errors[] = "Invalid password.";
        }

        // Check if the new username already exists
        $stmt = $link->prepare("SELECT * FROM `users` WHERE name = ?");
        $stmt->bind_param("s", $new_username);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $errors[] = "The new username is already taken.";
        }

        if (count($errors) == 0) {
            // If there are no errors, update the username in the database
            $stmt = $link->prepare("UPDATE `users` SET name = ? WHERE email = ?");
            $stmt->bind_param("ss", $new_username, $_SESSION['email']);
            $stmt->execute();

            // Set a success message and redirect to the dashboard
            $_SESSION['name'] = $new_username;
            header("Location: dashboard.php");
            exit();
        }
    }
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

        <title>Verander Naam</title>
        <link rel="stylesheet" href="../styles.css">
    </head>
    
    <body>
        
        <header>
            <?php include("../files/components/navbar.php"); ?>
        </header>

        <main class="reset-naam account-pagina">
            <div class="hero">
                <div class="hero-text">
                    <h1 class="t1">Verander Naam</h1>
                </div>
            </div>
            <div class="content-form content">
                <div class="form">
                    <form method="post">
                        <div>
                            <h3>Nieuwe Naam</h3>
                            <input type="text" name="new_username" required>
                        <div class="input-line"></div>
                        </div>
                        <div>
                            <h3>Bevestig Nieuwe Naam</h3>
                            <input type="text" name="confirm_username" required>
                        <div class="input-line"></div>
                        </div>
                        <div>
                            <h3>Wachtwoord</h3>
                            <input type="password" name="password" required>
                        <div class="input-line"></div>
                        </div>
                        <?php if (isset($error)) : ?>
                            <div><?php echo $error; ?></div>
                        <?php endif; ?>
                        <div>
                            <button type="submit" name="change_username">Verander Naam</button>
                        </div>
                        <p><a href="dashboard.php">&#x2190; Terug</a></p>
                    </form>
                </div>
            </div>
        </main>

        <footer>
            <?php include("../files/components/footer.php"); ?>
        </footer>

    </body>
</html>
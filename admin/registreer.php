<?php
    // Start a session
    session_start();

    // Connect to the database
    require_once("../files/config.php");

    // Check if the user has submitted the registration form
    if (isset($_POST['register'])) {
        // Get the email, username, and password from the form
        $email = $_POST['email'];
        $password = $_POST['password'];
        $username = $_POST['username'];
        

        // Generate a random reset token
        $reset_is_same = true;
        while ($reset_is_same == true) {
            $reset_token = substr(bin2hex(random_bytes(16)), 0, 32);
            $stmt = $link->prepare("SELECT * FROM `users` WHERE reset_token = ?");
            $stmt->bind_param("s", $reset_token);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows == 0) {
                $reset_is_same = false;
            }
        }

        // Check if the email already exists
        $stmt = $link->prepare("SELECT * FROM `users` WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 0) {
            // If the email doesn't exist, hash the password and insert the user into the database
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $link->prepare("INSERT INTO `users` (email, password, name, reset_token) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $email, $hashed_password, $username, $reset_token);
            $stmt->execute();

            // Log the user in and redirect to the dashboard page
            header("Location: login.php");
            exit();
        } else {
            // If the email already exists, show an error message
            $error = "Email already taken";
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

        <title>Verander Wachtwoord</title>
        <link rel="stylesheet" href="../styles.css">

        <link rel="icon" type="image/x-icon" href="../images/favicon.png">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hanalei+Fill&display=swap" rel="stylesheet">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    </head>
    
    <body id="registreer">
        
        <header>
            <?php include("../files/components/navbar.php"); ?>
        </header>

        <main class="registreer account-pagina">
            <div class="hero">
                <div class="hero-text">
                    <h1 class="t1">Registreer</h1>
                </div>
            </div>
            <div class="content-form content">
                <div class="forum">
                    <form method="post">
                        <div>
                            <h3>Email</h3>
                            <input type="email" name="email" required>
                            <div class="input-line"></div>
                        </div>
                        <div>
                            <h3>Naam</h3>
                            <input type="text" name="username" required>
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
                            <button type="submit" name="register">Register</button>
                        </div>
                        <p>Heb je al een account? <br> <a href="login.php">Login</a></p>
                    </form>
                </div>
            </div>
        </main>

        <footer>
            <?php include("../files/components/footer.php"); ?>
        </footer>

    </body>

</html>
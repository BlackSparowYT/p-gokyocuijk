<?php
    // Start a session
    session_start();

    // Connect to the database
    require_once("../files/config.php");

    // Check if the user has submitted the form
    if (isset($_POST['reset_password'])) {
        // Get the email, password and reset token from the form
        $email = $_POST['email'];
        $new_password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $reset_token = $_GET['token'];

        // Validate the inputs
        $errors = array();
        if ($email === "") {
            $errors[] = "Voer je email in.";
        }
        if ($new_password === "") {
            $errors[] = "Voer je nieuwe wachtwoord in.";
        }
        if ($confirm_password === "") {
            $errors[] = "Herhaal je wachtwoord.";
        }
        if ($new_password !== $confirm_password) {
            $errors[] = "De wachtwoorden komen niet overheen.";
        }

        // Check if the reset token is valid for the email
        $stmt = $link->prepare("SELECT * FROM `users` WHERE email = ? AND reset_token = ?");
        $stmt->bind_param("ss", $email, $reset_token);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows === 0) {
            $errors[] = "Invalid reset token.";
        } else {
            echo '<p>Je token is niet correct of is niet langer beschikbaar</p>';
        }

        if (count($errors) == 0) {

            $new_token = substr(bin2hex(random_bytes(16)), 0, 32);

            // If there are no errors, update the password in the database
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            $stmt = $link->prepare("UPDATE `users` SET password = ?, reset_token = ? WHERE email = ?");
            $stmt->bind_param("sss", $hashed_password, $new_token, $email);
            $stmt->execute();

            // Set a success message and redirect to the login page
            header("Location: login.php");
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

        <title>Wachtwoord Vergeten</title>
        <link rel="stylesheet" href="../styles.css">

        <link rel="icon" type="image/x-icon" href="../images/favicon.png">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hanalei+Fill&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    </head>
    
    <body id="herstel-ww">
    
        <?php include("../files/components/navbar.php"); ?>

        <main class="herstel-ww account-pagina">
            <div class="hero">
                <div class="hero-text">
                    <h1 class="t1">Wachtwoord Vergeten</h1>
                </div>
            </div>
            <div class="content-form content">
                <div class="forum">
                    <form method="post">
                        <div>
                            <h3 for="email">Email</h3>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div>
                            <h3 for="password">Nieuw Wachtwoord</h3>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div>
                            <h3 for="confirm_password">Bevestig Nieuw Wachtwoord</h3>
                            <input type="password" id="confirm_password" name="confirm_password" required>
                        </div>
                        <?php if (isset($errors) && !empty($errors)) : ?>
                            <div>
                                <?php foreach ($errors as $error) : ?>
                                    <p><?php echo $error; ?></p>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <div>
                            <button type="submit" name="reset_password">Reset Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>

        <?php include("../files/components/footer.php"); ?>

    </body>
</html>
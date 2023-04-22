<?php
    // Start a session
    session_start();

    if (!isset($_SESSION['loggedin'])) {
        header("location: login.php");
    }

    // Connect to the database
    require_once("../files/config.php");

    // Check if the user has submitted the password reset form
    if (isset($_POST['reset_password'])) {
        // Get the user's email and old password from the form
        $email = $_SESSION['email'];
        $old_password = $_POST['old_password'];

        // Check if the old password is correct
        $stmt = $link->prepare("SELECT password FROM `users` WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $hashed_old_password = $row['password'];

        if (password_verify($old_password, $hashed_old_password)) {
            // If the old password is correct, get the new passwords from the form
            $new_password1 = $_POST['new_password1'];
            $new_password2 = $_POST['new_password2'];

            // Check if the new passwords match
            if ($new_password1 === $new_password2) {
                // If the new passwords match, hash the new password and update the user's password in the database
                $hashed_new_password = password_hash($new_password1, PASSWORD_DEFAULT);
                $stmt = $link->prepare("UPDATE `users` SET password = ? WHERE email = ?");
                $stmt->bind_param("ss", $hashed_new_password, $email);
                $stmt->execute();

                // Redirect to the dashboard page
                header("Location: dashboard.php");
                exit();
            } else {
                // If the new passwords don't match, show an error message
                $error = "New passwords don't match";
            }
        } else {
            // If the old password is incorrect, show an error message
            $error = "Invalid password";
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
    </head>
    
    <body id="reset-ww">
    
        <?php include("../files/components/navbar.php"); ?>

        <main class="reset-ww account-pagina">
            <div class="hero">
                <div class="hero-text">
                    <h1 class="t1">Verander Wachtwoord</h1>
                </div>
            </div>
            <div class="content">
                <div class="forum">
                    <form method="post">
                        <div>
                            <h3>Huidige Wachtwoord</h3>
                            <input type="password" name="old_password" required>
                        </div>
                        <div>
                            <h3>Nieuw Wachtwoord</h3>
                            <input type="password" name="new_password1" required>
                        </div>
                        <div>
                            <h3>Bevestig Nieuw Wachtwoord</h3>
                            <input type="password" name="new_password2" required>
                        </div>
                        <div>
                            <button type="submit" name="reset_password">Verander Wachtwoord</button>
                        </div>
                        <p><a href="dashboard.php">&#x2190; Terug</a></p>
                        <p>Bent u uw wachtwoord vergeten? <br> <a href="forgot-pass.php">Herstel wachtwoord</a></p>
                    </form>
                </div>
            </div>
        </main>

        <?php include("../files/components/footer.php"); ?>

    </body>
</html>
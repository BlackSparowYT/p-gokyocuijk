<?php
    // Start a session
    session_start();

    if (!isset($_SESSION['loggedin'])) {
        header("location: login.php");
    }

    // Connect to the database
    require_once("../files/config.php");

    // Check if the user has submitted the form
    if (isset($_POST['change_email'])) {
        // Get the email and password from the form
        $new_email = $_POST['new_email'];
        $confirm_email = $_POST['confirm_email'];
        $password = $_POST['password'];

        // Validate the inputs
        $errors = array();
        if ($new_email === "") {
            $errors[] = "Please enter your new email.";
        }
        if ($confirm_email === "") {
            $errors[] = "Please confirm your new email.";
        }
        if ($new_email !== $confirm_email) {
            $errors[] = "The new email and confirmation do not match.";
        }
        if ($password === "") {
            $errors[] = "Please enter your password.";
        }

        // Check if the password is correct
        $stmt = $link->prepare("SELECT * FROM `users` WHERE name = ?");
        $stmt->bind_param("s", $_SESSION['name']);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        if (!password_verify($password, $user['password'])) {
            $errors[] = "Invalid password.";
        }

        // Check if the new email already exists
        $stmt = $link->prepare("SELECT * FROM `users` WHERE email = ?");
        $stmt->bind_param("s", $new_email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $errors[] = "The new email is already taken.";
        }

        if (count($errors) == 0) {
            // If there are no errors, update the email in the database
            $stmt = $link->prepare("UPDATE `users` SET email = ? WHERE name = ?");
            $stmt->bind_param("ss", $new_email, $_SESSION['name']);
            $stmt->execute();

            // Set a success message and redirect to the dashboard
            $_SESSION['email'] = $new_email;
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

        <title>Verander Email</title>
        <link rel="stylesheet" href="../styles.css">
    </head>
    
    <body id="reset-mail">
    
        <?php include("../files/components/navbar.php"); ?>

        <main class="reset-mail account-pagina">
            <div class="hero">
                <div class="hero-text">
                    <h1 class="t1">Verander Email</h1>
                </div>
            </div>
            <div class="content">
                <div class="forum">
                    <form method="post">
                        <div>
                            <h3>Nieuwe Email</h3>
                            <input type="email" name="new_email" required>
                        </div>
                        <div>
                            <h3>Bevestig Nieuwe Email</h3>
                            <input type="email" name="confirm_email" required>
                        </div>
                        <div>
                            <h3>Wachtwoord</h3>
                            <input type="password" name="password" required>
                        </div>
                        <?php if (isset($error)) : ?>
                            <div><p class="errors" style="color: darkred;"><?php echo $error; ?></p></div>
                        <?php endif; ?>
                        <div>
                            <button type="submit" name="change_email">Verander Email</button>
                        </div>
                        <p><a href="dashboard.php">&#x2190; Terug</a></p>
                    </form>
                </div>
            </div>
        </main>

        <?php include("../files/components/footer.php"); ?>

    </body>
</html>
<?php

    // Log the users ip accessing the page
    $file = fopen("../files/iplog.txt","a");
    $ip = $_SERVER['REMOTE_ADDR'];
    $date = date("Y/m/d H:i:s");
    $comp_name = getenv('COMPUTERNAME');
    $fdata = "Date & Time: ".$date.", IP: ".$ip.", COMP_NAME: ".$comp_name.";\n";
    fwrite($file,$fdata);
    fclose($file);

    //ini_set('display_errors', 0);

    // Start a session
    session_start();

    require_once("../files/config.php");

    if (isset($_SESSION['loggedin'])) {
        header("Location: dashboard.php");
        exit();
    }

    // Check if the user has submitted the login form
    if (isset($_POST['login'])) {
        // Get the email and password from the form
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Query the database to check if the email exists and it has admin perms
        $stmt = $link->prepare("SELECT password FROM `users` WHERE email = ? AND admin = 1");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {

            $row = $result->fetch_assoc();
            $hashed_password = $row['password'];

            // Use password_verify to check if the entered password matches the hashed password
            if (password_verify($password, $hashed_password)) {

                $_SESSION['email'] = $email;
                $_SESSION['loggedin'] = true;

                $stmt = $link->prepare("SELECT admin, name, id FROM users WHERE email = ? ");
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $result = $stmt->get_result();

                // Check if user has admin access
                if ($row = mysqli_fetch_assoc($result)) {
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['name'] = $row['name'];
                }

                header("Location: dashboard.php");
                exit();
            } else {
                // If the password doesn't match, show an error message
                $error = "Email of Wachtwoord is incorrect.";
            }
        } else {
            // If the password doesn't match, show an error message
            $error = "Geen account gevonden met Administrator rechten.";
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

        <title>Login</title>
        <link rel="stylesheet" href="../styles.css">

        <link rel="icon" type="image/x-icon" href="../images/favicon.png">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hanalei+Fill&display=swap" rel="stylesheet">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    </head>

    <body id="login">
        
        <header>
            <?php include("../files/components/navbar.php"); ?>
        </header>

        <main class="login account-pagina">
            <div class="content-form content">
                <div class="form">
                    <form method="post">
                        <h1>Login</h1>
                        <div>
                            <h3>Email:</h3>
                            <input type="email" name="email" required>
                            <div class="input-line"></div>
                        </div>
                        <div>
                            <h3>Wachtwoord:</h3>
                            <input type="password" name="password" required>
                            <div class="input-line"></div>
                        </div>
                        <?php if (isset($error)) : ?>
                            <div>
                                <p class="errors" style="color: red;"><?php echo $error; ?></p>
                            </div>
                        <?php endif; ?>
                        <div>
                            <button type="submit" name="login">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>

        <footer>
            <?php include("../files/components/footer.php"); ?>
        </footer>

    </body>

</html>
<?php

    session_start();

    if (!isset($_SESSION['loggedin'])) {
        header("location: login.php");
        exit;
    }

    //ini_set('display_errors', 0);

    require_once("../files/config.php");

    $item_id = $action = NULL;

    $action = $_GET["action"];
    $item_id = $_GET["id"];

    // Opvragen oude data bij het editen van item
    if ($action == "edit"){
        $stmt = $link->prepare("SELECT * FROM `pages` WHERE id = ?");
        $stmt->bind_param("i", $item_id);
        $stmt->execute();
        $is_run = $stmt->get_result();
        $result = mysqli_fetch_assoc($is_run);

        $old_name = $result["name"];
        $old_title = $result["page_title"];
        $old_content = $result["page_content"];

        if ($result["page_show"] == 1) {
            $old_show = true;
        } else {
            $old_show = false;
        }
        
    } else if ($action == "delete") {
    } else {
        echo "Een onjuiste actie is gebruikt!";
    }


    // Item editen
    if (isset($_POST['edit_item'])) {
        $new_title = $_POST["new_title"];
        $new_content = $_POST["new_content"];
        
        if ($_POST["new_show"]) {
            $new_show = 1;
        } else {
            $new_show = 0;
        }

        $stmt = $link->prepare("UPDATE `pages` SET page_show = ?, page_title = ?, page_content = ? WHERE id = ?");
        $stmt->bind_param("sssi", $new_show, $new_title, $new_content, $item_id);
        $stmt->execute();

        header("location: admin-pages.php");
        exit;
    }
    
    // Item verwijderen
    else if (isset($_POST['delete_item'])) {
        $stmt = $link->prepare("DELETE FROM `pages` WHERE id = ?");
        $stmt->bind_param("i", $item_id);
        $stmt->execute();

        header("location: admin-pages.php");
        exit;
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

        <title>Item: <?php echo htmlspecialchars($item_id." - ".$action); ?> || Het Oventje</title>
        <link rel="stylesheet" href="../styles.css">
    </head>

    <body>
        
        <header>
            <?php include("../files/components/navbar.php"); ?>
        </header>

        
        <main class="admin-pages-edit account-pagina">
            <div class="hero">
                <div class="hero-text">
                    <?php if($action != "add") : ?>
                        <h1 class="t1">Item: <?php echo htmlspecialchars($item_id." - ".$action); ?></h1>
                    <?php endif; ?>
                    <?php if($action == "add") : ?>
                        <h1 class="t1">Add Item</h1>
                    <?php endif; ?>
                </div>
            </div>

            <div class="content-form">
                <div class="form">
                    <form method="post">
                        <?php if($action == 'edit'): ?>
                            <div class="flexbox">
                                <div>
                                    <h3>Pagina Name</h3>
                                    <input 
                                        type="text" 
                                        name="new_name" 
                                        <?php echo "value='".$old_name."'" ?> 
                                        required
                                        disabled
                                    >
                                    <div class="input-line"></div>
                                </div>
                                <div>
                                    <h3>Pagina Title</h3>
                                    <input 
                                        type="text" 
                                        name="new_title" 
                                        <?php echo "value='".$old_title."'" ?> 
                                        required
                                    >
                                    <div class="input-line"></div>
                                </div>
                            </div>
                            <div class="flexbox">
                                <div>
                                    <h3>Pagina Content</h3>
                                    <textarea 
                                        type="text" 
                                        name="new_content" 
                                        maxlength="999999999"
                                    >
                                    <?php echo $old_content; ?>
                                    </textarea>
                                    <div class="input-line"></div>
                                </div>
                                <div>
                                    <h3>Pagina Zichtbaar</h3>
                                    <input 
                                        class="input-cb"
                                        type="checkbox" 
                                        name="new_show" 
                                        id="new_show"
                                        <?php if ($old_show == true) { echo "checked"; } ?>
                                        value="true"
                                    >
                                    <div class="input-line"></div>
                                </div>
                            </div>
                            <div class="flexbox">
                                <div>
                                    <button type="submit" name="edit_item">Edit item</button>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if($action == 'delete'): ?>
                            <div class="flexbox">
                                <div>
                                    <button type="submit" name="delete_item">Delete item</button>
                                </div>
                            </div>
                        <?php endif; ?>
                        <p class="help-return-btns">
                            <a href="admin-pages.php">&#x2190; Terug</a>
                            ||
                            <a href="admin-pages-help.php">Help?</a>
                        </p>
                    </form>
                </div>
            </div>
        </main>

        <footer>
            <?php include("../files/components/footer.php"); ?>
        </footer>

    </body>

</html>
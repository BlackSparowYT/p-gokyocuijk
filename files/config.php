<?php

    // Webhost Database Login, User has only read perms for the required tables!     
    // file deepcode ignore HardcodedPassword: <please specify a reason of ignoring this>   

    $user = 'user';
    $password = 'password';
    $database = 'database';
    $servername = '116.202.134.139';
    
    $link = new mysqli($servername, $user, $password, $database);
    if (!$link){
        echo "<p style='color: red;'>Connection Unsuccessful!!!</p>";
    }

?>
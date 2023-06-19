<?php

session_start();
if(!$_SESSION['logged_in']){
    header("location: error.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="../pp/style.css">
    </head>
    <body>
        <div style="align-items: center;" class="img">
            <img src="pp/images/logo.png" alt="">
        </div>

    </body>
</html>
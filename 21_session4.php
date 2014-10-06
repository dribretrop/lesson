<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <?php
            print_r($_SESSION);
        ?>
        <br>
        <a href="21_session5.php" target="_parent">Click here to Detroy sessions</a>
    </body>
</html>

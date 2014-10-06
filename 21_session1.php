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
            $_SESSION["fav_animal"] = "cat";
            $_SESSION["fav_color"] = "green";
            echo "set session done.<br>";
        ?>
        <a href="21_session2.php" target="_blank">Click here to check session.</a>
    </body>
</html>

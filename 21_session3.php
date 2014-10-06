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
            print_r($_SESSION)."<br>";
            $_SESSION["fav_animal"] = "Bird";
            $_SESSION["fav_color"] = "Yellow";
            echo "<br>";
        ?>
        <a href="21_session4.php" target="_blank">Click to Modify session variables.</a>
    </body>
</html>

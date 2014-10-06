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
            echo $_SESSION["fav_animal"]."<br>";
            echo $_SESSION["fav_color"]."<br>";
        ?>
        <a href="21_session3.php" target="_blank">Click here to check all session</a>   </body>
</html>

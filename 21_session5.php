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
            session_unset();
            session_destroy();
            echo "Destroyed sessions.";
        ?>
      
        <br><a href="21_session6.php" target="_blank">Click here to View session value.</a>
    </body>
</html>

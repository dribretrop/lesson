<?php
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <?php
            if(!(session_start()))
                echo "No sessions";
            
        ?>
    </body>
</html>

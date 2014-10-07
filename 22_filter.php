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
            $int = 10.20;

            if(!filter_var($int,FILTER_VALIDATE_INT)){
                echo "Integer invalid";
            }else echo "Integer valid";
        ?>
    </body>
</html>

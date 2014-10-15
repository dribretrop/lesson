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
            }else echo "Integer valid ";

            echo "<br>";

            $n = 300;
            
            $int_options = array("options"=>array("min_range"=>0,"max_range"=>299));

            if(!filter_var($n,FILTER_VALIDATE_INT,$int_options)){
                echo "Int not valid";
            }else echo "Int valid";
        ?>
    </body>
</html>

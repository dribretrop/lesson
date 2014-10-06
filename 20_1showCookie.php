<?php
   setcookie=("user","Teerasak See",time()+3600);
    setcookie=("name","value",time()+60,"/");
?>

            

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_COOKIE["user"]))
                echo $_COOKIE["user"];
            else
                echo "Hello Guest";
 
        ?>

    </body>
</html>

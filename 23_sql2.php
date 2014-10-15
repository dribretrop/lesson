<?php
    $con = mysqli_connect("localhost","root","roottoor");

    if(mysqli_connect_errno()){
        echo "Can't connect DB : Error ID ".mysqli_connect_errno()." ".mysqli_connect_error();
    } else echo "Connected DB<br>";

    $query = "CREATE DATABASE my_db1";

    if(mysqli_query($con,$query)){
        echo "Database created !!!";
    }else echo "Error to create ".mysqli_error($con);

    echo "<br>";
    $close = mysqli_close($con);
    
    if(($close)){
        echo "DB Disconnected";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>

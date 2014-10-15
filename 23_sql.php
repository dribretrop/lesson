<?php
// Create connection
$con=mysqli_connect("localhost","root","roottoor");

// Check connection
if (mysqli_connect_errno())
  echo "Failed to connect to MySQL: " . mysqli_connect_error();

    $sql = "CREATE DATABASE my_db1";
    if(mysqli_query($con,$sql)){
        echo "Database created <br>";
        echo "Yeah!";
    } else {
        echo "Can't create database";
    }
  mysqli_close($con);
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

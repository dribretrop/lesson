<?php
    $con = mysqli_connect("localhost","root","roottoor","my_db2");

    if(mysqli_connect_errno()){
        echo "Can't connect DB error ID : ".mysqli_connect_errno()." ".mysqli_connect_error();
    }else echo "DB Connected !!!<br><br>";
    
    $query = "CREATE TABLE Person 
                (
                PID INT NOT NULL AUTO_INCREMENT,
                PRIMARY KEY(PID),
                FirstName CHAR(30), 
                LastName CHAR(30),
                Age INT
                )";
    
    if(mysqli_query($con,$query)){
        echo "Table created !";
    }else echo "Can't create table error ID :".mysqli_errno($con)." ".mysqli_error($con);
     
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

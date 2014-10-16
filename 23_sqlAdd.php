<?php
    $con = mysqli_connect("localhost","root","roottoor","my_db2");

    if(!$con){
        die("Can't connect DB error ID : ".mysqli_connect_errno()." ".mysqli_connect_error());
        mysqli_close($con);
    } else echo "DB Connected !<br>";

    $name = $_POST['FirstName'];
    $last = $_POST['LastName'];
    $age = $_POST['Age'];

    $input = array($_POST['FirstName'],$_POST['LastName'],$_POST['Age']);

    echo $input[0];
    echo "<br>";

    $sql = "INSERT INTO person (FirstName,LastName,Age) VALUES ('$input[0]','$input[1]','$input[2]')";
    
    $query = mysqli_query($con,$sql);
              
        if(!$query){
            echo "error ID : ".mysqli_query_errno()." ".mysqli_error();
        }   else { 
                echo "Added." ;}
                       
                       
                       //echo "<br>he";

                  /*  if(!$query){
                        echo "Failed error ID : ".mysqli_query_errno()." ".mysqli_error($con);
                    } else echo "Data added !";
                    */
                    
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

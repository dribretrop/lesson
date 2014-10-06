<?php
    $write = fopen("files/testwrite.txt","r+") or die ("Can't write"); //create file
    $txt = "Hello \n";
    fwrite($write,$txt);
    $txt = "My friend \n";
    fwrite($write,$txt);

    $write = fopen("files/testwrite.txt","r");  //read for echo
    echo fread($write,filesize("testwrite.txt"));
    fclose();
   
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

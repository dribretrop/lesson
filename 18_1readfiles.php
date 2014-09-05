<?php
  
   //echo fread($files,filesize("webdictionary.txt"));
    for($i=0;$i<=10;$i++){
    $files = fopen("files/webdictionary.txt","r") or die ("Fuck !!!");
    while(!feof($files)){
       echo fgetc($files)."<br>";

    }
    fclose($files);
   }
   
   /*
    $hold = "img/1.jpg","r";
    $pic = fopen($hold) or die("Opp !!!");
    echo fread($pic);
    fclose($pic);
    */
   //echo fgets($files);
  
   



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

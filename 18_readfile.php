<?php
    /*
    echo "hi";
    echo readfile('webdictionary.txt');
    echo readfile('files/webdictionary.txt');
    */
    $files = fopen("webdictionary.txt","r") or die ("Can't open files");
    echo fread($files,filesize("webdictionary.txt"));
    fclose($files);
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

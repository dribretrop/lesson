<?php
    $hold = fopen("files/webdictionary.txt","r") or die ("Can't find.");
    echo fread($hold,filesize("webdictionary.txt"));
    fclose($hold);
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

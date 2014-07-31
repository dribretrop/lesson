i<?php
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <h1>PHP Form Validation</h1>
        <br><br>
        <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Name    : <input type="text" name="name"><br>
        Email   : <input type="text" name="email"><br>
        Website : <input type="text" name="website"><br>
        Comment : <textarea rows="5" cols="40" name="comment"></textarea><br>
        Gender  : 
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
                <br>
                <input type="submit" name="submit">
            </form>
       <?php
           echo $_POST['name'];
           echo "<br>";
           echo $_POST['email'];
       ?>

        <iframe width="560" height="315" src="http://www.indieroyale.com/media/iframe/977480" frameborder="0" scrolling="no" allowfullscreen></iframe><br /><a href="http://www.desura.com/games/mrbree/videos/release-trailer">Release Trailer - Indie Royale</a>
    </body>
</html>

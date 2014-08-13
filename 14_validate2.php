<?php
    
    function validate($data){
        $data = trim($data);
        $data = str_replace("\'","",$data);
        $data = str_replace("/","",$data);
        $data = htmlspecialchars($data);
        return $data;
    }

    //define variable
    $errName = $errEmail = $errWebsite = $errComment = $errGender = "";
    $name = $email = $website = $comment = $gender = "";

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        if (empty($_POST["name"])){
            $errName = "Name required";
        } else {
            $name = validate($_POST["name"]);
            // check letter and whitespace
            if (!preg_match("/^[a-zA-z .]*$/",$name)){
            $errName = "Name required only letter and white space";
            }
        }
    
        if (empty($_POST["email"])){
            $errEmail = "Email required";
        } else {
            $email = validate($_POST["email"]);
            if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
                $errEmail = "Invalid email format";                
            }
        }

        if (empty($_POST["website"])){
            $errWebsite = "";
        } else {
            $website = validate($_POST["website"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
                $errWebsite = "* Invalid site format";
            }
        }

        if (empty($_POST["comment"])){
            $errComment = "";
        } else {
            $comment = $_POST["comment"];
        }

        if (empty($_POST["gender"])){
            $errGender = "Plz select gender";
        } else {
            $gender = $_POST["gender"];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <style>
            #error{ color: #f00; }
        </style>
        <title>14_Validate 2</title>
    </head>
    <body>
        <h1>Input data</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["SELF_PHP"]); ?>">
        Name : <input type="text" name="name"><span id="error">* <?php echo $errName ; ?></span><br>
        Email : <input type="text" name="email"><span id="error">* <?php echo $errEmail ; ?></span><br>
        Website : <input type="text" name="website"><span id="error"> <?php echo $errWebsite ; ?></span><br>
        Comment : <textarea cols="30" rows="5" name="comment">You can comment here !</textarea><br>
        Gender : <input type="radio" name="gender" value="Male">Male <input type="radio" name="gender" value="Female">Female <span id="error">* <?php echo $errGender ; ?></span><br>
        <input type="submit" name="submit" value="Submit">
        </form>

        <?php
            echo "$name <br>";
            echo "$email <br>";
            echo "$website <br>";
            echo "$comment <br>";
            echo "$gender <br>";
        ?>
    </body>
    
</html>

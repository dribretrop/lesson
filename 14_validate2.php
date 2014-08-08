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
            if (!preg_match("/^[a-zA-z ]*$/",$name))
            $errName = "Name required only letter and white space";
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
        Name : <input type="text" name="name"><span id="error">* </span><br>
        Email : <input type="text" name="email"><span id="error">* </span><br>
        Website : <input type="text" name="website"><br>
        Comment : <textarea cols="30" rows="5" name="comment">You can comment here !</textarea><br>
        Gender : <input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="female">Female <span id="error">*</span><br>
        <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>

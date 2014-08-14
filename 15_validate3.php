<?php
   
    function validate($data){
        $data = trim($data);
        $data = str_replace("\'","",$data);
        $data = str_replace("/","",$data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name=$email=$website=$comment=$gender="";
    $errName=$errEmail=$errWebsite=$errComment=$errGender="";

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        if (empty($_POST["name"])) {
            $errName = "Name required";
        } else {
            $name = validate($_POST["name"]);
            if (!preg_match("/^[a-zA-z\. ]/",$name)){
                $errName = "Only letter and space";
            }
        }

        if (empty($_POST["email"])) {
            $errEmail = "Email required";
        } else {
            $email = validate($_POST["email"]);
            if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
                $errEmail = "Invalid format email";
            }
        }

        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",validate($_POST["website"]))){
            $errWebsite = "* Invalid format site";
        }

        $comment = $_POST["comment"];

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
        <title></title>
        <style>
            #error{
                color: #f00;
            }
        </style>
    </head>
    <body>
        <h1>Input your data</h1><br>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["SELF_PHP"]); ?>">
            Name : <input type="text" name="name" value="<?php echo $name ;?>"> <span id="error">* <?php echo $errName ;?></span><br>
            Email : <input type="text" name="email" value="<?php echo $email ; ?>"> <span id="error">* <?php echo $errEmail ; ?></span><br>
            Website : <input type="text" name="website" value="<?php echo $_POST["website"] ; ?>"> <span id="error"> <?php echo $errWebsite ; ?></span><br>
            Comment : <textarea cols="20" rows="5" name="comment"><?php echo $comment; ?></textarea><br>
            Gender : <input type="radio" name="gender" value="Male" <?php if ($gender=="Male") { echo "checked"; } ?>>Male 
            <input type="radio" name="gender" value="Female" <?php if ($gender=="Female") { echo "checked"; } ?>>Female <span id="error">* <?php echo $errGender ; ?></span><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        
    </body>
</html>

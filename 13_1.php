<?php
    
    function validate($data){
        $data = trim($data);
        $data = str_replace("\'","",$data);
        $data = str_replace("/","",$data);
        $data = str_replace(" ","",$data);
        $data = htmlspecialchars($data);
        return $data;
    }    

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
           if (empty($_POST["name"])){
               $errName = "Invalid or Require Name";
           } else {
               $name = validate($_POST["name"]);
           }
           
           if (empty($_POST["email"])){
               $errEmail = "Invalid or Requird Email";
           } else {
               $email = validate($_POST["email"]);
           }
           
           if (empty($_POST["comment"])){
               $errComment ="";
           } else {
               $comment = $_POST["comment"];
           }

           if (empty($_POST["gender"])){
               $errGender = "Please select gender";
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
            #error {color: #f00 ;}
        </style>
        <title>13_1 Required Field</title>
    </head>
    <body>
        <h1>Require Data</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name : <input type="text" name="name"> <span id="error">* <?php echo $errName; ?></span><br>
        eMail : <input type="text" name="email"><span id="error"> * <?php echo $errEmail; ?></span><br>
        Comment : <textarea name="comment"></textarea> <br>
        Gender : <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female <span id="error">* <?php echo $errGender; ?>  </span><br><br> 
        <input type="submit" name="submit" value="Submit">
        </form>
      
        <?php
           echo "$name <br>";
           echo "$email <br>";
           echo "$comment <br>";
           echo "$gender";
        ?>
    </body>
</html>

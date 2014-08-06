<html>
<head>
<title>11_Requiedfield</title>
</head>
    
    <body>
        <?php
           // echo "test<br>";
            
            //valiable error and value
            $errName = $errEmail = $errWebsite = $errGender ="";
            $name = $email = $website = $gender = "";
            //echo "test<br>";
            
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                if(empty($_POST["name"])) {
                    $errName = "Invalid Name";
                } else {
                    $name = $_POST["name"];
                } 

                if(empty($_POST["email"])) {
                    $errEmail = "Invalid Email";
                } else {
                    $email = $_POST["email"];
                }
                if(empty($_POST["website"])) {
                    $errWebsite = "Invalid Website";
                } else {
                    $website = $_POST["website"];
                }
                if(empty($_POST["gender"])) {
                    $errGender = "Please select gender";
                } else {
                    $gender = $_POST["gender"];
                }
            }
               
        ?>
        <h1>Please input data</h1>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Name : <input type="text" name="name"> <?php echo $errName; ?>
            <br><br>
            eMail : <input type="text" name="email"> <?php echo $errEmail; ?>
            <br><br>
            Website : <input type="text" name="website"> <?php echo $errWebsite; ?>
            <br><br>
            Gender : <input type="radio" name="gender" value="Male">Male
                     <input type="radio" name="gender" value="Female">Female <?php echo $errGender; ?><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
       
        <?php
           echo "$name <br>";
           echo "$email <br>";
           echo "$website <br>";
           echo "$gender <br>";
       ?>
    </body>      



</html>
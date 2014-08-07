<html>
<head>
<style>
    #error {color: #f00 ;}
</style>
    <title>13_requiredfield</title>
</head>
    <body>
    
    <?php 
        $errName = $errEmail = $errComment = $errGender ="";
        $name = $email = $comment = $gender ="";

        if ($_SERVER["REQUEST_METHOD"]=="POST"){

            if (empty($_POST["name"]))  
            {   $errName = "Invalid name";  }
                else 
                {  $name = validate($_POST["name"]);   }

            if (empty($_POST["email"])) 
            {   $errEmail = "Invalid email" ;   }
                else 
                {  $email = validate($_POST["email"]); }

            if (empty($_POST["comment"]))
            {   $errComment = "";   }
                else
                {   $comment = validate($_POST["comment"]); }

                if (empty($_POST["gender"]))
            {   $errGender = "Please select gender"; }
                else 
                {   $gender = $_POST["gender"]; }

        }

?>
        
        <?php
            function validate($data){
                $data = trim($data);
                $data = str_replace("\'","",$data);
                $data = str_replace("/","",$data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>
     

     <h1>Input your data :</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["SELF_PHP"]); ?>">
    Name : <input type="text" name="name"> <span id="error"> * require </span><br>
    Email : <input type="text" name="email"><span id="error"> * require</span><br>
    Comment : <textarea rows="5" cols="20" name="comment"></textarea><br>
    Gender : <input type="radio" name="gender" value="Male"> Male 
               <input type="radio" name="gender" value="Female"> Female <span id="error">* Please select gender</span><br>
    <input type="submit" name="submit" value="Submit">
        </form>
        
 
    </body>
</html>      
        

           

            
            
     

       
            
        

        


    

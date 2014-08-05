<html>
<head>
<title>11_Requiedfield</title>
</head>
    <body>
        <?php
            //valiable error and value
            $errName = $errEmail = $errWebsite = $errGenger ="";
            $name = $email = $website = $gender = "";

            if($_SERVER('REQUEST_METHOD')=='POST'){
                if(empty($_POST['name'])){
                    $errName = "Invalid Name";
                } else{
                    $name = $_POST['name'];} 

                if(empty($_POST['email'])){
                    $errEmail = "Invalid Email";
                } else{
                    $email = $_POST['email'];
                }
                if(empty($_POST['website']){
                    $errWebsite = "Invalid Website";
                } else{
                    $website = $_POST['website'];
                }
                if(empty($_POST['gender']){
                    $errGenger = "Please select gender";
                } else{
                    $gender = $_POST['gender'];
                }
               
  
            }
                
        ?>
    
    </body>      



</html>
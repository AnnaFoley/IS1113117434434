<?php
//Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    
    <head>
        <link rel="Stylesheet" href="Cloud_pages.css" type="text/css"/>
        <script type="text/javascript" src="ebus2_validator.js"></script>

        <title> Enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>
        
        <h2>Please enter your payment details.</h2>
        
            <br />
            
            <form method="POST" action="EBus3.php">
                
                   <!--email and name needed-->
                <label for "Name">
                    Name
                     </label>
                <input tpye="text" name="user_name" id="user_name" placeholder="Name" maxlength="30">
                  
                
                </br>
                
                <label for "email">
                    E-mail Address
                     </label>
                <input type="text" name="user_email" id="user_email" placeholder="E-mail" maxlength="30">
               
                
                </br>
                
                <label for="user_pin">
                     PIN 
                </label>
                
                <input type="password" name="user_pin" id="user_pin" placeholder="Card Pin" maxlength="4">
                    
                <button class = "btn btn-dark" type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
            
            </form>
              
               <br />
             
            <button  class = "btn btn-dark" onClick="validateDetails()"> Validate </button>
                  
       
        
      <!--set session variables-->
      
        <?php
        $_SESSION["total"]=$_POST["total"];
        ?>
  
    </body>
    </html>
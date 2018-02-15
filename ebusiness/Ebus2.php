<?php
//Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    
    <head>
        <link rel="Stylesheet" href="../mystylesheet.css" type="text/css"/>
        
        <title> Enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>
        
        <h4>Please enter your payment details.</h4>
        
            <br />
            
            <form method="POST" action="EBus3.php">
                
                <label for "Name">
                    Name
                </label>
                
                <input tpye="text" id="user_name"  placeholder="Name">
                
                </br>
                
                <label for "email">
                    E-mail Address
                </label>
                
                <input type="text" id="user_email" placeholder="E-mail">
                
                </br>
                <label for="user_pin">
                     PIN 
                </label>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                    
                <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
            </form>
            
            <br />
            
            <button onClick="validateDetails()"> Validate </button>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <!--email and name needed-->
        <?php
        //set session variavles
        $_SESSION["total"]=$_POST["total"]
        ?>

        
    </body>
    </html>
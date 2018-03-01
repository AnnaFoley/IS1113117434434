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
        
        <style type="text/css">
            
            
            
            #purchase{
                padding: 12px 28px;
                       background-color: rgb(208, 83, 71);
                       font-size: 12px;
                       border-radius: 8px;
                       width: 250px;
                       position:absolute;
                       top:490px;
                       right:300px;
                       left:460px;
            }
            
            #valdiate{
                padding: 12px 28px;
                       background-color: rgb(208, 83, 71);
                       font-size: 12px;
                       border-radius: 8px;
                       width: 250px;
                       position:absolute;
                       top:450px;
                       right:300px;
                       left:460px;
            }
        </style>
        
    </head>
    
    <body>
        
        <h2>Please enter your payment details.</h2>
        
            <br />
            
            
            <form method="POST" action="EBus3.php">
                
                <!--radio buttons to which way to pay-->
                <!--visa-->
                <label for "visa">
                    Visa/Debit Card
                </label>
                <input type="radio" id="visa" name="visa">
                
                <!--paypal-->
                <label for "paypal">
                    Paypal
                </label>
                <input type="radio" id="paypal" name="paypal">
                
                <form method="POST" action="EBus3.php">
                
                   <!--email and name needed-->
                <label for "FirstName">
                   First Name
                     </label>
                <input tpye="text" name="user_name" id="user_name" placeholder="First Name" maxlength="30">
                
                <label for "LastName">
                    Last Name
                </label>
                <input type="text" name="lastname" id="lastname" placeholder="Last Name" maxlength="15">
                
                </br>
                 
                 <label for "address">
                   Address
                 </label>
                <label for "email">
                    <input type="text" name="address" id="name" placeholder="Address" maxlength="30">
                    
                    <br/>
                    <label for "street"
                    
                    E-mail Address
                     </label>
                <input type="text" name="user_email" id="user_email" placeholder="E-mail" maxlength="30">
               
                
                </br>
                
                <label for="user_pin">
                     PIN 
                </label>
                
                <input type="password" name="user_pin" id="user_pin" placeholder="Card Pin" maxlength="4">
                    <br/>
                    <div class="purchase" id="purchase">
                <button class = "btn btn-dark" type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
              </div>
            
            </form>
              
               <br />
             <div class="valdiate" id="valdiate">
            <button  class = "btn btn-dark" onClick="validateDetails()"> Validate </button>
                  </div>
       
        
      <!--set session variables-->
      
        <?php
        $_SESSION["total"]=$_POST["total"];
        ?>
  
    </body>
    </html>
<?php
//Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    
    <head>
        <link rel="Stylesheet" href="Cloud_pages.css" type="text/css"/>
        <script type="text/javascript" src="ebus2_validator.js"></script>

 <!--tab on the top of the page so can go back home  or on to the next page-->
 <div class="nav-bar" id="nav-bar">
                <ul>
            <li> <a href="..//homepage.html">Home</a></li>
             <li> <a href="..//Cv/cv_page1.html">Cv</a></li>
              <li> <a href="..//interests/sports.html">Interests(Sports)</a></li>
            <li> <a href="AboutCloud.html"> About Clouds</a></li>
            <li> <a href="EBus1.php">Select a product</a></li>
       </ul>
       </div>
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
                       top:550px;
                       right:200px;
                       left:450px;
            }
            
            #valdiate{
                padding: 12px 28px;
                       background-color: rgb(208, 83, 71);
                       font-size: 12px;
                       border-radius: 8px;
                       width: 250px;
                         position:absolute;
                         top:460px;
                       right:100px;
                       left:750px;
            }
            
            
            
            
            #billing{position:absolute;
                    top:200px;
                    right:600px;
                    left:100px;
                    width:400px;
                    height:300px;
                    border-style:double;
            }
            
            #payment{ position:absolute;
                        top:200px;
                        right:150px;
                        left:700px;
                          width:400px;
                    height:300px;
                    border-style: double;
            }
            
         
                
            
        </style>
        
    </head>
    
    <body>
        
        <h1>Checkout</h1>
    
      <form method="POST" action="EBus3.php">
                    
            <div class="billing" id="billing">
                <h3> Billing Address</h3>
                   <!-- First  name needed-->
                <label for "FirstName">
                   First Name
                     </label>
                <input tpye="text" name="user_name" id="user_name" placeholder="First Name" maxlength="30">
                <br/>
                <!--last name needed-->
                <label for "LastName">
                    Last Name
                </label>
                <input type="text" name="lastname" id="lastname" placeholder="Last Name" maxlength="15">
                
                </br>
                 <!--1st line of address-->
                 <label for "address">
                   Address
                 </label>
              
                    <input type="text" name="address" id="address" placeholder="Address" maxlength="30">
                    
                    <br/>
                    <!--2nd line of address-->
                    <label for "street">
                        Street
                    </label>
                    <input type="text" name="street" id="street" placeholder="Street" maxlength="30">
                    
                    <br/>
                    <!--town/city/village of address-->
                    <label for "town">
                        Town/City
                    </label>
                    <input type="text" name="town" id="town" placeholder="Town/City">
                    <br/>
                    <!--the county of address--> 
                    <label for "counties">
                    Counties
                    </label>
                    <input type="tex" name="counties" id="counties" placeholder="Counties" maxlength="20">
                    
                    <br/>
                    <label for "email">
                    E-mail Address
                     </label>
                <input type="text" name="user_email" id="user_email" placeholder="E-mail" maxlength="30">
               <br/>
               <label for="number">
                   Mobile Number
               </label>
               <input type="number" name="mobile" id="mobile" placeholder="Mobile Number" maxlength="10">
               
               
                
               </div>
<!--seperate section for the payment of the cloud but the same form-->  
        <div class="payment" id="payment">
                <h3>Please enter your payment details.</h3>
              
                <h4>Visa/Debit Card</h4>
            
               <label for "cardname">
               Card Holder's Name
               </label>
               <input type="text" name="cardname" id="cardname" maxlength="30">
               <br/>
               
               <label for "cardnumber">
                   Card Number
               </label>
               <input type="number" name="cardnumber" id="cardnumber"placeholder="Card Number" maxlength="16">
               
               <br/>
               <label for "expiry-date">
                   Expiry Date
               </label>
               <input type="date" name="expiry-date" id="expiry-date" placeholder="Expiry Date">
               
               
              <br/>
              <label for "ccv">
                  CCV Number
                  </label>
                  <input type="number" name="ccv" id="ccv"  placeholder="CCV Number"maxlength="3">
               
               <br/>
             
               
               <label for "pin"
                <label for="user_pin">
                     PIN 
                </label>
                
                <input type="password" name="user_pin" id="user_pin" placeholder="Card Pin" maxlength="4">
          
          </div>
              <br/>
                    <div class="purchase" id="purchase">
                <button class = "btn btn-dark" type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
              </div>
            </form>
               <br />
             <div class="valdiate" id="valdiate">
            <button  class = "btn btn-dark"  id="btnvalidate"   onClick="validateDetails()" >
                 Validate </button>
                  </div>
      
        
      <!--set session variables-->
      
        <?php
        $_SESSION["total"]=$_POST["total"];
        ?>
  
    </body>
    </html>
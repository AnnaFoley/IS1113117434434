<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <link rel="Stylesheet" href="Cloud_pages.css" type="text/css"/>
        
    <head>
          <!--tab on the top of the page so can go back home  or on to the next page-->
                <ul>
            <li> <a href="..//homepage.html">Home</a></li>
             <li> <a href="..//Cv/cv_page1.html">Cv</a></li>
              <li> <a href="..//interests/sports.html">Interests(Sports)</a></li>
            <li> <a href="AboutCloud.html"> About Clouds</a></li>
            <li> <a href="EBus1.php">Select a product</a></li>
       </ul>
        <title>Select Product</title>
        
        
        <!--JQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        <style type="text/css">
        
         
         #calculate-cost{padding: 12px 28px;
                       background-color: rgb(208, 83, 71);
                       font-size: 12px;
                       border-radius: 8px;
                       width: 250px;
                       position:absolute;
                       top:490px;
                       right:300px;
                       left:460px;
                       }
         #shopping-cart{padding: 12px 28px;
                       background-color: rgb(208, 83, 71);
                      font-size: 12px;
                       border-radius: 8px;
                       width: 250px;
                        position:absolute;
                       top:440px;
                       right:300px;
                       left:460px;
          
  
         }
         
        </style>
        
        
  </head>
  
    <body>
        
    <h1 class="mianheading">Select a Product </h1>
            
    </br>
            
    <form method="POST" action="Ebus2.php">
                
        <label for="salesforce">
        <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
        SalesForce @ $100
        </label>
        
        </br>
        
        <label for="aws">
        <input type="radio" id="aws" name="product" checked  onClick="disablebtnProceed()"/>
        Amazon Web Services @ $300
        </label>
        
        </br>
        <label for="cloud9">
        <input type="radio" id="cloud9" name="product" checked  onClick="disablebtnProceed()"/>
        Cloud9 @ $200
        </label>
           
           </br>
           <label for="gmail">
        <input type="radio" id="gmail" name="product" checked  onClick="disablebtnProceed()"/>
        Gmail @ $400
        </label> 
         </br>
         </br>
            
        <label for="subtotal">
            Sub Total
        <input type="text" id="subtotal" name="subtotal" value="0.00"  readonly/>
         
        </label>
            
        </br>
        <label for="discount">
        Discount @ 5%
        <input type="text" id="discount" name="discount" value="0.00"  readonly/>
        
         </br>
         (- Discount)
        </label>
            
            </br>
            
        <label for="vat">
         VAT @ 10%
        <input type="text" id="vat" name="vat" value="0.00"  readonly/>
         
        </label>
             </br>
         <label for= "total">
        Total
        <input type="text" id="total" name="total" value="0.00"  readonly/>
       
        </br>
        (- discount + VAT)
        </label>
            
        </br>
        <div class="shopping-cart" id="shopping-cart">
        <button   type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
                    </div>
        </form>
            
        </br> 
<div class="calculate-cost" id ="calculate-cost">
              <button onClick="calcSub()" > Calculate Cost</button> 
               </div>
               <br/>
               <br/>
               <br/>
               <br/>
        <a role="button" href="Ebus1.php" class="btn btn-success"> Clear Choice</a>
      
      
    </body>
    
 </html>
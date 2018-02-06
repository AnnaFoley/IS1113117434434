<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--JQuery-->
        <script scr="https://ajax.googleapis.com/ajex/libs/jquery/3.2.1/jquery.js"></script>
        <script type="text/javascript" src="cost_calcs.js"></script>
  </head>
  
    <body>
        
    <h4 Select a Product </h4> 
            
    </br>
            
    <form method="POST" action="Ebus2.php">
                
            <label for="salesforce">
            <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
            SalesForce @ $100
            </label>
            
    </br>
            
    <label for="aws">
         <input type="radio" id="aws" name="product" checked  onClick="disablebtnProceed()"/>
        AWS @ $300
        </label>
            
         </br>
        </br>
            
        <label for="subtotal">
        Sub Total
        <input type="text" id="subtotal" name="subtotal" value="0.00"  readonly/>
        </label>
            
        </br>
             
             
      <label for= "total">
         Total
        <input type="text" id="total" name="total" value="0.00"  readonly/>
        </label>
            
        </br>
            
        <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
            
        </br> 
        <button onClick="calcSub()"> Calculate Cost</button>
        <a role="button" href="Ebus1.php"> Clear Choice</a>
        
    </body>
    
 </html>
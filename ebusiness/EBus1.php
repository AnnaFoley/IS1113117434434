<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <link rel="Stylesheet" href="Cloud_pages.css" type="text/css"/>
        
    <head>
       <title>Select Product</title>
       
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
     
        
        
        <!--JQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        <style type="text/css">
        
         body {
           background-image:url("https://i.ytimg.com/vi/pKsfmx6pZgA/maxresdefault.jpg");
          text-align:center;
          font-size:120%;
         }
     background-image{
          background-size:cover;
          margin-left:auto;
          margin-right:auto;
          background-attachment:fixed;
         }    

       button {
           background-color: #e7e7e7; /* Grey */
           border: none;
           color: black;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 12px;
           width: 250px;
       }

      #nav-bar{
         list-style: none;
         margin: 0;
         padding: 0;
         overflow: hidden;
         background-color: LightGrey;
         color:black;
        }
    

       li {  
             float:left;
             display: block;
            color: black;
            text-align: left;
            padding: 14px 16px;
            text-decoration: none;
        }

       .mainheading{
              text-align:center;
        }
         
         #calculate-cost{padding: 12px 28px;
                       background-color: rgb(208, 83, 71);
                       font-size: 12px;
                       border-radius: 8px;
                       width: 250px;
                       position:absolute;
                       top:500px;
                       right:300px;
                       left:550px;
                       }
         #shopping-cart{padding: 12px 28px;
                       background-color: rgb(208, 83, 71);
                      font-size: 12px;
                       border-radius: 8px;
                       width: 250px;
                        position:absolute;
                       top:450px;
                       right:300px;
                       left:550px;
          
  
         }
         
        </style>
        
        
</head>
  
 <body>
        
    <h1 class="mianheading">Select a Product </h1>
            
    <br>
            <!--from for the selecting of  produts and the calculation of the prices-->
    <form method="POST" action="Ebus2.php">
                <!--salesforcecheckbox-->
        <label for="salesforce">
        <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
        SalesForce @ $100
        </label>
        
        <br>
        <!--Amazon web services checkbox-->
        <label for="aws">
        <input type="radio" id="aws" name="product" checked  onClick="disablebtnProceed()"/>
        Amazon Web Services @ $300
        </label>
        
        <br>
        <!--cloud9 checkbox-->
        <label for="cloud9">
        <input type="radio" id="cloud9" name="product" checked  onClick="disablebtnProceed()"/>
        Cloud9 @ $200
        </label>
           
           <br>
           <!--gmail checkbox-->
           <label for="gmail">
        <input type="radio" id="gmail" name="product" checked  onClick="disablebtnProceed()"/>
        Gmail @ $400
        </label> 
         <br>
         <br>
            <!--textbox fot the subtotal-->
        <label for="subtotal">
            Sub Total
        <input type="text" id="subtotal" name="subtotal" value="0.00"  readonly/>
         
        </label>
            
        <br>
        <!--textbox for discount-->
        <label for="discount">
        Discount @ 5%
        <input type="text" id="discount" name="discount" value="0.00"  readonly/>
        
         <br>
         (- Discount)
        </label>
            
            <br>
            <!--textbox for vat-->
        <label for="vat">
         VAT @ 10%
        <input type="text" id="vat" name="vat" value="0.00"  readonly/>
         
         <!--textbox for the total - discount + vat-->
        </label>
             <br>
         <label for= "total">
        Total
        <input type="text" id="total" name="total" value="0.00"  readonly/>
       
        </br>
        (- discount + VAT)
        </label>
            
        </br>
        <!--button for continueing on to the nect page, disabled until the cost is calculated-->
        <div class="shopping-cart" id="shopping-cart">
        <button   type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
                    </div>
        </form>
            
        <br> 
        <!--button to calculate the cost and enable the purchase button-->
        <div class="calculate-cost" id ="calculate-cost">
              <button onClick="calcSub()" > Calculate Cost</button> 
               </div>
               <br>
               <br>
               <br>
               <br>
        <a role="button" href="Ebus1.php" class="btn btn-success"> Clear Choice</a>
      
      
 </body>
    
 </html>
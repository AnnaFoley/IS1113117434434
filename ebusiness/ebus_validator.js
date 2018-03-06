/* global $*/

function validateDetails(){
    
     var last;
     var name;
    var address;
    var street;
    var county;
    var email;
    var number;
    var town;
    
  
    
 //assigning values to the variables 
    name = document.getElementById('user_name').value;
   email = document.getElementById('user_email').value;
   last = document.getElementById('lastname').value;
   address = document.getElementById('address').value;
   street = document.getElementById('street').value;
   county = document.getElementById('counties').value;
    number = document.getElementById('mobile').value;
    town = document.getElementById('town').value;
   
   
//statement to ensure all details are entered correct before carrying on 
     if (name ==""){
        alert("Please enter your Name");
    }
       
    else if (email ==""){
        alert("Please enter your E-mail Address");
    }
   else  if (last ==""){
        alert("Please enter your last name");
    }
   else if (address ==""){
        alert("Please enter your address");
    }
     else if (street ==""){
        alert("Please enter your street address");
    }
     else if (town ==""){
        alert("Please enter your Town/city");
    }
      else if (county ==""){
    alert("Please enter your county");
    }
       else if (number ==""){
        alert("Please enter your mobile number");
    }

  validatepayment();  
    enablebtnPurchase();
     
 
}

function validatepayment(){
    
    //variables for payment
var pin;
  
    var cardname;
    var cardnumber;
    var expirydate;
    var ccv;


//assigning values to the payment variables
 pin = document.getElementById('user_pin').value;
 
    cardname = document.getElementById('cardname').value;
    cardnumber = document.getElementById('cardnumber').value;
    expirydate = document.getElementById('expiry-date').value;
    ccv = document.getElementById('ccv').value;
   
   
   //if statement to ensure the payment section is completed
      if (pin == ""){
        alert("Please enter your PIN");
        }
        else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        }
     else if (cardname ==""){
        alert("Please enter the name of the card holder ");
    }
     else if (cardnumber ==""){
        alert("Please enter the number of the card");
    }
        else if (String(cardnumber).length<16){
    alert("Please ensure your Card Number is accurate.");
    }
    else if (expirydate ==""){
        alert("Please enter the expiry date on the card");
        }
   else if (ccv ==""){
            alert("Please enter the CCV number on the back of the card");
        }
      else if (String(ccv).length<3){
            alert("Please make sure your CCV number is accurate. It is located on the back of the card");
        }
       enablebtnPurchase();
  
}
        
function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}
function disablebtnPurchase(){
      $('#btnPurchase').prop('disabled',true);
}

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
    var pin;
    var visa;
    var cardname;
    var cardnumber;
    var expirydate;
    var ccv;
  
    
 //assigning values to the variables 
    name = document.getElementById('user_name').value;
   email = document.getElementById('user_email').value;
   last = document.getElementById('lastname').value;
   address = document.getElementById('address').value;
   street = document.getElementById('street').value;
   county = document.getElementById('counties').value;
    number = document.getElementById('mobile').value;
    town = document.getElementById('town').value;
    pin = document.getElementById('user_pin').value;
    visa = document.getElementById('visa').value;
    cardname = document.getElementById('cardname').value;
    cardnumber = document.getElementById('cardnumber').value;
    expirydate = document.getElementById('expiry-date').value;
    ccv = document.getElementById('ccv').value;
   
   
//statement to ensure all details are entered correct before carrying on 
   
     if (name ==""){
        alert("Please enter your Name");
    }
       
    else if (email ==""){
        alert("Please enter your E-mail Address");
    }
    else if (last ==""){
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

    else if (pin == ""){
        alert("Please enter your PIN");
        }
    else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
    }
    else if (visa ==""){
        alert("Please choose a form of payment");
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
    else {
        enablebtnPurchase();
    }
}


function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}
function disablebtnPurchase(){
      $('#btnPurchase').prop('disabled',true);
}

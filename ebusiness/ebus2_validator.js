/* global $ */

function validatebooking(){
 //delcaring variables
 var last;
 var name;
 var address
 var street;
 var county;
   var email;
   var number;
  var town;
   //assigning values to the variables
    name = document.getElementById("user_name").value;
   email= document.getElementById("user_email").value;
   last = document.getElementById("lastname").value;
   address = document.getElementById("address").value;
   street = document.getElementById("street").value;
   county = document.getElementById("counties").value;
 number = document.getElementById("mobile").value;
 town = document.getElementById("town").value
 
 //if statement to ensure all the correct details for billing are filled in
  if (name==""){
        alert("Please enter your Name");
    }
       
    else if (email==""){
        alert("Please enter your E-mail Address");
    }
    else if (last==""){
        alert("Please enter your last name");
    }
    else if (address==""){
        alert("Please enter your address");
    }
    else if (street==""){
        alert("Please enter your street address");
    }
    else if (town==""){
        alert("Please enter your Town/city");
    }
    else if (county==""){
    alert("Please enter your county");
    }
    else if (number==""){
        alert("Please enter your mobile number");
    }
 else {
       enablebtnvalidate();
    }
}
    function enablebtnvalidate(){
     $('#btnvalidate').prop('disabled',false);
}
function validateDetails(){
    var pin;
   
   
//assigning values to the variables 
    pin = document.getElementById("user_pin").value;
       
   
//if statement to ensure all details are entered correct before carrying on 
    if (pin == ""){
        alert("Please enter your PIN");
       
        }
    else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        
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
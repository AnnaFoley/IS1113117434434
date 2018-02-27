/* global $ */

function validateDetails(){
//declaring the variables 
    var pin;
   var name;
     var email;
//assigning values to the variables 
    pin = document.getElementById("user_pin").value;
        name = document.getElementById("user_name").value;
   email= document.getElementById("user_email").value;
   
//if statement to ensure all details are entered correct before carrying on 
    if (pin == ""){
        alert("Please enter your PIN");
       
        }
    else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
       
        }
 
    else if (name==""){
        alert("Please enter your Name");
    }
       
    else if (email==""){
        alert("Please enter your E-mail Address");
        
        
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
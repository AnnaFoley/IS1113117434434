/* global $ */

function validateDetails(){
    
    var pin;
  
    
    pin = document.getElementById("user_pin").value;
    
    if (pin==""){
        alert("Please enter your PIN");
        }
    else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        }
    else{
        enablebtnPurchase();
        }
        
          var name;
    
    name = document.getElementById("user_name").value;
    
    if (name==""){
        alert("Please enter your Name");
    }
        else if (String(name).length<30){
            alert("Name is too long, Please re-enter your name");
        
        }

    else{
        enablebtnPurchase();
        }
        
        
          var email;
    
    email= document.getElementById("user_email").value;
    
    if (email==""){
        alert("Please enter your E-mail Address");
        }
        else if (String(email).length<30){
            alert("Email is too long please re-enter your email")
        }
   
    else{
        enablebtnPurchase();
        }
}

function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}
/* global $ */


function calcSub(){
    
    var argSubTotal;
    //if statement for the salesforce  checkbox to be checked
    if(document.getElementById('salesforce').checked) {
        argSubTotal = 100;
       
    }
    
    if(document.getElementById('aws').checked){
        argSubTotal = 300;
       
    }
    if(document.getElementById('cloud9').checked){
        argSubTotal = 200;
        
    }
    if(document.getElementById('gmail').checked){
        argSubTotal = 400;
        
    }
    
    display(argSubTotal);
     calcDisVatTotal(argSubTotal);

}


function calcDisVatTotal(argSubTotal, parm2, parm3,parm4){
    //calculations for the discount and vat and total 
    
    var argDiscountAmt;
     var argVatAmt;
     var argTotalprice;
     
     //Calculations for the discount
    
    argDiscountAmt = argSubTotal * .05;
    argDiscountAmt = document.getElementById("discount").value;
    argDiscountAmt = parm2;
    display(argDiscountAmt);
    


   //calculations for VAT
    
    argVatAmt = argSubTotal * .1;
    argVatAmt = document.getElementById("vat").value;
    argVatAmt = parm3;
    display(argVatAmt);
    
    //calculations for the total price
    
    argTotalprice = argSubTotal - argDiscountAmt + argVatAmt;
   argTotalprice = document.getElementById("total").value;
   argTotalprice = parm4;
    display(argTotalprice);
}


   
   


 

function display(parm1,parm2,parm3,parm4){
    
    document.getElementById("subtotal").value =parm1;
    document.getElementById("discount").value = parm2;
    document.getElementById("vat").value =parm3;
    document.getElementById("total").value =parm4;
    

    enablebtnProceed();
}



function enablebtnProceed(){
        $('#btnProceed').prop('disabled', false);
    }
    
function disablebtnProceed(){
        $('#btnProceed').prop('disabled', true);
    }

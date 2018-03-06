/* global $ */

//function to calculate the total 
function calcSub(){
    
    var argSubTotal;
    //if statement for the salesforce  checkbox to be checked
    if(document.getElementById('salesforce').checked) {
        argSubTotal = 100;
       
    }
    //if statement for the aws  checkbox to be checked
    if(document.getElementById('aws').checked){
        argSubTotal = 300;
       
    }
    //if statement for the cloud9  checkbox to be checked
    if(document.getElementById('cloud9').checked){
        argSubTotal = 200;
        
    }
    //if statement for the gmail  checkbox to be checked
    if(document.getElementById('gmail').checked){
        argSubTotal = 400;
        
    }
    
    display(argSubTotal);//calling the display function to show the subtotal in the corresponding  textbox 
    calcDisVatTotal(argSubTotal);//calling the last function to finish the calculations

}


function calcDisVatTotal(argSubTotal, parm2, parm3, parm4){
    //calculations for the discount and vat and total 
    
    var argDiscountAmt;
     var argVatAmt;
     var argTotalprice;
     
     //Calculations for the discount
    
    argDiscountAmt = argSubTotal * .05;
     document.getElementById("discount").value;
   
   


   //calculations for VAT
    
    argVatAmt = (argSubTotal -argDiscountAmt) * .1;
    document.getElementById("vat").value;
   
    
    
    //calculations for the total price
    
    argTotalprice = argSubTotal - argDiscountAmt + argVatAmt;// finding the total -discount + vat
        document.getElementById("total").value;
    display(argSubTotal, argDiscountAmt, argVatAmt,argTotalprice);//pass the values to the display function 
    
}

function display(parm1, parm2, parm3, parm4){
   
    document.getElementById("subtotal").value =parm1;//shows subtotal in the subtotal textbox
    document.getElementById("discount").value = parm2;//shows discount in the discount textbox
    document.getElementById("vat").value =parm3;//shows the vat in the vat textbox
    document.getElementById("total").value =parm4; // shows the total in the total textbox
    

    enablebtnProceed();//enabling the proceed button
}


//function to enable the proceed function
function enablebtnProceed(){
        $('#btnProceed').prop('disabled', false);
    }
    //function the disable the proceed function
function disablebtnProceed(){
        $('#btnProceed').prop('disabled', true);
    }

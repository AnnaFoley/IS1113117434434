<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <link rel="Stylesheet" href="Cloud_pages.css" type="text/css"/>
        
        <head>
            <title>RECIEPT</title>
            <?php
            //Set yhe session variables 
                   $_SESSION["user_email"] = $_POST["user_email"];
                   $_SESSION["user_name"] = $_POST["user_name"];
                   $_SESSION["lastname"] = $_POST["lastname"];
                   $_SESSION["address"] = $_POST["address"];
                   $_SESSION["street"] = $_POST["street"];
                   $_SESSION["town"] = $_POST["town"];
                   $_SESSION["counties"] = $_POST["counties"];
                   $_SESSION["mobile"] = $_POST["mobile"];
                   ?>
        </head>
        <body>
                <h1> Thank You for your purchase </h1>
                <h2>Payment Receipt</h2>
              
                <?php
                //Echo session varisbles that were set on the previous page 
                    echo " First Name " . $_SESSION["user_name"] . "</br>";
                    echo "Last Name " . $_SESSION["lastname"] . "<br/>";
                    echo "Address " . $_SESSION["address"] . "<br/>";
                    echo "        " . $_SESSION["street"] . "<br/>";
                    echo "         " . $_SESSION["town"] . "<br/>";
                    echo "        " . $_SESSION["counties"] . "</br>";
                    echo "Mobile Number" . $_SESSION["mobile"] . "<br/>";
                    echo "E-mail " . $_SESSION["user_email"] . "</br>";
                    echo " The Total is " . $_SESSION["total"] . "</br>";
 
                ?>
        </body>
    
</html>
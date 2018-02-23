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
                   ?>
        </head>
        <body>
                <h1> Payment Receipt</h1>
              
                <?php
                //Echo session varisbles that were set on the previous page 
                    echo "Name " . $_SESSION["user_name"] . "</br>";
                    echo "E-mail " . $_SESSION["user_email"] . "</br>";
                    echo " The Total is " . $_SESSION["total"] . "</br>";
            
                ?>
        </body>
    
</html>
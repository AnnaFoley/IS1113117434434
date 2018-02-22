<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <link rel="Stylesheet" href="Cloud_pages.css" type="text/css"/>
        
        <head>
            <title>RECIEPT</title>
        </head>
        <body>
                <h1>RECEIPT</h1>
                
                <?php
                //Echo session variables that were set on previous page
                echo "Name is " . $_SESSION["user_name"] . ".";
             ?>
             
             </br>
             
             <?php
              echo "E-mail address  is " . $_SESSION["user_email"] . ".";
             ?>
             
             </br>
             
             <?php
                echo " The Total is " . $_SESSION["total"] . ".";
                ?>
        </body>
    
</html>
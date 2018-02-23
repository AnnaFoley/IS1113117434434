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
                  
                 $_SESSION["user_name"] = $_POST["user_name"];
                 $_SESSION["user_email"] = $_POST["user_email"];
                   ?>
                    
                <?php
                   
                    echo "Name is " . $_SESSION["user_name"] . "</br>";
                    echo "E-mail address  is " . $_SESSION["user_email"] . "</br>";
                    echo " The Total is " . $_SESSION["total"] . "</br>";
                ?>
        </body>
    
</html>
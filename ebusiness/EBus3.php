<?php

session_start();
?>

<!DOCTYPE html>
<html>
    <link rel="Stylesheet" href="../mystylesheet.css" type="text/css"/>
        
        <head>
            <title>RECIEPT</title>
        </head>
        <body>
                <h4>RECEIPT</h4>
                
                <?php
                //Echo session variables that were set on previous page
                echo "Total is " . $_SESSION["total"] . ".";
                ?>
        </body>
    
</html>
<?php
session_start();
$_SESSION['card'] = $_POST['cc_number'];
include 'test_input.php';
$card = test_input($_SESSION['card']);

include 'cc_confirmation.php';


?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Thanks</title>
    </head>

    <body>
        <p>
            <?php echo cc_confirmation($card);?>
            
        </p>
    </body>
</html>


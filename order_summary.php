<?php
session_start();
$_SESSION['it'] = $_POST['item'];
$prices = ["Corn" => 4.99, "Fig" => 10.99, "Grapefruit" => 1.99];
$item = $_SESSION['it'];
$price = $prices[$item];
$quantity = $_POST['quantity'];
$total = $price * $quantity;
$_SESSION['total'] = $total;
echo "Your total is $$total";
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Order Summary</title>
    </head>

    <body>
        <form method="post" action="tax_calcuation.php">
            <p>
                Click next to head to the Tax Calculation Page
            </p>
            
            <p>
                <input type="submit" name="next" value="Next &gt;">
            </p>
        </form>
    </body>
</html>
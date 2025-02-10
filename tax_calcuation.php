<?php
session_start();
$total = $_SESSION['total'];
$tax_rate = 0.045;
$tax_amount = $total * $tax_rate;
$tax_total = $total + ($total * $tax_rate);
echo "Total before tax is $$total";
echo"<br>";
echo "Tax added: $" . number_format($tax_amount, 2);
echo"<br>";
echo "Your total with tax is $" . number_format($tax_total, 2);
echo"<br>";
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tax Calculation</title>
    </head>

    <body>

        <form method="post" action="checkout.php">
            <p>
                Proceed to Checkout
            </p>
            
            <p>
                <input type="submit" name="next" value="Checkout">
            </p>
        </form>
    </body>
</html>
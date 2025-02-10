<?php
session_start();
$_SESSION['card'] = $_POST['cc_number'];
$card = $_SESSION['card'];

function cc_confirmation($card) {
    $card_length = strlen($card);
    $first_digit = $card[0];
    $first_two_digits = $card[0] . $card[1];
    if ($first_two_digits >= "51" && $first_two_digits <= 55 && $card_length == 16) {
        echo "Thanks for your purchase";
    } elseif ($first_digit == "4" && $card_length == 16) {
        echo "Thanks for your purchase";
    } elseif ($first_two_digits == "34" && $card_length == 15) {
        echo "Thanks for your purchase";
    } else {
        echo "Card number is invalid. Please try again by clicking backspace.";
    }
}
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


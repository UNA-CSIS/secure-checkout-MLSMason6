<?php
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
        echo '<a href="index.php"><button>Go back to the Home Page</button</a>';
    } else {
        echo "Card number is invalid. Click the back arrow in the top-left corner. ";
    }
}
?>

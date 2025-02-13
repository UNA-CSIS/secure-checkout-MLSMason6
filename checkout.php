<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Checkout</title>
    </head>

    <body>
        <?php
        include 'test_input.php';
        $usr = test_input($_POST["name"]); 
        $pwd = test_input($_POST["pwd"]);
         

        if ($usr == $pwd) {
            echo "Welcome " . $usr;
            echo "<br>";
            if (isset ($_POST["remember"]) && test_input($_POST["remember"] == "ON")) {
               echo " Login was remembered"; 
            } else {
                echo "Login was not remembered";
            }
        } else {
            echo "wrong username or password<br>";
            echo '<a href="index.php"><button>Go back</button</a>';
            exit();
        }
        ?>
        <form method="post" action="thanks.php">
            <p>
                Enter Your Credit Card Number
            </p>

            <p>
                <input type="text" name="cc_number" id="cc_number" required>
            </p>

            <p>
                <input type="submit" name="next" value="Checkout">
            </p>
        </form>
    </body>
</html>
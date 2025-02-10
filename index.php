<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Item Selection</title>
    </head>

    <body>
        <form method="post" action="order_summary.php">
            <p>
                <label for="item">Select an Item:</label>
                <select name="item" id="item" required>
                    <option value="" selected>Please Select</option>
                    <option value="Corn">Corn: $4.99</option>
                    <option value="Fig">Fig: $10.99 per pound </option>
                    <option value="Grapefruit">Grapefruit: $1.99</option>

                </select>
            </p>
            
            <p>
                <label for="quantity">How many would you like?</label>
                <input type="number" name="quantity" id="quantity">
            </p>

            <p>
                <input type="submit" name="next" value="Next &gt;">
            </p>
        </form>
    </body>
</html>
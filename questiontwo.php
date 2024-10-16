<!DOCTYPE html>
<html>
<head>
    <title>Simple Adder Challenge</title>
</head>
<body>
    <?php
        if (isset($_POST['submit'])) {
            $num1 = $_POST['number1'];
            $num2 = $_POST['number2'];
            $sum = $num1 + $num2;
            echo "You entered numbers $num1 and $num2.<br />";
            echo "They add up to $sum.";
        }
    ?>
    <form method="post">
        Enter first number: <input type="number" name="number1" required><br>
        Enter second number: <input type="number" name="number2" required><br>
        <input type="submit" name="submit" value="Add Numbers">
    </form>
</body>
</html>
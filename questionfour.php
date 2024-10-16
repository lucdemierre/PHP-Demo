<!DOCTYPE html>
<html>
<head>
    <title>Average Calculator Challenge</title>
</head>
<body>
    <?php
        if (isset($_POST['submit'])) {
            $numbers = explode(',', $_POST['numbers']);
            $total = array_sum($numbers);
            $count = count($numbers);
            $average = $total / $count;
            echo "Total: $total<br />";
            echo "Average: $average";
        }
    ?>
    <form method="post">
        Enter numbers to be averaged, separated by commas: <input type="text" name="numbers" required><br>
        <input type="submit" name="submit" value="Calculate Average">
    </form>
</body>
</html>
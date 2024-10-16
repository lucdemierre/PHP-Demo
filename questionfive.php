<!DOCTYPE html>
<html>
<head>
    <title>Compound Interest Challenge</title>
</head>
<body>
    <?php
        if (isset($_POST['submit'])) {
            $balance = $_POST['balance'];
            $rate = $_POST['rate'];
            $goal = $_POST['goal'];
            $year = 1;

            while ($balance < $goal) {
                $balance += $balance * $rate;
                echo "Year $year: New balance = $balance<br />";
                $year++;
            }
        }
    ?>
    <form method="post">
        Current balance: <input type="number" name="balance" required><br>
        Interest rate (e.g. 0.04 for 4%): <input type="number" step="0.01" name="rate" required><br>
        Desired balance: <input type="number" name="goal" required><br>
        <input type="submit" name="submit" value="Calculate Compound Interest">
    </form>
</body>
</html>
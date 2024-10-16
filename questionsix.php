<!DOCTYPE html>
<html>
<head>
    <title>Text Dice Challenge</title>
</head>
<body>
    <?php
        $numbers = ['one', 'two', 'three', 'four', 'five', 'six'];
        $randomNumber = $numbers[array_rand($numbers)];
        echo "You rolled: $randomNumber";
    ?>
</body>
</html>
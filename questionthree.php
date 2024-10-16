<!DOCTYPE html>
<html>
<head>
    <title>Portfolio Grade Challenge</title>
</head>
<body>
    <?php
        if (isset($_POST['submit'])) {
            $grades = array(0 => 'U', 4 => 'G', 13 => 'F', 22 => 'E', 31 => 'D', 41 => 'C', 54 => 'B', 67 => 'A', 80 => 'A*');
            $sections = array('Analysis', 'Design', 'Implementation', 'Evaluation');
            $total = 0;

            foreach ($sections as $section) {
                $mark = (int)$_POST[strtolower($section)];
                $total += $mark;
            }

            $grade = '';
            foreach ($grades as $key => $value) {
                if ($total >= $key) {
                    $grade = $value;
                } else {
                    break;
                }
            }

            $next_band = min(array_keys($grades, $grade, true)) + 1;
            $needed_marks = $next_band - $total;

            echo "Total marks: $total<br />";
            echo "Grade: $grade<br />";
            if ($needed_marks > 0) {
                echo "You need $needed_marks more marks to reach the next grade band.";
            } else {
                echo "You are at the highest grade band.";
            }
        }
    ?>
    <form method="post">
        <?php
            foreach (['Analysis', 'Design', 'Implementation', 'Evaluation'] as $section) {
                echo "$section: <input type='number' name='" . strtolower($section) . "' required><br />";
            }
        ?>
        <input type="submit" name="submit" value="Calculate Grade">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h3>Write a PHP code for sorting an array entered by user. </h3>



  <?php
    if (isset($_GET['numbers'])) {
        $input = trim($_GET['numbers']);
        if ($input !== '') {
            $numbers = array_map('trim', explode(',', $input));
            $numbers = array_filter($numbers, 'strlen');
            $numbers = array_map('floatval', $numbers);
            sort($numbers, SORT_NUMERIC);
            echo '<p>Sorted numbers: ' . implode(', ', $numbers) . '</p>';
        }
    }
?>
    <form method="get" action="">
        <label for="numbers">Enter numbers (comma separated):</label>
        <input type="text" id="numbers" name="numbers" required><br><br>

        <input type="submit" value="Sort">  
    </form>


</body>
</html>
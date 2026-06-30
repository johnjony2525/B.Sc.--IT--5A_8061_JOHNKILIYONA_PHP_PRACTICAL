<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>2. Write a PHP code for sorting an array entered by user.</h2>
    <form method="post">
        <label for="array">Enter array elements (comma-separated):</label>
        <input type="text" id="array" name="array" required>
        <br><br>
        <input type="submit" value="Sort Array">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["array"];
        $array = explode(",", $input);
        $array = array_map('trim', $array); // Remove whitespace
        sort($array);
        echo "<h3>Sorted Array:</h3>";
        echo "<p>" . implode(", ", $array) . "</p>";
    }
    ?>
</body>
</html>
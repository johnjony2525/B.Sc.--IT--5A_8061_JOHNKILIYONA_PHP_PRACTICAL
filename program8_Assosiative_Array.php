<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><h1>Associative Array</h1>
    <?php
    $ages = array("Alice" => 25, "Bob" => 30, "Charlie" => 35);
    echo "Associative Array: ";
    foreach ($ages as $name => $age) {
        echo "$name is $age years old. ";
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merge Array</title>
</head>
<body>
    <h1>Merge Array</h1>

    <?php
    $array1 = array("a" => "Apple", "b" => "Banana");
    $array2 = array("c" => "Cherry", "d" => "Date");

    $merged_array = array_merge($array1, $array2);

    echo "Merged Array:<br>";

    foreach ($merged_array as $key => $value) {
        echo "$key : $value <br>";
    }
    ?>

</body>
</html>
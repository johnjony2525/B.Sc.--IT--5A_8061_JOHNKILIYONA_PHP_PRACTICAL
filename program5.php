<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php program to print 5 to 10 using for and foreach <form action=""></form></title>
</head>
<body>
    <?php
    // Using for loop to print numbers from 5 to 10
    echo "Using for loop: ";
    for ($i = 5; $i <= 10; $i++) {
        echo $i . " ";
    }
    
    echo "<br>";

    // Using foreach loop to print numbers from 5 to 10
    echo "Using foreach loop: ";
    $numbers = range(5, 10); // Create an array of numbers from 5 to 10
    foreach ($numbers as $number) {
        echo $number . " ";
    }
    ?>


</body>
</html>
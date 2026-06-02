<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php program to print 15 to 20 using while and Do while</title>
</head>
<body>
    <?php
    // Using while loop to print numbers from 15 to 20
    echo "Using while loop: ";
    $i = 15;
    while ($i <= 20) {
        echo $i . " ";
        $i++;
    }
    
    
      echo "<br>";
      echo "<br>";
      echo "<br>";



    // Using do-while loop to print numbers from 15 to 20
    echo "Using do-while loop: ";
    $j = 15;
    do {
        echo $j . " ";
        $j++;
    } while ($j <= 20);
    ?>
</body>
</html>
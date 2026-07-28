<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = new PDO("msql:host=localhost;dbname=studentdb","root","");
        $sql = "DELETE FROM students4 WEHRE id = 3";
        $conn->exec($sql);
        echo "Record Deleted Succeessfully.";
    ?>
</body>
</html>
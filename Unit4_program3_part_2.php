<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php 
    $conn = new PDO("mysql:host=localhost;dbname=studentdb", "root", "");
      $sql = "INSERT INTO students4(name, email, city)
      VALUE('Tirth', 'tirth@gmail.com', 'Rajkot')";

      $conn->exec($sql);
      echo "Record Inserted Successfully";
      ?>
</body>
</html>
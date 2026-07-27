<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
        $conn = new mysqli("localhost", "", "studentdb");
        $sql = "INSERT INTO studentc3(name, email, city)
        VALUE ('Tirth', 'tirth@gmail.com', 'Rajkot')";
        if(maqli_query($sql)){
            echo "Record Inserted Successfully";
        }
         else{
            echo "Error";
         }

      ?>
</body>
</html>
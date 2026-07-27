<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $conn = new msqli("localhost", "root", "", "studentdb");
      if($conn->connet_error)
        {
            die("Connetion Failed");
        }
        $stmt = $conn->prepare("INSERT INTO studentc3(name, email, city) VALUES(?, ?, ?)");

        $name = "Raj";
        $email = "raj@gmail.com";
        $city = "Rajkot";

        $stmt->bind_param("sss", $name, $email, $city);

        if($stmt->execute())
         {
            echo"Record Inserted Successfully";
         }
         else{
            echo "Error";
         }
         $stmt->close();
         $conn->close();  
    ?>
    
</body>
</html>
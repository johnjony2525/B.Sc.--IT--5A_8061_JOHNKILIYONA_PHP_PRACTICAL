<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         
      $conn = new mysqli("localhost", "root", "", "studentdb);
      if ($conn->connect_error) {
          die("Connection Failed");
      }
      $sql = "SELECT * FROM students3";
      $result = $conn->query($sql);
      
      if($result->num_row > 0)
      {
        while($row = $result->fectch_assoc())
        {
          echo "ID:" .$row["id"] ."<br>";
          echo "Name:" .$row["Name"] ."<br>";
          echo "Email:" .$row["Email"] ."<br>";
          echo "City:" .$row["City"] ."<br>";
        }
      }
       else
        {
           echo "No Records Found.";
        }
        $conn->close(); 
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

         $conn = new mysqli("localhost:3307", "root", "test");
         if ($conn->connect_error){
            die( "Connect Failed :" . $conn->connect_error);
         }
         $queries = [

              "SELECT HOUR(NOW()) AS Hour",
              "SELECT MINUTE(NOW()) AS Minute",
              "SELECT SECOND(NOW()) AS Second",
              "SELECT DATE_FORMAT(NOW(), '%D-%m-%Y%H:%i:%s') As Formatting_Date",
              " SELECT DATE_SUB(CURDATE(), INTERVAL 10 DAY)
              AS Date_Subtract",
              "SELECT DATE_ADD(CURDATE(), INTERVAL 10 DAY)
              AS Date_ADD"



         ];           




        foreach($queries as $sql){

            echo "<br>";
              $result = $conn-> query($sql);
              if ($result){

                while($row = $result-> fetch_assoc()){

                   foreach($row as $key => $valu){
                    echo "<b>$key :</b> $value <br>";
                   }
                }
              }

              else{


                  echo"query Error";
              }

    } 
    ?>    
</body>
</html>
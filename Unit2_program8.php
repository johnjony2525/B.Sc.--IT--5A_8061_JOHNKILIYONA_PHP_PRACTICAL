<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

         $con = new mysqli("localhost", "root", "test");
         if ($conn->connect_error){
            die( "Connect Failed :" . $conn->connect_error);
         }
         $queries = [
            "SELECT "

                                          

              


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






       
</body>
</html>
      
</body>
</html>
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

              "SELECT LENGTH('Hello PHP') AS Result",
              "SELECT CONCAT('Hello', '', 'PHP') AS Result",
              "SELECT CONCAT_WS('-', 'PHP', 'MYSQL', 'HTML') AS Result",
              "SELECT TRIM('   HELLO PHP  ') AS Trimmed,
                       LTRIM('  hello PHP') AS LTrimmed,
                       RTRIM('hello PHP  ') AS RTrimmed",
               "SELECT LPAD('PHP', '8','*') AS LPAD,
                       RPAD('PHP', '8','*') AS RPAD,
                       LOCATE('SQL', 'MYSQL DATABASE') AS LOCATE",
                "SELECT SUBSTR('hELLO PHP', 1 ,5) AS SUBString,
                        STSATR('HELLO PHP', 1, 5) AS strstr",
                 "SELECT LCASE ('hELLO PHP ') AS lowercase,
                         UCASE('Hello php') AS uppercase",
                  "SELECT REPEAT('PHP', 3) AS repeatstring,
                          REPLACE('i love java', 'java', 'php') AS Replecstring"                             

              


         ]            




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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="get">
  <input type="text" name="uname[0]"><br><br>
  <input type="text" name="uname[1]"><br><br>
  <input type="text" name="uname[2]"><br><br>


  <input type= "submit" vAlue="Add">
</form>
</body>
</html>

<?php
  $nm = $_GET['uname'];
  echo "<h3> Enter Value:</h3>";
  foreach($mn as $val){
    echo $val . "<br>";
  }

  ?>
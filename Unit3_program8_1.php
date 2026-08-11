<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      if (isset($_COOKIE["username"])) 
     {
        echo "<p2>Welcome Back</p>";
        echo "You are a new repeater user.";
      }
      else
      {
        
        setcookie("username", "google", time() + (24 * 24 * 60 * 60), "/"); 
        
        echo "<p2>Welcome New User!</p2>";
        echo "You are a new user.";
       }  
    ?>   
</body>
</html>
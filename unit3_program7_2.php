<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "logindb");
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users
          WHERE username='$username'
          AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0)
         {
        $_SESSION['username'] = $username;
        header("Location: itu3p56_3Homep");
        exit();
    } else {
        echo "<h1> Invalid username or password </h1>";
        echo "<br> <a href='itu3p56_1session.html'> GO TO BACK </a>";
    }
    $conn->close();
   ?>
</body>
</html>
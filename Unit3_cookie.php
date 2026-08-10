<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <center>
        <?php
            // create
            if(isset($_POST['create']))
            {
                $username = $_POST['username'];
                setcookie("username",$username,time()+(24*60*60),"/");
                echo "<h3>Cookie Created Successfully.</h3>";
            }

            // read
            if(isset($_POST['read']))
            {
                if(isset($_COOKIE['username']))
                {
                    echo "<h3>Cookie Value : ".$_COOKIE['username']."</h3>";
                }
                else
                {
                    echo "<h3>Cookie Not Found.</h3>";
                }
            }

            // delete
            if(isset($_POST['delete']))
            {
                setcookie("username","",time()-3600,"/");
                echo "<h3>Cookie Deleted Successfully.</h3>";
            }

            // header
            if(isset($_POST['header']))
            {
                $username = $_POST['username'];
                setcookie("username",$username,time()+(24*60*60),"/");
                header("Location: itu3p14_3Home.php");
                exit();
            }
    
            echo "<br> <a href='itu3p14_1Cookie.html'> Go To Back </a>";
        ?>
        </center>
    </body>
</html>
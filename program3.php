<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><h4>Operators</h4></title>
</head>
<body>
    <?php
         echo"<h3>Arithmatic Operators</h3>";

         $num1=20;
         $num2=19;

         $a=$num1+$num1;
         $b=$num1-$num2;
         $c=$num1*$num2;
         $d=$a/$c;
         $E=$a%$b;
         $F=$d**$b;
          
         echo"<br>".$a;
         echo"<br>".$b;
         echo"<br>".$c;
         echo"<br>".$d;
         echo"<br>".$E;
         echo"<br>".$F;

         echo"<h3>Assignment Operators</h3>";

            $num3=10;
            $num3 += 5;
            echo"<br>".$num3;
            $num3 -= 5;
            echo"<br>".$num3;
            $num3 *= 5;
            echo"<br>".$num3;
            $num3 /= 5;
            echo"<br>".$num3;
            $num3 %= 5;

            echo"<br>".$num3;
            $num3 **= 5;
            echo"<br>".$num3;


           echo"<h3>Comparison Operators</h3>";
              $num4=10;
              $num5=20;
                echo"<br>".($num4==$num5);
                echo"<br>".($num4!=$num5);
                echo"<br>".($num4>$num5);
                
        

    ?>
    
</body>
</html>
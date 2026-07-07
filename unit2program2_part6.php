<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
      <form method="post" action="">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2">Number 2:</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <label for="op">Operator:</label>
        <select name="op" id="op" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br><br>

        <input type="submit" name="submit" value="Calculate">
     

     <?php 
           function calculate($num1, $num2, $op)  {

              switch($op) {
                  case '+':
                      return $num1 + $num2;
                  case '-':
                      return $num1 - $num2;
                  case '*':
                      return $num1 * $num2;
                  case '/':
                      return $num2 != 0 ? $num1 / $num2 : "Can not divide by zero ";


                  default:
                      return "Invalid operator";
              }

           }
           if (isset($_POST['submit'])) {
               $n1 = $_POST['num1'];
               $n2 = $_POST['num2'];
               $op = $_POST['operation'];

               $result = calculate($n1, $n2, $op);
               echo "<h3>Result:  $result</h3>";
           }


   ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h3>Multidimensional Array for Laptops for any two caompanies and `take them from user as a form and sore them in Array</h3>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES); ?>">
        <label for="company1">Company 1:</label>
        <input type="text" id="company1" name="company1" required><br><br>

        <label for="laptop1">Laptop Model 1:</label>
        <input type="text" id="laptop1" name="laptop1" required><br><br>

        <label for="company2">Company 2:</label>
        <input type="text" id="company2" name="company2" required><br><br>

        <label for="laptop2">Laptop Model 2:</label>
        <input type="text" id="laptop2" name="laptop2" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $company1 = $_POST['company1'];
        $laptop1 = $_POST['laptop1'];
        $company2 = $_POST['company2'];
        $laptop2 = $_POST['laptop2'];

        $laptops = array(
            $company1 => $laptop1,
            $company2 => $laptop2
        );

        echo "<h3>Laptops Information:</h3>";
        foreach ($laptops as $company => $model) {
            echo "Company: " . htmlspecialchars($company) . " - Laptop Model: " . htmlspecialchars($model) . "<br>";
        }
    }
    ?>

</body>

</html>
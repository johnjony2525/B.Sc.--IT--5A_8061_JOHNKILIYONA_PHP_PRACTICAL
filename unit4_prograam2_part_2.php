<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student Table</title>
</head>
<body>

<?php
try {
    // Database connection
    $conn = new PDO("mysql:host=localhost;dbname=studentdb", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL query to create table
    $sql = "CREATE TABLE IF NOT EXISTS student (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50),
        email VARCHAR(50),
        city VARCHAR(30)
    )";

    // Execute query
    $conn->exec($sql);

    echo "Table created successfully.";
}
catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}

// Close connection
$conn = null;
?>

</body>
</html>
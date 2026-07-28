<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
</head>
<body>

<?php
$conn = new mysqli("localhost", "root", "", "studentdb");

// Check connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
$sql = "UPDATE students3
        SET name='Suratty',
            email='su@gmail.com',
            city='Juba'
        WHERE id=3";
if ($conn->query($sql) === TRUE) {
    echo "Record Updated Successfully.";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();

?>

</body>
</html>
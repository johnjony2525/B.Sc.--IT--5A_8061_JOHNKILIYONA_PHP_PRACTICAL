<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array Functions</title>
</head>
<body>
<?php
$numbers = array(1, 2, 3, 4, 5);
$names = array("JOHN", "JAMES", "JENNY", "JANE");
$names1 = array("john", "kiliyona", "dokolo", "walla");

// 1. array_change_key_case()
$result = array_change_key_case($names, CASE_LOWER);
echo "<h3>array_change_key_case()</h3>";
print_r($result);
echo "<br><br>";

// 2. array_chunk()
$result = array_chunk($names, 2);
echo "<h3>array_chunk()</h3>";
print_r($result);
echo "<br><br>";

// 3. array_count_values()
$result = array_count_values($numbers);
echo "<h3>array_count_values()</h3>";
print_r($result);
echo "<br><br>";

// 4. array_combine()
$result = array_combine($names1, $names);
echo "<h3>array_combine()</h3>";
print_r($result);
echo "<br><br>";

// 5. array_pop()
array_pop($names);
echo "<h3>array_pop()</h3>";
print_r($names);
echo "<br><br>";

// 6. array_push()
array_push($names, "MARY");
echo "<h3>array_push()</h3>";
print_r($names);
echo "<br><br>";

// 7. array_unshift()
array_unshift($names, "PAUL");
echo "<h3>array_unshift()</h3>";
print_r($names);
echo "<br><br>";

// 8. array_shift()
array_shift($names);
echo "<h3>array_shift()</h3>";
print_r($names);
echo "<br><br>";

?>
  
</body>
</html>
    

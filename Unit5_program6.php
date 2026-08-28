<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>

    <script>
        function checkPassword() {
            let password = document.getElementById("password").value;
            let strength = document.getElementById("strength");

            if (password.length < 6) {
                strength.innerHTML = "Weak";
            } 
            else if (password.length < 8) {
                strength.innerHTML = "Medium";
            } 
            else {
                strength.innerHTML = "Strong";
            }
        }

        function validateForm() {
            let password = document.getElementById("password").value;

            if (password.length < 6) {
                alert("Password must be at least 6 characters");
                return false;
            }

            return true;
        }
    </script>
</head>

<body>

<h2>Registration Form</h2>

<form method="post" onsubmit="return validateForm()">

    Name:
    <input type="text" name="name" required>
    <br><br>

    Email:
    <input type="email" name="email" required>
    <br><br>

    Password:
    <input type="password" id="password" name="password"
           onkeyup="checkPassword()" required>
    <br>

    Strength: <span id="strength"></span>

    <br><br>

    <input type="submit" name="register" value="Register">

</form>

<?php
if (isset($_POST["register"])) {
    echo "Registration Successful";
}
?>

</body>
</html>
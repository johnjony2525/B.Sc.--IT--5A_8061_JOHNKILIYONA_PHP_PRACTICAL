
<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example</title>

    <script>
        function storeCookie() {
            var value = document.getElementById("value").value;

            if (value == "") {
                alert("Please enter a value.");
                return;
            }

            document.cookie = "myValue=" + encodeURIComponent(value) + "; max-age=86400; path=/";

            alert("Value stored in cookie successfully!");
        }

        // Function to retrieve value from cookie
        function retrieveCookie() {
            var cookies = document.cookie.split("; ");
            var value = "";

            for (var i = 0; i < cookies.length; i++) {
                var cookie = cookies[i].split("=");

                if (cookie[0] == "myValue") {
                    value = decodeURIComponent(cookie[1]);
                    break;
                }
            }

            if (value != "") {
                document.getElementById("result").innerHTML =
                    "Retrieved Value: " + value;
            } else {
                document.getElementById("result").innerHTML =
                    "No value found in cookie.";
            }
        }
    </script>
</head>

<body>

    <h2>Store and Retrieve Value Using Cookie</h2>

    <label>Enter any value:</label>
    <input type="text" id="value">

    <br><br>

    <button onclick="storeCookie()">Store Cookie</button>
    <button onclick="retrieveCookie()">Retrieve Cookie</button>

    <p id="result"></p>

</body>
</html>


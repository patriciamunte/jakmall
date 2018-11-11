<!DOCTYPE html>
<html>

<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jakmall";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, order_number FROM prepaid_balances  ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        echo "<br> Order Number: ". $row["order_number"]. " 
    }

$conn->close();
?> 

</body>
</html>

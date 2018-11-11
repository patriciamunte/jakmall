<!DOCTYPE html>
<html>
<head>
<style>
.content {
    max-width: 500px;
    margin: auto;
    margin-top: 50px;
}
.h2{
	margin: 250px auto;
	width: 400px;
	padding: 10px;
	border: 1px solid;
	border-color: black;
}
</style>
</head>
<body>
<div class="content">
<div class="h2">
<center>
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

$sql = "SELECT id, order_number, value, persen, total, mobile_phone FROM prepaid_balances  ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo "<br> Your Order Number
        <br>". $row["order_number"]. " <br>
        <br>Total
        <br>". $row["total"]. " <br>
        <br>Your Mobile Phone Number " . $row["mobile_phone"] . " will be topped up for ". $row["value"]. " after you pay <br>";
    }

$conn->close();
?> 
<br><button onclick="window.location.href='/payment'">Pay Here</button>
</center>
</div>
</div>
</body>
</html>
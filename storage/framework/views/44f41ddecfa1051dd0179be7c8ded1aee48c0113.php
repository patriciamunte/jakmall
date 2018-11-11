<!DOCTYPE html>
<html>
<head>
	<style>
.content {
    max-width: 500px;
    margin: auto;
    margin-top: 20px;
}
.h2{
	margin: 100px auto;
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
<form method="post" action="<?php echo e(url('payments')); ?>">
                <?php echo e(csrf_field()); ?>

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

        echo "<br> Order Number ". $row["order_number"]. " 
       
        ";
    }

$conn->close();
?>
<br><br><center>
<input type="submit"></center>
</form>
</div>
</div>
</body>
</html>

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
input[type=email], input[type=password]{
	margin: 5px auto;
	width: 60%;
	padding: 8px;
}
button[type=submit]{
		margin: -5px auto;
		padding: 5px;
		width: 120px;
		border: 1px solid;
		border-color: black;
		cursor: pointer;
}
</style>
</head>
<body>
<div class="content">
<div class="h2">
 <form method="post" action="<?php echo e(url('users')); ?>">
                <?php echo e(csrf_field()); ?>

Email &nbsp &nbsp &nbsp <input type="Email" name="email" ><br><br>
Password <input type="password" name="password" minlength="6"><br><br>
<br><br><center>
<button type="submit">Login</button><br>
<br><center>or</center>
<br><center><a href="/register">Register</a></center>
</form>
</div>
</div>
</body>
</html>
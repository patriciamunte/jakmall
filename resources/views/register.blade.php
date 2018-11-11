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
input[type=email], input[type=password], input[type=text]{
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
 <form method="post" action="{{url('users')}}">
                {{ csrf_field() }}
Email &nbsp &nbsp &nbsp <input type="Email" name="email" ><br><br>
Name &nbsp &nbsp&nbsp&nbsp&nbsp<input type="text" name="name"> <br><br>
Password <input type="password" name="password" minlength="6"><br><br>
<br><br><center>
<button type="submit" href="/register">Register</button><br>
<br><center>or</center>
<br><center><a href="/">Login</a></center>
</form>
</div>
</div>
</body>
</html>
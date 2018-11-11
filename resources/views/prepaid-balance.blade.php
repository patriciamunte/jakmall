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
input[type=text], select[name=value]{
	margin: 5px auto;
	width: 60%;
	padding: 8px;
}
input[type=submit]{
		margin: -5px auto;
		float: right;
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
 <form method="post" action="{{url('prepaid')}}">
                {{ csrf_field() }}
Mobile Phone Number <input type="text" name="mobile_phone" minlength="7" maxlength="12"><br><br>
Value &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp	<select name="value">
<option value ="10000">10000</option>
<option value ="50000">50000</option>
<option value ="100000">100000</option>
</select>
<br><br>
<input type="submit">
</form>
</div>
</div>
</body>
</html>
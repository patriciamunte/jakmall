<html>
<body>
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
textarea[name=product], textarea[name=address], input[type=text]{
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
<div class="content">
<div class="h2">

 <form method="post" action="{{url('products')}}">
                {{ csrf_field() }}
Product :<br>
<textarea name="product" rows ="5" cols="30" minlength="10" maxlength="150"></textarea><br>
<br>Shipping Address :<br>
<textarea name="address" rows ="5" cols="30" minlength="10" maxlength="150"></textarea><br>
<br>Price <input type="text" name="price">
<br><br>
<input type="submit">
</form>
</div>
</div>
</body>
</html>
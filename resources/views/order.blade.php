<html>
<head>	
	<style>
#order {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#order td, #order th {
    border: 1px solid #ddd;
    padding: 8px;
}

#order tr:nth-child(even){background-color: #f2f2f2;}

#order tr:hover {background-color: #ddd;}

#order th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
	<table id="order">
							<tr>
								<th>Order Number</th>
								<th>Description</th>
								<th>Total</th>
								<th>Information</th>
							</tr>
							@foreach($Orderan as $orders)
							<tr>
								<td>{{$orders->order_number}}</td>
								<td>{{$orders->description}}</td>
								<td>{{$orders->total}}</td>
								
								<td>
							</tr>
							@endforeach
	</table>	

	</html>
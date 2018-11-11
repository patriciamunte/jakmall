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
							<?php $__currentLoopData = $Orderan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($orders->order_number); ?></td>
								<td><?php echo e($orders->description); ?></td>
								<td><?php echo e($orders->total); ?></td>
								
								<td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>	

	</html>
<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>
<div class="container">

	<h1 class="page-header text-center">ORDER PLACED</h1>
	<table class="table table-striped table-bordered">
		<thead>
			<th>Date</th>
			<th>Customer</th>
			<th>Total Sales</th>
			<th>Details</th>
			<th>Delivery Location</th>
			
		</thead>
		<tbody>
			<?php 
				$sql="select * 
				from purchase 
				order by purchaseid desc limit 1";
				
				$query=$conn->query($sql);
				while($row=$query->fetch_assoc()){
					?>
					<tr>
						<td><?php echo date('M d, Y h:i A', strtotime($row['date_purchase'])) ?></td>
						<td><?php echo $row['customer']; ?></td>
						<td class="text-right">KZT <?php echo number_format($row['total'], 2); ?></td>
						<td width="200px"> <a href="#details<?php echo $row['purchaseid']; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> View Sales Details</a>	
						<?php include('sales_modal.php'); ?>	
						<td width="200px"> <a href="#adddetails<?php echo $row['purchaseid']; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> View Address Deliver</a>	
						<?php include('sales_add.php'); ?>	
							</td>

						
						
					</tr>


					<?php
				}
			?>
		</tbody>
			
					<tr>
						

						
					</tr>
					
<tr>
						
						
					</tr>

					<?php
				
			?>
		
	</table>
</div>
</body>
</html>
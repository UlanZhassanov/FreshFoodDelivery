<?php include('header.php'); ?>
<body>
<?php include('navbaradmin.php'); ?>
<div class="container">
	<h1 class="page-header text-center">Delivery Status</h1>
	<table class="table table-striped table-bordered">
		<thead>
			<th>Latitude</th>
			<th>Longitude</th>
			<th>Address</th>
			<th>Order Status</th>
			<th>Taken By</th>

		</thead>
		<tbody>
			<?php 
				$sql="select * 
				from locations l JOIN registerstaff r
				ON(l.staffid = r.id ) 
				order by location_status";
				$query=$conn->query($sql);
				while($row=$query->fetch_array()){
					?>
					<tr>
						
						<td><?php echo $row['lat']; ?></td>
						<td><?php echo $row['lng']; ?></td>
						
						<td><?php echo $row['description']; ?></td>
						
						<td><?php if ($row['location_status']=="1")
									{
										echo "Order Has Been Taken By Staff";
									} 
									else
									{
										echo "Order Waiting";
									}

									?>
						</td>
						<td><?php if ($row['location_status']=="1")
									{
										echo $row['name'];
									} 
									else
									{
										echo "Order Still Not Deliver";
									}

									?>
						</td>
						
					</tr>

					<?php
				}
			?>
			
		</tbody>
	</table>
</div>
</body>
</html>
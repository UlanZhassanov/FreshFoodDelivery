<?php include('header.php'); ?>
<body>
<?php include('navbaradmin.php'); ?>
<div class="container">
	<h1 class="page-header text-center">DELIVERY STATUS</h1>
	<table class="table table-striped table-bordered">
		<thead>
			<th>Latitude</th>
			<th>Longitude</th>
			<th>Address Deliver</th>
			<th>Status</th>
		</thead>
		<tbody>
			<?php 
				$sql="select * from locations order by id desc";
				$query=$conn->query($sql);
				while($row=$query->fetch_array()){
					?>
					<tr>
					
						<td><?php echo $row['lat']; ?></td>
						<td><?php echo $row['lng']; ?></td>
						<td><?php echo $row['description']; ?></td>
						<td><?php echo $row['location_status']; ?></td>
						
						
					</tr>
					<?php
				}
			?>
		</tbody>
	</table>
</div>
</body>
</html>
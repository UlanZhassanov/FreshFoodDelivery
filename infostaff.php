<?php include('header.php'); ?>
<body>
<?php include('navbaradmin.php'); ?>
<div class="container">
	<h1 class="page-header text-center">STAFF INFORMATION</h1>
	<table class="table table-striped table-bordered">
		<thead>
			<th>Date</th>
			<th>Staff Name</th>
			<th>Staff Email</th>
			<th>Staff Number</th>
			<th>Staff Address</th>
		</thead>
		<tbody>
			<?php 
				$sql="select * from registerstaff order by id desc";
				$query=$conn->query($sql);
				while($row=$query->fetch_array()){
					?>
					<tr>
						<td><?php echo date('M d, Y h:i A', strtotime($row['modified_on'])) ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['number']; ?></td>
						<td><?php echo $row['address']; ?></td>

						
					</tr>
					<?php
				}
			?>
			
		</tbody>
	</table>
</div>
</body>
</html>
	<?php session_start(); ?>
<?php include('header.php'); ?>
<body>
<?php include('navbarstaff.php'); ?>
<div class="container">

	<h1 class="page-header text-center">Order Need to Deliver</h1>
	<table class="table table-striped table-bordered">
		<thead>
		
			<th>Latitude</th>
			<th>Longitude</th>
			<th>Address</th>
			<th>Take Order</th>
			<th>Order Customer</th>
			
		</thead>
		<tbody>
			<?php 
				$sql="select * from locations where location_status='0'";
				
				$query=$conn->query($sql);
				while($row=$query->fetch_assoc()){
					$id=$row['id'];
					$custid=$row['custid'];
					?>
					<tr >

						<td><?php echo $row['lat']; ?></td>
						<td><?php echo $row['lng']; ?></td>
						<td><?php echo $row['description']; ?></td>
						
						<td width="200px"><a href="indexmap.php?id=<?php echo $id; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> Take</a>	


					<td width="200px"> <a href="#detailsstaff<?php echo $row['custid']; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> View Sales Details</a>

<?php include('sales_staff.php'); ?>	
						
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


<footer style="background-color: #72647F; height: 70px; margin-top: 365px"><center>

	<div id="clockdate">
				<div class="clockdate-wrapper">
					<div id="clock"></div>
					<div id="date"><?php echo date('l, F j, Y'); ?></div>
				</div>
	</div> 
	<p><b>All rights reserved &copy;</b></p>
		</center></footer>
</html>
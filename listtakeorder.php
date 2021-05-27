<?php session_start(); ?>
<?php include('header.php'); ?>
<body>
<?php include('navbarstaff.php'); ?>
<div class="container">

	<h1 class="page-header text-center">Taken Order</h1>
	<table class="table table-striped table-bordered">
		<thead>
			
			<th>Time</th>
			<th>Customer Name</th>
			<th>Latitude</th>
			<th>Longitude</th>
			<th>Address</th>
			<th>Order</th>
		</thead>
		<tbody>
			<?php 
				$sql="select * 
				from locations as l
				join register as r
				on l.custid=r.id
				order by l.modified_on desc 
				limit 1";
				
				$query=$conn->query($sql);
				while($row=$query->fetch_assoc()){
					?>
					<tr>
						 
      					<td><?php echo $row['modified_on']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['lat']; ?></td>
						<td><?php echo $row['lng']; ?></td>
						<td><?php echo $row['description']; ?></td>
						<td></td>
						
						
						
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
<div class="container">

	<h1 class="page-header text-center">Order History</h1>
	<table class="table table-striped table-bordered">
		<thead>
			
			<th>Time</th>
			<th>Customer Name</th>
			<th>Latitude</th>
			<th>Longitude</th>
			<th>Address</th>
			<th>Order</th>
		</thead>
		<tbody>
			<?php 
			$id=$_SESSION['id'];
				$sql="select * 
				from locations as l
				join register as r
				on l.custid=r.id
				where staffid=$id
				order by l.modified_on desc ";
				
				$query=$conn->query($sql);
				while($row=$query->fetch_assoc()){
					?>
					<tr>
						 
      					<td><?php echo $row['modified_on']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['lat']; ?></td>
						<td><?php echo $row['lng']; ?></td>
						<td><?php echo $row['description']; ?></td>
						<td></td>
						
						
						
						
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


<footer style="background-color: #72647F; height: 70px; margin-top: 170px"><center>

	<div id="clockdate">
				<div class="clockdate-wrapper">
					<div id="clock"></div>
					<div id="date"><?php echo date('l, F j, Y'); ?></div>
				</div>
	</div> 
	<p><b>All rights reserved &copy;</b></p>
		</center></footer>
</html>
<?php session_start(); ?>
<?php include('header.php'); ?>
<body>
<?php include('navbarstaff.php'); ?>
<div class="container">
	<h1 class="page-header text-center">SHOW PROFILE</h1>
	
	<div style="margin-top:10px;">
		<table class="table table-striped table-bordered">

			<thead>
				<th>NAME :  </th>	
			</thead>
			<tbody>
				<?php

					$id=$_SESSION['id'];
					$sql="select * from registerstaff where id=$id";
					$query=$conn->query($sql);
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td><?php echo $row['name']; ?></td>
						</tr>
						<?php
					}
				?>
			</tbody>


			<thead>
				<th>EMAIL : </th>	
			</thead>
			<tbody>
				<?php

					$id=$_SESSION['id'];
					$sql="select * from registerstaff where id=$id";
					$query=$conn->query($sql);
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td><?php echo $row['email']; ?></td>
						</tr>
						<?php
					}
				?>
			</tbody>


			<thead>
				<th>NUMBER PHONE : </th>	
			</thead>
			<tbody>
				<?php

					$id=$_SESSION['id'];
					$sql="select * from registerstaff where id=$id";
					$query=$conn->query($sql);
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td><?php echo $row['number']; ?></td>
						</tr>
						<?php
					}
				?>
			</tbody>


			<thead>
				<th>ADDRESS : </th>	
			</thead>
			<tbody>
				<?php

					$id=$_SESSION['id'];
					$sql="select * from registerstaff where id=$id";
					$query=$conn->query($sql);
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td><?php echo $row['address']; ?></td>
						</tr>
						<?php
					}
				?>
			</tbody>








		</table>

	</div>
</div>
</body>
</html>
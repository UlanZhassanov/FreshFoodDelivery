<?php session_start(); ?>
<?php include('header.php'); ?>
<body>
<?php include('navbarstaff.php'); ?>
<div class="container">
	<h1 class="page-header text-center">UPDATE PROFILE STAFF</h1>
	
	<div style="margin-top:10px;">
		<table class="table table-striped table-bordered">
			<thead>
			
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Password</th>
				<th>Number</th>
				<th>address</th>
				<th>Action</th>
				
			</thead>
			<tbody>
				<?php
					$id=$_SESSION['id'];

					$sql="select * from registerstaff where id=$id";
					$query=$conn->query($sql);
					while($row=$query->fetch_array()){
						?>
						<tr>
							
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['password']; ?></td>
							<td><?php echo $row['number']; ?></td>
							<td><?php echo $row['address']; ?></td>
							
							<td>
								<a href="#editprofile<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span> Edit</a> 
								<?php include('profile_modal.php'); ?>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$("#catList").on('change', function(){
			if($(this).val() == 0)
			{
				window.location = 'updatestaff.php';
			}
			else
			{
				window.location = 'updatestaff.php?category='+$(this).val()+$row['id'];
			}
		});
	});
</script>
</body>
</html>
<?php session_start(); ?>
<?php include('header.php'); ?>
<body>
<?php include('navbarstaff.php'); ?>

<script type="text/javascript">
	function verify(currentid)
	{
		window.location.href='verify_payment.php?currentid='+currentid;
	}
	function notverify(currentid)
	{
		window.location.href='notverify_payment.php?currentid='+currentid;
	}
</script>



<div class="container">

		
	</table>
</div>
<div class="container">

	<h1 class="page-header text-center">Payment</h1>
	<table class="table table-striped table-bordered">
		<thead>
			
			<th>Time</th>
			<th>Customer Name</th>
			<th>Address</th>
			<th>Payment Status</th>
			<th>Confirm Status</th>
		
		</thead>
		<tbody>
			<?php 
			$id=$_SESSION['id'];
				$sql="select l.id, l.modified_on, r.name, l.description, l.pay
				from locations as l
				join register as r
				on l.custid=r.id
				where staffid=$id
				";
				
				$query=$conn->query($sql);
				while($row=$query->fetch_assoc()){
$currentid=$row['id'];
					?>
					<tr>
						 
      					<td><?php echo $row['modified_on']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['description']; ?></td>
						<td><?php if ($row['pay']=="1")
									{
										echo "Payment done";
									} 
									else
									{
										echo "Not Paid Yet";
									}

									?>
						</td>

						<td>
								<a class="btn btn-success" onclick="verify(<?php echo $currentid;?>);"><span class="glyphicon glyphicon-pencil"></span>Order Paid</a>
								<a class="btn btn-success" onclick="notverify(<?php echo $currentid;?>);"><span class="glyphicon glyphicon-pencil"></span>Not Paid Yet</a>
								
								
								
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


<footer style="background-color: #72647F; height: 70px; margin-top: 360px"><center>

	<div id="clockdate">
				<div class="clockdate-wrapper">
					<div id="clock"></div>
					<div id="date"><?php echo date('l, F j, Y'); ?></div>
				</div>
	</div> 
	<p><b>All rights reserved &copy;</b></p>
		</center></footer>
</html>
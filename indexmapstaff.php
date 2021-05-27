<?php session_start(); ?>
<?php include('header.php'); ?>
<body>

<?php $id=$_SESSION['id']; ?>


	<h1 class="page-header text-center">Choose Address</h1>
	
               
		<td><?php include('user-map.php'); ?>
								
						</td>

	<center><a href="salescust.php?id=<?php echo $id; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> Edit Order</a> || <a href="order.php?id=<?php echo $id; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> Confirm</a></center>
</body>



<footer style="background-color: #72647F; height: 70px; margin-top: 110px"><center>

	<div id="clockdate">
				<div class="clockdate-wrapper">
					<div id="clock"></div>
					<div id="date"><?php echo date('l, F j, Y'); ?></div>
				</div>
	</div> 
	<p><b>All rights reserved &copy;</b></p>
		</center></footer>
</html>
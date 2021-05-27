<?php session_start(); ?>
<?php include('header.php'); ?>
<body>
<?php include('navbarstaff.php'); ?>
<?php $id=$_SESSION['id']; ?>


	<h1 class="page-header text-center">Order Need to Deliver</h1>
	<center><a href="listtakeorder.php?staffid=<?php echo $id; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> back</a></center>
               
		<td><?php include('admin-map.php'); ?>
								
						</td>

	
</body>


<footer style="background-color: #72647F; height: 70px; margin-top: 50px"><center>

	<div id="clockdate">
				<div class="clockdate-wrapper">
					<div id="clock"></div>
					<div id="date"><?php echo date('l, F j, Y'); ?></div>
				</div>
	</div> 
	<p><b>All rights reserved &copy;</b></p>
		</center></footer>
</html>
<?php
	include('config.php');

	$id=$_GET['id'];
	$pay=$_POST['pay'];
	

	$sql="select * from locations where custid='$id'";
	$query=$conn->query($sql);
	$row=$query->fetch_array();

	$sql="update locations set pay=$pay where custid='$id'";
	$conn->query($sql);

	header('location:product.php');
?>
<!-- <?php session_start(); ?> -->
<?php
	include('config.php');

	$id=$_SESSION['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$num=$_POST['number'];
	$add=$_POST['address'];


	$sql="select * from register  where id='$id'";
	$query=$conn->query($sql);
	$row=$query->fetch_array();

	$sql="update register set name='$name', email='$email', password='$pass', number='$num',  address='$add' where id='$id'";
	$conn->query($sql);

	header('location:updatecust.php');
?>
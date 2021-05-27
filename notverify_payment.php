<?php 
include'config.php';

$currentid=$_GET['currentid'];

$sql="update locations set pay=0 where id=$currentid";
$query=mysqli_query($conn,$sql);

header("Refresh:0; url=listpay.php");




?>
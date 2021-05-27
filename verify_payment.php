<?php 
include'config.php';

$currentid=$_GET['currentid'];

$sql="update locations set pay=1 where id=$currentid";
$query=mysqli_query($conn,$sql);

header("Refresh:0; url=listpay.php");




?>
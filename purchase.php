<?php
			session_start();
?>
<?php
	include('config.php');
	if(isset($_POST['productid'])){
 
		$customer=$_SESSION["name"];
		$custid=$_SESSION["id"];
		

		$sql="insert into purchase (customer, date_purchase) values ('$customer', NOW())";
		$conn->query($sql);
		$pid=$conn->insert_id;
 
		$total=0;
 
		foreach($_POST['productid'] as $product):
		$proinfo=explode("||",$product);
		$productid=$proinfo[0];
		$iterate=$proinfo[1];
		$sql="select * from product where productid='$productid'";
		$query=$conn->query($sql);
		$row=$query->fetch_array();
		$custid=$_SESSION["id"];

		if (isset($_POST['quantity_'.$iterate])){
			
			$subt=$row['price']*$_POST['quantity_'.$iterate];
			$total+=$subt;
		
			$sql="insert into purchase_detail (purchaseid, productid, custid, quantity, custname) values ('$pid', '$productid', '$custid','".$_POST['quantity_'.$iterate]."', '$customer')";
			$conn->query($sql);
		}
		endforeach;
 		
 		$sql="update purchase set total='$total' where purchaseid='$pid'";
 		$conn->query($sql);
		header('location:indexmapstaff.php');		
	}
	else{
		?>
		<script>
			window.alert('Please select a product');
			window.location.href='order.php';
		</script>
		<?php
	}
?>
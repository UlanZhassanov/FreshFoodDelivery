<?php ob_start(); ?>
<?php session_start(); ?>
<?php include "layouts/header.php"; ?>
<style>
  h2{
color:white;
  }
  label{
color:white;
  }
  .container {
    margin-top: 5%;
    width: 50%;
    background-color: #26262b9e;
    padding-top:5%;
    padding-bottom:5%;
    padding-right:10%;
    padding-left:10%;
  }
  .btn-primary {
    background-color: #673AB7;
}
  </style>
<?php
  include "config.php";
  if(isset($_POST['login']))
	{
	  
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM `register` where email = '".$email."' and password = '".$password."' ";
		$query =  mysqli_query($conn, $sql);
		$row = $query->fetch_array();
		$count = $query->num_rows;
	
		if($count != 0)
		{
		    
			
	    
			$_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
// 			header("Location: order.php");
            
          
           echo '<script>window.location.href = "order.php?id='.$row['id'].'"</script>';

		
		}
		else
		{
			echo "<script> alert('Invalid Email or Password.'); </script>";
		}
			
	}

?>

<div class="container">
  <center><h2>Customer Login</h2></center></br>
  <form class="form-horizontal" method="post" name="login" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
	  
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="login" class="btn btn-primary">Login</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
<?php ob_end_flush(); ?>
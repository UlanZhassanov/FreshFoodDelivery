<?php session_start() ?>
<?php include "layouts/headerstaff.php"; ?>
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
  if($_POST)
  {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM `registerstaff` where email = '".$email."' and password = '".$password."' ";
    $query =  mysqli_query($conn, $sql);
    if(mysqli_num_rows($query)>0)
    {
      $row = mysqli_fetch_assoc($query);
      session_start();
      $_SESSION['id'] = $row['id'];
      $_SESSION['name'] = $row['name'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['password'] = $row['password'];
      $_SESSION['number'] = $row['number'];
      $_SESSION['address'] = $row['address'];

      $sql = " update registerstaff set modified_on=NOW()  where email = '".$email."' and password = '".$password."' ";
      $query =  mysqli_query($conn, $sql);

      header('Location: indexstaff.php');
    }
    else
    {
      echo "<script> alert('Invalid Email or Password.'); </script>";
    }
  }
?>

<div class="container">
  <center><h2>Staff Login</h2></center></br>
  <form class="form-horizontal" method="post" action="">
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
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Cash On Delivery Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style>
    body{
        background-image:url('images/home.jpg');
        background-repeat: repeat-y;
        width:100%;
    }
    .navbar-inverse {
        background-color: #3b173da8;
        border-color: #3b173da8; 
    }
    .navbar-inverse .navbar-brand {
        color: white;
    }
    a:hover{
        color: #50546d;
    }
    .navbar-inverse .navbar-nav>li>a {
        color: white;
    }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="indexadmin.php">Cash On Delivery Admin</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav ">
       <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="indexadmin.php">Menu</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="sales.php">Sales</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="deli.php">Delivery Status</a></li>


          </ul>
        </li>
        <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Maintenance <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="product.php">Products</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="category.php">Category</a></li>

          </ul>
        </li>
       <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Information <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="infocustomer.php">Customer</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="infostaff.php">Staff</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="infostaff.php">Staff</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class="caret" ></span></a>
          <ul class="dropdown-menu">
            <li ><a href="showadmin.php"><span class="glyphicon glyphicon-log-out" ;"></span>  Show Profile</a></li>
            <li role="separator" class="divider"></li>
            <li ><a href="updateadmin.php"><span class="glyphicon glyphicon-log-out" ;"></span>  Update Profile</a></li>
            <li role="separator" class="divider"></li>
            <li ><a href="loginadmin.php"><span class="glyphicon glyphicon-log-out" ;"></span>  Logout</a></li>

          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
  
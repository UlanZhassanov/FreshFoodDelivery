     <style>
		i{
			color:indigo;
		}
		
	 </style>


     <?php
     session_start();
     $email=$_SESSION['login'];
     $query=mysqli_query($con,"select * from registerstaff'");
     $res1=mysqli_fetch_array($query);
     @$fname=$res1['fname'];
     ?>

		<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.jpg" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $fname;?></div>
                    <div class="email"><?php echo $email;?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            
                            
                            <li role="separator" class="divider"></li>
                            <li><a href="../adv.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    
                    <!-- <li>
                        <a href="dashboard.php" class="menu-toggle">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li> -->

                    <li>
                        <a href="add_property.php" class="menu-toggle">
                            <i class="material-icons">home</i>
                            <span>Add House Details</span>
                        </a>
                    </li>

                    <!-- <li>
                        <a href="view_property_image.php" class="menu-toggle">
                            <i class="material-icons">home</i>
                            <span>Add Property Images</span>
                        </a>
                    </li> -->


                    <li>
                        <a href="view_property.php" class="menu-toggle">
                            <i class="material-icons">home</i>
                            <span>View Property</span>
                        </a>
                    </li>
									                    
                    
                    
                    
                    <li>
                        <!-- <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">content_copy</i>
                            <span>Example Pages</span>
                        </a> -->

                        <ul class="ml-menu">
                          
                            <li>
                                <a href="logout.php">Sign Up</a>
                            </li>
                           
                        </ul>
                    </li>
             
                </ul>
            </div>
            <!-- #Menu -->
            
			<!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 - 2020 <a href="javascript:void(0);">Advertiser - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
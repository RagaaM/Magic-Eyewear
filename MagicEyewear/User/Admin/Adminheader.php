<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Magic EyeCare </title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!--Font Awesome CDN-->
	<script src="https://kit.fontawesome.com/ba83dadc75.js" crossorigin="anonymous">
	</script>

	
	<!--Custom CSS-->
	<link rel="stylesheet" href="MagicEyewear/AdminStyle.css?v=<?php echo time(); ?>">   

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
	
	

</head>
<body>


	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			</div>
		<div class="header-right">
			<div class="user-notification">
				<div class="dropdown"></div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="vendors/images/user.jpg" alt="">
						</span>
						<span class="user-name">Ahmed Jamal</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.php"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="login.html"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="left-side-bar" >
		<div class="brand-logo">
			<a href="../MagicEyewear/AdminHomepage.php">
				<img src="vendors/images/eyecare-logo-white.png" alt="" class="light-logo">
			</a>
			
		</div>
		<div class="menu-block customscroll" >
			<div class="sidebar-menu" >
				
					<li class="dropdown">
						<a href="AdminHomepage.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span>Home
						</a>
					</li>
					<li class="dropdown">
						<a href="AddProducts.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-add"></span>Add Products </a>
					</li>
					<li class="dropdown">
						<a href="ModifyProduct.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-edit2"></span>Modify Products
						</a>
					</li>
					<li>
						<a href="DeleteProduct.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-trash"></span>Delete Products
						</a>
					</li>
					<li class="dropdown">
						<a href="ViewOrders.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-view"></span>View Orders 
						</a>
					</li>
					
				
			</div>
		</div>
	</div>

	
   </div>
			

  </div>
<!-- js -->
<script src="vendors/scripts/core.js"></script>
	

</body>
</html>

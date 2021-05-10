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
	<link rel="stylesheet" href="/MagicEyewear/Admin/src/styles/AdminStyle.css?v=<?php echo time(); ?>">

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
							<img src="/MagicEyewear/Admin/vendors/images/user.jpg" alt="">
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
			<a href="/MagicEyewear/Admin/AdminHomepage.php">
				<img src="vendors/images/eyecare-logo-white.png" alt="" class="light-logo">
			</a>
			
		</div>
		<div class="menu-block customscroll" >
			<div class="sidebar-menu" >
			<br><br>
					<li class="dropdown">
						<a href="AdminHomepage.php" class="link">
						<i class="fas fa-home"></i>&nbsp;	Home
						</a>
					</li> <br>
					<li class="dropdown">
						<a href="AddProducts.php" class="link" >
						<i class="fas fa-plus-circle"></i> &nbsp;	Add Products </a> <br>
					</li> <br>
					<li class="dropdown">
						<a href="ModifyProduct.php" class="link">
						<i class="fas fa-edit"></i>	&nbsp; Modify Products
						</a>
					</li> <br>
					<li>
						<a href="DeleteProduct.php" class="link">
						<i class="fas fa-trash-alt"></i>&nbsp; Delete Products
						</a>
					</li> <br>
					<li class="dropdown">
						<a href="ViewOrders.php" class="link">
						<i class="fas fa-eye"></i>&nbsp; View Orders 
						</a>
					</li> <br>
					
				
			</div>
		</div>
	</div>

	
   </div>
			

  </div>

</body>
</html>

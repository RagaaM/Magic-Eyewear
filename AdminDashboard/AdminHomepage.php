<?php

	//header connection
	$path = $_SERVER['DOCUMENT_ROOT'];
   	$path .= "/MagicEyewear/Adminheader.php";
   	include ($path);

   	//database connection
   	$path2 = $_SERVER['DOCUMENT_ROOT'];
   	$path2 .= "/MagicEyewear/database/DatabaseConnection.php";
   	include ($path2);

 ?>
<!DOCTYPE html>
<html>
<head>

<!-- Basic Page Info -->
<meta charset="utf-8">
	<title>Magic EyeCare Dashboard</title>

	
</head>
<body>

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="vendors/images/banner-img.png" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Welcome back <div class="weight-600 font-30 text-blue">Ahmed Jamal!</div>
						</h4>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
						<i class="fas fa-users"></i>
							<div class="widget-data">
								<div class="h4 mb-0" style="color:#1b00ff;"> 50 Users</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
						<i class="fas fa-user-shield"></i>
							<div class="widget-data">
								<div class="h4 mb-0" style="color:#1b00ff;"> 10 Admins</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							
							<i class="fas fa-user-circle"></i>
							
							<div class="widget-data">
								<div class="h4 mb-0" style="color:#1b00ff;">5 Employees</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
	</div>
			
</div>
	</div>

</body>
</html>

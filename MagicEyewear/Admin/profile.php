<?php
$path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/MagicEyewear/Admin/Adminheader.php";
   include ($path);

    //Admin database connection
	 $path2 = $_SERVER['DOCUMENT_ROOT'];
	 $path2 .= "/MagicEyewear/Admin/database/Admindb.php";
	 include ($path2);
 ?>
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Profile</title>
</head>
<body>
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Profile</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<div class="profile-photo">
								<a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
								<img src="vendors/images/user.jpg" alt="" class="avatar-photo">
								<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document"> <!-- to be edited Add to Modal image upload  -->
									</div>
								</div>
							</div>
							<h5 class="text-center h5 mb-0">Ahmed Jamal</h5>
							<p class="text-center text-muted font-14">Admin</p>
							<div class="profile-info">
								<h5 class="mb-20 h5 text-blue">Contact Information</h5>
								<ul>
									<li>
										<span>Full name:</span>
										Ahmed Jamal
									</li>
									<li>
										<span>Phone Number:</span>
										0112345692
									</li>
									<li>
										<span>Username</span>
										AhmedJamal
									</li>
								</ul>
							</div>
							
							
						</div>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
						<div class="card-box height-100-p overflow-hidden">
							<div class="profile-tab height-100-p">
								<div class="tab height-100-p">
									<ul class="nav nav-tabs customtab" role="tablist">
										<li class="nav-item">
											<a class="nav-link " data-toggle="tab" href="#orders" role="tab">Orders</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#setting" role="tab">Settings</a>
										</li>
									</ul>
									<div class="tab-content">
										
										<!-- Orders Tab start -->
										<div class="tab-pane fade" id="orders" role="tabpanel">
											<div class="pd-20 profile-task-wrap">
												<div class="container pd-0">
													<div class="task-title row align-items-center">
														<div class="col-md-12 col-sm-12">
																</div>
													</div>
													<div class="profile-task-list tasks">
														<ul>
																		<ul>
																			<div class="initialDiv">
																			<img class="product" src="vendors/images/glass1.jpg" >
																			<div class="divInfo">
																			<li class> Rayban Sunglasses </li>
																			<li> E02133 </li>
																			<li> Omar Walid </li> </div> 
																			</div><br>
																		</ul>
																		<ul>
																			<div style="initialDiv">
																			<img class="product" src="vendors/images/redglasses.jpg" >
																			<div class="divInfo">
																			<li> Rayban Sunglasses  </li>
																			<li > E02133 </li>
																			<li> Tarek Bahaa </li>
																			</div><br>
																		</ul>
														</ul>
													</div>
													
												</div>
											</div>
										</div>
										<!-- Orders Tab End -->
										<!-- Settings Tab start -->
										<div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
											<div class="profile-setting">
												<form>
													<ul class="profile-edit-list row">
														<li class="weight-500 col-md-6">
															<h4 class="text-blue h5 mb-20">Edit Your Personal Setting</h4>
															<div class="form-group">
																<label>Full Name</label>
																<input class="form-control form-control-lg" type="text">
															</div>
															<div class="form-group">
																<label>Username</label>
																<input class="form-control form-control-lg" type="username">
															</div>
															<div class="form-group">
																<label>Password</label>
																<input class="form-control form-control-lg" type="password">
															</div>
															
															<div class="form-group">
																<label>Phone Number</label>
																<input class="form-control form-control-lg" type="text">
															</div>
															
															<div class="form-group mb-0">
																<input type="submit" class="btn btn-primary" value="Update Information">
															</div>
														</li>
														
													</ul>
												</form>
											</div>
										</div>
										<!-- Settings Tab End -->
									</div>
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

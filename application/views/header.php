<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Jayson Charitable Trust</title>

	<link rel="shortcut icon" href="<?php echo base_url('assets/images/logo/Jayson Trust Logo-01.png');?>" type="image/x-icon">
	<link rel="icon" href="<?php echo base_url('assets/images/logo/Jayson Trust Logo-01.png') ;?>" type="image/x-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Prata|Rubik:300,400,500,700&amp;display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.css');?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/swiper.min.css');?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/flaticon.css'); ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.css'); ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css'); ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/custom-animate.css'); ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.fancybox.min.css');?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.css');?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css');?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/gallery.css');?>" type="text/css">
	<!-- <link href="<?= base_url() ?>assets/css/login.css" rel="stylesheet"> -->

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</head>

<body>
	<div class="page-wrapper">
		<!-- Main Header-->
		<header class="main-header">
			<!-- Top bar -->
			<div class="top-bar theme-bg">
				<div class="auto-container">
					<div class="wrapper-box">
						<div class="left-content">
							<ul class="contact-info">
								<li><span class="flaticon-mail"></span><a
										href="mailto:trustjayson@gmail.com">trustjayson@gmail.com</a></li>
								<li><span class="flaticon-phone"></span><a href="tel:+088258 21681">+088258 21681</a>
								</li>
							</ul>
							<!-- <div class="language-switcher">
							<div class="languages">
								<span class="current" title="English">En</span>
								<span class="hover">English</span>
								<ul>
								<li><a href="#">English</a></li>
									<li><a href="#">Hindi</a></li>
									<li><a href="#">Tamil</a></li>
									<li><a href="#">Kannada</a></li>
									<li><a href="#">Gujarathi</a></li>
								</ul>
							</div>
						</div> -->
							<!-- <div class="text">We only have what we give... <a href="#" class="donate-box-btn">Donate Now.</a></div> -->
						</div>

						<div class="right-content">

							<ul class="social-icon-one">
								<li><a
										href="https://www.facebook.com/people/Jayson-CharitableTrust/100080072187512/?locale=ms_MY"><span
											class="fa fa-facebook"></span></a></li>
								<li><a href="https://twitter.com/TrustJayson/status/1531925995154206720"><span
											class="fa fa-twitter"></span></a></li>
								<li><a href="#"><span class="fa fa-instagram"></span></a></li>
								<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
							</ul>
						</div>
						<!-- <div class="cart-btn  d-lg-none d-sm-block pl-5 ">
							<div class="cart-icon"><a href="<?= base_url('main/login'); ?>" class="text-white"
									style="font-size:14px"><span class="flaticon-user text-white"></span
										class="text-white">Login/Signup</a></div>
						</div>  -->

                         <?php
						
						if ($user = $this->session->userdata('user')) {
									extract($user);
									?>
									<div class="cart-btn  d-lg-none d-sm-block ">
										<div class="cart-icon">
											<li class="dropdown">
												<a class="text-white" style="font-size:16px" href="#"><span
														class="flaticon-user pl-5"></span>Profile</a>
												<ul class="top_nav_list">
													<li><a href=""><i class="fa fa-smile-o"></i> Welcome <?= $name ?></a></li>
													<li><a href="<?= base_url('main/user_setting'); ?>"><i class="fa fa-gear"></i> Setting</a></li>
													<li><a href="<?= base_url('main/logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
												</ul>
											</li>
										</div>
									</div>
									<?php
								} else {
									?>

						<div class="cart-btn  d-lg-none d-sm-block pl-5 ">
							<div class="cart-icon">
								<li class="dropdown">
									<a class="text-white" style="font-size:14px"
										href="<?= base_url('main/login'); ?>"><span
											class="flaticon-user text-white"></span>Login</a>
									<ul>
										<li><a href="#">Signin</a></li>
										<li><a href="#">Signup</a></li>
									</ul>
								</li>
							</div>
						</div>
						<?php

								}
?>
					</div>
				</div>
			</div>

			<!-- Header Upper -->
			<div class="header-upper">
				<div class="auto-container">
					<div class="wrapper-box">
						<div class="logo-column">
							<div class="logo-box">
								<div class="logo"><a href="<?= base_url() ?>"><img
											src="<?= base_url() ?>assets/images/logo/Jayson Trust Logo-01.png" alt=""
											title="" width="100" height="80px"></a>
								</div>
							</div>
						</div>
						<div class="right-column">
							<div class="option-wrapper">
								<div class="nav-outer">
									<!-- Main Menu -->
									<nav class="main-menu navbar-expand-xl navbar-dark">

										<div class="collapse navbar-collapse">
											<ul class="navigation">
												<li><a href="<?= base_url('main/index'); ?>">Home</a></li>
												<li><a href="<?= base_url('main/about'); ?>">About Us</a></li>
												<li><a href="<?= base_url('main/events'); ?>">Events</a></li>
												<li><a href="<?= base_url('main/gallery'); ?>">Gallery</a></li>
												<li class="dropdown"><a href="#">Club</a>
													<ul>
														<li><a href="<?= base_url('main/travel'); ?>">Travel's</a></li>
														<li><a href="<?= base_url('main/sport'); ?>">Sports</a></li>
													</ul>
												</li>

												<li><a href="<?= base_url('main/contact'); ?>">Contact</a></li>
												<li><a href="<?= base_url('main/member') ?>"><i
															class="fa fa-user-plus"></i> Membership</a></li>

												<li class="dropdown d-lg-none d-sm-block"><a href="#"><i
															class="fa fa-user"></i>Login</a>
													<ul>
														<li><a href="<?= base_url('main/login'); ?>">Signin</a></li>
														<li><a href="<?= base_url('main/signup'); ?>">Signup</a></li>
													</ul>
												</li>
											</ul>
										</div>
									</nav><!-- Main Menu End-->
								</div>
								<!--Search Box-->
								<!-- <div class="search-box-outer">
								<div class="dropdown">
									<button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
									<ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
										<li class="panel-outer">
											<div class="form-container">
												<form method="post" action="">
													<div class="form-group">
														<input type="search" name="field-name" value="" placeholder="Search...." required="">
														<button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
													</div>
												</form>
											</div>
										</li>
									</ul>
								</div>
							</div> -->
								<?php

								if ($user = $this->session->userdata('user')) {
									extract($user);
									?>
									<div class="cart-btn">
										<div class="cart-icon">
											<li class="dropdown">
												<a class="text-dark" style="font-size:16px" href="#"><span
														class="flaticon-user"></span>Profile</a>
												<ul>
													<li><a href=""><i class="fa fa-smile-o"></i> Welcome <?= $name ?></a></li>
													<li><a href="<?= base_url('main/user_setting'); ?>"><i class="fa fa-gear"></i> Setting</a></li>
													<li><a href="<?= base_url('main/logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
												</ul>
											</li>
										</div>
									</div>
									<?php
								} else {
									?>
									<div class="cart-btn">
										<div class="cart-icon">
											<li class="dropdown">
												<a class="text-dark" style="font-size:16px" href="#"><span
														class="flaticon-user"></span>Login</a>
												<ul>
													<li><a href="<?= base_url('main/login'); ?>">Signin</a></li>
													<li><a href="<?= base_url('main/signup'); ?>">Signup</a></li>
												</ul>
											</li>
										</div>
									</div>

									<?php
								}
								?>
								<div class="link-btn">
									<a href="<?= base_url('main/donate'); ?>"
										class="theme-btn btn-style-one"><span>Donate</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--End Header Upper-->

			<!--End Header Upper-->
			<div class="sticky-header">
				<div class="auto-container">
					<div class="wrapper-box">
						<div class="logo-column">
							<div class="logo-box">
								<div class="logo"><a href="<?= base_url('main/index'); ?>"><img
											src="<?= base_url() ?>assets/images/logo/Jayson Trust Logo-01.png"
											width="100" height="40" alt="" title=""></a></div>
							</div>
						</div>
						<div class="menu-column">
							<div class="nav-outer">

								<div class="nav-inner">

									<!-- Main Menu -->
									<nav class="main-menu navbar-expand-xl navbar-dark">

										<div class="collapse navbar-collapse">
											<ul class="navigation">
											</ul>
											<!-- <div class="link-btn">
								   <a href="#" class="theme-btnn btn-style-zero"><span>Donate</span></a>
								  </div> -->
											<?php

											if ($user = $this->session->userdata('user')) {
												extract($user);
												?>
												<div class="cart-btn">
													<div class="cart-icon">
														<li class="dropdown">
															<a class="text-dark" style="font-size:16px" href="#"><span
																	class="flaticon-user"></span>Profile</a>
															<ul>
																<li><a href=""><i class="fa fa-smile-o"></i> Welcome <?= $name ?></a></li>
																<li><a href="<?= base_url('main/user_setting'); ?>"><i class="fa fa-gear"></i> Setting</a>
																</li>
																<li><a href="<?= base_url('main/logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a>
																</li>
															</ul>
														</li>
													</div>
												</div>
												<?php
											} else {
												?>
												<div class="cart-btn">
													<div class="cart-icon">
														<li class="dropdown">
															<a class="text-dark" style="font-size:16px" href="#"><span
																	class="flaticon-user"></span>Login</a>
															<ul>
																<li><a href="<?= base_url('main/login'); ?>">Signin</a></li>
																<li><a href="<?= base_url('main/signup'); ?>">Signup</a>
																</li>
															</ul>
														</li>
													</div>
												</div>

												<?php
											}
											?>
											<div class="link-btn">
												<a href="<?= base_url('main/donate'); ?>"
													class="theme-btn btn-style-one"><span>Donate</span></a>
											</div>
										</div>

									</nav><!-- Main Menu End-->
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Mobile Menu  -->
			<div class="mobile-menu style-one">
				<div class="menu-box">
					<div class="logo"><a href="<?= base_url('main/index'); ?>"><img
								src="<?= base_url() ?>assets/images/logo/Jayson Trust Logo-01.png" width="60"
								alt=""></a></div>
					<!-- Main Menu -->
					<nav class="main-menu navbar-expand-xl navbar-dark">
						<div class="navbar-header">
							<!-- Toggle Button -->
							<button type="button" class="navbar-toggle" data-toggle="collapse"
								data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
								aria-expanded="false" aria-label="Toggle navigation">
								<span class="flaticon-menu"></span>
							</button>
						</div>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navigation">
							</ul>
						</div>
					</nav>
					<!-- Main Menu End-->
					<!--Search Box-->
					<!-- <div class="cart-btn">
						<div class="cart-icon"><a href=""><span class="flaticon-user"></span></a></div>
					</div> -->

					<div class="search-box-outer">
						<div class="link-btn ">
							<a href="<?= base_url('main/donate'); ?>"
								class="theme-btn  btn-style-one btn-one"><span>Donate</span></a>
						</div>
					</div>
				</div>

			</div>
			<!-- End Mobile Menu -->

			<div class="nav-overlay">
				<div class="cursor"></div>
				<div class="cursor-follower"></div>
			</div>
		</header>
</body>

</html>

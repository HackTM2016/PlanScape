<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>PlanEscape | </title>

	<!-- Bootstrap -->
	<link href="<?=base_url()?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?=base_url()?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="<?=base_url()?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- bootstrap-progressbar -->
	<link href="<?=base_url()?>assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
	<!-- jVectorMap -->
	<link href="<?=base_url()?>assets/css/maps/jquery-jvectormap-2.0.3.css" rel="stylesheet"/>

	<!-- Custom Theme Style -->
	<link href="<?=base_url()?>assets/css/custom.css" rel="stylesheet">

	<!-- jQuery -->
	<script src="<?=base_url()?>assets/vendors/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="<?=base_url()?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<body class="nav-md">
<div class="container body">
	<div class="main_container">
		<div class="col-md-3 left_col">
			<div class="left_col scroll-view">
				<div class="navbar nav_title" style="border: 0;">
					<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>PlanEscape</span></a>
				</div>

				<div class="clearfix"></div>

				<!-- menu profile quick info -->
				<div class="profile">
					<div class="profile_pic">
						<img src="<?=base_url()?>assets/images/img.jpg" alt="..." class="img-circle profile_img">
					</div>
					<div class="profile_info">
						<span>Welcome,</span>
						<h2><?=$this->session->userdata('username');?></h2>
					</div>
				</div>
				<!-- /menu profile quick info -->

				<br/>

				<!-- sidebar menu -->
				<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
					<div class="menu_section">
						<h3>MENU</h3>
						<ul class="nav side-menu">
							<li><a href="<?=base_url()?>dashboard">
									<i class="fa fa-laptop"></i> Dashboard </a>
							</li>
							<li><a href="<?=base_url()?>activity/add">
									<i class="fa fa-plus-circle"></i> Create Activity </a>
							</li>
							<li><a href="<?=base_url()?>activity/view">
									<i class="fa fa-plus-circle"></i> Activities </a>
							</li>
							<li><a href="<?=base_url()?>settings">
									<i class="fa fa-plus-circle"></i> Settings </a>
							</li>
						</ul>
					</div>

				</div>
				<!-- /sidebar menu -->

				<!-- /menu footer buttons -->
				<div class="sidebar-footer hidden-small">
					<a href="<?=base_url()?>settings" data-toggle="tooltip" data-placement="top" title="Settings">
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
					</a>
					<a data-toggle="tooltip" data-placement="top" title="FullScreen">
						<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
					</a>
					<a data-toggle="tooltip" data-placement="top" title="Lock">
						<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
					</a>
					<a href="<?=base_url()?>account/logout" data-toggle="tooltip" data-placement="top" title="Logout">
						<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
					</a>
				</div>
				<!-- /menu footer buttons -->
			</div>
		</div>

		<!-- top navigation -->
		<div class="top_nav">

			<div class="nav_menu">
				<nav class="" role="navigation">
					<div class="nav toggle">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>

					<ul class="nav navbar-nav navbar-right">
						<li class="">
							<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
							   aria-expanded="false">
								<img src="<?=base_url()?>assets/images/img.jpg" alt=""><?=$this->session->userdata('username');?>
								<span class=" fa fa-angle-down"></span>
							</a>
							<ul class="dropdown-menu dropdown-usermenu pull-right">
								<li>
									<a href="<?=base_url()?>settings">
										<span>Settings</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">Help</a>
								</li>
								<li><a href="<?=base_url()?>account/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
								</li>
							</ul>
						</li>

						<li role="presentation" class="dropdown">
							<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
							   aria-expanded="false">
								<i class="fa fa-envelope-o"></i>
								<span class="badge bg-green">6</span>
							</a>
							<ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
								<li>
									<a>
                        <span class="image">
                                          <img src="<?=base_url()?>assets/images/img.jpg" alt="Profile Image"/>
                                      </span>
                        <span>
                                          <span><?=$this->session->userdata('username');?></span>
                        <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
									</a>
								</li>
								<li>
									<a>
                        <span class="image">
                                          <img src="<?=base_url()?>assets/images/img.jpg" alt="Profile Image"/>
                                      </span>
                        <span>
                                          <span><?=$this->session->userdata('username');?></span>
                        <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
									</a>
								</li>
								<li>
									<a>
                        <span class="image">
                                          <img src="<?=base_url()?>assets/images/img.jpg" alt="Profile Image"/>
                                      </span>
                        <span>
                                          <span><?=$this->session->userdata('username');?></span>
                        <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
									</a>
								</li>
								<li>
									<a>
                        <span class="image">
                                          <img src="<?=base_url()?>assets/images/img.jpg" alt="Profile Image"/>
                                      </span>
                        <span>
                                          <span><?=$this->session->userdata('username');?></span>
                        <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
									</a>
								</li>
								<li>
									<div class="text-center">
										<a href="inbox.html">
											<strong>See All Alerts</strong>
											<i class="fa fa-angle-right"></i>
										</a>
									</div>
								</li>
							</ul>
						</li>

					</ul>
				</nav>
			</div>

		</div>
		<!-- /top navigation -->


		<!-- page content -->
		<div class="right_col" role="main">
<?php $this->load->view('account/header-parts/messages'); ?>
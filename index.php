<?php 
	require_once 'global.php';
?>

<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="Hogo– Creative Admin Multipurpose Responsive Bootstrap4 Dashboard HTML Template" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="html admin template, bootstrap admin template premium, premium responsive admin template, admin dashboard template bootstrap, bootstrap simple admin template premium, web admin template, bootstrap admin template, premium admin template html5, best bootstrap admin template, premium admin panel template, admin template"/>

		<!-- Favicon -->
		<link rel="icon" href="img/logo.png" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />

		<!-- Title -->
		<title>RIANTOPUP - Administrator</title>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

		<!-- Dashboard css -->
		<link href="assets/css/style.css" rel="stylesheet" />
		<link href="assets/css/custom.css" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!-- Horizontal-menu css -->
		<link href="assets/plugins/horizontal-menu/dropdown-effects/fade-down.css" rel="stylesheet">
		<link href="assets/plugins/horizontal-menu/horizontalmenu.css" rel="stylesheet">

		<link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />

		<!-- Sidebar Accordions css -->
		<link href="assets/plugins/accordion1/css/easy-responsive-tabs.css" rel="stylesheet">

		<!-- Rightsidebar css -->
		<link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!---Font icons css-->
		<link href="assets/plugins/iconfonts/plugin.css" rel="stylesheet" />
		<link href="assets/plugins/iconfonts/icons.css" rel="stylesheet" />
		<link  href="assets/fonts/fonts/font-awesome.min.css" rel="stylesheet">

		<!-- Data table css -->
		<link href="assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
		<link href="assets/plugins/datatable/responsivebootstrap4.min.css" rel="stylesheet" />

	</head>

	<body class="app sidebar-mini rtl">

		<!--Global-Loader-->
		<!-- <div id="global-loader">
			<img src="assets/images/icons/loader.svg" alt="loader">
		</div> -->

		<div class="page">
			<div class="page-main">
				<!--app-header-->
				<div class="app-header header hor-topheader d-flex">
					<div class="container">
						<div class="d-flex">
						    <a class="header-brand" href="index.html">
								<div class="d-none d-lg-block d-md-block">
									<div class="d-flex mt-2 align-self-center align-items-center">
										<img src="img/logo.png" class="header-brand-img mt-0" alt="Hogo logo">
										<h4 class="m-0 ml-3 brand-font"><span class="text-brand">RIAN</span> TOPUP</h4>
									</div>
								</div>
								<img src="img/logo.png" class="header-brand-img icon-logo" alt="Hogo logo">
							</a><!-- logo-->
							<a id="horizontal-navtoggle" class="animated-arrow hor-toggle"><span></span></a>
							<div class="d-flex order-lg-2 ml-auto header-rightmenu">
								<div class="dropdown">
									<a  class="nav-link icon full-screen-link" id="fullscreen-button">
										<i class="fe fe-maximize-2"></i>
									</a>
								</div><!-- full-screen -->
								<div class="dropdown header-notify">
									<a class="nav-link icon" data-toggle="dropdown" aria-expanded="false">
										<i class="fe fe-bell "></i>
										<span class="pulse bg-success"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
										<a href="#" class="dropdown-item text-center">4 New Notifications</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg bg-green">
												<i class="fe fe-mail"></i>
											</div>
											<div>
												<strong>Message Sent.</strong>
												<div class="small text-muted">12 mins ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg bg-pink">
												<i class="fe fe-shopping-cart"></i>
											</div>
											<div>
												<strong>Order Placed</strong>
												<div class="small text-muted">2  hour ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg bg-blue">
												<i class="fe fe-calendar"></i>
											</div>
											<div>
												<strong> Event Started</strong>
												<div class="small text-muted">1  hour ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg bg-orange">
												<i class="fe fe-monitor"></i>
											</div>
											<div>
												<strong>Your Admin Lanuch</strong>
												<div class="small text-muted">2  days ago</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all Notifications</a>
									</div>
								</div><!-- notifications -->
								<div class="dropdown header-user">
									<a class="nav-link leading-none siderbar-link"  data-toggle="sidebar-right" data-target=".sidebar-right">
										<span class="mr-3 d-none d-lg-block ">
											<span class="text-gray-white"><span class="ml-2">Alison</span></span>
										</span>
										<span class="avatar avatar-md brround"><img src="img/user.png" alt="Profile-img" class="avatar avatar-md brround"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="header-user text-center mt-4 pb-4">
											<span class="avatar avatar-xxl brround"><img src="img/user.png" alt="Profile-img" class="avatar avatar-xxl brround"></span>
											<a href="#" class="dropdown-item text-center font-weight-semibold user h3 mb-0">Alison</a>
											<small>Web Designer</small>
										</div>

										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-account-outline "></i> Spruko technologies
										</a>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon  mdi mdi-account-plus"></i> Add another Account
										</a>
										<div class="card-body border-top">
											<div class="row">
												<div class="col-6 text-center">
													<a class="" href=""><i class="dropdown-icon mdi  mdi-message-outline fs-30 m-0 leading-tight"></i></a>
													<div>Inbox</div>
												</div>
												<div class="col-6 text-center">
													<a class="" href=""><i class="dropdown-icon mdi mdi-logout-variant fs-30 m-0 leading-tight"></i></a>
													<div>Sign out</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- profile -->
								<div class="dropdown">
									<a  class="nav-link icon siderbar-link" data-toggle="sidebar-right" data-target=".sidebar-right">
										<i class="fe fe-more-horizontal"></i>
									</a>
								</div><!-- Right-siebar-->
							</div>
						</div>
					</div>
				</div>
				<!--app-header end-->

				<!-- Horizontal-menu -->
				<div class="horizontal-main hor-menu clearfix bg-white">
					<div class="horizontal-mainwrapper container clearfix">
						<nav class="horizontalMenu clearfix">
							<ul class="horizontalMenu-list bg-white">
								<li aria-haspopup="true"><a href="<?= url('index.php') ?>" class=""><i class="typcn typcn-device-desktop hor-icon"></i> Dashboard</a></li>
								<li aria-haspopup="true"><a href="widgets.html" class=""><i class="fa fa-user"></i> Admin</a></li>
								<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="typcn typcn-chart-pie-outline"></i> Menu Staff <i class="fa fa-angle-down horizontal-icon"></i></a>
									<ul class="sub-menu">
										<li aria-haspopup="true"><a href="<?= url('index.php?page=transfer') ?>">Transfer Saldo</a></li>
										<li aria-haspopup="true"><a href="<?= url('index.php?page=code_invitation') ?>">Kode Undangan</a></li>
									</ul>
								</li>
								<li aria-haspopup="true"><a href="<?= url('index.php?page=rank') ?>" class=""><i class="fa fa-trophy"></i> Peringkat bulanan</a></li>
								<li aria-haspopup="true"><a href="<?= url('index.php?page=help') ?>" class=""><i class="fa fa-envelope"></i> CS Bantuan</a></li>
								<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fa fa-list-ul"></i> Daftar Harga <i class="fa fa-angle-down horizontal-icon"></i></a>
									<ul class="sub-menu">
										<li aria-haspopup="true"><a href="<?= url('index.php?page=sosmed') ?>">Sosial Media</a></li>
										<li aria-haspopup="true"><a href="<?= url('index.php?page=topup') ?>">Top Up</a></li>
									</ul>
								</li>

								<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fa fa-book"></i> Halaman <i class="fa fa-angle-down horizontal-icon"></i></a>
									<ul class="sub-menu">
										<li aria-haspopup="true"><a href="<?= url('index.php?page=api') ?>">API Dokumentasi</a></li>
										<li aria-haspopup="true"><a href="buttons.html">Kontak Kami</a></li>
										<li aria-haspopup="true"><a href="<?= url('index.php?page=terms_of_service') ?>">Ketentuan Layanan</a></li>
										<li aria-haspopup="true"><a href="avatars.html">Pertanyaan Umun</a></li>
										<li aria-haspopup="true"><a href="<?= url('index.php?page=order_explanation') ?>">Penjelasan Pesanan</a></li>
									</ul>
								</li>
							</ul>
						</nav>
						<!--Nav end -->
					</div>
				</div>
				<!-- Horizontal-menu end -->

                <!-- app-content-->
				<div class="container content-area py-5">
					<div class="side-app py-5">
						<!-- CONTENT -->
						<?php
							if (page()) {
								require_once 'page/' . page() . '.php';
							} else {
								require_once 'page/main.php';
							}
						?>
						<!-- ENDCONTENR -->
					</div>
					<!-- Right-sidebar-->
					<div class="sidebar sidebar-right sidebar-animate">
						<div class="tab-menu-heading siderbar-tabs border-0">
							<div class="tabs-menu ">
								<!-- Tabs -->
								<ul class="nav panel-tabs">
									<li class=""><a href="#tab"  class="active" data-toggle="tab">Profile</a></li>
									<li class=""><a href="#tab1" data-toggle="tab">Chat</a></li>
									<li><a href="#tab2" data-toggle="tab">Activity</a></li>
									<li><a href="#tab3" data-toggle="tab">Todo</a></li>
								</ul>
							</div>
						</div>
						<div class="panel-body tabs-menu-body side-tab-body p-0 border-0 ">
							<div class="tab-content border-top">
								<div class="tab-pane active " id="tab">
									<div class="card-body p-0">
										<div class="header-user text-center mt-4 pb-4">
											<span class="avatar avatar-xxl brround"><img src="img/user.png" alt="Profile-img" class="avatar avatar-xxl brround"></span>
											<div class="dropdown-item text-center font-weight-semibold user h3 mb-0">Alison</div>
											<small>Web Designer</small>
											<div class="card-body">
												<div class="form-group ">
													<label class="form-label  text-left">Offline/Online</label>
													<select class="form-control select2 " data-placeholder="Choose one">
														<option label="Choose one">
														</option>
														<option value="1">Online</option>
														<option value="2">Offline</option>
													</select>
												</div>
												<div class="form-group ">
													<label class="form-label text-left">Website</label>
													<select class="form-control select2 " data-placeholder="Choose one">
														<option label="Choose one">
														</option>
														<option value="1">Spruko.com</option>
														<option value="2">sprukosoft.com</option>
														<option value="3">sprukotechnologies.com</option>
														<option value="4">sprukoinfo.com</option>
														<option value="5">sprukotech.com</option>
													</select>
												</div>
											</div>
										</div>
										<a class="dropdown-item  border-top" href="#">
											<i class="dropdown-icon mdi mdi-account-outline "></i> Spruko technologies
										</a>
										<a class="dropdown-item border-top" href="#">
											<i class="dropdown-icon  mdi mdi-account-plus"></i> Add another Account
										</a>
										<div class="card-body border-top">
											<div class="row">
												<div class="col-4 text-center">
													<a class="" href=""><i class="dropdown-icon mdi  mdi-message-outline fs-30 m-0 leading-tight"></i></a>
													<div>Inbox</div>
												</div>
												<div class="col-4 text-center">
													<a class="" href=""><i class="dropdown-icon mdi mdi-tune fs-30 m-0 leading-tight"></i></a>
													<div>Settings</div>
												</div>
												<div class="col-4 text-center">
													<a class="" href=""><i class="dropdown-icon mdi mdi-logout-variant fs-30 m-0 leading-tight"></i></a>
													<div>Sign out</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab1">
									<div class="chat">
										<div class="contacts_card">
											<div class="input-group p-3">
												<input type="text" placeholder="Search..." class="form-control search">
												<div class="input-group-prepend">
													<span class="input-group-text search_btn  "><i class="fa fa-search"></i></span>
												</div>
											</div>
											<ul class="contacts mb-0">
												<li class="active">
													<div class="d-flex bd-highlight">
														<div class="img_cont">
															<img src="assets/images/users/male/3.jpg" class="rounded-circle user_img" alt="img">
															<span class="online_icon"></span>
														</div>
														<div class="user_info">
															<h6 class="mt-1 mb-0 ">Maryam Naz</h6>
															<small class="text-muted">Maryam is online</small>
														</div>
														<div class="float-right text-right ml-auto mt-auto mb-auto"><small>01-02-2019</small></div>
													</div>
												</li>
												<li>
													<div class="d-flex bd-highlight">
														<div class="img_cont">
															<img src="assets/images/users/female/1.jpg" class="rounded-circle user_img" alt="img">

														</div>
														<div class="user_info">
															<h6 class="mt-1 mb-0 ">Sahar Darya</h6>
															<small class="text-muted">Sahar left 7 mins ago</small>
														</div>
														<div class="float-right text-right ml-auto mt-auto mb-auto"><small>01-02-2019</small></div>
													</div>
												</li>
												<li>
													<div class="d-flex bd-highlight">
														<div class="img_cont">
															<img src="assets/images/users/female/9.jpg" class="rounded-circle user_img" alt="img">
															<span class="online_icon"></span>
														</div>
														<div class="user_info">
															<h6 class="mt-1 mb-0 ">Maryam Naz</h6>
															<small class="text-muted">Maryam is online</small>
														</div>
														<div class="float-right text-right ml-auto mt-auto mb-auto"><small>01-02-2019</small></div>
													</div>
												</li>
												<li>
													<div class="d-flex bd-highlight">
														<div class="img_cont">
															<img src="assets/images/users/female/12.jpg" class="rounded-circle user_img" alt="img">

														</div>
														<div class="user_info">
															<h6 class="mt-1 mb-0 ">Yolduz Rafi</h6>
															<small class="text-muted">Yolduz is online</small>
														</div>
														<div class="float-right text-right ml-auto mt-auto mb-auto"><small>02-02-2019</small></div>
													</div>
												</li>
												<li>
													<div class="d-flex bd-highlight">
														<div class="img_cont">
															<img src="assets/images/users/male/15.jpg" class="rounded-circle user_img" alt="img">
															<span class="online_icon"></span>
														</div>
														<div class="user_info">
															<h6 class="mt-1 mb-0 ">Nargis Hawa</h6>
															<small class="text-muted">Nargis left 30 mins ago</small>
														</div>
														<div class="float-right text-right ml-auto mt-auto mb-auto"><small>02-02-2019</small></div>
													</div>
												</li>
												<li>
													<div class="d-flex bd-highlight">
														<div class="img_cont">
															<img src="assets/images/users/male/17.jpg" class="rounded-circle user_img" alt="img">
															<span class="online_icon"></span>
														</div>
														<div class="user_info">
															<h6 class="mt-1 mb-0 ">Khadija Mehr</h6>
															<small class="text-muted">Khadija left 50 mins ago</small>
														</div>
														<div class="float-right text-right ml-auto mt-auto mb-auto"><small>03-02-2019</small></div>
													</div>
												</li>
												<li>
													<div class="d-flex bd-highlight">
														<div class="img_cont">
															<img src="assets/images/users/female/18.jpg" class="rounded-circle user_img" alt="img">

														</div>
														<div class="user_info">
															<h6 class="mt-1 mb-0 ">Khadija Mehr</h6>
															<small class="text-muted">Khadija left 50 mins ago</small>
														</div>
														<div class="float-right text-right ml-auto mt-auto mb-auto"><small>03-02-2019</small></div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane  " id="tab2">
									<div class="list d-flex align-items-center border-bottom p-4">
										<div class="">
											<span class="avatar bg-primary brround avatar-md">CH</span>
										</div>
										<div class="wrapper w-100 ml-3">
											<p class="mb-0 d-flex">
												<b>New Websites is Created</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">30 mins ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</div>
									</div>
									<div class="list d-flex align-items-center border-bottom p-4">
										<div class="">
											<span class="avatar bg-danger brround avatar-md">N</span>
										</div>
										<div class="wrapper w-100 ml-3">
											<p class="mb-0 d-flex">
												<b>Prepare For the Next Project</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">2 hours ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</div>
									</div>
									<div class="list d-flex align-items-center border-bottom p-4">
										<div class="">
											<span class="avatar bg-info brround avatar-md">S</span>
										</div>
										<div class="wrapper w-100 ml-3">
											<p class="mb-0 d-flex">
												<b>Decide the live Discussion Time</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">3 hours ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</div>
									</div>
									<div class="list d-flex align-items-center border-bottom p-4">
										<div class="">
											<span class="avatar bg-warning brround avatar-md">K</span>
										</div>
										<div class="wrapper w-100 ml-3">
											<p class="mb-0 d-flex">
												<b>Team Review meeting at yesterday at 3:00 pm</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">4 hours ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</div>
									</div>
									<div class="list d-flex align-items-center border-bottom p-4">
										<div class="">
											<span class="avatar bg-success brround avatar-md">R</span>
										</div>
										<div class="wrapper w-100 ml-3">
											<p class="mb-0 d-flex">
												<b>Prepare for Presentation</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">1 days ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</div>
									</div>
									<div class="list d-flex align-items-center  border-bottom p-4">
										<div class="">
											<span class="avatar bg-pink brround avatar-md">MS</span>
										</div>
										<div class="wrapper w-100 ml-3">
											<p class="mb-0 d-flex">
												<b>Prepare for Presentation</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">1 days ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</div>
									</div>
									<div class="list d-flex align-items-center border-bottom p-4">
										<div class="">
											<span class="avatar bg-purple brround avatar-md">L</span>
										</div>
										<div class="wrapper w-100 ml-3">
											<p class="mb-0 d-flex">
												<b>Prepare for Presentation</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">45 mintues ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</div>
									</div>
									<div class="list d-flex align-items-center p-4">
										<div class="">
											<span class="avatar bg-blue brround avatar-md">U</span>
										</div>
										<div class="wrapper w-100 ml-3">
											<p class="mb-0 d-flex">
												<b>Prepare for Presentation</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">2 days ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab3">
									<div class="">
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
												<span class="custom-control-label">Do Even More..</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2" checked="">
												<span class="custom-control-label">Find an idea.</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" checked="">
												<span class="custom-control-label">Hangout with friends</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" >
												<span class="custom-control-label">Do Something else</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox5" value="option5" >
												<span class="custom-control-label">Eat healthy, Eat Fresh..</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox6" value="option6" checked="">
												<span class="custom-control-label">Finsh something more..</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox7" value="option7" checked="">
												<span class="custom-control-label">Do something more</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox8" value="option8" >
												<span class="custom-control-label">Updated more files</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9" >
												<span class="custom-control-label">System updated</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top border-bottom">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox10" value="option10" >
												<span class="custom-control-label">Settings Changings...</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="text-center pt-5">
											<a href="#" class="btn btn-primary btn-pill">Upgrade more</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- End Rightsidebar-->
				</div>
				<!-- End app-content-->
			</div>
		</div>
		<!-- End Page -->

		<!--footer-->
		<div class="bg-dark py-5">
			<div class="container mt-5">
				<div class="top-footer">
					<div class="row">
						<div class="col-lg-5 mt-4">
							<h4 class="brand-font mb-4">Tentang Rian Topup</h4>
							<p>Rian Topup Adalah Sebuah Platform Bisnis Yang Menyediakan Berbagai Layanan Multi Media Marketing Yang Bergerak Terutama Di Indonesia. Dengan Bergabung Bersama Kami, Anda Dapat Menjadi Penyedia Jasa Sosial Media Atau Reseller Sosial Media Seperti Jasa Penambah Followers, Likes, Views, Subscribe, Dll. Saat Ini Tersedia Berbagai Layanan Untuk Sosial Media Terpopuler Seperti Instagram, Facebook, Twitter, Youtube, Dll. Dan Kamipun Juga Menyediakan Panel Pulsa & PPOB Seperti Pulsa All Operator, Paket Data, Saldo Gojek/Grab, Token PLN, All Voucher Game Online, Dll.</p>
						</div>
						<div class="col-lg-1 mt-4"></div>
						<div class="col-lg-2 mt-4">
							<h4 class="brand-font mb-4">Informasi</h4>
							<ul class="list-unstyled">
								<li><a href="javascript:;">Cara Daftar</a></li>
								<li><a href="javascript:;">Cara Isi Saldo</a></li>
								<li><a href="javascript:;">Cara Transaksi</a></li>
								<li><a href="javascript:;">Pembayaran Isi Saldo</a></li>
								<li><a href="javascript:;">API Dokumentasi</a></li>
								<li><a href="javascript:;">Layanan Promo</a></li>
							</ul>
						</div>
						<div class="col-lg-2 mt-4">
							<h4 class="brand-font mb-4">SOSIAL MEDIA</h4>
							<ul class="list-unstyled">
								<li class="mb-3">
									<a href="javascript:;">
										<div class="d-flex align-self-center">
											<div class="sosmed mr-3 text-center">
												<h4 class="mt-2"><i class="fa fa-facebook"></i></h4>
											</div>
											Facebook
										</div>
									</a>
								</li>
								<li class="mb-3">
									<a href="javascript:;">
										<div class="d-flex align-self-center">
											<div class="sosmed mr-3 text-center">
												<h4 class="mt-2"><i class="fa fa-instagram"></i></h4>
											</div>
											Instagram
										</div>
									</a>
								</li>
								<li class="mb-3">
									<a href="javascript:;">
										<div class="d-flex align-self-center">
											<div class="sosmed mr-3 text-center">
												<h4 class="mt-2"><i class="fa fa-whatsapp"></i></h4>
											</div>
											WhatsApp
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<hr>
					<footer class="pl-0 pr-0">
						<div class="row ">
							<div class="col-xl-8 col-lg-12 col-md-12 footer1">
								Copyright &copy;2022. Design By<a href="https://riantopup.com/"> RIAN TOPUP</a>
							</div>
							<div class="col-xl-4 col-lg-12 col-md-12 ml-auto text-right">
								<ul class="footer-social-list ">
									<li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
									<li><a href="javascript:;"><i class="fa fa-google"></i></a></li>
									<li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
									<li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</footer>
				</div>
			
			</div>
		</div>
		<!-- End Footer-->
		

		<!-- Back to top -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

		<!-- Jquery js-->
		<script src="assets/js/vendors/jquery-3.2.1.min.js"></script>

		<!--Bootstrap.min js-->
		<script src="assets/plugins/bootstrap/popper.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--Jquery Sparkline js-->
		<script src="assets/js/vendors/jquery.sparkline.min.js"></script>

		<!-- Chart Circle js-->
		<script src="assets/js/vendors/circle-progress.min.js"></script>

		<!-- Star Rating js-->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>

		<!--Moment js-->
		<script src="assets/plugins/moment/moment.min.js"></script>


		<!-- Horizontal-menu js -->
		<script src="assets/plugins/horizontal-menu/horizontalmenu.js"></script>

		<!-- Sidebar Accordions js -->
		<script src="assets/plugins/accordion1/js/easyResponsiveTabs.js"></script>

		<!-- Custom scroll bar js-->
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- Rightsidebar js -->
		<script src="assets/plugins/sidebar/sidebar.js"></script>

		<!-- Data tables js-->
		<script src="assets/plugins/datatable/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatable/datatable.js"></script>
		<script src="assets/plugins/datatable/datatable-2.js"></script>
		<script src="assets/plugins/datatable/dataTables.responsive.min.js"></script>

		<!-- Custom js-->
		<script src="assets/js/custom.js"></script>

	</body>
</html>
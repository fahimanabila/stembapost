<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Dashboard</title>
		<meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
		<meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/normalize.css') ?>" /> -->
		<!-- <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-4.0.0/dist/css/bootstrap.min.css') ?>" />  -->
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/linearicons.css') ?>" /> -->
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/magnific-popup.css') ?>" /> -->
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/main.css') ?>" /> -->
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/nice-select.css') ?>" /> -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/demo.css') ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/component.css') ?>" />
		<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css" /> -->
  		<link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.0-rc/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">


	</head>
	<body>
		<nav class="navbar navbar-default" style="position: fixed; z-index: 999">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li class="gn-search-item">
									<input placeholder="Search" type="search" class="gn-search">
									<a class="gn-icon gn-icon-search"><span>Search</span></a>
								</li>
								<li><a class="gn-icon gn-icon-cog">Settings</a></li>
								<li>
									<a class="gn-icon gn-icon-download" href="new.html">New Broadcast</a>
								</li>
								<li><a class="gn-icon gn-icon-cog">Address Book</a></li>
								<li><a class="gn-icon gn-icon-help">Trash</a></li>
								<li><a class="gn-icon gn-icon-help">Set Up</a></li>
								<li><a class="gn-icon gn-icon-help">About</a></li>
							</ul>
						</div>
					</nav>
				</li>
				<li><a href="http://tympanus.net/codrops">Stembapost</a></li>
				<li><a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/HeaderEffects/"><span>New Broadcast</span></a></li>
				<li><a class="codrops-icon codrops-icon-drop" href="<?php echo base_url('logout')?>"><span>Logout</span></a></li>
			</ul>
		</nav>
		<div style="background-color: lightgreen">
			<div class="">
			  <div id="myCarousel" class="carousel slide" data-ride="carousel">
			    <!-- Indicators -->
			    <ol class="carousel-indicators">
			      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#myCarousel" data-slide-to="1"></li>
			      <li data-target="#myCarousel" data-slide-to="2"></li>
			    </ol>

			    <!-- Wrapper for slides -->
			    <div class="carousel-inner">
			      <div class="item active">
			        <img src="<?php echo base_url('assets/pict/pict.jpg')?>" alt="Los Angeles" style="width:100%;">
			      </div>

			      <div class="item">
			        <img src="<?php echo base_url('assets/pict/pict.jpg')?>" alt="Chicago" style="width:100%;">
			      </div>
			    
			      <div class="item">
			        <img src="<?php echo base_url('assets/pict/pict.jpg')?>" alt="New york" style="width:100%;">
			      </div>
			    </div>

			    <!-- Left and right controls -->
			    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			      <span class="glyphicon glyphicon-chevron-left"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#myCarousel" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right"></span>
			      <span class="sr-only">Next</span>
			    </a>
			  </div>
			</div>
		</div>
	    </div>
		<div style="color: white;background-color: lightblue">				
			<h1>ini body</h1>
		</div>
	    <script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js')?>"></script>
	    <script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>
		<script src="<?php echo base_url('assets/bootstrap-4.0.0/js/dist/carousel.js') ?>"></script>
		<script src="<?php echo base_url('assets/js/classie.js') ?>"></script>
		<script src="<?php echo base_url('assets/js/gnmenu.js') ?>"></script>
		<script src="<?php echo base_url('assets/bootstrap-4.0.0/js/dist/carousel.js') ?>"></script>
		<script src="<?php echo base_url('assets/js/modernizr.custom.js') ?>"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>
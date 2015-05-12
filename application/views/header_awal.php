<?php
error_reporting(0);
?>

<!doctype html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<title>CURRICULUM VITAE</title> 
	<meta name="description" content="BlackTie.co - Free Handsome Bootstrap Themes" />	    
	<meta name="keywords" content="themes, bootstrap, free, templates, bootstrap 3, freebie,">
	<meta property="og:title" content="">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/umum/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/umum/fancybox/jquery.fancybox-v=2.1.5.css') ?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets/umum/css/font-awesome.min.css') ?>" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/umum/css/style.css') ?>">	
	
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
	
	<link rel="prefetch" href="<?php echo base_url('assets/umum/images/zoom.png') ?>">
		
</head>

<body>
	<div class="navbar navbar-fixed-top" data-activeslide="1">
		<div class="container">
		
			<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
			
			<div class="nav-collapse collapse navbar-responsive-collapse">
				<ul class="nav row">
					<li data-slide="1" class="col-12 col-sm-2"><a id="menu-link-1" href="#slide-1" title="Next Section"><span class="icon icon-home"></span> <span class="text">HOME</span></a></li>
					<li data-slide="2" class="col-12 col-sm-2"><a id="menu-link-2" href="#slide-2" title="Next Section"><span class="icon icon-book"></span> <span class="text">ABOUT US</span></a></li>
					<li data-slide="3" class="col-12 col-sm-2"><a id="menu-link-3" href="#slide-3" title="Next Section"><span class="icon icon-briefcase"></span> <span class="text">CAMPUS</span></a></li>
					<li data-slide="4" class="col-12 col-sm-2"><a id="menu-link-4" href="#slide-4" title="Next Section"><span class="icon icon-gears"></span> <span class="text">DATABASE</span></a></li>
					<li data-slide="5" class="col-12 col-sm-2"><a id="menu-link-5" href="#slide-6" title="Next Section"><span class="icon icon-envelope"></span> <span class="text">TEAM</span></a></li>
					<a class="col-12 col-sm-2" style="text-align: center; white-space: nowrap; padding-top: 10px;" href="<?php echo base_url('login'); ?>"><span class="icon icon-user"></span> <span class="text">
					
					<?php
					if (!$this->session->userdata('username')) { 
					echo "LOGIN";
					}
					else
					echo "DASHBOARD";
					?>
					</span></a>
				</ul>
				<div class="row">
					<div class="col-sm-2 active-menu"></div>
				</div>
			</div><!-- /.nav-collapse -->
		</div><!-- /.container -->

	</div><!-- /.navbar -->

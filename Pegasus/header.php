<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,900italic,700italic,700,900,400italic,500,500italic' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div id="nav" class="shadow">
			<div class="container desktop">
				<div class="col-md-3">
					<a href="<?php echo get_site_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png"></a>
				</div>
				<div class="col-md-9 text-right">
					<nav>
						 <?php wp_nav_menu(array('theme_location' => 'Header_Nav',)); ?>
					</nav>
				</div>
			</div>
			<div id="responsive-nav">
				<div class="col-xs-4">
					<a href="<?php echo get_site_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png"></a>
				</div>
				<div class="col-xs-6 text-center">
				</div>
				<div class="col-xs-2 text-right">
					<span class="glyphicon glyphicon-align-justify"></span>
				</div>
			</div>
			<div id="slideOut" class="shadow">
				<nav>
					<ul>
						<li><a href="#">Manufacturer</a></li>
						<li><a href="#">Brands</a></li>
						<li><a href="#">Models</a></li>
						<li><a href="#">Floor Plans</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
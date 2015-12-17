<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>
<body>
	<div class="fluid-container">
		<header>
			<div id="nav" class="shadow">
				<div class="col-md-4">
					<p><strong>(XXX)-XXX-XXXX</strong> <button data-toggle="modal" data-target="#contactModal">Contact Us</button></p>
				</div>
				<div class="col-md-8 text-right">
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
			<div id="responsive-nav">
				<div class="col-xs-8">
					<p><strong>(XXX)-XXX-XXXX</strong></p>
				</div>
				<div class="col-xs-4 text-right">
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
		</header>
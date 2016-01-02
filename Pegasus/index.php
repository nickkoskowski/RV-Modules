<?php get_header(); ?>
<main>
	<div id="logos">
		<div class="container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-2.png">
				</div>
			</div>
		<?php endwhile; endif; ?>
	</div>
</div>
<div class="fluid-container">
	<video autoplay loop poster="polina.jpg" id="bgvid">
		<source src="<?php echo get_template_directory_uri(); ?>/videos/aerial.mp4" type="video/mp4">
		</video>
		<form id="searchform">
			<h3>Search for Any RV</h3>
			<label>Model:</label>
			<input type="text">
			<label>Brand / Manufacturer:</label>
			<select>
				<option>Brand Name</option>
			</select>
		</form>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h2 class="text-center">Any RV, Full Video!</h2>
				<p>We're constantly adding new videos to our library with the latest brands, models and years. If we don't have it you have the freedom to add your own.</p>
			</div>
			<div class="col-md-4">
				<h2 class="text-center">All Brands</h2>
				<p>Pegasus comes preloaded with most major brands and manufacturers, have something we dont? Add it to the library yourself.</p>
			</div>
			<div class="col-md-4">
				<h2 class="text-center">Search Engine Optimized</h2>
				<p>We built this to drive the maximum visibility to your web site. We optimized it to be picked up by major search engines like google, bing and more.</p>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>
<?php get_header(); ?>
<main>
	<?php get_template_part('/modules/logos'); ?>
	<div class="container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		$floorplans = get_field('floorplans');
		?>
		<div id="breadcrumbs">
			<div class="row">
				<div class="col-md-12">
					<p><a href="">Home</a> > <a href="">Brands</a> > <a href=""><?php echo get_brand(get_the_id())->name; ?></a> > <?php the_title(); ?></p>
				</div>
			</div>
		</div>
		<div id="content">
			<div class="row">
				<div class="col-md-6">
					<iframe id="modelVid" width="520" height="280" src="<?php echo $floorplans[0]['floorplan_video']; ?>" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="col-md-6 text-center">
					<img src="<?php echo $floorplans[0]['floorplan_image']; ?>" data-toggle="modal" data-target="#vidModal">
				<!--<form class="callback-cta">
					<input type="text" placeholder="Your Name">
					<input type="text" placeholder="Phone Number">
					<button>Request a Callback</button>
				</form> -->
				<button data-toggle="modal" data-target="#contactModal">Contact Us for More Info</button>
			</div>
		</div>
		<h2><?php echo get_brand(get_the_id())->name.' '.get_the_title(); ?> Floorplans</h2>
	</div>
	<div id="inventory" class="row">
		<?php 
		foreach ($floorplans as $floorplan) {
			?>
			<div class="col-md-3 model" data-vidlink="<?php echo $floorplan['floorplan_video']; ?>">
				<img src="<?php echo $floorplan['floorplan_image']; ?>">
				<h3><?php echo $floorplan['floorplan_name']; ?></h3>
				<div class="row">
					<div class="col-xs-12">
						<button>Inventory</button>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<div class="text-content">
			<div class="row">
				<div class="col-md-8">
					<h3>About <?php echo get_brand(get_the_id())->name.' '.get_the_title(); ?></h3>
					<?php the_content(); ?>
				</div>
				<div class="col-md-4">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}  ?>
				</div>
			</div>
		</div>
	<?php endwhile; endif; ?>
</div>
</main>
</div>
<?php get_footer(); ?>
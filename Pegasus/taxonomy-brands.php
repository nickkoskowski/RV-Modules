<?php get_header(); ?>
<main>
	<?php get_template_part('/modules/logos'); ?>
	<div class="container">
		<div id="breadcrumbs">
			<div class="row">
				<div class="col-md-12">
					<p><a href="">Home</a> > <a href="">Brands</a></p>
				</div>
			</div>
		</div>
		<div id="brands">
			<div class="row">
				<?php $brands = get_terms( 'brands', array('orderby'    => 'count','hide_empty' => 0) ); print_r($brands); ?>
				<div class="col-xs-6 col-md-3">
					<a href="models.php"><img src="images/logos/coachmen.png"><?php the_title(); ?></a>
				</div>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>
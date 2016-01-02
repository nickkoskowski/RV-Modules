<?php /* Template Name: Brands Page */ ?>
<?php get_header(); ?>
<main>
	<div id="logos">
		<div class="container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="row">
				<div class="col-md-6 col-xs-12">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-2.png">
				</div>
				<div class="col-md-6 col-xs-12 text-right">
					<div id="breadcrumbs">
						<p><a href="">Home</a> / <a href="<?php echo get_site_url(); ?>/brands">Brands</a></p>
					</div>
				</div>
			</div>
		<?php endwhile; endif; ?>
	</div>
</div>
<div class="container">
	<div id="brands">
		<div class="row">
			<?php $brands = get_terms( 'brands', array('orderby' => 'count','hide_empty' => 0) );
			foreach($brands as $brand) {
				$terms = get_term($brand->term_id, 'brands');
				?>
				<div class="col-xs-6 col-md-3 brand">
					<a href="<?php echo get_term_link($brand); ?>">
						<?php echo '<img src="'.get_field('logo', $terms).'">'; ?>
					</a>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>
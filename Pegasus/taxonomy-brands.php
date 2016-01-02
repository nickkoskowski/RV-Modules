<?php get_header(); ?>
<main>
	<div id="logos">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xs-6">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-2.png">
				</div>
				<div class="col-md-6 col-xs-6 text-right">
					<?php 
					$terms = get_the_terms(get_the_ID(), 'brands');
					if (is_array($terms)) {
						$term = array_pop($terms);
						echo '<img src="'.get_field('logo', $term).'">'; 
					}
					?>
				</div>
			</div>
	</div>
</div>
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
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-xs-6 col-md-3 text-center">
				<a href="<?php the_permalink(); ?>">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}  ?>
					<?php the_title(); ?>
				</a>
			</div>
		<?php endwhile; endif; ?>
	</div>
</div>
</div>
</main>
<?php get_footer(); ?>
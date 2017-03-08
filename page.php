<?php get_header(); ?>
<?php get_template_part('partials/menu'); ?>
<section id="breadcrumbs">
	<div class="container">
		<div class="row-fluid">
			<?php if ( function_exists( 'yoast_breadcrumb' ) ) {
	yoast_breadcrumb();
} ?>
		</div>
	</div>
</section>
<div class="container">
	<div class="row">

		<div class="col-sm-8">
			<?php if(has_post_thumbnail() ) { ?>
			<?php the_post_thumbnail( 'full', array( 'class' => 'page-mains' ) ); ?>
			<?php } ?>
			<div class="row-fluid">
				<?php if(have_posts()):while(have_posts()):the_post(); ?>
					<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
		<div class="col-sm-4">
			<?php get_sidebar(); ?>
		</div>

	</div>
</div>
<?php get_footer(); ?>
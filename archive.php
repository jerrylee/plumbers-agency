<?php get_header(); ?>
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
          <div class="row-fluid">
            <?php if(have_posts()):while(have_posts()):the_post(); ?>
              <?php the_post_thumbnail( 'full', array( 'class' => 'blog' ) ); ?>
              <p><?php the_excerpt(); ?></p>
            <?php the_content(); ?><hr />
            <?php endwhile; endif; ?>
          </div>
        </div>
        <div class="col-sm-4">
          <?php get_sidebar(); ?>
        </div>

      </div>
    </div>
    <?php get_footer(); ?>
<?php
/**
Template Name: Blank Page - MySiteAuditor
Template By : MySiteAuditor
Template designed By : Marvin Russell
URL : https://mysiteauditor.com
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<title><?php _e('Try our Free Website Audit Tool'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="full-width-page ">

    <div id="content" class="content">

        <?php
        if ( have_posts() ) :

            while (have_posts() ) : the_post(); ?>

                <div id="full-width-page" class="row clr boxed">
                    <div id="page-heading">
                    </div><!-- /page-heading -->

                    <article class="entry clr">
                        <?php the_content(); ?>
                    </article><!-- /entry -->
                </div>

                <?php
            endwhile;

        endif;

        ?>

    </div><!-- .site-content -->
</div>

<?php wp_footer(); ?>

</body>
</html>

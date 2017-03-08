<?php 
/*
 * Template Name: Locations Served
*/
get_header(); ?>
<?php get_template_part('partials/splash'); ?>
<style>
.page-template-all-locations .col-sm-12 {
  -webkit-column-count: 3; /* Chrome, Safari, Opera */
    -moz-column-count: 3; /* Firefox */
    column-count: 3;
}
.page-template-all-locations .page_item {
  padding:10px;
  margin-bottom:10px;
  border-radius:5px;
  background-color:#ddd;
  color:#444;
}
.page-template-all-locations .page_item a {
  color:#444;
}
</style>
<div class="container">
<div class="row">
<div class="col-sm-12">
<?php wp_list_pages(array( 'title_li' => 'Locations Most Often Served' ));
?>
<hr />
<?php ?>
</div><!--/col-sm-12-->
</div><!--/row-->
</div><!--/container-->
<?php get_footer(); ?>
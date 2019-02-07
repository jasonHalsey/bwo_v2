<?php
/*
Template Name: guided trips
*/
  get_header();
?>
<section class="interior_hero river_archive_hero">
  
</section>
<!-- TODO: Add Backgroungd Image Header  -->
<div class="row">
  <h3 class="page_title"><?php the_title();?></h3> 
  <h3 class="page_subtitle">Book Your Adventure Today</h3>
</div>


<div class="row">

<button class='flybook-book-now-button fb-widget-type-frontend fb-default-category-id-0 fb-account-id-122 fb-entity-config-id- fb-domain-go.theflybook.com fb-protocol-https' style='background-color: #ee5505;'>BOOK NOW</button><link rel='stylesheet' href='https://go.theflybook.com/content/bootstrapper/flybookbootstrap.css' /><script src='https://go.theflybook.com/custom/bootstrapper/flybookbootstrap.js'></script>

<div class="insta_footer">
  <?php if ( is_active_sidebar( 'instagram_footer_1' ) ) : ?>
          <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
            <?php dynamic_sidebar( 'instagram_footer_1' ); ?>
          </div><!-- #primary-sidebar -->
        <?php endif; ?>
</div>
<?php get_footer(); ?>
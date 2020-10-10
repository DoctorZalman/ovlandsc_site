<?php
defined( 'ABSPATH' ) || exit;
get_header();
//Single post blog
the_post();
?>
<?php get_template_part('template-parts/title/title'); ?>

  <!--blog list-->
  <div class="blogpage pagepadding ">
    <div class="container">
      <div class="row blog content-sidebar">

          <div class="col-sm-12 col-md-8 content-area">
          <div class="blog-details">
            <div class="entry-header">
              <div class="entry-thumbnail margbtm30">
                <?php the_post_thumbnail( 'full', 'photo' ); ?>
              </div>
              <h1 class="entry-title">
                <a href="#"><?php the_title(); ?></a>
              </h1>
              <div class="entry-meta">
                <a href="#"><?php echo get_the_date('F d Y') ?></a> /
		              <?php the_author(); ?>
              </div>
            </div>
            <div class="entry-content">
             <?php the_content(); ?>
              <br>
              <div class="entry-footer">
                <span class="tags-links">
                  <?php the_tags('Теги: ');?>
                </span>
	              <?php get_template_part('template-parts/buttons/social' ); ?>
              </div>
	            <?php get_template_part('template-parts/buttons/navigation' ); ?>
	            <?php comments_template(); ?>
            </div>
          </div>
        </div>
	      <?php get_template_part('template-parts/sidebar/right_sidebar'); ?>
      </div>
    </div>
  </div>
  <!--blog list end-->
<?php get_footer();?>
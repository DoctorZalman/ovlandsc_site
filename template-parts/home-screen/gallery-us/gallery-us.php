<?php
if (! defined('ABSPATH')){
  exit; // Exit if accessed directly
}
?>
<div class="gallery-1">
  <div class="container">
    <div class="grd-section-title  grd_title-type-1 text-center margbtm30">
      <h3 class="title">Наші проекти</h3>
      <div class="desc">
        <p>тут "загальний опис" проектів</p>
      </div>
    </div>
    <div class="row grd-portfolio-shortcode">
	    <?php foreach (getGallery() as $gallery) : ?>
      <div class="col-sm-6 col-md-3  portfolio-item">
        <div class="content-item">
          <div class="entry-header">
            <a href="<?php echo get_the_permalink($gallery -> ID); ?>" class="entry-thumbnail">
              <img alt="Communal Garden" src="<?php echo get_the_post_thumbnail_url( $gallery->ID, 'our_project' ); ?>"</a>
          </div>
          <div class="entry-content">
            <div class="entry-title"><a href="<?php the_permalink(); ?>"><h3 class="title"><?php echo $gallery -> post_title;?></h3></a>
              <div class="entry-meta"><a class="category" href="#"><?php echo wp_trim_words($gallery -> post_excerpt, '10' );?></a></div>
            </div>
            <div class="readmore">
              <a href="<?php echo get_the_permalink($gallery -> ID); ?>" class="entry-read-more">
                <div class="read-more"><span class="svg-icon"><i class="flaticon-right"></i></span> Дізнатись більше...</div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
	  <?php get_template_part('template-parts/buttons/button_viev_more'); ?>
  </div>
</div>

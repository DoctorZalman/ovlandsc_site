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
            <a href="#" class="entry-thumbnail">
              <img alt="Communal Garden" src="<?php echo get_the_post_thumbnail_url( $gallery->ID, 'full' ); ?>"</a>
          </div>
          <div class="entry-content">
            <div class="entry-title"><a href="#"><h3 class="title"><?php echo $gallery -> post_title;?></h3></a>
              <div class="entry-meta"><a class="category" href="#">Lawn Care</a></div>
            </div>
            <div class="readmore">
              <a href="#" class="entry-read-more">
                <div class="read-more"><span class="svg-icon"><i class="flaticon-right"></i></span> Read more</div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="grd-button-group grd-align-center">
      <a href="#" class="grd-button hidden-xs hover-1"><span>View More</span></a>
    </div>
  </div>
</div>

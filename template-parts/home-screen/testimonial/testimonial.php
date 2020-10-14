<?php
if (! defined('ABSPATH')){
  exit; // Exit if accessed directly
}
?>
<div class="testimonials-1">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="grd-section-title  grd_title-type-2">
          <h3 class="title">Відгуки</h3>
          <div class="desc">
            <p>залишені нашими клієнтами</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="grd-button-group grd-align-right">
          <a href="#" class="grd-button  hover-2">
            <span class="svg-icon"><i class="flaticon-right"></i></span>
            <span>більше відгуків</span>
          </a>
        </div>
      </div>
    </div>
    <div class="dl_testimorial_carousel testone-slide no-star">
	    <?php foreach (getTestimonial() as $testimonial) :?>
      <div class="item-testi style-1">
        <div class="box-text">
          <div class="svg-icon">
            <i class="flaticon-quotation"></i>
          </div>
          <p class="content"> “<?php echo wp_trim_words($testimonial -> post_excerpt, '10' );?>”</p>
        </div>
        <div class="box-avatar">
	        <?php echo get_the_post_thumbnail($testimonial->ID,'full' ); ?>
          <h3><?php echo esc_html($testimonial->post_title); ?></h3>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

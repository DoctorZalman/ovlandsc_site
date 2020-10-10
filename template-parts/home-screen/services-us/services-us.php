<?php
if (! defined('ABSPATH')){
  exit; // Exit if accessed directly
}
?>
<div class="services-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="col-xs-12 grd-icon-box grd-icon-box-3 icon-theme-light  border">
          <div class="icon-box-wrapter">
            <a href="#" class="icon">
              <div class="icon-content">
                <span class="svg-icon"><img src="<?php echo get_template_directory_uri();?>/images/icon/oms-leaf.png" alt=""></span>
              </div>
            </a>
            <a href="#" class="emtry-title">
              <p class="title">Наші
                <br>сервіси</p>
            </a>
            <div class="content">
              <div class="descreption">Короткий опис послуг</div>
            </div>
          </div>
          <div class="box_btn"><a href="<?php echo home_url('/service'); ?>">Усі послуги</a></div>
        </div>
      </div>
	    <?php
      $i = 1;
      foreach (getServices() as $services) :?>
         <div class="col-lg-4 col-md-4 col-sm-12 <?php echo $i; ?>">
        <div class="grd-image-box-1 icon-theme-light">
          <div class="entry-title"><a href="#"><h4 class="title"><?php echo $services -> post_title;?></h4></a></div>
          <div class="entry-icon">
            <span class="svg-icon"><i class="flaticon-hills"></i></span>
          </div>
          <div class="entry_thumbnail">
            <img src="<?php echo get_the_post_thumbnail_url( $services->ID, 'full' ); ?>" alt="img" width="600" height="324">
            <a href="#" class="hover"></a>
          </div>
          <div class="entry-content"><?php echo wp_trim_words($services -> post_excerpt, '10' );?></div>
        </div>
      </div>
      <?php
          $i++;
      endforeach; ?>
    </div>
  </div>
</div>

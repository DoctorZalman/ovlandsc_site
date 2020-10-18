<?php
defined( 'ABSPATH' ) || exit;
// why choose us
?>
<!--why choose us-->
<div class="whyus-1">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <div class="grd-section-title sc-dark  grd_title-type-2 margbtm40">
          <h3 class="title"><?php the_field('why_choose_us_title', '244'); ?></h3>
          <div class="desc">
            <p><?php the_field('why_choose_us_desc', '244'); ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-5 col-lg-offset-1 col-sm-12">
	      <?php $why_choose = get_field('why_choose_us_options', '244');?>
        <div class="icon-box-list">
          <div class="col-xs-12 icon-box-list-items grd-icon-box-list-1 icon-theme-light ">
            <div class="icon-box-wrapter">
              <a href="#" class="icon">
                <div class="icon-content"><span class="svg-icon"><i class="flaticon-clock"></i></span></div>
              </a>
              <a href="#" class="emtry-title">
                <h3 class="title" title="On Time, Every Time"><?php echo wp_trim_words($why_choose ['why_choose_us_options_1_title'], '15'); ?></h3>
              </a>
              <div class="content">
                <div class="descreption"><?php echo wp_trim_words($why_choose ['why_choose_us_options_1_desc'], '15'); ?></div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 icon-box-list-items grd-icon-box-list-1 icon-theme-light ">
            <div class="icon-box-wrapter">
              <a href="#" class="icon">
                <div class="icon-content"><span class="svg-icon"><i class="flaticon-love"></i></span></div>
              </a>
              <a href="#" class="emtry-title">
                <h3 class="title" title="Public Liability Insurance"><?php echo wp_trim_words($why_choose ['why_choose_us_options_2_title'], '15'); ?></h3>
              </a>
              <div class="content">
                <div class="descreption"><?php echo wp_trim_words($why_choose ['why_choose_us_options_2_desc'], '15'); ?></div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 icon-box-list-items grd-icon-box-list-1 icon-theme-light ">
            <div class="icon-box-wrapter">
              <a href="#" class="icon">
                <div class="icon-content"><span class="svg-icon"><i class="flaticon-house"></i></span></div>
              </a>
              <a href="#" class="emtry-title">
                <h3 class="title" title="Tailor-Made Designs"><?php echo wp_trim_words($why_choose ['why_choose_us_options_3_title'], '15'); ?></h3>
              </a>
              <div class="content">
                <div class="descreption"><?php echo wp_trim_words($why_choose ['why_choose_us_options_3_desc'], '15'); ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>
</div>
</div>
<!--why choose us end-->

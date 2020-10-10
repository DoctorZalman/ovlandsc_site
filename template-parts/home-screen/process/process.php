<?php
if (! defined('ABSPATH')){
  exit; // Exit if accessed directly
}

$m = ['consulting','blueprint','park','gardening']
?>
<div class="working-process-1">
  <div class="container">
    <div class="grd-section-title  grd_title-type-1 sc-dark text-center margbtm30">
      <h3 class="title">Етапи нашої роботи</h3>
      <div class="desc">
        <p>тут короткий опис "етапів"</p>
      </div>
    </div>
    <div class="row">
	    <?php

      $i = 0;

      foreach (getOur_process() as $our_process) :
          if ($i > 3) $i=0;
	    ?>
      <div class="col-sm-6 col-md-3 col-xs-12">
        <div class="grd-icon-box grd-icon-box-4 icon-theme-dark text-center clearfix">
          <div class="icon-box-wrapter">
            <a href="#" class="icon">
              <div class="icon-content"><span class="svg-icon"><i class="flaticon-<?php echo $m[$i] ?>"></i></span></div>
            </a>
            <a href="#" class="emtry-title">
<!--              <p class="title">--><?php //the_field('step_1_title'); ?><!--</p>-->
              <p class="title"><?php echo $our_process ['step_1_title']; ?> </p>
            </a>
            <div class="content">
              <div class="descreption"><span><?php echo $our_process ['step_1_desk']; ?></span></div>
<!--              <div class="descreption"><span>--><?php //the_field('step_1_desc'); ?><!--</span></div>-->
            </div>
          </div>
          <div class="text-footer"><?php echo $our_process ['step_1_step']; ?></div>
<!--          <div class="text-footer">--><?php //the_field('step_1_step'); ?><!--</div>-->
        </div>
      </div>
      <?php
      $i++;
      endforeach;?>
    </div>
  </div>
</div>

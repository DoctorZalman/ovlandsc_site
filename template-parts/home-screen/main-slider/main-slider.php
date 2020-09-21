<?php
if (! defined('ABSPATH')){
  exit; // Exit if accessed directly
}
?>
<section class="rev_slider_wrapper">
  <div id="slider1" class="rev_slider" data-version="5.0">
    <ul>
      <!-- SLIDE 1 -->
	    <?php
      $i = 1;
      foreach (getSliders() as $slider) :

	    ?>
      <li data-index="rs-<?php echo $i; ?>" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo get_the_post_thumbnail_url( $slider -> ID, 'full' );?>" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
        <!-- MAIN IMAGE -->
        <img src="<?php echo get_the_post_thumbnail_url( $slider -> ID, 'full' );?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
        <!-- LAYERS -->

        <!-- LAYER NR. 1 -->
        <div class="tp-caption tp-resizeme bigtitle text-white rs-parallaxlevel-0" id="slide-<?php echo $i; ?>-layer-2" data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['180','160','130','80']" data-fontsize="['59','46','40','36']" data-lineheight="['70','60','50','45']" data-fontweight="['600','600','700','700']" data-width="['700','650','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on"><?php echo $slider -> post_title; ?>
        </div>
        <!-- LAYER NR. 2 -->
        <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0 mobilehide" id="slide-<?php echo $i; ?>-layer-3" data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['350','290','250','190']" data-fontsize="['18','18','16','13']" data-lineheight="['30','30','28','25']" data-fontweight="['400','400','600','600']" data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:-100px;opacity:0;s:1000;e:Power3.easeOut;" data-transform_out="x:-100px;opacity:0;s:700;e:Power2.easeInOut" data-start="1800" data-splitin="none" data-splitout="none" data-responsive_offset="on"><?php echo $slider->post_content; ?>
        </div>
        <!-- LAYER NR. 3 -->
        <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-<?php echo $i; ?>-layer-4" data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']" data-y="['top','top','top','top']" data-voffset="['450','370','340','270']" data-fontsize="['18','18','16','16']" data-lineheight="['30','30','30','30']" data-fontweight="['400','400','600','600']" data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on"><a href="<?php the_permalink($slider -> ID); ?>" class="slider-link-style1">MORE ABOUT OUR COMPANY </a>
        </div>
      </li>
	      <?php
	      $i++;
      endforeach;
      ?>
    </ul>

  </div>
</section>

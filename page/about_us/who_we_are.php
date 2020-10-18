<?php
defined( 'ABSPATH' ) || exit;
/* Template name: Who we are */
// who we are
?>
<div class="aboutus-5">
	<div class="container">
		<div class="grd-section-title  grd_title-type-1 text-center margbtm50">
			<h3 class="title"><?php echo esc_html( get_the_title('157') );?></h3>
			<div class="desc">
				<p><?php the_field('who_we_are_desc3', '157'); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="aboutweare">
					<h3><?php the_field('who_we_are_desc1', '157'); ?></h3>
					<p><?php the_field('who_we_are_desc2', '157'); ?></p>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="aboutweimg">
<!--			--><?php //$who_we_are = get_field('who_we_are_img', the_ID());?>
<!--          <img src="--><?php //echo ($who_we_are['who_we_are_img']['sizes']['who_we_are']); ?><!--" alt="img" />-->
          <img src="<?php echo get_template_directory_uri();?>/images/resources/banner-1.png" alt="" />
        </div>
			</div>
		</div>
  </div>
</div>

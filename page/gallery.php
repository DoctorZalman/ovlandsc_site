<?php
/*Template Name: Gallery Page*/
defined('ABSPATH') || exit;
get_header();
?>
<?php get_template_part('template-parts/title/title'); ?>
	<!-- projects -->
	<div class="gallery-fullwidth pagepadding">
		<div class="grd-portfolio-shortcode grd-full-width clearfix">
			  <div class="grd_portfolio_grid filterlist row">
          <?php foreach (getAllgallery() as $allGallery) :
              ?>

				  <div class="portfolio-item  col-sm-6 col-xs-12 col-md-3  item-full-width lawn-care">
					<div class="content-item">
						<div class="entry-header">
							<a href="#" class="entry-thumbnail"><?php echo get_the_post_thumbnail( $allGallery->ID,'full' );?></a>
							<a href="#" class="entry-title"><h3 class="title"><?php echo esc_html($allGallery->post_title); ?></h3> </a>
						</div>
						<div class="entry-content">
							<div class="entry-title"><a href="#"><h3 class="title"><?php echo esc_html($allGallery->post_title); ?></h3></a>
								<div class="entry-meta">
                  <a class="category" href="#"><?php echo wp_trim_words($allGallery -> post_excerpt, '10' );?></a>
                </div>
							</div>
							<div class="readmore">
								<a href="<?php echo get_the_permalink($allGallery -> ID); ?>" class="entry-read-more">
									<div class="read-more"><span class="svg-icon"><i class="flaticon-right"></i></span> Дізнатись більше...</div>
								</a>
							</div>
						</div>
					</div>
				</div>
      <?php endforeach; ?>
    </div>
	</div>
  </div>
  <!--End pagewrapper-->
	<!-- projects end -->
<?php get_footer(); ?>
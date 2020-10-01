<?php
/*Template Name: Gallery Page*/
defined('ABSPATH') || exit;
get_header();
?>
<?php get_template_part('template-parts/title/title'); ?>
	<!-- projects -->
	<div class="gallery-fullwidth pagepadding">
		<div class="grd-portfolio-shortcode grd-full-width clearfix">
<!--			<div class="nav-section">-->
<!--				<ul class="nav-filter">-->
<!--					<li><a href="#" class="active" data-filter="*">View All</a></li>-->
<!--					<li><a href="#" class="" data-filter=".lawn-care">Lawn Care</a></li>-->
<!--					<li><a href="#" class="" data-filter=".planting">Planting</a></li>-->
<!--					<li><a href="#" class="" data-filter=".snow-removing">Snow Removing</a></li>-->
<!--					<li><a href="#" class="" data-filter=".water-irrigation">Water Irrigation</a></li>-->
<!--				</ul>-->
<!--			</div>-->
			  <div class="grd_portfolio_grid filterlist row">
          <?php foreach (getAllgallery() as $allGallery) :
              ?>

				  <div class="portfolio-item  col-sm-6 col-xs-12 col-md-3  item-full-width lawn-care">
					<div class="content-item">
						<div class="entry-header">
							<a href="#" class="entry-thumbnail"><?php echo get_the_post_thumbnail( $allGallery->ID,'full' ); ?></a>
							<a href="#" class="entry-title"><h3 class="title">Lessons of Resilience</h3> </a>
						</div>
						<div class="entry-content">
							<div class="entry-title"><a href="#"><h3 class="title">Lessons of Resilience</h3></a>
								<div class="entry-meta"><a class="category" href="#">Lawn Care</a></div>
							</div>
							<div class="readmore">
								<a href="<?php echo get_the_permalink($allGallery -> ID); ?>" class="entry-read-more">
									<div class="read-more"><span class="svg-icon"><i class="flaticon-right"></i></span> Read more</div>
								</a>
							</div>
						</div>
					</div>
				</div>
      <?php endforeach; ?>
    </div>
		<div class="text-center">
			<a href="#" class="grdrd-button">View More</a>
		</div>
	</div>
	<!-- projects end -->
<?php get_footer(); ?>
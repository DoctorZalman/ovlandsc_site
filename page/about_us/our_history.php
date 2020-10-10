<?php
defined( 'ABSPATH' ) || exit;
// our_history
?>
<!--our history-->
<div class="ourhistory">
	<div class="container">
		<div class="grd-section-title  grd_title-type-1 text-center">
			<h3 class="title"><?php the_field('history_company', '177'); ?></h3>
			<div class="desc">
				<p><?php the_field('desc_history_company', '177'); ?></p>
			</div>
		</div>
		<div class="row dl_timeline">
			<div class="history-slide">
		  <?php foreach (getOur_history() as $our_history) : ?>
				<div class="box-timeline">
					<div class="hook"><span></span><span></span></div>
              <h4><?php the_field('company_year', $our_history->ID); ?></h4>
          <div class="box-img">
	          <?php echo get_the_post_thumbnail( $our_history->ID,'full' ); ?>
						<div class="overlay">
							<h2><?php echo esc_html($our_history->post_title); ?></h2>
							<p><?php echo wp_trim_words($our_history -> post_excerpt, '10' );?></p>
						</div>
					</div>
				</div>
      <?php endforeach; ?>
			</div>
		</div>
	</div>
</div>

<!--our history us-->
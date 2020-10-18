<?php
/*Template name: Service Page*/
get_header();
?>
<?php get_template_part('template-parts/title/title'); ?>

<div class="gallery-fullwidth pagepadding">
  <div class="grd-portfolio-shortcode grd-full-width clearfix">
    <div class="grd_portfolio_grid filterlist row">
		<?php foreach (getServices_page() as $services) :?>
          <div class="portfolio-item  col-sm-6 col-xs-12 col-md-3  item-full-width lawn-care">
            <div class="content-item">
              <div class="entry-header">
                <a href="<?php echo get_the_permalink($services -> ID); ?>" class="entry-thumbnail "><img class="services-img" src="<?php echo get_the_post_thumbnail_url( $services->ID, 'project_single_post' );  ?>" alt="img" title="04" width="600" height="324"></a>
                <a href="<?php echo get_the_permalink($services -> ID); ?>" class="entry-title">
                  <h3 class="title"><?php echo esc_html($services->post_title); ?></h3> </a>
              </div>
              <div class="entry-content">
                <div class="entry-title"><a href="<?php echo get_the_permalink($services -> ID); ?>">
                    <h3 class="title"><?php echo esc_html($services->post_title); ?></h3></a>
                  <div class="entry-meta">
                    <a class="category" href="<?php echo get_the_permalink($services -> ID); ?>"><?php echo wp_trim_words($services -> post_content, '20' );?></a>
                  </div>
                </div>
                <div class="readmore">
                  <a href="<?php echo get_the_permalink($services -> ID); ?>" class="entry-read-more">
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
<?php get_footer();?>

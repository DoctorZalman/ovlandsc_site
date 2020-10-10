<?php
defined( 'ABSPATH' ) || exit;
get_header();
//Single post gallery
?>
<?php get_template_part('template-parts/title/title'); ?>

  <!-- projects single -->
  <div class="gallery-single pagepadding">
    <div class="container">
	    <?php the_post(); ?>
      <div class="row">
<?php foreach (getAllgallery() as $allGallery) :
	?>
        <div class="col-md-8 col-sm-12">
          <div class="gsleft">
            <div class="box-img"><?php echo get_the_post_thumbnail( $allGallery->ID,'full' ); ?><?php the_field('project_single_photo'); ?></div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="grd_portfolio_atrrs clearfix">
            <ul>
              <li>
                <p>Клієнт</p><span>:</span><span> <?php the_field('сlient_project'); ?></span></li>
              <li>
                <p>Початок проекту</p><span>:</span><span><?php the_field('starts_on_project'); ?></span></li>
              <li>
                <p>Завершення проекту</p><span>:</span><span> <?php the_field('ends_on_project'); ?></span></li>
              <li>
                <p>Локація</p><span>:</span><span> <?php the_field('location_project'); ?></span></li>
              <li>
                <p>Бюджет</p><span>:</span><span> <?php the_field('budget_project'); ?></span></li>
            </ul>
          </div>
        </div>
<?php endforeach; ?>
  </div>
      <h3>Опис проекту</h3>
      <p><?php the_field('project_details'); ?></p>
        <?php get_template_part('template-parts/buttons/navigation' ); ?>

    </div>
  </div>

  <!-- projects end -->
<?php get_footer();?>
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

        <div class="col-md-8 col-sm-12">
          <div class="gsleft">
	          <?php
            $photos = get_field('single_photo', the_ID());
            foreach ($photos as $photo) : ?>
              <div class="box-img"><img src="<?php echo($photo['project_single_photo']['sizes']['project_single_post_slider']); ?>" alt="slider" /></div>
            <? endforeach;?>
          </div>
        </div>
          <?php $details = get_field('project_details');?>
        <div class="col-md-4 col-sm-12">
          <div class="grd_portfolio_atrrs clearfix">
            <ul>
              <li>
                <p>Клієнт</p><span>:</span><span> <?php echo $details['сlient_project']; ?></span></li>
              <li>
                <p>Початок проекту</p><span>:</span><span><?php echo $details['starts_on_project']; ?></span></li>
              <li>
                <p>Завершення проекту</p><span>:</span><span> <?php echo $details['ends_on_project']; ?></span></li>
              <li>
                <p>Локація</p><span>:</span><span> <?php echo $details['location_project']; ?></span></li>
              <li>
                <p>Бюджет</p><span>:</span><span> <?php echo $details['budget_project']; ?></span></li>
            </ul>
          </div>

        </div>
  </div>
      <h3>Опис проекту</h3>
      <p><?php the_field('desc_details'); ?></p>
        <?php get_template_part('template-parts/buttons/navigation' ); ?>

    </div>
  </div>

  <!-- projects end -->
<?php get_footer();?>
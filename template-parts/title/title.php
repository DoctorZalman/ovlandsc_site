<?php
defined( 'ABSPATH' ) || exit;
/* Title part */
?>
  <!--Page header-->
  <div class="page-header  parallax has-image">
    <div class="page-header-content">
      <div class="featured-image"></div>
      <div class="container">
        <div class="header-box">
          <div class="page-title">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="header-breadcrumb">
            <nav class="breadcrumbs"><a class="home" href="<?php echo home_url();?>"><span>Головна</span></a><a href="<?php the_permalink(); ?>"> <?php if (get_the_category()) echo '/ ';  the_category(','); ?> / <?php the_title(); ?></a>

            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Page header end-->
<?php
/* Template name: Home Page */
get_header(); ?>

<body class="home header-sticky header-v1 hide-topbar-mobile">
<div id="page" class="hfeed site">
  <!-- Preloader-->
  <div class="preloader"></div>
  <?php get_template_part('template-parts/home-screen/masthead-header/masthead-header'); ?>
  <?php get_template_part('template-parts/home-screen/main-slider/main-slider'); ?>
<!--  --><?php //get_template_part('template-parts/home-screen/why-choose-us/why-choose-us'); ?>
  <?php get_template_part('template-parts/home-screen/services-us/services-us'); ?>
  <?php get_template_part('template-parts/home-screen/gallery-us/gallery-us'); ?>
  <?php get_template_part('template-parts/home-screen/process/process'); ?>
  <?php get_template_part('template-parts/home-screen/testimonial/testimonial'); ?>
  <?php get_template_part('template-parts/home-screen/awards/awards'); ?>
  <?php get_template_part('template-parts/home-screen/blogs/blogs'); ?>
  <?php get_template_part('template-parts/home-screen/request-form/request-form'); ?>
  <?php get_template_part('template-parts/home-screen/customer-help/customer-help'); ?>
<?php get_footer(); ?>
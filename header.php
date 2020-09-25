<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?> ">
  <title><?php bloginfo('name'); ?><?php wp_title(''); ?></title>
  <!--Favicon-->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico" type="image/x-icon">
  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head() ?>
</head>

<body class="home header-sticky header-v1 hide-topbar-mobile">
<div id="page" class="hfeed site">

<header id="masthead" class="site-header">
  <div class="header-main clearfix">
    <div class="container">
      <div class="row menu-row">
        <div class="site-logo col-lg-3 col-xs-9">
          <a href="<?php echo home_url();?> class="logo"><img src="<?php echo get_template_directory_uri();?>/images/14-01.svg" alt="GRD" class="logo"></a>
        </div>
        <div class="header-content col-lg-9 col-md-12 col-xs-12 pull-right">
          <!-- top bar -->
          <div id="topbar" class="topbar ">
            <div class="topbar-widgets clearfix">
              <div class="widget">
                <ul class="socials">
                  <!--	                --><?php //echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
                  <li> <a href=""><i class="fa fa-linkedin"></i></a></li>
                  <li> <a href=""><i class="fa fa-skype"></i></a></li>
                  <li> <a href=""><i class="fa fa-twitter"></i></a></li>
                  <li> <a href=""><i class="fa fa-facebook"></i></a></li>
                </ul>
              </div>
              <div class="widget">
                <div class="pull-left"><span class="svg-icon"><i class="flaticon-call-answer"></i></span></div>
                <div class="pull-right">
					<?php foreach (getCall_us() as $call_us) :?>
                      <div><?php echo $call_us ['title_field']; ?></div>
                      <div><a href="tel:<?php echo $call_us ['business_number']; ?>"><?php echo $call_us ['business_number']; ?></div>
					<?php endforeach; ?>
                </div>
              </div>
              <div class="widget">
                <div class="pull-left"><span class="svg-icon"><i class="flaticon-timer"></i></span></div>
                <div class="pull-right">
					<?php foreach (getSchedule() as $schedule) :?>
                      <div class="title">Графік роботи</div>
                      <div class="sub-title"><?php echo $schedule ['working_days']; ?> : <?php echo $schedule ['working_hours_start']; ?> - <?php echo $schedule ['working_hours_end']; ?></div>
					<?php endforeach; ?>
                </div>
              </div>
              <div class="menu-block-right"></div>
            </div>
          </div>
          <!-- top bar -->
          <div class="site-menu">
            <nav id="site-navigation" class="main-nav primary-nav nav">
				<?php
				wp_nav_menu( [
					'theme_location'  => 'nav_menu',
					'container'       => 'null',
					'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
				] );
				?>
            </nav>
          </div>
        </div>
        <div class="navbar-toggle col-xs-3">
          <span id="mf-navbar-toggle" class="navbar-icon"> <span class="navbars-line"></span> </span>
        </div>
      </div>
    </div>
  </div>
</header>

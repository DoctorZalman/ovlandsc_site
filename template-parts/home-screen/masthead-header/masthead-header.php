<?php
if (! defined('ABSPATH')){
  exit; // Exit if accessed directly
}
?>
<header id="masthead" class="site-header">
  <div class="header-main clearfix">
    <div class="container">
      <div class="row menu-row">
        <div class="site-logo col-lg-3 col-xs-9">
          <a href="index.html" class="logo"><img src="<?php echo get_template_directory_uri();?>/images/14-01.svg" alt="GRD" class="logo"></a>
<!--          <h1 class="site-title"><a href="#">GRD</a></h1>-->
<!--          <h2 class="site-description">Just another Html Template  site</h2>-->
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
<!--              <ul class="menu">-->
<!--                <li class="active has-children"><a href="index.html" class="dropdown-toggle">Home</a>-->
<!--                  <ul class="sub-menu">-->
<!--                    <li><a href="index.html">Home Page 1</a></li>-->
<!--                    <li><a href="home-page-2.html">Home Page 2</a></li>-->
<!--                    <li><a href="home-page-3.html">Home Page 3</a></li>-->
<!--                    <li><a href="home-page-4.html">Home Page 4</a></li>-->
<!--                  </ul>-->
<!--                </li>-->
<!--                <li class="has-children"><a href="#" class="dropdown-toggle">About Us</a>-->
<!--                  <ul class="sub-menu">-->
<!--                    <li><a href="about-us.html">About Our Company</a></li>-->
<!--                    <li><a href="mission-values.html">Mission & Values</a></li>-->
<!--                    <li><a href="why-choose-us.html">Why Choose Us</a></li>-->
<!--                    <li><a href="meet-our-team.html">Meet Our Team</a></li>-->
<!--                    <li><a href="faqs.html">FAQ’s</a></li>-->
<!--                    <li><a href="pricing-plans.html">Pricing & Plans</a></li>-->
<!--                  </ul>-->
<!--                </li>-->
<!--                <li class="has-children"><a href="services.html" class="dropdown-toggle">Services</a>-->
<!--                  <ul class="sub-menu">-->
<!--                    <li><a href="design-planting.html">Design & Planting</a></li>-->
<!--                    <li><a href="lawn-garden-care.html">Lawn & Garden Care</a></li>-->
<!--                    <li><a href="snow-cleaning.html">Snow Cleaning</a></li>-->
<!--                    <li><a href="spring-cleanup.html">Spring Cleanup</a></li>-->
<!--                    <li><a href="hardscaping.html">Hardscaping</a></li>-->
<!--                    <li><a href="irrigation-system.html">Irrigation System</a></li>-->
<!--                  </ul>-->
<!--                </li>-->
<!--                <li class="has-children"><a href="gallery.html" class="dropdown-toggle">Gallery</a>-->
<!--                  <ul class="sub-menu">-->
<!--                    <li><a href="gallery-classic.html">Gallery Classic</a></li>-->
<!--                    <li><a href="gallery-full-width.html">Gallery Full Width</a></li>-->
<!--                    <li><a href="gallery-modern.html">Gallery Modern</a></li>-->
<!--                    <li><a href="single-gallery.html">Single Gallery</a></li>-->
<!--                  </ul>-->
<!--                </li>-->
<!--                <li class="has-children"><a href="blog.html" class="dropdown-toggle">Blog</a>-->
<!--                  <ul class="sub-menu">-->
<!--                    <li><a href="blog-default.html">Blog Default</a></li>-->
<!--                    <li><a href="blog-large-image.html">Blog Large Image</a></li>-->
<!--                    <li><a href="blog-single.html">Single Post</a></li>-->
<!--                  </ul>-->
<!--                </li>-->
<!--                <li class="has-children"><a href="shop.html" class="dropdown-toggle">Shop</a>-->
<!--                  <ul class="sub-menu">-->
<!--                    <li><a href="shop.html">Our Products</a></li>-->
<!--                    <li><a href="single-product.html">Product Single</a></li>-->
<!--                    <li><a href="cart.html">Shopping Cart</a></li>-->
<!--                    <li><a href="checkout.html">Checkout</a></li>-->
<!--                    <li><a href="my-account.html">My account</a></li>-->
<!--                  </ul>-->
<!--                </li>-->
<!--                <li><a href="contact.html">Contact</a></li>-->
<!--                <li id="mf-active-menu" class="mf-active-menu"></li>-->
<!--              </ul>-->
            </nav>
<!--            <ul class="menu-extra">-->
<!--              <li class="extra-menu-item menu-item-cart mini-cart woocommerce">-->
<!--                <a class="cart-contents" href="#">-->
<!--                  <span class="text-mobile">Shopping Cart</span>-->
<!--                  <span class="svg-icon"><i class="flaticon-shopping-cart"></i></span>-->
<!--                </a>-->
<!--                <div class="grd-mini-cart-content">-->
<!--                  <div class="widget_shopping_cart_content">-->
<!--                    <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </li>-->
<!--              <li class="extra-menu-item menu-item-schedule schedule">-->
<!--                <span class="text-mobile">Schedule</span><i class="fa fa-calendar"></i>-->
<!--                <div class="schedule-content"><a href="#">Make an Appointment</a></div>-->
<!--              </li>-->
<!--            </ul>-->
          </div>
        </div>
        <div class="navbar-toggle col-xs-3">
          <span id="mf-navbar-toggle" class="navbar-icon"> <span class="navbars-line"></span> </span>
        </div>
      </div>
    </div>
  </div>
</header>
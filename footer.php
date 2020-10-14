<?php
/**
 * Footer
 */
wp_footer();
?>
<!-- footer -->
<div class="footer-widgets">
  <div class="container">
    <div class="row">
      <div class="footer-sidebar footer-1 col-xs-12 col-sm-6 col-md-3">
        <div class="widget widget_media_image">
          <a href="<?php echo home_url()?>">
          <img src="<?php echo get_template_directory_uri();?>/images/14-01.svg" width="253" alt="Footer Logo">
        </div>
        <h4>OV-Landscape</h4>
        <p><?php the_field('gaslo_team', 'options');?></p>
<!--        <div class="map-link">-->
<!--          <a href="#"><span class="svg-icon"><i class="flaticon-right"></i></span> Find Us On Map</a>-->
<!--        </div>-->

      </div>
      <div class="footer-sidebar footer-2 col-xs-12 col-sm-6 col-md-3">
        <div class="widget">
          <h4 class="widget-title">Меню</h4>
	        <?php
	        wp_nav_menu( [
		        'theme_location'  => 'footer_menu',
		        'container'       => 'null',
		        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
	        ] );
	        ?>
          <div class="clear"></div>
        </div>
      </div>
      <div class="footer-sidebar footer-3 col-xs-12 col-sm-6 col-md-3">
        <div class="widget">
          <h4 class="widget-title">Графік роботи</h4>
          <div class="working">
	          <?php foreach (getSchedule() as $schedule) :?>
            <div></div>
            <div> <?php echo $schedule ['working_days']; ?> : <?php echo $schedule ['working_hours_start']; ?> - <?php echo $schedule ['working_hours_end']; ?>
              <br> <?php echo $schedule ['weekend']; ?>: <span class="green"><?php echo $schedule ['weekend_close']; ?></span></div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <div class="footer-sidebar footer-4 col-xs-12 col-sm-6 col-md-3">
        <div class="widget">
          <h4 class="widget-title">Subscribe Us</h4>
          <p> Subscribe us to get latest news and usefull tips.</p>
          <form method="post" data-id="270" data-name="">
<!--	          --><?php //echo do_shortcode('[contact-form-7 id="79" title="Контактна форма 1"]'); ?>
            <div class="mc4wp-form-fields">
              <input name="EMAIL" placeholder="Your email address" required="" type="email">
              <input value="Sign up" type="submit">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- footer end -->

<!-- footer middle-->
<div id="footer-widgets-middle" class="footer-widgets widgets-area footer-middle">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4 email">
        <i class="fa fa-envelope"></i>
        <a href="mailto:<?php the_field('email-contact', 'options');?>" class="value">
            <?php the_field('email-contact', 'options');?>
        </a>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 phone">
        <div>Зателефонуйте нам!</div>
        <?php foreach (getPhone() as $phone_us) : ?>
          <span>
            <a href="tel:<?php echo $phone_us ['business_number']; ?>">
                <?php echo $phone_us ['business_number']; ?>
            </a>
          </span><br>
        <?php endforeach; ?>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 social">
        <div class="socials footer-social">
          <span>Ми у соц. мережах</span>
          <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a>
          <a href="https://www.skype.com" target="_blank"><i class="fa fa-skype"></i></a>
          <a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
          <a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- footer middle end-->

<!-- copyright -->
<footer id="colophon" class="site-footer">
  <div class="container footer-info">
    <div class="footer-copyright text-center"><?php echo comicpress_copyright(); ?>. Сайт розроблений  <a href="https://www.linkedin.com/in/romankorvatskyi/" target="_blank">Roman Korvatskyi</a>. Всі права захищені</div>
  </div>
</footer>
<!-- copyright end-->


<!--primary-mobile-nav-->
<div class="primary-mobile-nav" id="primary-mobile-nav" role="navigation">
  <div class="mobile-nav-content">
    <a href="#" class="close-canvas-mobile-panel">×</a>
    <ul class="menu">
      <li class="current-menu-item menu-item-has-children"><a href="index.html" class="dropdown-toggle">Home</a>
        <ul class="sub-menu">
          <li><a href="index.html">Home 1</a></li>
          <li><a href="home-page-2.html">Home 2</a></li>
          <li><a href="home-page-3.html">Home 3</a></li>
          <li class="last-child"><a href="home-page-4.html">Home 4</a></li>
        </ul>
      </li>
      <li class="menu-item-has-children"><a href="" class="dropdown-toggle">About Us</a>
        <ul class="sub-menu">
          <li><a href="about-us.html">About Our Company</a></li>
          <li><a href="mission-values.html">Mission & Values</a></li>
          <li><a href="why-choose-us.html">Why Choose Us</a></li>
          <li><a href="meet-our-team.html">Meet Our Team</a></li>
          <li><a href="faqs.html">FAQ’s</a></li>
          <li class="last-child"><a href="pricing-plans.html">Pricing & Plans</a></li>
        </ul>
      </li>
      <li class="menu-item-has-children"><a href="" class="dropdown-toggle">Services</a>
        <ul class="sub-menu">
          <li><a href="design-planting.html">Design & Planting</a></li>
          <li><a href="lawn-garden-care.html">Lawn & Garden Care</a></li>
          <li><a href="snow-cleaning.html">Snow Cleaning</a></li>
          <li><a href="spring-cleanup.html">Spring Cleanup</a></li>
          <li><a href="hardscaping.html">Hardscaping</a></li>
          <li class="last-child"><a href="irrigation-system.html">Irrigation System</a></li>
        </ul>
      </li>
      <li class="menu-item-has-children"><a href="projects.html" class="dropdown-toggle">Gallery</a>
        <ul class="sub-menu">
          <li><a href="gallery-classic.html">Gallery Classic</a></li>
          <li><a href="gallery-full-width.html">Gallery Full Width</a></li>
          <li><a href="gallery-modern.html">Gallery Modern</a></li>
          <li class="last-child"><a href="single-gallery.html">Single Gallery</a></li>
        </ul>
      </li>
      <li class="menu-item-has-children"><a href="#" class="dropdown-toggle">Blog</a>
        <ul class="sub-menu">
          <li><a href="blog-default.html">Blog Default</a></li>
          <li><a href="blog-large-image.html">Blog Large Image</a></li>
          <li class="last-child"><a href="blog-single.html">Single Post</a></li>
        </ul>
      </li>
      <li class="menu-item-has-children"><a href="#" class="dropdown-toggle">Shop</a>
        <ul class="sub-menu">
          <li><a href="shop.html">Our Products</a></li>
          <li><a href="single-product.html">Product Single</a></li>
          <li><a href="cart.html">Shopping Cart</a></li>
          <li><a href="checkout.html">Checkout</a></li>
          <li class="last-child"><a href="my-account.html">My account</a></li>
        </ul>
      </li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </div>
</div>
<div id="off-canvas-layer" class="off-canvas-layer"></div>
<!--primary-mobile-nav end-->

<!--Scroll to top-->
<a id="scroll-top" class="backtotop" href="#page-top"><i class="fa fa-angle-up"></i></a>

<?php wp_footer(); ?>
</body>
</html>


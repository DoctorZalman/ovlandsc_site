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
          <img src="<?php echo get_template_directory_uri();?>/images/logo.png" width="253" alt="Footer Logo">
        </div>
        <h4><?php the_field('name_company', 'options');?></h4>
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
        <a href="mailto:<?php the_field('email-contact', '20');?>" class="value">
            <?php the_field('email-contact', '20');?>
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
<?php get_template_part('template-parts/mobile_menu/mobile_menu/'); ?>
<!--Scroll to top-->
<a id="scroll-top" class="backtotop" href="#page-top"><i class="fa fa-angle-up"></i></a>

<?php wp_footer(); ?>
</body>
</html>


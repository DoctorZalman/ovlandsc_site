<?php
defined( 'ABSPATH' ) || exit;
get_header();
/* Template name: Contacts Page */
?>

<?php get_template_part('template-parts/title/title'); ?>

  <!--contact form-->
  <div class="contactpage">
    <div class="container">
      <div class="grd-section-title  grd_title-type-2 margbtm20">
        <h3 class="title  fsize30">Hi, here you can reach out to us for any inquiry</h3>
        <div class="desc">
          <p>There are lots of ways to stay touch with us.</p>
        </div>
      </div>
      <div class="grd-banner grd-banner-style-2">
        <div class="image"><img class="" src="<?php echo get_template_directory_uri();?>/images/resources/Contact-img.jpg" alt="Contact-img" width="1170" height="470"></div>
        <div class="content">
          <div class="icon-banner"><span class="svg-icon"><i class="flaticon-pin"></i></span></div>
          <div class="descr"> <h3>Chicago</h3>
            <p>United States of America</p>
            <p>54 N. Lakewood Avenue, IL 60640</p>
          </div>
          <div class="button"><a href="#"><span class="svg-icon"><i class="flaticon-right"></i></span>Find Us On Map</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
          <div class="contact-pagebox">
            <div class="grd-contact-box">
              <div class="grd-section-title  grd_title-type-2 margbtm20">
                <h3 class="title  fsize30">Наші контакти</h3>
              </div>
              <ul>
                <li>
                  <p class="name">Phone</p>
	                <?php foreach (getPhone() as $phone_us) : ?>
                    <a href="tel:<?php echo $phone_us ['business_number']; ?>">
                        <?php echo $phone_us ['business_number']; ?>
                    </a><br>
	                <?php endforeach; ?>
                </li>
                <li>
                  <p class="name">Email</p>
                  <a href="mailto:<?php the_field('email-contact', 'options');?>" class="value">
                      <?php the_field('email-contact', 'options');?>
                  </a>
                </li>
                <li>
                <?php foreach (getSchedule() as $schedule) :?>
                  <p class="name">Графік роботи</p>
                  <p class="value"><span class="text-green"></span><?php echo $schedule ['working_days']; ?> : <?php echo $schedule ['working_hours_start']; ?> - <?php echo $schedule ['working_hours_end']; ?></p>
                </li>
	              <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-7">
          <form method="post" action="ajax/mail.php" class="wpcf7-form" id="contact-form" novalidate="novalidate">
            <div class="contactpage-form">
              <p>Feel free to ask any landscaping or gardening questions over the phone, or get in touch via our contact form below.</p>
              <div class="row">
                <div class="col-md-6 col-xs-12 col-sm-12">
                  <p>
                    <input name="name" value="" size="40" placeholder="Your Name*" type="text">
                  </p>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-12">
                  <p>
                    <input name="email" value="" size="40" placeholder="Email Address*" type="email">
                  </p>
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12">
                  <p>
                    <input name="phone" value="" size="40" placeholder="Phone Number" type="text">
                  </p>
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12 mf-textarea-field">
                  <p>
                    <textarea name="message" cols="40" rows="4" placeholder="Enter Your Message..."></textarea>
                  </p>
                </div>
                <div class="text-center mf-submit col-md-12 col-xs-12 col-sm-12">
                  <button type="submit" class="btn-style-two">Send Message Us</button>
                </div>
              </div>
            </div>
            <div class="contact-form-message"></div>
            <div id="loading" class="form-loader"><img src="<?php echo get_template_directory_uri();?>/images/ajax-loader.png" alt="loading"></div>
          </form>
        </div>
      </div>

    </div>

    <!--contact form end-->
  </div>

<?php get_footer();?>
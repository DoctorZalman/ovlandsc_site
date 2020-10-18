<?php
defined( 'ABSPATH' ) || exit;
get_header();
/* Template name: Contacts Page */
?>
<?php get_template_part('template-parts/title/title'); ?>
  <!--contact form-->
  <div class="contactpage pagepadding">
    <div class="container">
      <div class="grd-section-title  grd_title-type-2 margbtm20">
        <h3 class="title  fsize30"><?php the_field('contacts_title', '20');?></h3>
        <div class="desc">
          <p><?php the_field('contacts_desc', '20');?></p>
        </div>
      </div>
      <div class="grd-banner grd-banner-style-2">
        <div class="image"><img class="" src="<?php echo get_template_directory_uri();?>/images/resources/Contact-img.jpg" alt="Contact-img" width="1170" height="470"></div>
        <div class="content">
          <div class="icon-banner"><span class="svg-icon"><i class="flaticon-pin"></i></span></div>
          <div class="descr"> <h3><?php the_field('contacts_adress_city', '20');?></h3>
            <p><?php the_field('contacts_adress_street', '20');?></p>
          </div>
<!--          <div class="button"><a href="#"><span class="svg-icon"><i class="flaticon-right"></i></span>Find Us On Map</a></div>-->
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
                  <p class="name"><?php the_field('phone_title', '20');?></p>
	                <?php foreach (getPhone() as $phone_us) : ?>
                    <a href="tel:<?php echo $phone_us ['business_number']; ?>">
                        <?php echo $phone_us ['business_number']; ?>
                    </a><br>
	                <?php endforeach; ?>
                </li>
                <li>
                  <p class="name"><?php the_field('email-title', '20');?></p>
                  <a href="mailto:<?php the_field('email-contact', '20');?>" class="value">
                      <?php the_field('email-contact', '20');?>
                  </a>
                </li>
                <li>
                <?php foreach (getSchedule() as $schedule) :?>
                  <p class="name">Графік роботи</p>
                  <p class="value"><span class="text-green"></span><?php echo $schedule ['working_days']; ?> : <?php echo $schedule ['working_hours_start']; ?> - <?php echo $schedule ['working_hours_end']; ?>
                    <br> <?php echo $schedule ['weekend']; ?>: <span class="green"><?php echo $schedule ['weekend_close']; ?></span></p>
                </li>
	              <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-7">
          <?php echo do_shortcode('[contact-form-7 id="206" title="Форма (контакти)]'); ?>
        </div>
      </div>
    </div>
    <!--contact form end-->
  </div>

<?php get_footer();?>
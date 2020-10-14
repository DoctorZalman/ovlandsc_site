<?php
if (! defined('ABSPATH')){
  exit; // Exit if accessed directly
}
?>
<div class="request-form-1 wpcf7">
  <div class="container">
    <div class="row">
      <div class="col-md-12 pull-right">
        <div class="grd-section-title  grd_title-type-2 margbtm40">
          <h3 class="title">Зацікавились? - залиште Ваші контакти</h3>
          <div class="desc">
            <p>Заповніть контактну форму. Ми обов'язково зв'яжемось з Вами</p>
          </div>
        </div>

        <div class="wpcf7-form contact-home" >
          <h4 class="title">Ваша інформація *</h4>
	        <?php echo do_shortcode('[contact-form-7 id="143" title="Форма зворотного зв\'язку (головний екран)"]'); ?>

<!--          <div class="row">-->
<!--            <div class="col-md-4">-->
<!--              <input name="y-name" value="" size="40" placeholder="Your Name*" type="text">-->
<!--            </div>-->
<!--            <div class="col-md-4">-->
<!--              <input name="email" value="" size="40" placeholder="Email*" type="email">-->
<!--            </div>-->
<!--            <div class="col-md-4">-->
<!--              <input name="phone" value="" size="40" placeholder="Phone" type="tel">-->
<!--            </div>-->
<!--          </div>-->
<!--          <div class="row">-->
<!--            <div class="col-md-4 pull-right">-->
<!--              <textarea cols="40" rows="10" placeholder="Your Message"></textarea>-->
<!--            </div>-->
<!--            <div class="col-md-8">-->
<!--              <div class="row">-->
<!--                <div class="col-md-6">-->
<!--                  <input name="address" value="" size="40" placeholder="Address*" type="text">-->
<!--                </div>-->
<!--                <div class="col-md-6">-->
<!--                  <select name="Service">-->
<!--                    <option value="Service You Need">Service You Need</option>-->
<!--                    <option value="Service You Lorem">Service You Lorem</option>-->
<!--                    <option value="Service You Lipsum">Service You Lipsum</option>-->
<!--                    <option value="Service You Dropdown">Service You Dropdown</option>-->
<!--                  </select>-->
<!--                </div>-->
<!--              </div>-->
<!--              <h4 class="title">Appointment Date &amp; Time <span>(If you need)</span></h4>-->
<!--              <div class="row">-->
<!--                <div class="col-md-6">-->
<!--                  <input name="date" value="" size="40" type="text">-->
<!--                </div>-->
<!--                <div class="col-md-6">-->
<!--                  <input name="time" value="" size="40" placeholder="09.00 am" type="text">-->
<!--                </div>-->
<!--              </div>-->
<!--              <p>-->
<!--                <input value="Request a Quote" class="wpcf7-submit" type="submit">-->
<!--              </p>-->
<!--            </div>-->
<!--          </div>-->
        </div>

      </div>
    </div>
  </div>
</div>

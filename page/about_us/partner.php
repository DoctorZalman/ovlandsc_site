<?php
defined( 'ABSPATH' ) || exit;
// why choose us
?>

<!--parteners-->
<div class="partener-style-2">
  <div class="container">
    <div class="grd-section-title  grd_title-type-1 text-center margbtm60">
      <h3 class="title"><?php the_field('ours_partners_title' , '275');?></h3>
      <div class="desc">
        <p><?php the_field('ours_partners_desc' , '275');?></p>
      </div>
    </div>
    <div class="carousel-img">
	    <?php
	    $partners = get_field('ours_partners_logo', '275');
	    foreach ($partners as $partner) : ?>
      <div class="box-img">
        <a href="#"><img src="<?php echo($partner['ours_partners_img']['sizes']['our_clients']); ?>" class="attachment-full" alt="img" width="243" height="50"></a>
      </div>
	    <? endforeach;?>
    </div>
  </div>
</div>
<!--parteners end-->
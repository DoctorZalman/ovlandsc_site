<?php
defined( 'ABSPATH' ) || exit;
// counter
?>
<!--counters-counters -->
<div class="counter-5">
  <div class="container">
    <div class="rows">
      <?php foreach (getCounter() as $counter) : ?>
      <div class="col-sm-6 col-md-3 count_p_b">
        <div class="dl_counter style-1 counter-value">
          <div class="border"></div>
          <div class="content">
            <h3><span class="counter-number"><?php echo $counter ['experience_year']; ?></span></h3>
            <p><?php echo $counter ['experience_desc']; ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<!-- counters end -->


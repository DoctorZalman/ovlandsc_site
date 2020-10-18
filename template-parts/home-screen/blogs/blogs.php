<?php
if (! defined('ABSPATH')){
  exit; // Exit if accessed directly
}
?>
<div class="blogs-style-1 arrow-blog">
  <div class="container">
    <div class="grd-section-title  grd_title-type-1 text-center margbtm30">
      <h3 class="title"><?php the_field('blog_title_page', '317');?></h3>
      <div class="desc">
        <p><?php the_field('blog_desc_page', '317');?></p>
      </div>
    </div>
    <div class="row">
	    <?php foreach (getBlogs() as $blog) : ?>
      <div class="col-md-4 col-sm-6">
        <div class="blog-wrapper">
          <div class="entry-thumbnail">
            <a href="<?php echo get_the_permalink($blog -> ID); ?>"><img src="<?php echo get_the_post_thumbnail_url( $blog -> ID, 'our_blogs' );?>" alt="img" width="600" height="340" /></a>
          </div>
          <div class="entry-header">
            <div class="entry-meta">
              <div class="meta-date"><?php echo get_the_date('F d, Y', $blog->ID) ?></div>
              <span class="meta-author"><?php the_field('blogs_us_autor', $blog -> ID); ?></span>
            </div>
            <h2 class="entry-title"><a href="<?php echo get_the_permalink($blog->ID); ?>"><?php echo $blog -> post_title; ?></a></h2>
            <h2 class="entry-title"><a href="<?php echo get_the_permalink($blog->ID); ?>"><?php echo $blog -> post_excerpt; ?></a></h2>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
<!--	  --><?php //get_template_part('template-parts/buttons/button_viev_more_blogs_post'); ?>
  </div>
</div>

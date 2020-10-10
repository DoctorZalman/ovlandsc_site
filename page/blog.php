<?php
defined( 'ABSPATH' ) || exit;
get_header();
/* Template name: Blog Page */
?>

<?php get_template_part('template-parts/title/title'); ?>
<!--blog list-->
<div class="blogpage pagepadding ">
	<div class="container">
		<div class="row blog content-sidebar">
			<div class="col-sm-12 col-md-8 content-area">
				<div class="row blog-classic">
          <?php foreach (getBlogs() as $blog) : ?>
					<div class="col-xs-12 col-sm-12">
						<div class="blog-wrapper">
							<div class="entry-thumbnail">
								<a href="<?php echo get_the_permalink($blog -> ID); ?>"><img src="<?php echo get_the_post_thumbnail_url( $blog -> ID, 'full' );?>" alt="" width="600" height="340"></a>
							</div>
							<div class="entry-header">
								<div class="entry-meta">
									<div class="meta-date"><?php echo get_the_date('F d Y', $blog->ID) ?></div>
									<span class="meta-author"><span>Автор </span>
											<a href="#"><?php the_field('blogs_us_autor', $blog -> ID); ?></a></span>
								</div>
								<h2 class="entry-title"><a href="<?php echo get_the_permalink($blog->ID); ?>"><?php echo $blog -> post_title; ?></a></h2>
							</div>
							<div class="entry-content clearfix">
								<div class="descr">
									<p><?php echo wp_trim_words($blog->post_excerpt, '12' ); ?></p>
								</div>
							</div>
						</div>
					</div>
          <?php endforeach; ?>
        </div>
		  <?php get_template_part('template-parts/buttons/pagination'); ?>
			</div>
      <?php get_template_part('template-parts/sidebar/right_sidebar'); ?>
		</div>
	</div>
</div>
<!--blog list end-->

<?php get_footer();?>
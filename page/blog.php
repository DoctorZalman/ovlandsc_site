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
    <?php
        $getAllBlogs = getAllBlogs();
      while ($getAllBlogs -> have_posts()) : $getAllBlogs -> the_post(); ?>
					<div class="col-xs-12 col-sm-12">
						<div class="blog-wrapper">
							<div class="entry-thumbnail">
								<a href="<?php  the_permalink(); ?>"><img src="<?php the_post_thumbnail_url( 'blog_post_page' );?>" alt="" width="600" height="340"></a>
							</div>
							<div class="entry-header">
								<div class="entry-meta">
									<div class="meta-date"><?php the_date('F d Y') ?></div>
									<span class="meta-author"><span>Автор </span>
											<a href="#"><?php the_field('blogs_us_autor', the_ID()); ?></a></span>
								</div>
								<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
							</div>
							<div class="entry-content clearfix">
								<div class="descr">
									<p><?php echo wp_trim_words(the_excerpt(), '12' ); ?></p>
								</div>
							</div>
						</div>
					</div>
          <?php endwhile; ?>
        </div>
        <nav class="navigation paging-navigation numeric-navigation">
			<?php $big = 999999999; // need an unlikely integer
	    echo paginate_links( array(
        'total' => $getAllBlogs->max_num_pages,
        'end_size'     => 1,
        'mid_size'     => 2,
        'prev_next'    => true,
        'prev_text'    => '<',
        'next_text'    => '>',
        'before_page_number' => '',
        'after_page_number'  => '',
	  ) );

	  wp_reset_postdata();
			?>
        </nav>
			</div>
      <?php get_template_part('template-parts/sidebar/right_sidebar'); ?>
		</div>
	</div>
</div>
<!--blog list end-->

<?php get_footer();?>
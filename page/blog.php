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
				<nav class="navigation paging-navigation numeric-navigation">
<!--					--><?php //the_posts_pagination( [
//						'end_size'     => 1,     // количество страниц на концах
//						'mid_size'     => 2,     // количество страниц вокруг текущей
//						'prev_text'    => '<',
//						'next_text'    => '>',
//						'screen_reader_text' => ' '
//					] );
//					?>
					<span class="page-numbers current">1</span>
					<a class="page-numbers" href="#">2</a>
					<a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a>
				</nav>
			</div>
			<div class="primary-sidebar col-sm-12 col-md-4">
				<div class="">


          <div  class="widget widget_search">
						<h4 class="widget-title">Пошук по сайті</h4>
<!--	          --><?php //get_search_form(); ?>
						<form  class="search-form">
							<label>
								<span class="screen-reader-text">Search for:</span>
								<input class="search-field" placeholder="Пошук …" value="" name="s" type="search">
							</label>
							<input class="search-submit" value="Search" type="submit">
						</form>
					</div>
					<div  class="widget widget_recent_entries">
    			  <?php dynamic_sidebar('blog_single_right');?>
<!--						<h4 class="widget-title">Recent Post</h4>-->
<!--						<ul>-->
<!--							<li> <a href="#">More than 50 percent of the work</a> <span class="post-date">August 9, 2018</span></li>-->
<!--							<li> <a href="#">Special Message Regarding Garden</a> <span class="post-date">August 9, 2018</span></li>-->
<!--							<li> <a href="#">Media Hacks for the Entrepreneur</a> <span class="post-date">August 9, 2018</span></li>-->
<!--						</ul>-->
					</div>
					<div class="widget widget_tag_cloud">
						<h4 class="widget-title">Tag Cloud</h4>
						<div class="tagcloud">
				<?php the_tags('',null, null);?>
							<a href="#">Assurance</a>
							<a href="#">Experts</a>
							<a href="#">Flowers</a>
							<a href="#">Irrigatio</a>
							<a href="#">Irrigation</a>
							<a href="#">Plants</a>
							<a href="#">Tips</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--blog list end-->

<?php get_footer();?>
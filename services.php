<?php
/*Template name: Serv*/
get_header();
?>
<!--Page header-->
<div class="page-header  parallax has-image">
	<div class="page-header-content">
		<div class="featured-image"></div>
		<div class="container">
			<div class="header-box">
				<div class="page-title">
					<h1><?php wp_title(''); ?></h1>
				</div>
				<div class="header-breadcrumb">
					<nav class="breadcrumbs"><a class="home" href="#"><span>Home</span></a> - Services
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Page header end-->

<!--all team-->
<div class="pageservice pagepadding">
	<div class="container">
		<div class="row">
		<?php foreach (getServices() as $services) : ?>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="grd-image-box-1 icon-theme-light">
					<div class="entry-title"><a href="#"><h4 class="title"><?php echo $services -> post_title;?></h4></a></div>
					<div class="entry-icon">
						<span class="svg-icon"><i class="flaticon-hills"></i></span>
					</div>
					<div class="entry_thumbnail">
						<img class="" src="<?php echo get_the_post_thumbnail_url( $services->ID, 'full' ); ?>" alt="img" title="04" width="600" height="324">
						<a href="#" class="hover"></a>
					</div>
					<div class="entry-content"><?php echo wp_trim_words($services -> post_excerpt, '10' );?></div>
				</div>
			</div>
	    <?php endforeach; ?>
		</div>
		<nav class="navigation paging-navigation numeric-navigation">
			<span class="page-numbers current">1</span>
			<a class="page-numbers" href="#">2</a>
			<a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a>
		</nav>
	</div>
</div>
<!--all team end-->

<?php get_footer();?>

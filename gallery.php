<?php
/*Template Name: Gallery*/
defined('ABSPATH') || exit;
get_header();
?>
	<!--Page header-->
	<div class="page-header  parallax has-image">
		<div class="page-header-content">
			<div class="featured-image"></div>
			<div class="container">
				<div class="header-box">
					<div class="page-title">
						<h1>Gallery</h1>
					</div>
					<div class="header-breadcrumb">
						<nav class="breadcrumbs"><a class="home" href="#"><span>Home</span></a> - Gallery
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Page header end-->

	<!-- projects -->
	<div class="gallery-fullwidth pagepadding">
		<div class="grd-portfolio-shortcode grd-full-width clearfix">
<!--			<div class="nav-section">-->
<!--				<ul class="nav-filter">-->
<!--					<li><a href="#" class="active" data-filter="*">View All</a></li>-->
<!--					<li><a href="#" class="" data-filter=".lawn-care">Lawn Care</a></li>-->
<!--					<li><a href="#" class="" data-filter=".planting">Planting</a></li>-->
<!--					<li><a href="#" class="" data-filter=".snow-removing">Snow Removing</a></li>-->
<!--					<li><a href="#" class="" data-filter=".water-irrigation">Water Irrigation</a></li>-->
<!--				</ul>-->
<!--			</div>-->
			<div class="grd_portfolio_grid filterlist row">
				<div class="portfolio-item  col-sm-6 col-xs-12 col-md-3  item-full-width lawn-care">
					<div class="content-item">
						<div class="entry-header">
							<a href="#" class="entry-thumbnail"><img alt="Lessons of Resilience" src="images/gallery/gp1.jpg"></a>
							<a href="#" class="entry-title"><h3 class="title">Lessons of Resilience</h3> </a>
						</div>
						<div class="entry-content">
							<div class="entry-title"><a href="#"><h3 class="title">Lessons of Resilience</h3></a>
								<div class="entry-meta"><a class="category" href="#">Lawn Care</a></div>
							</div>
							<div class="readmore">
								<a href="#" class="entry-read-more">
									<div class="read-more"><span class="svg-icon"><i class="flaticon-right"></i></span> Read more</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- #project-## -->
			</div>
		</div>
		<div class="text-center">
			<a href="#" class="grdrd-button">View More</a>
		</div>
	</div>
	<!-- projects end -->
<?php get_footer(); ?>


<nav class="navigation paging-navigation numeric-navigation">
	<?php the_posts_pagination( [
		'end_size'     => 1,     // количество страниц на концах
		'mid_size'     => 2,     // количество страниц вокруг текущей
		'prev_text'    => '<',
		'next_text'    => '>',
		'screen_reader_text' => ' '
	] );
	?>
<!--	<span class="page-numbers current">1</span>-->
<!--	<a class="page-numbers" href="#">2</a>-->
<!--	<a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a>-->
</nav>
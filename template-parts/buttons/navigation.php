
<?php
defined( 'ABSPATH' ) || exit;

//butt navigations
?>
<nav class="navigation post-navigation portfolio-navigation">
	<div class="nav-links">
		<div class="nav-previous">
			<?php $prev_post = get_previous_post();
			if ($prev_post) : ?>
				<a href="<?php echo get_permalink( $prev_post );?>">
					<div class="nav-title"><?php echo esc_html($prev_post->post_title); ?></div>
					<span class="meta-nav">« Попередній пост</span>
				</a>
			<?php endif; ?>
		</div>
		<div class="nav-next">
			<?php
			$next_post = get_next_post();
			if ($next_post) {
				?>
				<a href="<?php echo get_permalink( $next_post ); ?>">
					<div class="nav-title"> <?php echo esc_html($next_post->post_title); ?></div>
					<span class="meta-nav">Наступний пост »</span>
				</a>
				<?php
			}
			?>
		</div>
	</div>
</nav>
<?php
defined( 'ABSPATH' ) || exit;
get_header();
//comments
?>

<div class="comments-area">
	<?php if( have_comments() ){
	// comments

	echo '<ul class="commentlist">';
	wp_list_comments('type=comment');
	echo '</ul>';

} ?>
	<div class="comment-respond">
		<form  class="comment-form" novalidate="">
			<?php

			comment_form([
				'comment_field' => '<p class="col-sm-12">
										<label for="comment">Коментарій</label>
										<textarea id="comment" name="comment" cols="45" rows="8" required="required"></textarea>
									</p>',

				'fields' => [
					'author' => '<p class="col-md-6 col-sm-12">
									<label>Ім\'я *</label>
									<input id="author" name="author" required="" value="" size="30" type="text">
								</p>',
					'email' => '<p class="col-md-6 col-sm-12">
									<label>Email *</label>
									<input id="email" name="email" required="" value="" size="30" type="email">
								</p>'
				],
				'class_submit'  => 'form-submit',
				'label_submit'  => __('Post Comment'),
				'title_reply'   => __('Залиште свій коментар'),
				'class_form'    => 'col-md-6 col-sm-12',
			]);
			?>
<!--			<p class="col-md-6 col-sm-12">-->
<!--				<label>Name *</label>-->
<!--				<input id="author" name="author" required="" value="" size="30" type="text">-->
<!--			</p>-->
<!--			<p class="col-md-6 col-sm-12">-->
<!--				<label>Email *</label>-->
<!--				<input id="email" name="email" required="" value="" size="30" type="email">-->
<!--			</p>-->
<!--			<p class="col-md-12 col-sm-12">-->
<!--				<label>Website</label>-->
<!--				<input id="url" name="url" value="" size="30" type="text">-->
<!--			</p>-->
<!--			<p class="col-sm-12">-->
<!--				<label for="comment">Comment</label>-->
<!--				<textarea id="comment" name="comment" cols="45" rows="8" required="required"></textarea>-->
<!--			</p>-->
<!--			<p class="form-submit">-->
<!--				<input name="submit" id="submit" class="submit" value="Post Comment" type="submit">-->
<!--			</p>-->
		</form>
	</div>
</div>



<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $post;

if ( ! comments_open() ) {
	return;
}

?>
<div id="reviews">
	
	<div id="comments">
		<?php if ( have_comments() ) : ?>

			<ol class="comment-list">
				<?php wp_list_comments( array( 'callback' => array( 'WP_Job_Board_Pro_Review', 'job_candidate_comments' ) ) ); ?>
			</ol>

			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
				echo '<nav class="apus-pagination">';
				paginate_comments_links( apply_filters( 'apus_comment_pagination_args', array(
					'prev_text' => '&larr;',
					'next_text' => '&rarr;',
					'type'      => 'list',
				) ) );
				echo '</nav>';
			endif; ?>

		<?php else : ?>

			<p class="apus-noreviews text-danger"><?php esc_html_e( 'There are no reviews yet.', 'wp-job-board-pro' ); ?></p>

		<?php endif; ?>
	</div>
	<?php $commenter = wp_get_current_commenter(); ?>
	<div id="review_form_wrapper" class="commentform">
		<div id="review_form">
			<?php
				$comment_form = array(
					'title_reply'          => have_comments() ? esc_html__( 'Add a review', 'wp-job-board-pro' ) : sprintf( esc_html__( 'Be the first to review &ldquo;%s&rdquo;', 'wp-job-board-pro' ), get_the_title() ),
					'title_reply_to'       => esc_html__( 'Leave a Reply to %s', 'wp-job-board-pro' ),
					'comment_notes_before' => '',
					'comment_notes_after'  => '',
					'fields'               => array(
						'author' => '<div class="row"><div class="col-xs-12 col-sm-12"><div class="form-group"><label>'.esc_html__( 'Name', 'wp-job-board-pro' ).'</label>'.
						            '<input id="author" placeholder="'.esc_attr__( 'Your Name', 'wp-job-board-pro' ).'" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" aria-required="true" /></div></div>',
						'email'  => '<div class="col-xs-12 col-sm-12"><div class="form-group"><label>'.esc_html__( 'Email', 'wp-job-board-pro' ).'</label>' .
						            '<input id="email" placeholder="'.esc_attr__( 'your@mail.com', 'wp-job-board-pro' ).'" class="form-control" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-required="true" /></div></div></div>',
					),
					'label_submit'  => esc_html__( 'Submit Review', 'wp-job-board-pro' ),
					'logged_in_as'  => '',
					'comment_field' => ''
				);

				$comment_form['must_log_in'] = '<div class="must-log-in">' .  __( 'You must be <a href="">logged in</a> to post a review.', 'wp-job-board-pro' ) . '</div>';
				
				$comment_form['comment_field'] .= '<div class="form-group"><label>'.esc_html__( 'Review', 'wp-job-board-pro' ).'</label><textarea id="comment" class="form-control" placeholder="'.esc_attr__( 'Write Comment', 'wp-job-board-pro' ).'" name="comment" cols="45" rows="5" aria-required="true"></textarea></div>';
				
				comment_form($comment_form);
			?>
		</div>
	</div>
</div>
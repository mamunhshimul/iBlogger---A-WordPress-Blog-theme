<?php

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'iBlogger' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2><!-- .comments-title -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'iBlogger' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'iBlogger' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'iBlogger' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
					'avatar_size' => 100,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'iBlogger' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'iBlogger' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'iBlogger' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().


	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'iBlogger' ); ?></p>
	<?php
	endif;

	comment_form();
	?>

</div><!-- #comments -->




              <!-- Comment Area -->
              <div id="comments" class="comments-area">
                <h2 class="comments-title">3 Comments</h2>
                <div class="comment-block">
                  <ol class="comment-list">
                    <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1 parent">
                      <div class="comment-body">
                        <footer class="comment-meta">
                          <div class="comment-author vcard">
                            <img alt="img" src="assets/images/comment-1.jpg" class="avatar avatar-72 photo"/>
                            <b class="fn">Tomas Tisdale</b>
                          </div>
                          <div class="comment-metadata">
                            <a href="#">March 20, 2017</a>                    
                          </div>
                          <div class="reply">
                            <a rel="nofollow" class="comment-reply-link" href="#"><i class="fa fa-reply"></i></a>
                          </div>
                        </footer>
                        <div class="comment-content">
                          <p>Efficiently reintermediate distinctive leadership through backend potentialities. Compellingly granular without standardized e-tailers.</p>
                        </div>
                      </div>
                      <ol class="children">
                        <li class="comment byuser comment-author-admin bypostauthor odd alt depth-2 parent">
                          <div class="comment-body">
                            <footer class="comment-meta">
                              <div class="comment-author vcard">
                                <img alt="img" src="assets/images/comment-2.jpg" class="avatar avatar-72 photo"/>
                                <b class="fn">Rachael  Kite</b>
                              </div>
                              <div class="comment-metadata">
                                <a href="#">March 20, 2017</a>
                              </div>
                              <div class="reply">
                                <a rel="nofollow" class="comment-reply-link" href="#"><i class="fa fa-reply"></i></a>
                              </div>
                            </footer>
                            <div class="comment-content">
                              <p>Efficiently reintermediate distinctive leadership through backend potentialities. Compellingly granular without standardized e-tailers.</p>
                            </div>
                          </div>
                        </li>
                      </ol>
                    </li>
                    <li class="comment byuser comment-author-admin bypostauthor even thread-odd thread-alt depth-1">
                      <div class="comment-body">
                        <footer class="comment-meta">
                          <div class="comment-author vcard">
                            <img alt="img" src="assets/images/comment-3.jpg" class="avatar avatar-72 photo"/>
                            <b class="fn">Michael  Arnold</b>
                          </div>
                          <div class="comment-metadata">
                            <a href="#">March 20, 2017</a>
                          </div>
                          <div class="reply">
                            <a rel="nofollow" class="comment-reply-link" href="#"><i class="fa fa-reply"></i></a>
                          </div>
                        </footer>
                        <div class="comment-content">
                          <p>Efficiently reintermediate distinctive leadership through backend potentialities. Compellingly granular without standardized e-tailers.</p>
                        </div>
                      </div>
                    </li>
                  </ol><!-- .comment-list -->
                </div>
                <!-- Comment Form -->
                <div id="respond" class="comment-respond">
                  <h2 class="comment-reply-title">leave your comment</h2>
                  <div class="comment-form-box">
                    <form method="post" id="commentform" class="comment-form">
                      <p class="comment-form-author">
                        <input id="author" name="author" placeholder="Name :" size="30" maxlength="245" required="required" type="text"/>
                      </p>
                      <p class="comment-form-email">
                        <input id="email" name="email" placeholder="e-mail :" required="required" type="email"/>
                      </p>
                      <p class="comment-form-url">
                        <input id="url" name="url" placeholder="website :" type="url"/>
                      </p>
                      <p class="comment-form-comment">
                        <textarea id="comment" name="comment" placeholder="comment :" rows="5" required="required"></textarea>
                      </p>
                      <p class="form-submit">
                        <input name="submit" class="submit" value="Post Comment" type="submit"/>
                      </p>
                    </form>
                  </div>
                </div><!-- Comment Form /- -->
                <!-- Comment Form /- -->

              </div><!-- Comment Area -->
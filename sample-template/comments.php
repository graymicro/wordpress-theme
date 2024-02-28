<?php
// Check if password is required for this post
if (post_password_required()) {
    return; // If password is required, exit and don't display comments
}
?>
<div class="comments" id="comments">
    <?php if (have_comments()) : ?>
        <div class="box comment-count">
            <h2 class="comments-title">
                This Post Has <?php echo get_comments_number(); ?> Comments
            </h2>
        </div>
        <!-- List of comments -->
        <ol class="commentlist box">
            <?php wp_list_comments(array('callback' => 'comments_callback', 'style' => 'ul')); ?>
        </ol>
        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <div class="box comment-pagination">
                <?php paginate_comments_links(); ?>
            </div>
        <?php endif; ?>

        <?php // If comments are closed but there are comments already 
        ?>
        <?php if (!comments_open() && get_comments_number()) : ?>
            <p class="nocomments">No Comments</p>
        <?php endif; ?>

    <?php endif; ?>

    <?php
    // Get current commenter information
    $commenter = wp_get_current_commenter();
    // Check if name and email are required
    $req = get_option('require_name_email');
    $aria_req = ($req ? " aria-required='true'" : '');

    // Array of fields for the comment form
    $fields = array(
        'author' => sprintf(
            '<p class="comment-form-author">%s %s</p>',
            sprintf(
                '<label for="author">%s%s</label>',
                __('Name'),
                ($req ? $required_indicator : '') // Indicator for required field
            ),
            sprintf(
                '<input id="author" name="author" type="text" value="%s" size="30" maxlength="245" autocomplete="name"%s />',
                esc_attr($commenter['comment_author']),
                ($req ? $required_attribute : '*') // Required attribute
            )
        ),
        'email'  => sprintf(
            '<p class="comment-form-email">%s %s</p>',
            sprintf(
                '<label for="email">%s%s</label>',
                __('Email'),
                ($req ? $required_indicator : '*') // Indicator for required field
            ),
            sprintf(
                '<input id="email" name="email" %s value="%s" size="30" maxlength="100" aria-describedby="email-notes" autocomplete="email"%s />',
                ($html5 ? 'type="email"' : 'type="text"'), // Input type
                esc_attr($commenter['comment_author_email']),
                ($req ? $required_attribute : '') // Required attribute
            )
        ),
        'url'    => sprintf(
            '<p class="comment-form-url">%s %s</p>',
            sprintf(
                '<label for="url">%s</label>',
                __('Website')
            ),
            sprintf(
                '<input id="url" name="url" %s value="%s" size="30" maxlength="200" autocomplete="url" />',
                ($html5 ? 'type="url"' : 'type="text"'), // Input type
                esc_attr($commenter['comment_author_url'])
            )
        ),
    );

    // Arguments for comment form
    $comments_args = array(
        'fields'                     => $fields,
        'title_reply'                => 'Leave a Reply',
        'label_submit'               => 'Submit Comment',
        'comment_notes_before'       => '<p class="comment-notes">Some Texts</p>',
        'comment_notes_after'        => '<p class="comment-notes">Some Texts</p>',
    );
    // Output the comment form
    comment_form($comments_args); ?>
</div>
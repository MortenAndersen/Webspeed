<?php 
if ( have_comments() ) {
echo '<div class="comments">';
foreach ( $comments as $comment ) :
    echo '<div classs="comment">';
        echo '<div class="comment_author"><strong>' . get_comment_author() . '</strong></div>';
        echo '<div class="comment_date"><em>' . get_comment_date() . '</em></div>';
        echo '<div class="comment_body">' . $comment->comment_content . '</div>';
    echo '</div>';
endforeach;
echo '</div>';
}
comment_form();
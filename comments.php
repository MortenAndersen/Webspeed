<?php 
echo '<ul class="comments" style="display:grid;gap:2rem;list-style-type:none;">';
wp_list_comments();
echo '</ul>';
comment_form();
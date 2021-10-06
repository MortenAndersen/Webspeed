<main class="post-content">
	<div class="no-wrap">
		<article>
			<?php 
			the_content();
			echo '<div class="wrap">';
				comment_form();
				web_go_back();
			echo '</div>';
			?>
		</article>
	</div>
</main>
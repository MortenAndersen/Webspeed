<main class="post-content">
	<div class="wrap">
		<article>
			<?php 
			the_title('<h1 class="entry-title">', '</h1>');
			web_thumbnail();
			the_content();
			comment_form();
			web_go_back();
			?>
		</article>
	</div>
</main>
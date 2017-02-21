<?php

/**
 * The main template file
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package Codersclan
 */
get_header();
?>
<div class="content">
	<div class="container">
		<?php
		if ( have_posts() ):
			while ( have_posts() ):
				the_post();
				the_content();
			endwhile;
		endif;
		?>
	</div>
</div>
<?php
get_footer();
?>





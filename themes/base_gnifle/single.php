<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package LR_Malerier
 */

get_header(); ?>

	<div class="content-inner">
		<main>

			<?php
			while ( have_posts() ) : the_post();
	
				get_template_part( 'templates/single', get_post_type() );
	
			endwhile;
			?>

		</main>
	</div>

<?php
get_footer();

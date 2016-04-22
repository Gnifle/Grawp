<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package LR_Malerier
 */

get_header(); ?>

	<div class="content-inner">
		<main>

			<?php
			if ( have_posts() ) : ?>
				
				<h1><?php echo post_type_archive_title( '' ); ?></h1>
	
				<?php
				while ( have_posts() ) : the_post();
	
					get_template_part( 'templates/archive-single', get_post_type() );
	
				endwhile;
	
			else : ?>

				<h1><?php echo post_type_archive_title( '' ); ?></h1>
				<p>No posts found for this category</p>
	
			<?php
			endif; ?>

		</main>
	</div>

<?php
get_footer();

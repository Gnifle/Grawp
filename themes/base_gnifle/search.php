<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package LR_Malerier
 */

get_header(); ?>

	<div class="content-inner">
		<main>

			<?php
			if ( have_posts() ) : ?>

				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'lr-malerier' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'templates/single', 'search-result' );

				endwhile;

			else : ?>

				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'lr-malerier' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<p>No posts found with these search criterias</p>

			<?php
			endif; ?>

		</main>
	</div>

<?php
get_footer();

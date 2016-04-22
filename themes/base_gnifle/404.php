<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package LR_Malerier
 */

get_header(); ?>

	<div class="content-inner">
		<main>

			<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'lr-malerier' ); ?></h1>

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'lr-malerier' ); ?></p>

				<?php
					get_search_form();
				?>

			</div>

		</main>
	</div>

<?php
get_footer();

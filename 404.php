<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Dariush_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<!-- <section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'dariush-theme' ); ?></h1>
			</header>

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'dariush-theme' ); ?></p>

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'dariush-theme' ); ?></h2>
						<ul>
							<?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
						</ul>
					</div>

					<?php
					
					$dariush_theme_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'dariush-theme' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$dariush_theme_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

			</div>
		</section> -->
		<section class="section-1">
		<div class="container">
			<div class="row">
			<div class="col-lg-6 offset-lg-1">
				<h1 class="display-4 black-text">404 ERROR</h1>
				<p class="black-text sm-pt">You didn't break the internet, but we can't find what you are looking for or maybe you've entered a wrong URL</p>
			</div>
			</div>
		</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();

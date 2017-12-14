<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>

<?php echo ROW_BEGIN; ?>
<div class="large-8 medium-8 columns">
		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php echo COL_CLOSE; ?>
<div class="large-4 medium-4 small-4 columns">
<?php get_sidebar(); ?>
<?php echo COL_CLOSE . ROW_CLOSE . SITEMAP; ?>
<?php require PATH_PHP . "footer.php"; ?>
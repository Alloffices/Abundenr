<?php
/**
 * Template Name: Full-width, no sidebar
 * Description: A full-width template with no sidebar
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>

<?php echo ROW_BEGIN; ?>
<div class="large-12 medium-12 columns">
		<div id="primary" class="full-width">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php echo COL_CLOSE . ROW_CLOSE . SITEMAP; ?>
<?php require PATH_PHP . "footer.php"; ?>
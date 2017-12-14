<?php
/**
 * The Template for displaying all single posts.
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

				<?php toolbox_content_nav( 'nav-above' ); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php toolbox_content_nav( 'nav-below' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php echo COL_CLOSE; ?>
<div class="large-4 medium-4 small-4 columns">
<?php get_sidebar(); ?>
<?php echo COL_CLOSE . ROW_CLOSE . SITEMAP; ?>
<?php require PATH_PHP . "footer.php"; ?>
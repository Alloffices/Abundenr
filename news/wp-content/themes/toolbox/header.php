<?php
require "/home/jupiterbill/abundantenergy/includes/php/commonality.php";
echo HEAD . HD_META;

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'toolbox' ), max( $paged, $page ) );

	?></title>

<?php echo HD_FAVI; ?>
<link rel="profile" href="http://gmpg.org/xfn/11" />

<?php echo CSS3; ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php echo CSS_B . SCRP_BEGIN; ?>
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>
<body id="grad" <?php body_class(); ?>>
<?php 
include_once PATH_SCR . "analyticstracking.php";
echo MASTHEAD; ?>
<div id="page" class="hfeed">
<?php do_action( 'before' ); ?>
<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href='http://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Wire One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo get_bloginfo('template_directory')?>/js/jquery.fittext.js"></script>
<?php
	//wp_enqueue_script('jquery.fittext.js',get_bloginfo('template_directory') . '/js/jquery.fittext.js', array('jquery'),'1.0',true);
?>
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>


<?php 
/*
	if filename is (main page) then hide all elements using
	javascript and then reveal by fade in
*/
	if( is_page("Home") ) {
?>
<script type="text/javascript">
	var browserHeight = $(window).height();
	$('body').height(browserHeight + 100);
	$('body').addClass('js');
	
	$(document).ready(function() {
			var faders = $('body.js').children();
			i = 0;
		
			function awesomeFaders() {
				$(faders[i++]).fadeIn(500, arguments.callee);
			};
			awesomeFaders();
	});
</script>
<?php
	}
?>

<header>
	<h1 id="mainLogo">
		<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			<img id="mainLogoPic" src="<?php echo get_bloginfo('template_directory');?>/images/logo_rocketcircle.png">
			<img id="mainLogoName" src="<?php echo get_bloginfo('template_directory');?>/images/logo_name.png">
			<span>
				<?php bloginfo( 'name' ); ?>
			</span>
		</a>
	</h1>
	<p><?php bloginfo( 'description' ); ?></p>

	<div id="access" role="navigation">
	  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
		<a id="access_skip_link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a>
		<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
	</div><!-- #access -->
</header>

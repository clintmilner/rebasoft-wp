<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
    <head>
		<meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="description" content="Deliver next generation security solutions to mitigate risk and reduce operational cost">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<title>
			<?php wp_title('&#124;', true, 'right'); ?><?php bloginfo('name'); ?>
		</title>
        		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
              <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
		<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
	</head>
    <body <?php body_class(); ?> id="regal_body">
       <div id="page">
		<div class="header-container">
			<div class="container_24">
				<div class="grid_24">
					<div class="header">
						<!--Start Logo-->
						<div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php if (bizway_get_option('bizway_logo') != '') { ?><?php echo bizway_get_option('bizway_logo'); ?><?php } else { ?><?php echo get_template_directory_uri(); ?>/images/logo2.png<?php } ?>" alt="<?php bloginfo('name'); ?>" /></a></div>                          
                                          <!--End Logo-->
                                          <div id="social"><a href="https://twitter.com/rebasoft" target="_blank" alt="Twitter"><img src="<?php echo home_url(); ?>/wp-content/themes/bizway/images/social_twitter_box_blue_32.png" /></a><a href="https://www.youtube.com/user/Rebasoft" target="_blank" alt="Youtube"><img src="<?php echo home_url(); ?>/wp-content/themes/bizway/images/youtube.png" height="29" width="29" /></a><a href="https://www.linkedin.com/groups?home=&gid=3671796&trk=anet_ug_hm" target="_blank" alt="Linkedin"><img src="<?php echo home_url(); ?>/wp-content/themes/bizway/images/social_linkedin_box_blue_32.png" /></a><a href="<?php echo home_url(); ?>/rss-feed" alt="RSS Feed"><img src="<?php echo home_url(); ?>/wp-content/themes/bizway/images/social_rss_box_orange_32.png" width="28" height="28" /></a></div>

					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="menu-container">
			<div class="container_24">
				<div class="grid_24">
					<div class="grid_sub_19 sub_alpha_menu"> 
						<!--Start Menu_Wrapper-->
						<div class="menu_wrapper">
							<?php bizway_nav(); ?>
						</div>
						<!--End Menu Wrapper-->
					</div>
					<div class="grid_sub_5 sub_omega">
						<div class="top-search">
							<?php get_search_form(); ?>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
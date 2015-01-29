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
<meta name="description" content="Rebasoft provides complete network and application visibility. Simplifying and automating security and network operations. This has benefits in improved access controls (NAC), better management of mobile devices (including BYOD) and optimisation of data centre operations.">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title>
<?php wp_title('&#124;', true, 'right'); ?><?php bloginfo('name'); ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" />
<script src="/scripts/jquery-latest.min.js"></script>
<script src="/scripts/unslider.js"></script>
<script>
$(function() {
			if(window.chrome) {
				$('.banner li').css('background-size', '100% 100%');
			}
			$('.banner').unslider({
				fluid: true,
				dots: true,
				speed: 600,
			});
			$('a[href^="#"]').click(function() {
				var target = $($(this).attr('href'));
				var pos = target.offset();
				if(pos) {
					$('html, body').animate({
						scrollTop: pos.top,
						scrollLeft: pos.left
					}, 1000);
				}
				return false;
			});
			var GoSquared = {acct: 'GSN-396664-U'};	
});
</script>
		<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
	</head>
    <body <?php body_class(); ?> id="regal_body">
   <div class="header-container">
			<div class="container_24">
				<div class="grid_24">
					<div class="header">
                                      <div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php if (bizway_get_option('bizway_logo') != '') { ?><?php echo bizway_get_option('bizway_logo'); ?><?php } else { ?><?php echo get_template_directory_uri(); ?>/images/logo.png<?php } ?>" alt="<?php bloginfo('name'); ?>" /></a></div></div>
                                   </div>                                                                                        
                               <div class="menu-container">
					<div class="grid_sub_19 sub_alpha"> 
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
                </div><div class="clear"></div>
	           </div>
             </div>
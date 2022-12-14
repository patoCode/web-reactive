<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Maintenance Services
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="header">
  <div class="container">
    <div class="logo">
		<?php maintenance_services_the_custom_logo(); ?>
        <div class="clear"></div>
		<?php	
        $description = get_bloginfo( 'description', 'display' );
        ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <h2 class="site-title"><?php bloginfo('name'); ?></h2>
        <?php if ( $description || is_customize_preview() ) :?>
        <p class="site-description"><?php echo esc_html($description); ?></p>                          
        <?php endif; ?>
        </a>
    </div> 
<?php 
	$email_add = get_theme_mod('email_add'); 
	$contact_no = get_theme_mod('contact_no'); 
	$contact_top_address = get_theme_mod('contact_top_address'); 
	$contact_top_address_two = get_theme_mod('contact_top_address_two'); 
	$hidetopbar = get_theme_mod('hide_header_topbar', 1);
if( $hidetopbar == '') { ?>    
    <div class="header-right"> 
        <div class="emltp"><?php if(!empty($contact_no)){ if ( is_rtl() ) {?><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon-phone-rtl.png" alt="" /><?php } else{?><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon-phone.png" alt="" /><?php } ?>
        <strong><?php echo esc_html($contact_no); ?></strong><?php } ?>  <?php if(!empty($email_add)){ ?><span><?php echo esc_html( antispambot( $email_add ) ); ?></span><?php } ?></div>
        <div class="sintp"><?php if(!empty($contact_top_address)){?><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon-home.png" alt="" /> <strong><?php echo esc_html($contact_top_address); ?></strong><?php } ?><?php if(!empty($contact_top_address_two)){?><span><?php echo esc_html($contact_top_address_two); ?></span><?php } ?></div>
        <div class="clear"></div>                
    </div>
<?php } ?>    
    <div class="clear"></div>
    <div id="topmenu">
    	         <div class="toggle"><a class="toggleMenu" href="#" style="display:none;"><?php esc_html_e('Menu','maintenance-services'); ?></a></div> 
        <div class="sitenav">
          <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>         
        </div><!-- .sitenav--> 
    </div>
  </div> <!-- container -->
  <div class="clear"></div>
</div><!--.header -->
<div class="clear"></div>
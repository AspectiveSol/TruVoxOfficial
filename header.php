<?php
/**
* Header created by Aspective Solutions
*
* @package TruVox-AS
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>TruVox</title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<!-- This is from FrondEnd Development -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<script src="<?php echo get_template_directory_uri(); ?>/js/modals.js"></script>
	<!-- This is from FrontEnd Development END -->

	<?php if ( !function_exists('has_site_icon') || !has_site_icon() ) : ?>
		<?php if ( get_theme_mod('site_favicon') ) : ?>
			<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>"/>
		<?php endif; ?>
	<?php endif; ?>

	<?php wp_head(); ?>
</head>
<style>
/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('<?php echo get_template_directory_uri(); ?>/img/Newspaper.jpeg')!important;
    min-height: 100%;

}
html{
	margin-top:0px !important;
}
</style>

<!-- This is from the FrontEnd Development -->
<body <?php body_class(); ?>>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <div class="smm">
    <i class="fa fa-facebook-official fa-2x w3-hover-opacity"></i>
    <i class="fa fa-instagram fa-2x w3-hover-opacity"></i>
    <i class="fa fa-snapchat fa-2x w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p fa-2x w3-hover-opacity"></i>
    <i class="fa fa-twitter fa-2x w3-hover-opacity"></i>
    <i class="fa fa-linkedin fa-2x w3-hover-opacity"></i>
</div>

  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button">SEARCH</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">WELCOME<span class="w3-hide-small"> TO</span> TRU VOX</span>
  </div>
</div>
<!-- This is from the FrontEnd Development END -->


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Kulim+Park&display=swap" rel="stylesheet" type="text/css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	 <div class='thetop'></div> 
<header id="header">
<?php  $logo =  of_get_option("site_logo"); ?>
	<div class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-6">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo $logo;?>" alt="logo" class="img-responsive"></a>
				</div>
				<div class="col-md-9 col-sm-9 col-xs-6 menu-section">
					<nav id="menu" class="desktop-menu">
						<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
					</nav>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 menu-section mobile-menu">
					<div class="toggle-button">
						<div id="nav-icon1">
						  <span></span>
						  <span></span>
						  <span></span>
						</div>
					</div>
					<nav id="menu" >
						<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
					</nav>
				</div>
			</div>
		</div>
	</div>

</header>
<div id="container">
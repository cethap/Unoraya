<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title('', true, 'right'); ?></title>
				
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<style>
		    @font-face {  
		      font-family: "Harabara";  
		      src: url(<?php echo get_template_directory_uri(); ?>/Harabara.ttf) format("truetype");  
		    }  
		</style>
		<!--[if IE]>  
		  
		<style type="text/css" media="screen">  
		  @font-face{  
		    font-family:'Harabara';  
		    src: url('<?php echo get_template_directory_uri(); ?>/Harabara.eot');  
		  }  
		</style>  
		  
		<![endif]--> 
		<!-- icons & favicons -->
		<!-- For iPhone 4 -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/h/apple-touch-icon.png">
		<!-- For iPad 1-->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/m/apple-touch-icon.png">
		<!-- For iPhone 3G, iPod Touch and Android -->
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon-precomposed.png">
		<!-- For Nokia -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon.png">
		<!-- For everything else -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		
		<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script>window.jQuery || document.write(unescape('%3Cscript src="<?php echo get_template_directory_uri(); ?>/library/js/libs/jquery-1.7.1.min.js"%3E%3C/script%3E'))</script>
		
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr.full.min.js"></script>
		
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
		
		<?php
			$theme_options_styles = '';
		
			$heading_typography = of_get_option('heading_typography');
			if ($heading_typography) {
				$theme_options_styles .= '
				h1, h2, h3, h4, h5, h6{ 
					font-family: ' . $heading_typography['face'] . '; 
					font-weight: ' . $heading_typography['style'] . '; 
					color: ' . $heading_typography['color'] . '; 
				}';
			}
			
			$main_body_typography = of_get_option('main_body_typography');
			if ($main_body_typography) {
				$theme_options_styles .= '
				body{ 
					font-family: ' . $main_body_typography['face'] . '; 
					font-weight: ' . $main_body_typography['style'] . '; 
					color: ' . $main_body_typography['color'] . '; 
				}';
			}
			
			$link_color = of_get_option('link_color');
			if ($link_color) {
				$theme_options_styles .= '
				a{ 
					color: ' . $link_color . '; 
				}';
			}
			
			$link_hover_color = of_get_option('link_hover_color');
			if ($link_hover_color) {
				$theme_options_styles .= '
				a:hover{ 
					color: ' . $link_hover_color . '; 
				}';
			}
			
			$link_active_color = of_get_option('link_active_color');
			if ($link_active_color) {
				$theme_options_styles .= '
				a:active{ 
					color: ' . $link_active_color . '; 
				}';
			}
			
			$topbar_position = of_get_option('nav_position');
			if ($topbar_position == 'scroll') {
				$theme_options_styles .= '
				.navbar{ 
					position: static; 
				}
				body{
					padding-top: 0;
				}
				'	
				;
			}
			
			$topbar_bg_color = of_get_option('top_nav_bg_color');
			if ($topbar_bg_color) {
				$theme_options_styles .= '
				.navbar-inner, .navbar .fill { 
					background-color: '. $topbar_bg_color . ';
				}';
			}
			
			$use_gradient = of_get_option('showhidden_gradient');
			if ($use_gradient) {
				$topbar_bottom_gradient_color = of_get_option('top_nav_bottom_gradient_color');
			
				$theme_options_styles .= '
				.navbar-inner, .navbar .fill {
					background-image: -khtml-gradient(linear, left top, left bottom, from(' . $topbar_bg_color . '), to('. $topbar_bottom_gradient_color . '));
					background-image: -moz-linear-gradient(top, ' . $topbar_bg_color . ', '. $topbar_bottom_gradient_color . ');
					background-image: -ms-linear-gradient(top, ' . $topbar_bg_color . ', '. $topbar_bottom_gradient_color . ');
					background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, ' . $topbar_bg_color . '), color-stop(100%, '. $topbar_bottom_gradient_color . '));
					background-image: -webkit-linear-gradient(top, ' . $topbar_bg_color . ', '. $topbar_bottom_gradient_color . '2);
					background-image: -o-linear-gradient(top, ' . $topbar_bg_color . ', '. $topbar_bottom_gradient_color . ');
					background-image: linear-gradient(top, ' . $topbar_bg_color . ', '. $topbar_bottom_gradient_color . ');
					filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=\'' . $topbar_bg_color . '\', endColorstr=\''. $topbar_bottom_gradient_color . '2\', GradientType=0);
				}';
			}
			else{
				$theme_options_styles .= '.navbar-inner, .navbar .fill { background-image: none; };';
			}	
			
			$topbar_link_color = of_get_option('top_nav_link_color');
			if ($topbar_link_color) {
				$theme_options_styles .= '
				.navbar .nav li a { 
					color: '. $topbar_link_color . ';
				}';
			}
			
			$topbar_link_hover_color = of_get_option('top_nav_link_hover_color');
			if ($topbar_link_hover_color) {
				$theme_options_styles .= '
				.navbar .nav li a:hover { 
					color: '. $topbar_link_hover_color . ';
				}';
			}
			
			$topbar_dropdown_hover_bg_color = of_get_option('top_nav_dropdown_hover_bg');
			if ($topbar_dropdown_hover_bg_color) {
				$theme_options_styles .= '
					.dropdown-menu li > a:hover, .dropdown-menu .active > a, .dropdown-menu .active > a:hover {
						background-color: ' . $topbar_dropdown_hover_bg_color . ';
					}
				';
			}
			
			$topbar_dropdown_item_color = of_get_option('top_nav_dropdown_item');
			if ($topbar_dropdown_item_color){
				$theme_options_styles .= '
					.dropdown-menu a{
						color: ' . $topbar_dropdown_item_color . ' !important;
					}
				';
			}
			
			$hero_unit_bg_color = of_get_option('hero_unit_bg_color');
			if ($hero_unit_bg_color) {
				$theme_options_styles .= '
				.hero-unit { 
					background-color: '. $hero_unit_bg_color . ';
				}';
			}
			
			$suppress_comments_message = of_get_option('suppress_comments_message');
			if ($suppress_comments_message){
				$theme_options_styles .= '
				#main article {
					border-bottom: none;
				}';
			}
			
			$additional_css = of_get_option('wpbs_css');
			if( $additional_css ){
				$theme_options_styles .= $additional_css;
			}
					
			if($theme_options_styles){
				echo '<style>' 
				. $theme_options_styles . '
				</style>';
			}
		
			$bootstrap_theme = of_get_option('wpbs_theme');
			$use_theme = of_get_option('showhidden_themes');
			
			if( $bootstrap_theme && $use_theme ){
				if( $bootstrap_theme == 'default' ){
		?>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
		<?php
				}
				else {
		?>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/admin/themes/<?php echo $bootstrap_theme; ?>.css">
		<?php
				}
			}
		?>
		
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		
		<?php 

			// check wp user level
			get_currentuserinfo(); 
			// store to use later
			global $user_level; 
		
		?>
				
	</head>
	
	<body <?php body_class(); ?>>
				


<img src="<?php echo get_template_directory_uri()."/site-img/du.png" ?>" style="position:absolute; top:0px; right:0px;">


		<header role="banner">
		
			<div id="inner-header" class="clearfix">
				
				<div class="navbar navbar-fixed-top">
					<div class="-navbar-inner">
						<div class="container nav-container">
							<img src="<?php echo get_template_directory_uri()."/site-img/logo.png" ?>"/>


							<nav role="navigation">								
<!-- 								<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
									<div style="float:left; ">
								        <span class="icon-bar"></span>
								        <span class="icon-bar"></span>
								        <span class="icon-bar"></span>
								    </div>
							        <span style="float:left; margin-left:10px; color:#fff;">Menu</span>
								</a> -->
								
								<div class="nav nav-pills">
									<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
								</div>
								
							</nav>
							
							<?php if(of_get_option('search_bar', '1')) {?>
								<form action="<?php echo home_url( '/' ); ?>" method="get" class="form-stacked" style="margin-left:10px;">
												<span class="add-on"><i class="icon-search"></i></span>
												<input type="text" name="s" id="search" placeholder="<?php _e("Buscar","bonestheme"); ?>" value="<?php the_search_query(); ?>" />			
												<button type="submit" class="btn btn-primary"><?php _e("Buscar","bonestheme"); ?></button>
								</form>
							<?php } ?>
							
						</div>
					</div>
				</div>
			
			</div> <!-- end #inner-header -->
		
		</header> <!-- end header -->
		
		<div id="begcont" class="container">

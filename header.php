<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php bloginfo('name');?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
        	<!--[if lte IE 8]>
				<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-old-ie-min.css">
			<![endif]-->
			<!--[if gt IE 8]><!-->
				<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
			<!--<![endif]-->
			
	    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/style.css">
        <script src="<?php bloginfo('stylesheet_directory');?>/js/vendor/modernizr-2.6.2.min.js"></script>
        
        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory');?>/favicon.ico">
        <link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory');?>/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory');?>/favicon-16x16.png" sizes="16x16" />

        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
        
  		<?php wp_head(); ?>
    </head>
    
    	<body <?php body_class(); ?>>
        <!--[if lte IE 9]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        

		<div class="layout dark pure-g">
		
		
			<div class="sidebar pure-u-1 pure-u-md-1-3 padding-top-1 padding-left-2 padding-right-2 padding-bottom-1">
			
				<div class="header">
					<h1 class="brand-title relative">
						<a href="<?php bloginfo('url'); ?>" class="link-no-decor">
							<!-- <img src="<?php bloginfo('template_directory'); ?>/img/logo.jpg" /> -->
    						<?php bloginfo('name'); ?>
    					</a>
    				</h1>
    				
    				
    				<!--<p id="description"><?php bloginfo('description'); ?></p>-->
    		
					<div class="not-mobile pure-menu pure-menu-open border border-top-1 margin-top-1">
						<?php 
							$menu_args = array(
								'container' => false
							);
						?>
						<?php wp_nav_menu( $menu_args ); ?>
					</div>
					
					<div class="mobile-only pull-right absolute pull-up padding-top-1 padding-right-2 opener pointer">
						<svg height="32px" fill="#fff" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/></svg>
					</div>
					
					<div class="mobile-only stretch-all top fixed padding-top-1 padding-left-2 mobile-menu">
					<div class="closer pull-right pull-up fixed padding-2 pointer top">
						<svg enable-background="new 0 0 32 32" height="32px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="32px" fill="#263248" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M22.245,4.015c0.313,0.313,0.313,0.826,0,1.139l-6.276,6.27c-0.313,0.312-0.313,0.826,0,1.14l6.273,6.272  c0.313,0.313,0.313,0.826,0,1.14l-2.285,2.277c-0.314,0.312-0.828,0.312-1.142,0l-6.271-6.271c-0.313-0.313-0.828-0.313-1.141,0  l-6.276,6.267c-0.313,0.313-0.828,0.313-1.141,0l-2.282-2.28c-0.313-0.313-0.313-0.826,0-1.14l6.278-6.269  c0.313-0.312,0.313-0.826,0-1.14L1.709,5.147c-0.314-0.313-0.314-0.827,0-1.14l2.284-2.278C4.308,1.417,4.821,1.417,5.135,1.73  L11.405,8c0.314,0.314,0.828,0.314,1.141,0.001l6.276-6.267c0.312-0.312,0.826-0.312,1.141,0L22.245,4.015z"/></svg>
					</div>
					<div class="pure-menu pure-menu-open margin-top-1">
						<?php 
							$menu_args = array(
								'container' => false
							);
						?>
						<?php wp_nav_menu( $menu_args ); ?>
					</div>
					</div>
				
				</div><!--/.header -->
				
				
				
			</div><!--/.sidebar-->
    	
    	
    	<div class="content pure-u-1 pure-u-md-2-3 padding-top-1 padding-left-2 padding-right-2 padding-bottom-2">
    	
    	
    	<!-- end header.php -->
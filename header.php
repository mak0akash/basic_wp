<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="DEDOM">
	<?php wp_head(); ?>
	<style type="text/css"> 
		.header-img{
    	background: url( <?php echo get_theme_mod('header_img',get_template_directory_uri().'/resources/css/img/header.jpg'); ?>) fixed center / cover;
	} 
	.bg-blur{
	    background: rgba(0,0,0,.7);
	    padding-bottom: <?php if(is_front_page()): echo"150"; else: echo "50"; endif;?>px
	}
	</style>
</head>
<body>
	<header class=" header-img">
		<div class="bg-blur">
			
			<div class="container-fluid">
			<div class="row">
				<div class="col-lg-10 m-auto">
					
					<nav class="navbar navbar-expand-lg navbar-dark mt-3 p-1">
					  <a class="navbar-brand" href=" <?php echo esc_url(get_home_url()); ?> "><?php echo esc_url(bloginfo('title')); ?></a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>
					  <?php
					  	$navArg = array(
					  		'theme_location' 	=> 'primary', 
					  		'depth' 			=>	2,
					  		'container'       => 'div',
					        'container_class' => 'collapse navbar-collapse',
					        'container_id'    => 'navbarSupportedContent',
					        'menu_class'      => 'navbar-nav ml-auto',
					        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					        'walker'          => new WP_Bootstrap_Navwalker(),
					  	); 

					  	wp_nav_menu($navArg);
					   ?>
					</nav>
				</div>
			</div>
			<div class="row php pt-5 pb-5">
				<div class="col-lg-8 m-auto <?php if(is_front_page()): echo"pt-5 pb-5"; else: echo ""; endif;?>">
					<div class="<?php if(is_front_page()): echo"pt-5 pb-5"; else: echo ""; endif;?>">
						<p class="text-center text-light ">
							<span class="h1 text-uppercase"> <?php if(is_front_page()): echo ""; elseif(is_page()): echo the_title()." - "; endif;?>	<?php echo esc_url(bloginfo('title')); ?></span> <br>
						<span class="text-info text-center"><?php if(is_front_page()): echo esc_url(bloginfo('description')); else: echo ""; endif;?></span>
						</p>

					</div>
				</div>
			</div>
			</div>
		</div>
	</header> 

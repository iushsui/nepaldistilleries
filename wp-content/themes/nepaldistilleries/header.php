<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="keywords"
		content="Digital marketing agency, Digital marketing company, Digital marketing services, sass, software company">
	<meta name="description" content="vCamp Creative Personal Service HTML Template designed for personal service.">
	<meta property="og:site_name" content="vCamp">
	<meta property="og:url" content="https://heloshape.com/">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Nepal Distilleries">
	<meta name='og:image' content='<?php echo get_stylesheet_directory_uri(); ?>/images/assets/ogg.png'>
	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- For Window Tab Color -->
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#202020">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#202020">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#202020">
	<!-- <title>Red Cherry</title> -->
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="<?php echo get_stylesheet_directory_uri(); ?>/images/fav-icon/icon.png">

    <?php wp_head(); ?>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<!-- Main style sheet -->
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all"> -->
	<!-- responsive style sheet -->
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all"> -->

	<!-- Fix Internet Explorer ______________________________________-->
	<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="assets/vendor/html5shiv.js"></script>
			<script src="assets/vendor/respond.js"></script>
		<![endif]-->
</head>

<body>
	<div class="main-page-wrapper">




		<!-- 
			=============================================
				Theme Main Menu
			============================================== 
			-->
		<header class="theme-main-menu sticky-menu theme-menu-six <?php echo (is_singular('news-events')) ? "white-vr" : ""; ?>">
			<div class="inner-content">
				<div class="d-flex align-items-center justify-content-between">

                        <?php
                        if (function_exists('the_custom_logo')) {
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_url($custom_logo_id, 'full');
        //                            var_dump($logo);
        //                            exit();
                        } ?>
					<div class="logo"><a href="<?= get_home_url(); ?>"><img src="<?= $logo ?>" alt="" width="70"></a>
					</div>
					<nav class="navbar navbar-expand-lg">
						<button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
							data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
							aria-label="Toggle navigation">
							<span></span>
						</button>
						<div class="collapse navbar-collapse dark-style" id="navbarNav">

							<!-- <ul class="navbar-nav">
								<li class="d-block d-lg-none">
									<div class="logo"><a href="index.html"><img src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/images/logo/vCamp_04.png"
												alt="" width="127"></a></div>
								</li> -->
                                <?php 
                                    // wp_nav_menu(
                                    //     array(
                                    //         'theme_location' => 'primary',
                                    //         'container' => '',
                                    //         'add_li_class' => 'nav-item',
                                    //         'add_a_class' => 'nav-link',
                                    //         'items_wrap' => '%3$s'
                                    //     )
                                    // );
                                ?>

								<!-- <li class="nav-item ">
									<a class="nav-link" href="index.html" role="button" aria-expanded="false">Home</a>
								</li>
								<li class="nav-item ">
									<a class="nav-link" href="about.html">About</a>
								</li>
								<li class="nav-item ">
									<a class="nav-link" href="service.html">Services</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link" href="shop.html">Shop</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="blog.html">Blog</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="contact.html">Contact</a>
								</li> -->
                                
							<!-- </ul> -->

							<?php
								wp_nav_menu( [
									'theme_location'  => 'primary',
									// 'container'       => 'nav',
									// 'container_class' => 'primary-menu not-dark',
									'container' => false,
									'menu_class'      => 'navbar-nav', //class of ul
									'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'depth'           => 0,
									'walker'          => new Redcherry_Nav_Walker()
								] );
							?>

							<div class="mobile-content d-block d-lg-none">
								<form action="#" class="search-form">
									<input type="text" placeholder="Search here..">
									<button><i class="bi bi-search"></i></button>
								</form>

								<div class="address-block">
									<h4 class="title">Our Address</h4>
									<p>Chowrastar Mirpur- 1210, Sangu <br>River, Dhaka</p>
									<p>Urgent issue? call us at <br><a href="tel:310.841.5500">310.841.5500</a></p>
								</div>
							</div> <!-- /.mobile-content -->
						</div>
					</nav>
					<div class="right-widget d-flex align-items-center d-none">
						<a href="sign-in.html" class="d-flex align-items-center login-btn">
							<img src="assets/images/icon/icon_44.svg" alt="">
							<span class="font-zen">login</span>
						</a>
						<a href="sign-up.html" class="d-none d-lg-block sign-up-btn font-zen">Sign Up</a>
					</div> <!-- /.right-widget -->
				</div>
			</div> <!-- /.inner-content -->
		</header> <!-- /.theme-main-menu -->
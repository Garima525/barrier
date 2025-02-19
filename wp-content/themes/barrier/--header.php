<!DOCTYPE html>
<html lang="zxx" class="is-preload">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- favicon  -->
	<!-- <link rel="shortcut icon" href="img/ui/logo.ico" type="image/x-icon"> -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/ui/logo.svg" type="image/x-icon">
	<!-- swiper css -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/plugins/swiper.min.css">
	<!-- fancybox css -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/plugins/fancybox.min.css">
	<!-- orabel css -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
	<!-- page title -->
	<title>Aastha Mangla</title>
	<?php wp_head() ?>
</head>

<body>

	<div class="orb-wrapper">
		<!-- page loader -->
		<div class="orb-loader-frame">
			<div class="orb-loader">
				<div class="orb-deco-1">
					<div class="orb-prog"></div>
				</div>
				<div class="orb-deco-2">
					<div class="orb-spiner"></div>
				</div>
			</div>
		</div>
		<!-- page loader end -->
		<div id="orb-dynamic-content" class="transition-fade">

			<div class="orb-page-frame <?php if(is_page('Winged post')){?>orb-blog-2<?php }else{?> orb-home-1<?php } ?>">

				<div class="orb-top-bar-frame">
					<div class="orb-content orb-top-bar">
						<a href="index.html" class="orb-logo-frame">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ui/logo.svg" alt="Aastha Mangla" style="width: 70px; margin-top: -25px;">
							<!-- svg logo -->
							<!-- <svg viewBox="0 0 125 19" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M11.3594 9.57031C11.3594 10.6901 11.1615 11.6719 10.7656 12.5156C10.3698 13.3594 9.80208 14.0104 9.0625 14.4688C8.32812 14.9271 7.48438 15.1562 6.53125 15.1562C5.58854 15.1562 4.7474 14.9297 4.00781 14.4766C3.26823 14.0234 2.69531 13.3776 2.28906 12.5391C1.88281 11.6953 1.67708 10.7266 1.67188 9.63281V9.07031C1.67188 7.95052 1.8724 6.96615 2.27344 6.11719C2.67969 5.26302 3.25 4.60938 3.98438 4.15625C4.72396 3.69792 5.56771 3.46875 6.51562 3.46875C7.46354 3.46875 8.30469 3.69792 9.03906 4.15625C9.77865 4.60938 10.349 5.26302 10.75 6.11719C11.1562 6.96615 11.3594 7.94792 11.3594 9.0625V9.57031ZM8.98438 9.05469C8.98438 7.86198 8.77083 6.95573 8.34375 6.33594C7.91667 5.71615 7.30729 5.40625 6.51562 5.40625C5.72917 5.40625 5.1224 5.71354 4.69531 6.32812C4.26823 6.9375 4.05208 7.83333 4.04688 9.01562V9.57031C4.04688 10.7318 4.26042 11.6328 4.6875 12.2734C5.11458 12.9141 5.72917 13.2344 6.53125 13.2344C7.31771 13.2344 7.92188 12.9271 8.34375 12.3125C8.76562 11.6927 8.97917 10.7917 8.98438 9.60938V9.05469ZM30.0734 10.8359H28.2062V15H25.8625V3.625H30.0891C31.4328 3.625 32.4693 3.92448 33.1984 4.52344C33.9276 5.1224 34.2922 5.96875 34.2922 7.0625C34.2922 7.83854 34.1229 8.48698 33.7844 9.00781C33.451 9.52344 32.9432 9.9349 32.2609 10.2422L34.7219 14.8906V15H32.2062L30.0734 10.8359ZM28.2062 8.9375H30.0969C30.6854 8.9375 31.1411 8.78906 31.4641 8.49219C31.787 8.1901 31.9484 7.77604 31.9484 7.25C31.9484 6.71354 31.7948 6.29167 31.4875 5.98438C31.1854 5.67708 30.7193 5.52344 30.0891 5.52344H28.2062V8.9375ZM55.3031 12.6562H51.1937L50.4125 15H47.9203L52.1547 3.625H54.3266L58.5844 15H56.0922L55.3031 12.6562ZM51.8266 10.7578H54.6703L53.2406 6.5L51.8266 10.7578ZM72.4469 15V3.625H76.4313C77.8115 3.625 78.8583 3.89062 79.5719 4.42188C80.2854 4.94792 80.6422 5.72135 80.6422 6.74219C80.6422 7.29948 80.499 7.79167 80.2125 8.21875C79.926 8.64062 79.5276 8.95052 79.0172 9.14844C79.6005 9.29427 80.0589 9.58854 80.3922 10.0312C80.7307 10.474 80.9 11.0156 80.9 11.6562C80.9 12.75 80.551 13.5781 79.8531 14.1406C79.1552 14.7031 78.1604 14.9896 76.8688 15H72.4469ZM74.7906 10.0469V13.1172H76.7984C77.3505 13.1172 77.7802 12.987 78.0875 12.7266C78.4 12.4609 78.5563 12.0964 78.5563 11.6328C78.5563 10.5911 78.0172 10.0625 76.9391 10.0469H74.7906ZM74.7906 8.39062H76.525C77.7073 8.36979 78.2984 7.89844 78.2984 6.97656C78.2984 6.46094 78.1474 6.09115 77.8453 5.86719C77.5484 5.63802 77.0771 5.52344 76.4313 5.52344H74.7906V8.39062ZM102.309 10.0703H97.8094V13.1172H103.091V15H95.4656V3.625H103.075V5.52344H97.8094V8.23438H102.309V10.0703ZM119.609 13.1172H124.586V15H117.266V3.625H119.609V13.1172Z" />
								<circle cx="6.5" cy="9.5" r="6.5" fill="#C57642" />
								<circle cx="14.5" cy="4.5" r="1.5" fill="#C57642" />
							</svg> -->
						</a>
						<div class="orb-right-side">
							<div class="orb-menu-frame">
								<!-- <nav> -->
									<?php
										wp_nav_menu( array(
										    'menu' => 'Header',
										    'container' => 'nav',
										    'menu_class' => 'orb-menu',
										    'add_li_class'  => 'orb-has-children'
										) );
									?>
									<!-- <ul class="orb-menu">
										<li class="orb-has-children orb-current">
											<a href="index.html">Home</a>
										</li>
										<li class="orb-has-children">
											<a href="about.html">About</a>
										</li>
										<li class="orb-has-children">
											<a href="art.html" data-no-swup>Art</a>
										</li>
										<li class="orb-has-children">
											<a href="pieces.html" data-no-swup>AP PORTFOLIO PIECES</a>
										</li>
										<li class="orb-has-children">
											<a href="editorial.html">Editorial</a>
										</li>
										<li class="orb-has-children">
											<a href="humans of harker.html">humans of harker</a>
										</li>
										<li class="orb-has-children">
											<a href="newspaper.html" data-no-swup>WINGED POST</a>
										</li>
									</ul> -->
								<!-- </nav> -->
							</div>
						</div>
						<div class="orb-menu-btn">
							<span></span>
						</div>
					</div>
				</div>

				<div class="orb-big-menu-frame">

					<div class="orb-big-menu orb-big-menu-2">
						<div class="orb-grid">
							<div class="orb-g-33 orb-lg-50 orb-sm-100">
								<div class="orb-menu-frame orb-fs-menu">
									<nav>
										<?php
											wp_nav_menu( array(
											    'menu' => 'Header',
											    'container' => 'nav',
											    'menu_class' => 'orb-menu',
											    'add_li_class'  => 'orb-has-children'
											) );
										?>
										<!-- <ul class="orb-menu">
											<li class="orb-has-children orb-current">
												<a href="index.html" data-no-swup>Home</a>
												</li>
											<li class="orb-has-children">
												<a href="about.html" data-no-swup>About</a>
											</li>
											<li class="orb-has-children">
												<a href="art.html" data-no-swup>Art</a>
											</li>
											<li class="orb-has-children">
												<a href="pieces.html" data-no-swup>AP PORTFOLIO PIECES</a>
											</li>
											<li class="orb-has-children">
												<a href="editorial.html" data-no-swup>Editorial</a>
											</li>
											<li class="orb-has-children">
												<a href="humans of harker.html" data-no-swup>humans of harker</a>
											</li>
											<li class="orb-has-children">
												<a href="newspaper.html" data-no-swup>WINGED POST</a>
											</li>
										</ul> -->
									</nav>
								</div>
							</div>
							<div class="orb-g-33 orb-lg-50 orb-sm-100">
								<div class="rb-object-frame">
									<div class="orb-photo-frame orb-obj-1">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo/a7.jpg" alt="photo">
									</div>
								</div>
							</div>
							<div class="orb-g-33 orb-lg-50 orb-sm-100">
								<div class="orb-menu-text-frame">
									<div class="orb-menu-text">
										<p>I am Aastha Mangla, my favorite areas are painting, writing Articles, Sketching.</p>
									</div>
									<a href="https://www.instagram.com/" target="_blank" data-no-swup class="orb-instagram">
										<span>My instagram</span>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ui/instagram-2.svg" alt="Instagram">
									</a>
								</div>
							</div>
						</div>
					</div>

				</div>
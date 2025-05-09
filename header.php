<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Your one-stop shop for your pets – We are a company that truly cares for our clients and treats your pets as if they were our own. We prioritize their overall well-being - mind, body, and emotions - through compassionate care and positive reinforcement.">
	<meta name="keywords" content="tailz, pets, pet, pet store, pet shop, dog, cat, dogs, cats, daycare, dog daycare, grooming, training, dog training, hotel, pet hotel, professional pet pictures, puppy, puppies, edmonton">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 antialiased font-worksans'); ?>>

	<?php do_action('my_tailpress_theme_site_before'); ?>

	<div id="page" class="min-h-screen flex flex-col">

		<?php do_action('my_tailpress_theme_header'); ?>

		<?php
		// Check if sticky header is enabled (default to true if not set)
		$sticky_header_enabled = get_field('sticky_header_enabled', 'option');
		if ($sticky_header_enabled === null) {
			$sticky_header_enabled = true; // Default to sticky if not set
		}

		// First check if the page has a banner setting
		$page_banner_enabled = get_field('banner_enabled');
		$page_banner_text = get_field('banner_text');

		// If no page-specific setting, fall back to global settings
		if ($page_banner_enabled === null) {
			$page_banner_enabled = get_field('banner_enabled', 'option');
			$page_banner_text = get_field('banner_text', 'option');
		}

		// Get address from options (with fallback)
		$banner_address = get_field('banner_address', 'option');
		if (empty($banner_address)) {
			$banner_address = '12004 111 Ave NW, Edmonton, AB';
		}

		// Apply sticky classes to the wrapper only if sticky is enabled
		$header_wrapper_classes = 'header-wrapper w-full z-30';
		if ($sticky_header_enabled) {
			$header_wrapper_classes .= ' sticky top-0 left-0 right-0';
		}
		?>

		<!-- Sticky wrapper that contains both banner and header -->
		<div class="<?php echo esc_attr($header_wrapper_classes); ?>">
			<?php if ($page_banner_enabled && !empty($page_banner_text)) : ?>
				<!-- Banner Alert -->
				<div class="w-full bg-[#FEA91D] text-white banner-alert" role="alert" aria-live="polite" aria-atomic="true">
					<div class="container mx-auto px-4">
						<div class="flex flex-col sm:flex-row justify-between items-center text-center sm:text-left py-3">
							<div class="font-worksans font-bold text-xl mb-2 sm:mb-0">
								<?php echo esc_html($page_banner_text); ?>
							</div>
							<div class="flex items-center font-worksans text-lg">
								<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-2 flex-shrink-0" aria-hidden="true" focusable="false">
									<path d="M10 20.5C10 20.5 17.5 13.3925 17.5 8C17.5 6.01088 16.7098 4.10322 15.3033 2.6967C13.8968 1.29018 11.9891 0.5 10 0.5C8.01088 0.5 6.10322 1.29018 4.6967 2.6967C3.29018 4.10322 2.5 6.01088 2.5 8C2.5 13.3925 10 20.5 10 20.5ZM10 11.75C9.00544 11.75 8.05161 11.3549 8.34835 10.6517C6.64509 9.94839 6.25 8.99456 6.25 8C6.25 7.00544 6.64509 6.05161 7.34835 5.34835C8.05161 4.64509 9.00544 4.25 10 4.25C10.9946 4.25 11.9484 4.64509 12.6517 5.34835C13.3549 6.05161 13.75 7.00544 13.75 8C13.75 8.99456 13.3549 9.94839 12.6517 10.6517C11.9484 11.3549 10.9946 11.75 10 11.75Z" fill="white" />
								</svg>
								<address class="not-italic"><?php echo esc_html($banner_address); ?></address>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<!-- Main Site Header -->
			<header class="site-header bg-[#2B3FB8] w-full" role="banner">
				<!-- Main Navigation -->
				<div class="mx-[24px] lg:mx-[90px]">
					<div class="header-main h-[110px] sm:h-[80px] relative lg:flex items-center lg:justify-between">
						<!-- Mobile Menu Toggle -->
						<button id="primary-menu-toggle" class="absolute left-[26px] top-1/2 -translate-y-1/2 block lg:hidden text-white mobile-menu-toggle" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="mobile-menu">
							<svg width="35" height="26.24" viewBox="0 0 35 26.24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="block">
								<rect y="0" width="35" height="2.5" fill="currentColor" />
								<rect y="12" width="35" height="2.5" fill="currentColor" />
								<rect y="24" width="35" height="2.5" fill="currentColor" />
							</svg>
						</button>

						<!-- Logo -->
						<div class="site-logo absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 lg:static lg:translate-x-0 lg:translate-y-0 lg:ml-0">
							<?php if (has_custom_logo()) { ?>
								<?php the_custom_logo(); ?>
							<?php } else { ?>
								<a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center" aria-label="<?php echo esc_attr(get_bloginfo('name')); ?> - Home">
									<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/resources/images/Tailz-Logo.webp"
										alt="<?php echo esc_attr(get_bloginfo('name')); ?> Logo"
										class="h-[84px] w-[72.41px] sm:h-[48px] sm:w-auto transition-transform duration-200 hover:scale-105"
										width="72.41"
										height="84"
										loading="eager"
										decoding="async">
								</a>
							<?php } ?>
						</div>

						<!-- Desktop Navigation -->
						<nav id="desktop-nav" class="hidden lg:flex items-center lg:ml-8" role="navigation" aria-label="Main navigation">
							<ul class="flex items-center gap-x-[53px]">
								<li class="group relative">
									<div class="relative">
										<!-- Added aria-haspopup and aria-expanded to inform assistive tech -->
										<a href="/services" class="flex items-center rounded-t-[20px] group-hover:bg-[#1F3190] px-4 py-2 transition-colors duration-200 relative"
											aria-haspopup="true" aria-expanded="false">
											<span class="text-white text-[20px] font-bold font-poppins whitespace-nowrap">SERVICES</span>
											<svg class="ml-2" width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
												<path d="M6.96198 9.87746L0.344074 2.54954C-0.436938 1.68735 0.197807 0.333252 1.38312 0.333252H14.6189C14.8842 0.333032 15.1439 0.406889 15.367 0.545979C15.59 0.68507 15.767 0.883497 15.8766 1.1175C15.9863 1.3515 16.024 1.61116 15.9852 1.86537C15.9464 2.11959 15.8328 2.35759 15.658 2.55088L9.04008 9.87612C8.91056 10.0197 8.75084 10.1348 8.57162 10.2136C8.39241 10.2925 8.19786 10.3333 8.00103 10.3333C7.8042 10.3333 7.60965 10.2925 7.43044 10.2136C7.25122 10.1348 7.0915 10.0197 6.96198 9.87612V9.87746Z" fill="white" />
											</svg>
											<div class="absolute bottom-0 left-0 right-0 h-1 bg-[#1F3190] opacity-0 group-hover:opacity-100 transition-opacity duration-200"></div>
										</a>
									</div>
									<div class="absolute top-[calc(100%-1px)] left-0 hidden group-hover:block bg-[#1F3190] rounded-b-[20px] rounded-r-[20px] p-4 space-y-4 min-w-[200px] z-50 shadow-lg">
										<a href="<?php echo esc_url(home_url('/grooming')); ?>" class="block text-[#9CA3AF] text-[16px] font-bold font-work-sans hover:text-white transition-colors duration-200">GROOMING</a>
										<a href="<?php echo esc_url(home_url('/daycare')); ?>" class="block text-[#9CA3AF] text-[16px] font-bold font-work-sans hover:text-white transition-colors duration-200">DAYCARE</a>
										<a href="<?php echo esc_url(home_url('/hotel')); ?>" class="block text-[#9CA3AF] text-[16px] font-bold font-work-sans hover:text-white transition-colors duration-200">HOTEL</a>
										<a href="<?php echo esc_url(home_url('/training')); ?>" class="block text-[#9CA3AF] text-[16px] font-bold font-work-sans hover:text-white transition-colors duration-200">TRAINING</a>
										<a href="<?php echo esc_url(home_url('/exercise')); ?>" class="block text-[#9CA3AF] text-[16px] font-bold font-work-sans hover:text-white transition-colors duration-200">EXERCISE</a>
										<a href="<?php echo esc_url(home_url('/portraits')); ?>" class="block text-[#9CA3AF] text-[16px] font-bold font-work-sans hover:text-white transition-colors duration-200">PORTRAITS</a>
										<a href="<?php echo esc_url(home_url('/puppy-programs')); ?>" class="block text-[#9CA3AF] text-[16px] font-bold font-work-sans hover:text-white transition-colors duration-200">PUPPY PROGRAMS</a>
									</div>
								</li>
								<li><a href="/about-us" class="text-white text-[20px] font-bold font-poppins hover:bg-[#1F3190] px-4 py-2 rounded-[20px] transition-colors duration-200">ABOUT US</a></li>
								<li><a href="/gallery" class="text-white text-[20px] font-bold font-poppins hover:bg-[#1F3190] px-4 py-2 rounded-[20px] transition-colors duration-200">GALLERY</a></li>
								<li><a href="/contact" class="text-white text-[20px] font-bold font-poppins hover:bg-[#1F3190] px-4 py-2 rounded-[20px] transition-colors duration-200">CONTACT</a></li>
								<li class="group relative">
									<div class="relative">
										<!-- Added aria attributes for submenu -->
										<a href="/shop" class="flex items-center rounded-t-[20px] group-hover:bg-[#1F3190] px-4 py-2 transition-colors duration-200 relative"
											aria-haspopup="true" aria-expanded="false">
											<span class="text-white text-[20px] font-bold font-poppins">SHOP</span>
											<svg class="ml-2" width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
												<path d="M6.96198 9.87746L0.344074 2.54954C-0.436938 1.68735 0.197807 0.333252 1.38312 0.333252H14.6189C14.8842 0.333032 15.1439 0.406889 15.367 0.545979C15.59 0.68507 15.767 0.883497 15.8766 1.1175C15.9863 1.3515 16.024 1.61116 15.9852 1.86537C15.9464 2.11959 15.8328 2.35759 15.658 2.55088L9.04008 9.87612C8.91056 10.0197 8.75084 10.1348 8.57162 10.2136C8.39241 10.2925 8.19786 10.3333 8.00103 10.3333C7.8042 10.3333 7.60965 10.2925 7.43044 10.2136C7.25122 10.1348 7.0915 10.0197 6.96198 9.87612V9.87746Z" fill="white" />
											</svg>
											<div class="absolute bottom-0 left-0 right-0 h-1 bg-[#1F3190] opacity-0 group-hover:opacity-100 transition-opacity duration-200"></div>
										</a>
									</div>
									<div class="absolute top-[calc(100%-1px)] left-0 hidden group-hover:block bg-[#1F3190] rounded-b-[20px] rounded-r-[20px] p-4 space-y-4 min-w-[200px] z-50 shadow-lg">
										<a href="<?php echo get_term_link('dog', 'product_cat'); ?>" class="block text-[#9CA3AF] text-[16px] font-bold font-work-sans hover:text-white transition-colors duration-200">DOG</a>
										<a href="<?php echo get_term_link('cat', 'product_cat'); ?>" class="block text-[#9CA3AF] text-[16px] font-bold font-work-sans hover:text-white transition-colors duration-200">CAT</a>
									</div>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>

			<!-- Mobile Menu -->
			<div id="mobile-menu-overlay" class="fixed inset-0 bg-black/50 z-40 hidden" role="presentation"></div>
			<div id="mobile-menu" class="fixed inset-y-0 left-0 w-[412px] max-w-[85%] lg:hidden bg-[#2B3FB8] z-50 transform -translate-x-full transition-transform duration-300 ease-in-out overflow-y-auto" role="dialog" aria-modal="true" aria-label="Mobile navigation menu">
				<div class="mobile-menu-header h-[110px] sm:h-[80px] relative">
					<button id="mobile-menu-close" type="button" class="absolute left-[26px] top-1/2 -translate-y-1/2 p-0 flex items-center justify-center hover:text-yellow-400 transition-colors duration-200 !important" aria-label="Close menu">
						<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="block">
							<rect x="0.396851" y="24.7485" width="35" height="4.0367" transform="rotate(-45 0.396851 24.7485) " fill="white" />
							<rect x="3.25122" width="35" height="4.0367" transform="rotate(45 3.25122 0)" fill="white" />
						</svg>
					</button>
				</div>
				<nav class="mobile-menu-nav px-8 pb-20" role="navigation">
					<!-- Services Section -->
					<div class="menu-section pt-4 pb-6 border-b-2 border-white/10">
						<button class="mobile-submenu-toggle w-full flex justify-between items-center text-white text-xl font-bold hover:text-yellow-400 transition-all duration-200" aria-expanded="false" aria-controls="services-submenu" data-target="services-submenu">
							<span>SERVICES</span>
							<svg class="toggle-icon transition-transform duration-200" width="20" height="5" viewBox="0 0 20 5" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
								<rect y="0.603027" width="20" height="4" fill="currentColor" />
							</svg>
						</button>
						<div id="services-submenu" class="sub-menu hidden pt-6 space-y-5 pl-4" role="menu">
							<a href="<?php echo esc_url(home_url('/grooming')); ?>" role="menuitem" class="block text-white text-lg font-bold hover:text-yellow-400 hover:pl-2 transition-all duration-200 py-1">GROOMING</a>
							<a href="<?php echo esc_url(home_url('/daycare')); ?>" role="menuitem" class="block text-white text-lg font-bold hover:text-yellow-400 hover:pl-2 transition-all duration-200 py-1">DAYCARE</a>
							<a href="<?php echo esc_url(home_url('/hotel')); ?>" role="menuitem" class="block text-white text-lg font-bold hover:text-yellow-400 hover:pl-2 transition-all duration-200 py-1">HOTEL</a>
							<a href="<?php echo esc_url(home_url('/training')); ?>" role="menuitem" class="block text-white text-lg font-bold hover:text-yellow-400 hover:pl-2 transition-all duration-200 py-1">TRAINING</a>
							<a href="<?php echo esc_url(home_url('/exercise')); ?>" role="menuitem" class="block text-white text-lg font-bold hover:text-yellow-400 hover:pl-2 transition-all duration-200 py-1">EXERCISE</a>
							<a href="<?php echo esc_url(home_url('/portraits')); ?>" role="menuitem" class="block text-white text-lg font-bold hover:text-yellow-400 hover:pl-2 transition-all duration-200 py-1">PORTRAITS</a>
							<a href="<?php echo esc_url(home_url('/puppy-programs')); ?>" role="menuitem" class="block text-white text-lg font-bold hover:text-yellow-400 hover:pl-2 transition-all duration-200 py-1">PUPPY PROGRAMS</a>
						</div>
					</div>

					<a href="/about-us" class="menu-link block py-6 text-white text-xl font-bold border-b-2 border-white/10 hover:text-yellow-400 hover:pl-2 transition-all duration-200">ABOUT US</a>
					<a href="/gallery" class="menu-link block py-6 text-white text-xl font-bold border-b-2 border-white/10 hover:text-yellow-400 hover:pl-2 transition-all duration-200">GALLERY</a>
					<a href="/contact" class="menu-link block py-6 text-white text-xl font-bold border-b-2 border-white/10 hover:text-yellow-400 hover:pl-2 transition-all duration-200">CONTACT</a>

					<!-- Shop Section -->
					<div class="menu-section py-6">
						<button class="mobile-submenu-toggle w-full flex justify-between items-center text-white text-xl font-bold hover:text-yellow-400 transition-all duration-200" aria-expanded="false" aria-controls="shop-submenu" data-target="shop-submenu">
							<span>SHOP</span>
							<svg class="toggle-icon transition-transform duration-200" width="20" height="5" viewBox="0 0 20 5" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
								<rect y="0.603027" width="20" height="4" fill="currentColor" />
							</svg>
						</button>
						<div id="shop-submenu" class="sub-menu hidden pt-6 space-y-5 pl-4" role="menu">
							<a href="<?php echo get_term_link('dog', 'product_cat'); ?>" role="menuitem" class="block text-white text-lg font-bold hover:text-yellow-400 hover:pl-2 transition-all duration-200 py-1">DOG</a>
							<a href="<?php echo get_term_link('cat', 'product_cat'); ?>" role="menuitem" class="block text-white text-lg font-bold hover:text-yellow-400 hover:pl-2 transition-all duration-200 py-1">CAT</a>
						</div>
					</div>
				</nav>
			</div>

		</div>

		<main id="content" class="site-content flex-grow">

			<?php do_action('my_tailpress_theme_content_start'); ?>
</body>

</html>
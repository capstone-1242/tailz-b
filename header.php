<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
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
				<div class="container mx-auto px-6 sm:px-4">
					<div class="header-main h-[110px] sm:h-[80px] relative lg:flex lg:items-center lg:justify-between">
						<!-- Mobile Menu Toggle -->
						<button id="primary-menu-toggle" class="absolute left-[26px] top-1/2 -translate-y-1/2 block lg:hidden text-white mobile-menu-toggle" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="mobile-menu">
							<svg width="35" height="26.24" viewBox="0 0 35 26.24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="block">
								<rect y="0" width="35" height="2.5" fill="currentColor" />
								<rect y="12" width="35" height="2.5" fill="currentColor" />
								<rect y="24" width="35" height="2.5" fill="currentColor" />
							</svg>
						</button>

						<!-- Logo -->
						<div class="site-logo absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 lg:static lg:translate-x-0 lg:translate-y-0 lg:ml-[53px]">
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
						<nav id="desktop-nav" class="hidden lg:flex items-center ml-[53px]" role="navigation" aria-label="Main navigation">
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

						<!-- User & Cart Icons -->
						<div class="absolute right-[24px] top-1/2 -translate-y-1/2 lg:static lg:transform-none header-icons flex items-center gap-x-[16px] sm:gap-x-8">
							<a href="<?php echo esc_url(home_url('/my-account')); ?>" class="text-white" aria-label="My Account">
								<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="block">
									<path d="M18 18C20.3016 18 22.5091 17.0833 24.1364 15.4557C25.7637 13.8281 26.6786 11.6209 26.6786 9.32143C26.6786 7.02189 25.7637 4.81471 24.1364 3.18708C22.5091 1.55946 20.3016 0.642857 18 0.642857C15.6984 0.642857 13.4909 1.55946 11.8636 3.18708C10.2363 4.81471 9.32143 7.02189 9.32143 9.32143C9.32143 11.6209 10.2363 13.8281 11.8636 15.4557C13.4909 17.0833 15.6984 18 18 18Z" fill="currentColor" />
									<path d="M35.3571 32.4643C35.3571 35.3571 32.4643 35.3571 32.4643 35.3571H3.53571C3.53571 35.3571 0.642857 35.3571 0.642857 32.4643C0.642857 29.5714 3.53571 20.8929 18 20.8929C32.4643 20.8929 35.3571 29.5714 35.3571 32.4643Z" fill="currentColor" />
								</svg>
							</a>
							<a href="<?php echo esc_url(home_url('/cart')); ?>" class="text-white" aria-label="Shopping Cart">
								<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="block">
									<path d="M15 2C16.3909 2 17.7141 2.52679 18.7142 3.52686C19.7143 4.52694 20.2411 5.85073 20.2411 7.23809V8.28571H9.75893V7.23809C9.75893 5.85073 10.2857 4.52694 11.2858 3.52686C12.2859 2.52679 13.6091 2 15 2ZM22.2615 8.28571V7.23809C22.2615 5.24494 21.4744 3.33373 20.0735 1.93252C18.6725 0.531305 16.7613 -0.256409 14.7692 -0.256409C12.7772 -0.256409 10.8659 0.531305 9.46496 1.93252C8.06411 3.33373 7.27692 5.24494 7.27692 7.23809V8.28571H2V28.5714C2 29.6646 2.43369 30.7128 3.20648 31.4856C3.97926 32.2583 5.02739 32.6919 6.12308 32.6919H23.8769C24.9726 32.6919 26.0207 32.2583 26.7935 31.4856C27.5663 30.7128 28 29.6646 28 28.5714V8.28571H22.2615Z" fill="currentColor" />
								</svg>
							</a>
						</div>
					</div>
				</div>
			</header>

			<!-- Mobile Menu -->
			<div id="mobile-menu-overlay" class="fixed inset-0 bg-black/50 z-40 hidden" role="presentation"></div>
			<div id="mobile-menu" class="fixed inset-y-0 left-0 w-[412px] max-w-[85%] lg:hidden bg-[#2B3FB8] z-50 transform -translate-x-full transition-transform duration-300 ease-in-out overflow-y-auto" role="dialog" aria-modal="true" aria-label="Mobile navigation menu">
				<button id="mobile-menu-close" type="button" class="mobile-menu-close absolute top-6 right-6 z-50 p-2 hover:text-yellow-400 transition-colors duration-200" aria-label="Close menu">
					<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
						<rect x="0.396851" y="24.7485" width="35" height="4.0367" transform="rotate(-45 0.396851 24.7485)" fill="white" />
						<rect x="3.25122" width="35" height="4.0367" transform="rotate(45 3.25122 0)" fill="white" />
					</svg>
				</button>
				<nav class="mobile-menu-nav pt-20 px-8 pb-20" role="navigation">
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

					<!-- Login/Signup with icon before text -->
					<div class="mt-6 border-t-2 border-white/10">
						<a href="/login" class="menu-link login-link flex items-center gap-3 py-6 text-white text-xl font-bold hover:text-yellow-400 hover:pl-2 transition-all duration-200">
							<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
								<path d="M14 14C15.7902 14 17.5071 13.2888 18.773 12.023C20.0388 10.7571 20.75 9.04021 20.75 7.25C20.75 5.45979 20.0388 3.7429 18.773 2.47703C17.5071 1.21116 15.7902 0.5 14 0.5C12.2098 0.5 10.4929 1.21116 9.22703 2.47703C7.96116 3.7429 7.25 5.45979 7.25 7.25C7.25 9.04021 7.96116 10.7571 9.22703 12.023C10.4929 13.2888 12.2098 14 14 14Z" fill="currentColor" />
								<path d="M27.5 25.25C27.5 27.5 25.25 27.5 25.25 27.5H2.75C2.75 27.5 0.5 27.5 0.5 25.25C0.5 23 2.75 16.25 14 16.25C25.25 16.25 27.5 23 27.5 25.25Z" fill="currentColor" />
							</svg>
							<span>LOG IN / SIGN UP</span>
						</a>
					</div>
				</nav>
			</div>

		</div>

		<main id="content" class="site-content flex-grow">

			<?php do_action('my_tailpress_theme_content_start'); ?>
</body>

</html>
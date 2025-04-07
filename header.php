<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased font-worksans' ); ?>>

<?php do_action( 'my_tailpress_theme_site_before' ); ?>

<!-- Login/Signup Popup -->
<div class="login-signup-popup fixed top-4 left-4 bg-white rounded-lg shadow-lg p-4 z-[100] opacity-0 pointer-events-none">
    <button class="login-signup-close absolute top-2 right-2 text-gray-500 hover:text-gray-700 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
    <div class="flex items-center space-x-2">
        <svg width="24" height="24" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14 14C15.7902 14 17.5071 13.2888 18.773 12.023C20.0388 10.7571 20.75 9.04021 20.75 7.25C20.75 5.45979 20.0388 3.7429 18.773 2.47703C17.5071 1.21116 15.7902 0.5 14 0.5C12.2098 0.5 10.4929 1.21116 9.22703 2.47703C7.96116 3.7429 7.25 5.45979 7.25 7.25C7.25 9.04021 7.96116 10.7571 9.22703 12.023C10.4929 13.2888 12.2098 14 14 14Z" fill="currentColor"/>
        </svg>
        <a href="/my-account" class="font-worksans font-bold text-brand-darkblue hover:text-brand-blue transition-colors">
            LOG IN / SIGN UP
        </a>
    </div>
</div>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'my_tailpress_theme_header' ); ?>

	<header class="relative z-50">
		<!-- Top Banner with Location -->
		<div class="w-full bg-brand-orange text-white">
			<div class="container mx-auto py-3 px-4">
				<div class="flex flex-col sm:flex-row justify-between items-center text-center sm:text-left">
					<div class="font-worksans font-bold text-xl mb-2 sm:mb-0">
						WE MOVED! Visit us at our new location!
					</div>
					<div class="flex items-center font-worksans text-lg">
						<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-2 flex-shrink-0">
							<g clip-path="url(#clip0_2424_461)">
								<path d="M10 20.5C10 20.5 17.5 13.3925 17.5 8C17.5 6.01088 16.7098 4.10322 15.3033 2.6967C13.8968 1.29018 11.9891 0.5 10 0.5C8.01088 0.5 6.10322 1.29018 4.6967 2.6967C3.29018 4.10322 2.5 6.01088 2.5 8C2.5 13.3925 10 20.5 10 20.5ZM10 11.75C9.00544 11.75 8.05161 11.3549 7.34835 10.6517C6.64509 9.94839 6.25 8.99456 6.25 8C6.25 7.00544 6.64509 6.05161 7.34835 5.34835C8.05161 4.64509 9.00544 4.25 10 4.25C10.9946 4.25 11.9484 4.64509 12.6517 5.34835C13.3549 6.05161 13.75 7.00544 13.75 8C13.75 8.99456 13.3549 9.94839 12.6517 10.6517C11.9484 11.3549 10.9946 11.75 10 11.75Z" fill="white"/>
							</g>
							<defs>
								<clipPath id="clip0_2424_461">
									<rect width="20" height="20" fill="white" transform="translate(0 0.5)"/>
								</clipPath>
							</defs>
						</svg>
						12004 111 Ave NW, Edmonton, AB
					</div>
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->
		<div class="w-full bg-brand-blue text-white">
			<div class="container mx-auto px-4">
				<div class="flex justify-between items-center py-4">
					<!-- Mobile Menu Toggle -->
					<div class="lg:hidden">
						<button aria-label="Toggle navigation" id="primary-menu-toggle" class="text-white">
							<svg width="35" height="27" viewBox="0 0 35 27" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect y="0.385315" width="35" height="4.0367" fill="white"/>
								<rect y="11.4862" width="35" height="4.0367" fill="white"/>
								<rect y="22.5871" width="35" height="4.0367" fill="white"/>
							</svg>
						</button>
					</div>
					
					<!-- Logo -->
					<div class="flex items-center">
						<?php if ( has_custom_logo() ) { ?>
							<?php the_custom_logo(); ?>
						<?php } else { ?>
							<a href="<?php echo get_bloginfo( 'url' ); ?>" class="flex items-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/Tailz-Logo.webp" alt="Tailz Logo" class="h-12">
							</a>
						<?php } ?>
					</div>
					
					<!-- Desktop Navigation -->
					<nav class="hidden lg:block">
						<?php
						wp_nav_menu(
							array(
								'container_id'    => 'primary-menu-desktop',
								'container_class' => '',
								'menu_class'      => 'flex space-x-8 font-worksans font-medium',
								'theme_location'  => 'primary',
								'li_class'        => '',
								'fallback_cb'     => false,
							)
						);
						?>
					</nav>
					
					<!-- User & Cart -->
					<div class="flex items-center space-x-6">
						<a href="/my-account" class="text-white">
							<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M14 14C15.7902 14 17.5071 13.2888 18.773 12.023C20.0388 10.7571 20.75 9.04021 20.75 7.25C20.75 5.45979 20.0388 3.7429 18.773 2.47703C17.5071 1.21116 15.7902 0.5 14 0.5C12.2098 0.5 10.4929 1.21116 9.22703 2.47703C7.96116 3.7429 7.25 5.45979 7.25 7.25C7.25 9.04021 7.96116 10.7571 9.22703 12.023C10.4929 13.2888 12.2098 14 14 14ZM18.5 7.25C18.5 8.44347 18.0259 9.58807 17.182 10.432C16.3381 11.2759 15.1935 11.75 14 11.75C12.8065 11.75 11.6619 11.2759 10.818 10.432C9.97411 9.58807 9.5 8.44347 9.5 7.25C9.5 6.05653 9.97411 4.91193 10.818 4.06802C11.6619 3.22411 12.8065 2.75 14 2.75C15.1935 2.75 16.3381 3.22411 17.182 4.06802C18.0259 4.91193 18.5 6.05653 18.5 7.25ZM27.5 25.25C27.5 27.5 25.25 27.5 25.25 27.5H2.75C2.75 27.5 0.5 27.5 0.5 25.25C0.5 23 2.75 16.25 14 16.25C25.25 16.25 27.5 23 27.5 25.25ZM25.25 25.241C25.2477 24.6875 24.9035 23.0225 23.378 21.497C21.911 20.03 19.1502 18.5 14 18.5C8.84975 18.5 6.089 20.03 4.622 21.497C3.0965 23.0225 2.7545 24.6875 2.75 25.241H25.25Z" fill="white"/>
							</svg>
						</a>
						<a href="/cart" class="text-white">
							<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15 1.875C16.2432 1.875 17.4355 2.36886 18.3146 3.24794C19.1936 4.12701 19.6875 5.3193 19.6875 6.5625V7.5H10.3125V6.5625C10.3125 5.3193 10.8064 4.12701 11.6854 3.24794C12.5645 2.36886 13.7568 1.875 15 1.875ZM21.5625 7.5V6.5625C21.5625 4.82202 20.8711 3.15282 19.6404 1.92211C18.4097 0.691404 16.7405 0 15 0C13.2595 0 11.5903 0.691404 10.3596 1.92211C9.1289 3.15282 8.4375 4.82202 8.4375 6.5625V7.5H1.875V26.25C1.875 27.2446 2.27009 28.1984 2.97335 28.9016C3.67661 29.6049 4.63044 30 5.625 30H24.375C25.3696 30 26.3234 29.6049 27.0266 28.9016C27.7299 28.1984 28.125 27.2446 28.125 26.25V7.5H21.5625ZM3.75 9.375H26.25V26.25C26.25 26.7473 26.0525 27.2242 25.7008 27.5758C25.3492 27.9275 24.8723 28.125 24.375 28.125H5.625C5.12772 28.125 4.65081 27.9275 4.29917 27.5758C3.94754 27.2242 3.75 26.7473 3.75 26.25V9.375Z" fill="white"/>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Mobile Menu Overlay -->
	<div id="mobile-menu-overlay" class="hidden"></div>

	<!-- Mobile Menu -->
	<div id="mobile-menu">
		<div class="mobile-menu-container">
			<!-- Close Button -->
			<div class="mobile-menu-close-container">
				<button id="mobile-menu-close" class="text-white focus:outline-none hover:opacity-80 transition-opacity">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<line x1="18" y1="6" x2="6" y2="18"></line>
						<line x1="6" y1="6" x2="18" y2="18"></line>
					</svg>
				</button>
			</div>
			
			<!-- Navigation Menu -->
			<div class="mobile-menu-nav">
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'walker'          => new Tailz_Mobile_Menu_Walker(),
						'container'       => 'nav',
						'container_class' => 'mobile-menu-container',
						'menu_class'      => 'mobile-menu-nav space-y-4',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
			
			<!-- Login Button -->
			<div class="p-6 border-t border-white/10">
				<a href="/my-account" class="flex items-center justify-center text-white font-worksans font-bold bg-brand-darkblue rounded-full py-3 px-6 w-full hover:opacity-90 transition-opacity">
					<svg width="24" height="24" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-2">
						<path d="M14 14C15.7902 14 17.5071 13.2888 18.773 12.023C20.0388 10.7571 20.75 9.04021 20.75 7.25C20.75 5.45979 20.0388 3.7429 18.773 2.47703C17.5071 1.21116 15.7902 0.5 14 0.5C12.2098 0.5 10.4929 1.21116 9.22703 2.47703C7.96116 3.7429 7.25 5.45979 7.25 7.25C7.25 9.04021 7.96116 10.7571 9.22703 12.023C10.4929 13.2888 12.2098 14 14 14Z" fill="white"/>
					</svg>
					LOG IN / SIGN UP
				</a>
			</div>
		</div>
	</div>

	<main id="content" class="site-content flex-grow">
		
	<?php do_action( 'my_tailpress_theme_content_start' ); ?>
</body>
</html>




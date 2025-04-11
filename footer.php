</main>

<?php do_action( 'my_tailpress_theme_content_end' ); ?>

</div>

<?php do_action( 'my_tailpress_theme_content_after' ); ?>

<footer id="colophon" class="site-footer m-0 p-0" role="contentinfo">
	<?php do_action( 'my_tailpress_theme_footer' ); ?>
	
	<!-- Top Header -->
	<div class="bg-white py-6">
		<div class="container mx-auto px-4">
			<h2 class="font-poppins font-bold text-[75.78px] text-[#FEA91D] md:text-left text-center lowercase">stop in at tailz</h2>
		</div>
	</div>
	
	<!-- Middle Section (Orange) -->
	<div class="bg-[#FEA91D]">
		<div class="container mx-auto px-4 py-16">
			<div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-16">
				<!-- Hours & Address -->
				<div class="flex flex-col gap-16">
					<!-- Hours -->
					<section aria-labelledby="hours-heading">
						<h3 id="hours-heading" class="font-poppins font-bold text-[42.65px] text-white lowercase mb-8">hours</h3>
						<div class="font-worksans text-[31.99px] text-white">
							<dl class="space-y-4">
								<div class="flex justify-between items-center">
									<dt class="flex-1">Monday - Friday</dt>
									<dd class="flex-1 text-right">6:30 AM - 7 PM</dd>
								</div>
								<div class="flex justify-between items-center">
									<dt class="flex-1">Saturday</dt>
									<dd class="flex-1 text-right">10 AM - 6 PM</dd>
								</div>
								<div class="flex justify-between items-center">
									<dt class="flex-1">Sunday</dt>
									<dd class="flex-1 text-right">CLOSED</dd>
								</div>
							</dl>
						</div>
					</section>
					
					<!-- Address -->
					<section aria-labelledby="address-heading">
						<h3 id="address-heading" class="font-poppins font-bold text-[42.65px] text-white lowercase mb-8">address</h3>
						<address class="font-worksans text-[31.99px] not-italic text-white space-y-2">
							12004 111 Ave NW<br>
							Edmonton, AB T5G 0E6<br>
							Canada
						</address>
					</section>
				</div>

				<!-- Google Map - Responsive -->
				<div class="w-full">
					<div class="w-full aspect-[779/358]">
						<iframe 
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1922.9597619688468!2d-113.52907477517583!3d53.561621584151794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a023c6693a924b%3A0x3d62cc652cdd68b4!2s11204%20119%20St%20NW%2C%20Edmonton%2C%20AB%20T5G%202X3!5e1!3m2!1sen!2sca!4v1741293696592!5m2!1sen!2sca" 
							width="100%" 
							height="100%" 
							style="border:0;" 
							allowfullscreen="" 
							loading="lazy" 
							referrerpolicy="no-referrer-when-downgrade"
							title="Tailz Location on Google Maps"
							aria-label="Interactive map showing Tailz location"
							class="w-full h-full object-cover rounded-lg"
						></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Main Footer (Blue) -->
	<div class="bg-[#2B3FB8] text-white py-16">
		<div class="container mx-auto px-4">
			<div class="grid md:grid-cols-[300px_1fr] gap-x-32">
				<!-- Logo and Social - Left Column -->
				<div class="mb-12 md:mb-0">
					<?php if ( has_custom_logo() ) : ?>
						<?php the_custom_logo(); ?>
					<?php else : ?>
						<a href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php echo esc_attr(get_bloginfo('name')); ?> - Home">
							<img 
								src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Tailz-Logo.webp" 
								alt="<?php echo esc_attr(get_bloginfo('name')); ?> Logo" 
								class="h-16"
								width="200"
								height="64"
								loading="lazy"
							>
						</a>
					<?php endif; ?>
					
					<!-- Social Media Icons -->
					<nav aria-label="Social media links" class="mt-8">
						<div class="flex gap-6">
							<a href="#" aria-label="Follow us on Instagram" class="hover:opacity-80 transition-opacity transform hover:scale-110 transition-transform duration-200">
								<svg width="32" height="32" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
									<path d="M18 0C13.2509 0 12.6538 0.021875 10.7878 0.105C8.92188 0.1925 7.65094 0.485625 6.5375 0.91875C5.36903 1.35696 4.31093 2.04618 3.43781 2.93781C2.54618 3.81093 1.85696 4.86903 1.41875 6.0375C0.985625 7.14875 0.690313 8.42188 0.605 10.2812C0.521875 12.1516 0.5 12.7466 0.5 17.5022C0.5 22.2534 0.521875 22.8484 0.605 24.7144C0.6925 26.5781 0.985625 27.8491 1.41875 28.9625C1.86719 30.1131 2.46438 31.0887 3.43781 32.0622C4.40906 33.0356 5.38469 33.635 6.53531 34.0812C7.65094 34.5144 8.91969 34.8097 10.7834 34.895C12.6516 34.9781 13.2466 35 18 35C22.7534 35 23.3463 34.9781 25.2144 34.895C27.0759 34.8075 28.3512 34.5144 29.4647 34.0812C30.6324 33.6428 31.6897 32.9535 32.5622 32.0622C33.5356 31.0887 34.1328 30.1131 34.5812 28.9625C35.0122 27.8491 35.3075 26.5781 35.395 24.7144C35.4781 22.8484 35.5 22.2534 35.5 17.5C35.5 12.7466 35.4781 12.1516 35.395 10.2834C35.3075 8.42188 35.0122 7.14875 34.5812 6.0375C34.143 4.86903 33.4538 3.81093 32.5622 2.93781C31.6891 2.04618 30.631 1.35696 29.4625 0.91875C28.3469 0.485625 27.0737 0.190313 25.2122 0.105C23.3441 0.021875 22.7513 0 17.9956 0H18Z" fill="white"/>
								</svg>
							</a>
							<a href="#" aria-label="Follow us on Facebook" class="hover:opacity-80 transition-opacity transform hover:scale-110 transition-transform duration-200">
								<svg width="32" height="32" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
									<path d="M35.5 17.6072C35.5 7.88155 27.6644 -0.00219727 18 -0.00219727C8.33126 -9.76562e-06 0.495636 7.88155 0.495636 17.6094C0.495636 26.3966 6.89626 33.6809 15.2613 35.0022V22.6975H10.8206V17.6094H15.2656V13.7266C15.2656 9.31437 17.8797 6.87749 21.8763 6.87749C23.7925 6.87749 25.7941 7.22093 25.7941 7.22093V11.5522H23.5869C21.4147 11.5522 20.7366 12.9106 20.7366 14.3041V17.6072H25.5884L24.8141 22.6953H20.7344V35C29.0994 33.6787 35.5 26.3944 35.5 17.6072Z" fill="white"/>
								</svg>
							</a>
							<a href="#" aria-label="Follow us on Twitter X" class="hover:opacity-80 transition-opacity transform hover:scale-110 transition-transform duration-200">
								<svg width="32" height="32" viewBox="0 0 36 33" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
									<path d="M28.0625 0.640625H33.4306L21.7056 14.0763L35.5 32.3594H24.7003L16.2413 21.2688L6.56156 32.3594H1.19125L13.7322 17.9875L0.5 0.640625H11.5753L19.2206 10.7753L28.0625 0.640625Z" fill="white"/>
								</svg>
							</a>
						</div>
					</nav>
				</div>

				<!-- Navigation Grid - Right Column -->
				<div class="grid grid-cols-2 gap-x-32">
					<!-- What We Offer Section -->
					<section aria-labelledby="services-heading">
						<h2 id="services-heading" class="font-worksans text-[31.99px] text-white mb-8 lowercase">what we offer</h2>
						
						<!-- Services Column -->
						<nav aria-labelledby="services-list-heading">
							<h3 id="services-list-heading" class="font-worksans font-bold text-[24px] text-white uppercase mb-4">
								<a href="<?php echo esc_url(home_url('/services')); ?>" class="text-white hover:text-[#FEA91D] transition-colors">SERVICES</a>
							</h3>
							<ul class="font-worksans text-[24px] uppercase space-y-3 text-white">
								<li><a href="<?php echo esc_url(home_url('/grooming')); ?>" class="hover:text-[#FEA91D] transition-colors">GROOMING</a></li>
								<li><a href="<?php echo esc_url(home_url('/daycare')); ?>" class="hover:text-[#FEA91D] transition-colors">DAYCARE</a></li>
								<li><a href="<?php echo esc_url(home_url('/hotel')); ?>" class="hover:text-[#FEA91D] transition-colors">HOTEL</a></li>
								<li><a href="<?php echo esc_url(home_url('/training')); ?>" class="hover:text-[#FEA91D] transition-colors">TRAINING</a></li>
								<li><a href="<?php echo esc_url(home_url('/exercise')); ?>" class="hover:text-[#FEA91D] transition-colors">EXERCISE</a></li>
								<li><a href="<?php echo esc_url(home_url('/portraits')); ?>" class="hover:text-[#FEA91D] transition-colors">PORTRAITS</a></li>
								<li><a href="<?php echo esc_url(home_url('/puppy-programs')); ?>" class="hover:text-[#FEA91D] transition-colors">PUPPY PROGRAMS</a></li>
							</ul>
						</nav>
						
						<!-- Shop Column -->
						<nav aria-labelledby="shop-list-heading" class="mt-8">
							<h3 id="shop-list-heading" class="font-worksans font-bold text-[24px] text-white uppercase mb-4">
								<a href="<?php echo esc_url(home_url('/shop')); ?>" class="text-white hover:text-[#FEA91D] transition-colors">SHOP</a>
							</h3>
							<ul class="font-worksans text-[24px] uppercase space-y-3 text-white">
								<li><a href="<?php echo esc_url(home_url('/shop/dog')); ?>" class="hover:text-[#FEA91D] transition-colors">DOG</a></li>
								<li><a href="<?php echo esc_url(home_url('/shop/cat')); ?>" class="hover:text-[#FEA91D] transition-colors">CAT</a></li>
							</ul>
						</nav>
					</section>
					
					<!-- Who We Are Section -->
					<section aria-labelledby="about-heading">
						<h2 id="about-heading" class="font-worksans text-[31.99px] text-white mb-8 lowercase">who we are</h2>
						
						<nav aria-labelledby="about-list-heading">
							<h3 id="about-list-heading" class="font-worksans font-bold text-[24px] text-white uppercase mb-4">
								<a href="<?php echo esc_url(home_url('/about')); ?>" class="text-white hover:text-[#FEA91D] transition-colors">ABOUT US</a>
							</h3>
							<h3 class="font-worksans font-bold text-[24px] text-white uppercase mb-4 mt-8">
								<a href="<?php echo esc_url(home_url('/gallery')); ?>" class="text-white hover:text-[#FEA91D] transition-colors">GALLERY</a>
							</h3>
						</nav>
					</section>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Bottom Footer (Dark Blue) -->
	<div class="bg-[#1E2B79] text-white py-4">
		<div class="container mx-auto px-4">
			<div class="flex md:justify-start justify-center items-center space-x-6">
				<span class="font-worksans text-base">© <?php echo date("Y"); ?> <span class="font-bold">TAILZ</span></span>
				<span class="text-gray-300">|</span>
				<a href="<?php echo esc_url(home_url('/terms')); ?>" class="font-worksans text-base hover:text-[#FEA91D] transition-colors">Terms of Use</a>
				<span class="text-gray-300">|</span>
				<a href="<?php echo esc_url(home_url('/privacy')); ?>" class="font-worksans text-base hover:text-[#FEA91D] transition-colors">Privacy Policy</a>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>

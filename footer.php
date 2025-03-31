</main>

<?php do_action( 'my_tailpress_theme_content_end' ); ?>

</div>

<?php do_action( 'my_tailpress_theme_content_after' ); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<?php do_action( 'my_tailpress_theme_footer' ); ?>
	
	<!-- Footer Start -->
	<!-- Top Header -->
	<div class="bg-white text-[#2B3FB8] py-6">
		<div class="container mx-auto px-4">
			<h2 class="font-poppins font-bold text-4xl text-center lowercase">stop in at tailz</h2>
		</div>
	</div>
	
	<!-- Middle Section (Orange) -->
	<div class="bg-[#FEA91D] text-white">
		<div class="container mx-auto px-4 py-8">
			<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
				<!-- Hours & Address -->
				<div class="flex flex-col gap-8">
					<!-- Hours -->
					<div class="flex flex-col gap-3">
						<h3 class="font-poppins font-bold text-2xl lowercase">hours</h3>
						<div class="font-worksans text-lg">
							<div class="flex justify-between mb-2">
								<span>Monday - Friday</span>
								<span>6:30 AM - 7 PM</span>
							</div>
							<div class="flex justify-between mb-2">
								<span>Saturday</span>
								<span>10 AM - 6 PM</span>
							</div>
							<div class="flex justify-between mb-2">
								<span>Sunday</span>
								<span>CLOSED</span>
							</div>
						</div>
					</div>
					
					<!-- Address -->
					<div class="flex flex-col gap-3">
						<h3 class="font-poppins font-bold text-2xl lowercase">address (old)</h3>
						<div class="font-worksans text-lg">
							<p>12004 111 Ave NW</p>
							<p>Edmonton, AB T5G 0E6</p>
							<p>Canada</p>
						</div>
					</div>
				</div>
				
				<!-- Google Map -->
				<div class="w-full h-60 md:h-full">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1922.9597619688468!2d-113.52907477517583!3d53.561621584151794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a023c6693a924b%3A0x3d62cc652cdd68b4!2s11204%20119%20St%20NW%2C%20Edmonton%2C%20AB%20T5G%202X3!5e1!3m2!1sen!2sca!4v1741293696592!5m2!1sen!2sca" 
						width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
			
			<!-- Copyright Section -->
			<div class="border-t border-[#1E2B79] pt-4 mt-6">
				<div class="container mx-auto px-4">
					<div class="flex flex-col md:flex-row justify-center items-center gap-3 text-center md:text-left">
						<span class="font-worksans font-bold text-base">© 2025 TAILZ</span>
						<span class="hidden md:inline text-gray-300">|</span>
						<a href="/terms" class="font-worksans text-base hover:text-[#FEA91D] transition-colors">Terms of Use</a>
						<span class="hidden md:inline text-gray-300">|</span>
						<a href="/privacy" class="font-worksans text-base hover:text-[#FEA91D] transition-colors">Privacy Policy</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Main Footer (Blue) -->
	<div class="bg-[#2B3FB8] text-white py-8">
		<div class="container mx-auto px-4">
			<!-- Logo and Social -->
			<div class="flex flex-col items-center mb-8">
				<a href="<?php echo get_bloginfo('url'); ?>" class="mb-6">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Tailz-Logo.webp" alt="Tailz Logo" class="h-16">
				</a>
				
				<!-- Social Media Icons -->
				<div class="flex gap-6 mb-6">
					<a href="#" aria-label="Instagram" class="hover:opacity-80 transition-opacity">
						<svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M18 0C13.2509 0 12.6538 0.021875 10.7878 0.105C8.92188 0.1925 7.65094 0.485625 6.5375 0.91875C5.36903 1.35696 4.31093 2.04618 3.43781 2.93781C2.54618 3.81093 1.85696 4.86903 1.41875 6.0375C0.985625 7.14875 0.690313 8.42188 0.605 10.2812C0.521875 12.1516 0.5 12.7466 0.5 17.5022C0.5 22.2534 0.521875 22.8484 0.605 24.7144C0.6925 26.5781 0.985625 27.8491 1.41875 28.9625C1.86719 30.1131 2.46438 31.0887 3.43781 32.0622C4.40906 33.0356 5.38469 33.635 6.53531 34.0812C7.65094 34.5144 8.91969 34.8097 10.7834 34.895C12.6516 34.9781 13.2466 35 18 35C22.7534 35 23.3463 34.9781 25.2144 34.895C27.0759 34.8075 28.3512 34.5144 29.4647 34.0812C30.6324 33.6428 31.6897 32.9535 32.5622 32.0622C33.5356 31.0887 34.1328 30.1131 34.5812 28.9625C35.0122 27.8491 35.3075 26.5781 35.395 24.7144C35.4781 22.8484 35.5 22.2534 35.5 17.5C35.5 12.7466 35.4781 12.1516 35.395 10.2834C35.3075 8.42188 35.0122 7.14875 34.5812 6.0375C34.143 4.86903 33.4538 3.81093 32.5622 2.93781C31.6891 2.04618 30.631 1.35696 29.4625 0.91875C28.3469 0.485625 27.0737 0.190313 25.2122 0.105C23.3441 0.021875 22.7513 0 17.9956 0H18ZM16.4316 3.15438H18.0022C22.6747 3.15438 23.2281 3.16969 25.0722 3.255C26.7784 3.33156 27.7059 3.61812 28.3228 3.85656C29.1388 4.17375 29.7228 4.55438 30.3353 5.16687C30.9478 5.77938 31.3263 6.36125 31.6434 7.17938C31.8841 7.79406 32.1684 8.72156 32.245 10.4278C32.3303 12.2719 32.3478 12.8253 32.3478 17.4956C32.3478 22.1659 32.3303 22.7216 32.245 24.5656C32.1684 26.2719 31.8819 27.1972 31.6434 27.8141C31.3609 28.5729 30.9133 29.2595 30.3331 29.8244C29.7206 30.4369 29.1388 30.8153 28.3206 31.1325C27.7081 31.3731 26.7806 31.6575 25.0722 31.7362C23.2281 31.8194 22.6747 31.8391 18.0022 31.8391C13.3297 31.8391 12.7741 31.8194 10.93 31.7362C9.22375 31.6575 8.29844 31.3731 7.68156 31.1325C6.92213 30.8509 6.23475 30.4041 5.66906 29.8244C5.08779 29.2591 4.63947 28.5717 4.35656 27.8119C4.11812 27.1972 3.83156 26.2697 3.755 24.5634C3.67188 22.7194 3.65438 22.1659 3.65438 17.4912C3.65438 12.8166 3.67188 12.2675 3.755 10.4234C3.83375 8.71719 4.11813 7.78969 4.35875 7.17281C4.67594 6.35687 5.05656 5.77281 5.66906 5.16031C6.28156 4.54781 6.86344 4.16937 7.68156 3.85219C8.29844 3.61156 9.22375 3.32719 10.93 3.24844C12.5444 3.17406 13.17 3.15219 16.4316 3.15V3.15438ZM27.3428 6.05937C27.067 6.05937 26.794 6.11369 26.5392 6.21923C26.2844 6.32476 26.0529 6.47945 25.8579 6.67445C25.6629 6.86945 25.5082 7.10096 25.4027 7.35574C25.2971 7.61052 25.2428 7.8836 25.2428 8.15938C25.2428 8.43515 25.2971 8.70823 25.4027 8.96301C25.5082 9.21779 25.6629 9.4493 25.8579 9.6443C26.0529 9.8393 26.2844 9.99399 26.5392 10.0995C26.794 10.2051 27.067 10.2594 27.3428 10.2594C27.8998 10.2594 28.4339 10.0381 28.8277 9.6443C29.2216 9.25047 29.4428 8.71633 29.4428 8.15938C29.4428 7.60242 29.2216 7.06828 28.8277 6.67445C28.4339 6.28062 27.8998 6.05937 27.3428 6.05937ZM18.0022 8.51375C16.8102 8.49515 15.6263 8.71387 14.5196 9.15718C13.4129 9.60049 12.4055 10.2595 11.556 11.0959C10.7064 11.9323 10.0317 12.9294 9.57121 14.029C9.1107 15.1286 8.87353 16.3089 8.87353 17.5011C8.87353 18.6933 9.1107 19.8735 9.57121 20.9732C10.0317 22.0728 10.7064 23.0699 11.556 23.9063C12.4055 24.7427 13.4129 25.4017 14.5196 25.845C15.6263 26.2883 16.8102 26.507 18.0022 26.4884C20.3615 26.4516 22.6117 25.4886 24.2671 23.8071C25.9226 22.1257 26.8504 19.8607 26.8504 17.5011C26.8504 15.1415 25.9226 12.8765 24.2671 11.1951C22.6117 9.51363 20.3615 8.55056 18.0022 8.51375ZM18.0022 11.6659C18.7683 11.6659 19.527 11.8168 20.2348 12.11C20.9426 12.4032 21.5858 12.833 22.1275 13.3747C22.6692 13.9164 23.099 14.5596 23.3922 15.2674C23.6853 15.9752 23.8363 16.7339 23.8363 17.5C23.8363 18.2661 23.6853 19.0248 23.3922 19.7326C23.099 20.4404 22.6692 21.0836 22.1275 21.6253C21.5858 22.167 20.9426 22.5968 20.2348 22.89C19.527 23.1832 18.7683 23.3341 18.0022 23.3341C16.4549 23.3341 14.971 22.7194 13.8769 21.6253C12.7828 20.5312 12.1681 19.0473 12.1681 17.5C12.1681 15.9527 12.7828 14.4688 13.8769 13.3747C14.971 12.2806 16.4549 11.6659 18.0022 11.6659Z" fill="white"/>
						</svg>
					</a>
					<a href="#" aria-label="Facebook" class="hover:opacity-80 transition-opacity">
						<svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M35.5 17.6072C35.5 7.88155 27.6644 -0.00219727 18 -0.00219727C8.33126 -9.76562e-06 0.495636 7.88155 0.495636 17.6094C0.495636 26.3966 6.89626 33.6809 15.2613 35.0022V22.6975H10.8206V17.6094H15.2656V13.7266C15.2656 9.31437 17.8797 6.87749 21.8763 6.87749C23.7925 6.87749 25.7941 7.22093 25.7941 7.22093V11.5522H23.5869C21.4147 11.5522 20.7366 12.9106 20.7366 14.3041V17.6072H25.5884L24.8141 22.6953H20.7344V35C29.0994 33.6787 35.5 26.3944 35.5 17.6072Z" fill="white"/>
						</svg>
					</a>
					<a href="#" aria-label="Twitter X" class="hover:opacity-80 transition-opacity">
						<svg width="36" height="33" viewBox="0 0 36 33" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M28.0625 0.640625H33.4306L21.7056 14.0763L35.5 32.3594H24.7003L16.2413 21.2688L6.56156 32.3594H1.19125L13.7322 17.9875L0.5 0.640625H11.5753L19.2206 10.7753L28.0625 0.640625ZM26.1812 29.1394H29.1562L9.95656 3.69219H6.76719L26.1812 29.1394Z" fill="white"/>
						</svg>
					</a>
				</div>
			</div>
			
			<!-- What We Offer Section -->
			<div class="mb-6">
				<h2 class="font-poppins font-bold text-2xl lowercase text-center mb-3">what we offer</h2>
				<div class="w-full max-w-md mx-auto border-t border-white mb-5"></div>
				
				<div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
					<!-- Services Column -->
					<div>
						<h3 class="font-worksans font-bold text-lg uppercase mb-3">SERVICES</h3>
						<ul class="font-worksans uppercase space-y-2 text-gray-200">
							<li>GROOMING</li>
							<li>DAYCARE</li>
							<li>HOTEL</li>
							<li>TRAINING</li>
							<li>EXERCISE</li>
							<li>PORTRAITS</li>
							<li>PUPPY PROGRAMS</li>
						</ul>
					</div>
					
					<!-- Shop Column -->
					<div>
						<h3 class="font-worksans font-bold text-lg uppercase mb-3">SHOP</h3>
						<ul class="font-worksans uppercase space-y-2 text-gray-200">
							<li>DOG</li>
							<li>CAT</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>

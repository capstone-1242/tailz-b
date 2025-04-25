<footer id="colophon" class="site-footer m-0 p-0" role="contentinfo">
    <?php do_action('my_tailpress_theme_footer'); ?>

    <!-- Top Call-to-Action Section -->
    <section aria-label="Call-to-Action" class="bg-white py-6">
        <div class="container mx-auto px-6 sm:px-4">
            <h2 class="font-poppins font-bold text-[38px] sm:text-[55px] md:text-[75.78px] md:text-left text-center lowercase text-[#FEA91D]">
                stop in at tailz
            </h2>
        </div>
    </section>

    <!-- Footer Information Section (Hours, Address & Map) -->
    <section aria-label="Footer Information" class="bg-[#FEA91D]">
        <div class="container mx-auto px-6 sm:px-4 py-8 md:py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-16">
                <!-- Hours & Address Container -->
                <div class="flex flex-col md:flex-row md:justify-between md:gap-x-16">
                    <!-- Hours -->
                    <div class="mb-8 md:mb-0">
                        <h3 class="font-poppins font-bold text-[32px] md:text-[42.65px] text-white lowercase mb-4 md:mb-6">hours</h3>
                        <div class="font-worksans text-[22px] sm:text-[26px] md:text-[28px] text-white">
                            <dl class="space-y-4">
                                <div class="flex justify-between items-center">
                                    <dt class="mr-4">Monday - Friday</dt>
                                    <dd class="text-right whitespace-nowrap">6:30 AM - 7 PM</dd>
                                </div>
                                <div class="flex justify-between items-center">
                                    <dt class="mr-4">Saturday</dt>
                                    <dd class="text-right whitespace-nowrap">10 AM - 6 PM</dd>
                                </div>
                                <div class="flex justify-between items-center">
                                    <dt class="mr-4">Sunday</dt>
                                    <dd class="text-right whitespace-nowrap">CLOSED</dd>
                                </div>
                            </dl>
                        </div>
                    </div>

                    <!-- Address -->
                    <div>
                        <div class="flex items-center gap-2 mb-4 md:mb-6">
                            <h3 class="font-poppins font-bold text-[32px] md:text-[42.65px] text-white lowercase">address</h3>
                            <span class="font-poppins font-bold text-[24px] md:text-[32px] text-white lowercase">(old)</span>
                        </div>
                        <address class="font-worksans text-[22px] sm:text-[26px] md:text-[28px] not-italic text-white space-y-3">
                            12004 111 Ave NW<br>
                            Edmonton, AB T5G 0E6<br>
                            Canada
                        </address>
                    </div>
                </div>

                <!-- Google Map - Responsive -->
                <div class="w-full flex justify-center">
                    <div class="w-full md:w-4/5 aspect-[4/3] md:aspect-[779/358] rounded-lg overflow-hidden">
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
                            class="w-full h-full object-cover"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Footer Navigation & Social Section -->
    <section aria-label="Footer Navigation" class="bg-[#2B3FB8] text-white py-8 md:py-16">
        <div class="container mx-auto px-6 sm:px-4">
            <!-- Mobile Logo (centered) -->
            <div class="flex justify-center mb-8 md:hidden">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php echo esc_attr(get_bloginfo('name')); ?> - Home">
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Tailz-Logo.webp"
                            alt="<?php echo esc_attr(get_bloginfo('name')); ?> Logo"
                            class="h-16"
                            width="200"
                            height="64"
                            loading="lazy">
                    </a>
                <?php endif; ?>
            </div>
            
            <!-- Mobile Social Icons (centered) -->
            <div class="flex justify-center gap-8 mb-10 md:hidden">
                <a href="https://www.instagram.com/tailz_yeg" aria-label="Follow us on Instagram" class="text-white hover:text-[#FEA91D] transition-colors p-2">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163C8.741 0 8.332.013 7.052.072 3.694.272.272 3.694.072 7.052.013 8.332 0 8.741 0 12s.013 3.668.072 4.948c.2 3.358 3.622 6.78 6.98 6.98C8.332 23.987 8.741 24 12 24s3.668-.013 4.948-.072c3.358-.2 6.78-3.622 6.98-6.98.059-1.28.072-1.689.072-4.948s-.013-3.668-.072-4.948C23.728 3.622 20.306.2 16.948 0 15.668.013 15.259 0 12 0zM12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a3.999 3.999 0 110-7.998 3.999 3.999 0 010 7.998zm6.406-11.845a1.44 1.44 0 11-2.882 0 1.44 1.44 0 012.882 0z"/>
                    </svg>
                </a>
                <a href="https://www.facebook.com/Tailz_YEG" aria-label="Follow us on Facebook" class="text-white hover:text-[#FEA91D] transition-colors p-2">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M9 8H6v4h3v12h5V12h3.642l.358-4H14V5.333C14 4.397 14.192 4 15.115 4H18V0h-3.808C10.596 0 9 1.79 9 4.667V8z"/>
                    </svg>
                </a>
                <a href="https://x.com/tailz_yeg" aria-label="Follow us on Twitter X" class="text-white hover:text-[#FEA91D] transition-colors p-2">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M22.46 6c-.77.35-1.6.58-2.46.69a4.3 4.3 0 001.88-2.38 8.54 8.54 0 01-2.72 1.04 4.29 4.29 0 00-7.31 3.91A12.16 12.16 0 013 4.79a4.28 4.28 0 001.33 5.72 4.27 4.27 0 01-1.94-.54v.05a4.29 4.29 0 003.44 4.2 4.3 4.3 0 01-1.93.07 4.29 4.29 0 004 2.98A8.6 8.6 0 012 19.54a12.14 12.14 0 006.56 1.92c7.87 0 12.18-6.53 12.18-12.18l-.01-.56A8.67 8.67 0 0024 4.59a8.55 8.55 0 01-2.54.7z"/>
                    </svg>
                </a>
            </div>

            <div class="md:grid md:grid-cols-[250px_1fr] md:gap-16 items-start">
                <!-- Desktop Logo and Social - Left Column (hidden on mobile) -->
                <div class="hidden md:block">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php echo esc_attr(get_bloginfo('name')); ?> - Home">
                            <img
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Tailz-Logo.webp"
                                alt="<?php echo esc_attr(get_bloginfo('name')); ?> Logo"
                                class="h-16"
                                width="200"
                                height="64"
                                loading="lazy">
                        </a>
                    <?php endif; ?>

                    <!-- Social Media Icons -->
                    <nav aria-label="Social media links" class="mt-8">
                        <div class="flex gap-6">
                            <a href="https://www.instagram.com/tailz_yeg" aria-label="Follow us on Instagram" class="text-white hover:text-[#FEA91D] transition-colors p-2">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163C8.741 0 8.332.013 7.052.072 3.694.272.272 3.694.072 7.052.013 8.332 0 8.741 0 12s.013 3.668.072 4.948c.2 3.358 3.622 6.78 6.98 6.98C8.332 23.987 8.741 24 12 24s3.668-.013 4.948-.072c3.358-.2 6.78-3.622 6.98-6.98.059-1.28.072-1.689.072-4.948s-.013-3.668-.072-4.948C23.728 3.622 20.306.2 16.948 0 15.668.013 15.259 0 12 0zM12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a3.999 3.999 0 110-7.998 3.999 3.999 0 010 7.998zm6.406-11.845a1.44 1.44 0 11-2.882 0 1.44 1.44 0 012.882 0z"/>
                                </svg>
                            </a>
                            <a href="https://www.facebook.com/Tailz_YEG" aria-label="Follow us on Facebook" class="text-white hover:text-[#FEA91D] transition-colors p-2">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M9 8H6v4h3v12h5V12h3.642l.358-4H14V5.333C14 4.397 14.192 4 15.115 4H18V0h-3.808C10.596 0 9 1.79 9 4.667V8z"/>
                                </svg>
                            </a>
                            <a href="https://x.com/tailz_yeg" aria-label="Follow us on Twitter X" class="text-white hover:text-[#FEA91D] transition-colors p-2">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M22.46 6c-.77.35-1.6.58-2.46.69a4.3 4.3 0 001.88-2.38 8.54 8.54 0 01-2.72 1.04 4.29 4.29 0 00-7.31 3.91A12.16 12.16 0 013 4.79a4.28 4.28 0 001.33 5.72 4.27 4.27 0 01-1.94-.54v.05a4.29 4.29 0 003.44 4.2 4.3 4.3 0 01-1.93.07 4.29 4.29 0 004 2.98A8.6 8.6 0 012 19.54a12.14 12.14 0 006.56 1.92c7.87 0 12.18-6.53 12.18-12.18l-.01-.56A8.67 8.67 0 0024 4.59a8.55 8.55 0 01-2.54.7z"/>
                                </svg>
                            </a>
                        </div>
                    </nav>
                </div>

                <!-- Mobile Menu Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Mobile What We Offer Column -->
                    <div>
                        <h2 class="font-worksans text-[24px] md:text-[31.99px] text-white mb-6 md:mb-8 lowercase pb-4 border-b border-white/40">what we offer</h2>
                        
                        <!-- Services & Shop Grid (side by side on mobile) -->
                        <div class="grid grid-cols-2 gap-6 md:gap-4">
                            <!-- Services Section -->
                            <div>
                                <h3 class="font-worksans font-bold text-[20px] md:text-[24px] text-white uppercase mb-4 md:mb-4">
                                    <a href="<?php echo esc_url(home_url('/services')); ?>" class="text-white hover:text-[#FEA91D] transition-colors">SERVICES</a>
                                </h3>
                                <ul class="font-worksans text-[18px] md:text-[24px] uppercase space-y-4 md:space-y-3 text-white">
                                    <li><a href="<?php echo esc_url(home_url('/grooming')); ?>" class="block hover:text-[#FEA91D] transition-colors py-1">GROOMING</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/daycare')); ?>" class="block hover:text-[#FEA91D] transition-colors py-1">DAYCARE</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/hotel')); ?>" class="block hover:text-[#FEA91D] transition-colors py-1">HOTEL</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/training')); ?>" class="block hover:text-[#FEA91D] transition-colors py-1">TRAINING</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/exercise')); ?>" class="block hover:text-[#FEA91D] transition-colors py-1">EXERCISE</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/portraits')); ?>" class="block hover:text-[#FEA91D] transition-colors py-1">PORTRAITS</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/puppy-programs')); ?>" class="block hover:text-[#FEA91D] transition-colors py-1">PUPPY PROGRAMS</a></li>
                                </ul>
                            </div>

                            <!-- Shop Section -->
                            <div>
                                <h3 class="font-worksans font-bold text-[20px] md:text-[24px] text-white uppercase mb-4 md:mb-4">
                                    <a href="/shop/" class="text-white hover:text-[#FEA91D] transition-colors">SHOP</a>
                                </h3>
                                <ul class="font-worksans text-[18px] md:text-[24px] uppercase space-y-4 md:space-y-3 text-white">
                                    <li><a href="/product-category/dog/" class="block hover:text-[#FEA91D] transition-colors py-1">DOG</a></li>
                                    <li><a href="/product-category/cat/" class="block hover:text-[#FEA91D] transition-colors py-1">CAT</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Who We Are Column -->
                    <div class="mt-8 md:mt-0">
                        <h2 class="font-worksans text-[24px] md:text-[31.99px] text-white mb-6 md:mb-8 lowercase pb-4 border-b border-white/40">who we are</h2>
                        
                        <!-- About/Gallery + Contact Grid (side by side) -->
                        <div class="grid grid-cols-2 gap-6 md:gap-4">
                            <!-- About/Gallery Section -->
                            <div>
                                <h3 class="font-worksans font-bold text-[20px] md:text-[24px] text-white uppercase mb-4 md:mb-4">
                                    <a href="<?php echo esc_url(home_url('/about')); ?>" class="text-white hover:text-[#FEA91D] transition-colors block py-1">ABOUT US</a>
                                </h3>
                                <h3 class="font-worksans font-bold text-[20px] md:text-[24px] text-white uppercase mb-3 mt-6 md:mb-4 md:mt-8">
                                    <a href="<?php echo esc_url(home_url('/gallery')); ?>" class="text-white hover:text-[#FEA91D] transition-colors block py-1">GALLERY</a>
                                </h3>
                            </div>

                            <!-- Contact Section -->
                            <div>
                                <h3 class="font-worksans font-bold text-[20px] md:text-[24px] text-white uppercase mb-4 md:mb-4">CONTACT</h3>
                                <!-- Phone -->
                                <div class="flex items-center gap-3 mb-4">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="flex-shrink-0">
                                        <path d="M20 15.5c-1.25 0-2.45-.2-3.57-.57a1.02 1.02 0 00-1.02.24l-2.2 2.2a15.045 15.045 0 01-6.59-6.59l2.2-2.21a.96.96 0 00.25-1A11.36 11.36 0 018.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.5c0-.55-.45-1-1-1zM19 12h2a9 9 0 00-9-9v2c3.87 0 7 3.13 7 7zm-4 0h2c0-2.76-2.24-5-5-5v2c1.66 0 3 1.34 3 3z"/>
                                    </svg>
                                    <a href="tel:7809880089" class="font-worksans text-[18px] md:text-[24px] hover:text-[#FEA91D] transition-colors">780 988 0089</a>
                                </div>
                                <!-- Email -->
                                <div class="flex items-center gap-3 mb-5">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="flex-shrink-0">
                                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                    </svg>
                                    <a href="mailto:tailz@gmail.com" class="font-worksans text-[18px] md:text-[24px] hover:text-[#FEA91D] transition-colors break-all">tailz@gmail.com</a>
                                </div>
                                <!-- Contact Page Button -->
                                <a href="<?php echo esc_url(home_url('/contact')); ?>" 
                                   class="inline-block bg-[#FEA91D] text-white font-worksans font-normal text-base py-3 px-6 rounded-[20px] hover:bg-[#e0881a] transition-colors">
                                    contact page
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom Footer Section -->
    <div class="bg-[#1E2B79] text-white py-6">
        <div class="container mx-auto px-6 sm:px-4">
            <div class="flex flex-col sm:flex-row justify-center md:justify-start items-center gap-4 md:gap-6">
                <span class="font-worksans text-base">© <?php echo date("Y"); ?> <span class="font-bold">TAILZ</span></span>
                <div class="flex gap-4 sm:gap-6 items-center">
                    <span class="text-gray-300 hidden sm:inline">|</span>
                    <a href="<?php echo esc_url(home_url('/terms')); ?>" class="font-worksans text-base hover:text-[#FEA91D] transition-colors py-1 px-2">Terms of Use</a>
                    <span class="text-gray-300 hidden sm:inline">|</span>
                    <a href="<?php echo esc_url(home_url('/privacy')); ?>" class="font-worksans text-base hover:text-[#FEA91D] transition-colors py-1 px-2">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Back to Top Button -->
<button id="back-to-top" class="fixed bottom-8 right-8 z-50 p-3 bg-[#47423B] text-white rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-[#2C2C2C] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#47423B]">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
    </svg>
    <span class="sr-only">Back to top</span>
</button>

<?php wp_footer(); ?>
</body>
</html>
<?php
/**
 * Template Name: Photos
 * Description: A custom template for the "Photos" (Portraits) page, displaying photoshoot packages with Dog/Cat tabs using Meta Box.
 *
 * @package tailz
 */

get_header();

// 1) Retrieve the cloned fields and cast to arrays.
$dog_titles       = (array) rwmb_meta('photos_dog_title');
$dog_prices       = (array) rwmb_meta('photos_dog_price');
$dog_descriptions = (array) rwmb_meta('photos_dog_desc');

$cat_titles       = (array) rwmb_meta('photos_cat_title');
$cat_prices       = (array) rwmb_meta('photos_cat_price');
$cat_descriptions = (array) rwmb_meta('photos_cat_desc');

// 2) Build dog packages array.
$dog_packages = [];
$dog_total = count($dog_titles);
for ($i = 0; $i < $dog_total; $i++) {
    if (empty($dog_titles[$i])) {
        continue;
    }
    $dog_packages[] = [
        'title' => $dog_titles[$i],
        'price' => isset($dog_prices[$i]) ? $dog_prices[$i] : '',
        'desc'  => isset($dog_descriptions[$i]) ? $dog_descriptions[$i] : '',
    ];
}

// 3) Build cat packages array.
$cat_packages = [];
$cat_total = count($cat_titles);
for ($i = 0; $i < $cat_total; $i++) {
    if (empty($cat_titles[$i])) {
        continue;
    }
    $cat_packages[] = [
        'title' => $cat_titles[$i],
        'price' => isset($cat_prices[$i]) ? $cat_prices[$i] : '',
        'desc'  => isset($cat_descriptions[$i]) ? $cat_descriptions[$i] : '',
    ];
}

/**
 * Helper function for rendering tab content for either "dog" or "cat" packages.
 */
function render_portrait_tab($animal, $packages) {
    ?>
    <div class="tab-content <?php echo $animal === 'dog' ? '' : 'hidden'; ?>" id="<?php echo esc_attr($animal); ?>-content">
        <!-- Packages grid -->
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
            <?php foreach ($packages as $pkg) : ?>
                <div class="p-4 bg-white border rounded-md shadow">
                    <h3 class="text-h4 font-bold text-brand-purple"><?php echo esc_html($pkg['title']); ?></h3>
                    <p class="mt-2 text-sm text-gray-700"><?php echo esc_html($pkg['price']); ?></p>
                    <p class="mt-2 text-sm text-gray-600"><?php echo esc_html($pkg['desc']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php
}
?>

<!-- Main wrapper -->
<div class="min-h-screen">
    <!-- Hero section with pet portrait -->
    <section class="relative bg-white py-8">
        <div class="max-w-3xl mx-auto px-4">
            <!-- Title & Intro -->
            <div class="mb-8">
                <h1 class="font-poppins font-bold text-[53.75px] leading-[100%] tracking-[0%] lowercase text-white">
                    portraits
                </h1>
                <p class="font-worksans font-normal text-[18px] leading-[100%] tracking-[0%] uppercase text-white">
                    PROFESSIONAL PET PICTURES
                </p>
            </div>

            <!-- Breadcrumb -->
            <nav class="mb-6 font-worksans text-[16px] text-[#625849]" aria-label="Breadcrumb">
                <ol class="flex items-center">
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-[#625849]">HOME</a>
                    </li>
                    <li class="mx-1">/</li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/services')); ?>" class="hover:text-[#625849]">SERVICES</a>
                    </li>
                    <li class="mx-1">/</li>
                    <li class="font-bold">PORTRAITS</li>
                </ol>
            </nav>

            <!-- Description -->
            <div class="mb-8">
                <p class="text-body font-poppins">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam malesuada consectetur justo,
                    vitae congue libero aliquet non. Maecenas facilisis ultrices volutpat.
                </p>
            </div>
        </div>
    </section>

    <!-- Portrait Packages Section -->
    <section class="py-8 px-4">
        <div class="max-w-3xl mx-auto">
            <!-- Heading -->
            <h2 class="font-poppins font-bold text-[37px] leading-[100%] tracking-[0%] lowercase text-[#CB93FF] mb-6">
                portrait packages
            </h2>

            <!-- Cards Container with Background -->
            <div class="bg-brand-cream p-8 rounded-lg">
                <!-- Dog/Cat Tabs -->
                <div class="tabs-container mb-6">
                    <div class="flex flex-wrap gap-4">
                        <!-- DOG Tab -->
                        <button 
                            class="tab-button active px-6 py-2 rounded-full border border-brand-purple 
                                  text-brand-purple hover:bg-brand-purple hover:text-white transition
                                  flex items-center gap-2 focus:outline-none" 
                            data-tab="dog"
                        >
                            <svg class="w-4 h-4" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M26.8385 6.48258V18.6942C26.8385 24.7329 22.0695 29.6361 16.1856 29.6361H15.8243C15.6591 29.6361 15.494 29.6361 15.3391 29.6155C15.1946 29.6052 15.0398 29.6052 14.8953 29.5845C14.6785 29.5742 14.472 29.5535 14.2759 29.5123C9.12493 28.7381 5.17139 24.1858 5.17139 18.6942V6.48258C5.17139 5.57419 5.7701 3.85032 6.23461 3.12774C6.80235 2.20903 7.12235 2.19871 8.44364 2.75613C10.054 3.43742 12.4798 5.13032 12.4798 6.70968V8.55742C12.4798 8.82581 12.7275 9.0529 13.0475 9.0529H18.952C19.272 9.0529 19.5198 8.82581 19.5198 8.55742V6.70968C19.5198 5.13032 21.9456 3.43742 23.5559 2.75613C24.8875 2.19871 25.1972 2.20903 25.7649 3.12774C26.2294 3.85032 26.8282 5.57419 26.8282 6.48258H26.8385Z" stroke="currentColor" stroke-width="2" stroke-miterlimit="10"/>
                                <path d="M16 26.6528C17.4595 26.6528 18.6426 25.7979 18.6426 24.7432C18.6426 23.6885 17.4595 22.8335 16 22.8335C14.5405 22.8335 13.3574 23.6885 13.3574 24.7432C13.3574 25.7979 14.5405 26.6528 16 26.6528Z" fill="currentColor"/>
                                <path d="M7.95855 26.0129C7.95855 26.0129 5.16113 24.0722 5.16113 18.0232C5.16113 11.9742 5.38823 5.51224 5.38823 5.51224C5.38823 5.51224 5.43984 2.48772 7.61791 2.44643C9.79597 2.39482 12.7173 5.00643 12.4798 6.46192L12.3973 9.05288L14.8953 9.02192C14.8953 9.02192 15.1844 23.1226 7.95855 26.0129ZM26.6115 5.51224C26.6115 5.51224 26.5598 2.48772 24.3818 2.44643C22.2037 2.39482 19.2824 5.00643 19.5198 6.46192L19.6024 9.05288L17.1044 9.02192C17.1044 9.02192 16.8153 23.1226 24.0411 26.0129C24.0411 26.0129 26.8386 24.0722 26.8386 18.0232C26.8386 11.9742 26.6115 5.51224 26.6115 5.51224Z" fill="currentColor"/>
                            </svg>
                            <span>DOG</span>
                        </button>

                        <!-- CAT Tab -->
                        <button 
                            class="tab-button px-6 py-2 rounded-full border border-brand-purple 
                                  text-brand-purple hover:bg-brand-purple hover:text-white transition
                                  flex items-center gap-2 focus:outline-none" 
                            data-tab="cat"
                        >
                            <svg class="w-4 h-4" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M6.37504 21.7868H2.11719M3.76016 26.3223L7.40479 25.5587M28.6246 21.7868H32.8825M27.2593 25.5471L31.2395 26.3223M23.6957 5.9124L21.0577 10.7488H13.9304L11.304 5.97025C9.51058 2.77686 6.38661 4.81322 6.38661 9.12892V18.0727C6.38661 25.4198 11.4659 30.6612 17.5172 30.6612C23.5684 30.6612 28.6478 25.2231 28.6478 17.5752V9.10578C28.6478 4.7438 25.5007 2.6843 23.7188 5.9124H23.6957Z" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                                <path d="M17.5058 27.572C18.4963 27.572 19.2992 26.9918 19.2992 26.2761C19.2992 25.5604 18.4963 24.9802 17.5058 24.9802C16.5153 24.9802 15.7124 25.5604 15.7124 26.2761C15.7124 26.9918 16.5153 27.572 17.5058 27.572Z" fill="currentColor"/>
                                <path d="M23.4182 23.7075C24.6898 23.7075 25.7207 22.6766 25.7207 21.405C25.7207 20.1334 24.6898 19.1025 23.4182 19.1025C22.1466 19.1025 21.1157 20.1334 21.1157 21.405C21.1157 22.6766 22.1466 23.7075 23.4182 23.7075Z" fill="currentColor"/>
                                <path d="M27.5026 18.7669C25.2117 17.0082 23.9621 15.238 23.9621 15.238C21.891 10.714 27.6415 9.96196 27.6415 9.96196C28.3357 16.1868 27.491 18.7669 27.491 18.7669H27.5026ZM15.7357 15.6892C14.1274 11.0727 13.6415 10.7487 13.6415 10.7487C7.7522 -2.53391 6.36377 9.14047 6.36377 9.14047V18.0843C6.36377 27.0165 11.9291 29.1686 11.9291 29.1686C13.0282 29.8049 14.1621 30.1983 14.1621 30.1983C12.658 28 15.3307 23.1752 15.3307 23.1752C15.3307 23.1752 17.3439 20.3058 15.7472 15.6892H15.7357Z" fill="currentColor"/>
                            </svg>
                            <span>CAT</span>
                        </button>
                    </div>
                </div>

                <!-- Tab content container -->
                <div class="tab-content-wrapper">
                    <?php render_portrait_tab('dog', $dog_packages); ?>
                    <?php render_portrait_tab('cat', $cat_packages); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Book a Session CTA -->
    <section class="py-8 px-4">
        <div class="max-w-3xl mx-auto">
            <h2 class="font-poppins font-bold text-[22px] leading-[100%] tracking-[0%] lowercase text-[#CB93FF] mb-4">
                book a session for your pets!
            </h2>
            <a href="#" class="block w-full bg-brand-purple text-white font-bold rounded-full px-8 py-3 text-lg lowercase hover:bg-brand-darkblue transition text-center">
                book now
            </a>
        </div>
    </section>

    <!-- Requirements Section -->
    <section class="py-8 px-4">
        <div class="max-w-3xl mx-auto">
            <h3 class="text-h3 font-poppins font-bold lowercase text-[#615849] mb-4">
                requirements
            </h3>
            <ul class="list-disc list-inside space-y-2 text-sm text-[#615849]">
                <li>Item One about the photoshoot</li>
                <li>Item Two about the photoshoot</li>
                <li>Item Three about the photoshoot</li>
            </ul>
        </div>
    </section>

    <!-- Example Portraits -->
    <section class="py-8 px-4">
        <div class="max-w-3xl mx-auto">
            <h3 class="text-h3 font-poppins font-bold lowercase text-[#615849] mb-4 text-left">
                example portraits
            </h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                <div class="bg-gray-300 aspect-square rounded-md overflow-hidden">
                    <img src="" alt="Dog portrait example" class="w-full h-full object-cover">
                </div>
                <div class="bg-gray-300 aspect-square rounded-md overflow-hidden">
                    <img src="" alt="Cat portrait example" class="w-full h-full object-cover">
                </div>
                <div class="bg-gray-300 aspect-square rounded-md overflow-hidden">
                    <img src="" alt="Multiple pets portrait example" class="w-full h-full object-cover">
                </div>
                <div class="bg-gray-300 aspect-square rounded-md overflow-hidden">
                    <img src="" alt="Pet portrait example" class="w-full h-full object-cover">
                </div>
            </div>
            <a href="#" class="block w-full bg-brand-purple text-white font-bold rounded-full px-8 py-3 text-lg lowercase hover:bg-brand-darkblue transition text-center">
                view more in gallery
            </a>
        </div>
    </section>

    <!-- FAQs -->
    <section class="py-8 px-4">
        <div class="max-w-3xl mx-auto">
            <h3 class="text-h3 font-poppins font-bold lowercase text-[#615849] mb-4">
                faqs
            </h3>
            <div class="space-y-4">
                <div class="mb-4">
                    <p class="font-worksans font-bold text-lg text-[#837660]">
                        Can I bring multiple pets?
                    </p>
                    <p class="text-sm text-gray-600">
                        Absolutely! We can accommodate multiple pets in one session. Please let us know in advance how many pets you'll be bringing.
                    </p>
                </div>
                <div class="mb-4">
                    <p class="font-worksans font-bold text-lg text-[#837660]">
                        Do you allow pets other than cats and dogs?
                    </p>
                    <p class="text-sm text-gray-600">
                        Yes, we're open to all well-behaved animals. Please contact us in advance to discuss your specific pet and any special requirements.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>

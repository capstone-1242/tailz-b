<?php

/**
 * Template Name: Shop
 * Description: A custom WooCommerce shop page.
 *
 * @package tailz
 */

get_header();

// Banner
get_template_part('template-parts/banner');

// Check for the filter parameter
$pet_filter = $_GET['pets'] ?? [];
$brand_filter  = $_GET['brands'] ?? [];
$food_filter   = $_GET['foods'] ?? [];
$treat_filter = $_GET['treats'] ?? [];
$supply_filter = $_GET['supplies'] ?? [];

$args = array(
    'post_type'      => 'product',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
);

$tax_query = [];

if (!empty($pet_filter)) {
    $tax_query[] = [
        'taxonomy' => 'product_cat',
        'field'    => 'slug',
        'terms'    => $pet_filter,
    ];
}

if (!empty($brand_filter)) {
    $tax_query[] = array(
        'taxonomy' => 'product_brand',
        'field'    => 'slug',
        'terms'    => $brand_filter,
        'operator' => 'IN',
    );
}

if (!empty($food_filter)) {
    $tax_query[] = array(
        'taxonomy' => 'food',
        'field'    => 'slug',
        'terms'    => $food_filter,
        'operator' => 'IN',
    );
}

if (!empty($treat_filter)) {
    $tax_query[] = array(
        'taxonomy' => 'treat',
        'field'    => 'slug',
        'terms'    => $treat_filter,
        'operator' => 'IN',
    );
}

if (!empty($supply_filter)) {
    $tax_query[] = array(
        'taxonomy' => 'supply',
        'field'    => 'slug',
        'terms'    => $supply_filter,
        'operator' => 'IN',
    );
}

if (!empty($tax_query)) {
    $args['tax_query'] = ['relation' => 'AND'] + $tax_query;
}

$query = new WP_Query($args);
?>

<div class="my-[20px] lg:my-[30px]">
    <!-- Breadcrumbs -->
    <nav class="border-b-2 border-cream mx-[24px] lg:mx-[90px] pb-[20px] lg:pb-[30px]" aria-label="Breadcrumb">
        <ol class="flex items-center font-worksans text-[14px] md:text-[16px] text-darkbrown">
            <li>
                <a href="<?php echo home_url(); ?>" class="uppercase font-normal hover:opacity-80 transition-opacity">
                    Home
                </a>
            </li>
            <li class="mx-2" aria-hidden="true">/</li>
            <li aria-current="page">
                <span class="uppercase font-bold">Shop</span>
            </li>
        </ol>
    </nav>
    <!-- Featured Section -->
    <section class="px-[24px] py-[20px] mb-[60px] lg:px-[90px] lg:py-[60px] lg:mb-[130px]">
        <h2 class="lowercase text-brown text-4xl mb-[20px] lg:text-7xl lg:mb-[30px]">featured</h2>
        <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-[20px] lg:gap-[32px]">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    wc_get_template_part('content', 'product'); // content-product.php
                endwhile;
            endif;
            ?>
        </div>
    </section>

    <!-- Pet Cards -->
    <section class="bg-cream py-[30px] px-[24px] mb-[60px] lg:py-[60px] lg:px-[90px] lg:mb-[130px]">
        <h2 class="lowercase text-brown text-4xl mb-[20px] lg:text-7xl lg:mb-[30px]">Shop By</h2>
        <div class="flex items-center justify-center flex-1">
            <!-- Dog -->
            <div class="bg-white lowercase font-poppins font-bold px-4 pt-4 rounded-[12px] mr-[10px] w-full cursor-pointer md:flex md:justify-around">
                <div class="flex items-center gap-2 pb-2">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" class="block lg:hidden">
                        <path d="M20.5488 4.96307V14.3126C20.5488 18.936 16.8975 22.69 12.3927 22.69H12.1161C11.9896 22.69 11.8632 22.69 11.7446 22.6742C11.634 22.6663 11.5154 22.6663 11.4048 22.6505C11.2388 22.6426 11.0808 22.6268 10.9306 22.5952C6.9869 22.0024 3.95996 18.5171 3.95996 14.3126V4.96307C3.95996 4.26759 4.41835 2.94775 4.77399 2.39452C5.20867 1.69114 5.45367 1.68323 6.46528 2.11001C7.69819 2.63162 9.55544 3.92775 9.55544 5.13694V6.55162C9.55544 6.7571 9.74512 6.93098 9.99012 6.93098H14.5108C14.7558 6.93098 14.9454 6.7571 14.9454 6.55162V5.13694C14.9454 3.92775 16.8027 2.63162 18.0356 2.11001C19.0551 1.68323 19.2922 1.69114 19.7269 2.39452C20.0825 2.94775 20.5409 4.26759 20.5409 4.96307H20.5488Z" stroke="#615849" stroke-width="2" stroke-miterlimit="10" />
                        <path d="M12.2498 20.4066C13.3672 20.4066 14.273 19.752 14.273 18.9445C14.273 18.137 13.3672 17.4824 12.2498 17.4824C11.1324 17.4824 10.2266 18.137 10.2266 18.9445C10.2266 19.752 11.1324 20.4066 12.2498 20.4066Z" fill="#615849" />
                        <path d="M6.09295 19.9157C6.09295 19.9157 3.95117 18.4299 3.95117 13.7986C3.95117 9.16732 4.12504 4.21991 4.12504 4.21991C4.12504 4.21991 4.16456 1.90426 5.83214 1.87265C7.49972 1.83313 9.73633 3.83265 9.55456 4.947L9.49133 6.93071L11.4039 6.907C11.4039 6.907 11.6252 17.7028 6.09295 19.9157ZM20.3741 4.21991C20.3741 4.21991 20.3346 1.90426 18.667 1.87265C16.9994 1.83313 14.7628 3.83265 14.9446 4.947L15.0078 6.93071L13.0952 6.907C13.0952 6.907 12.8739 17.7028 18.4062 19.9157C18.4062 19.9157 20.5479 18.4299 20.5479 13.7986C20.5479 9.16732 20.3741 4.21991 20.3741 4.21991Z" fill="#615849" />
                    </svg>
                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="hidden lg:block">
                        <path d="M49.5845 11.9758V34.5367C49.5845 45.6931 40.7737 54.7518 29.9033 54.7518H29.2358C28.9307 54.7518 28.6256 54.7518 28.3395 54.7137C28.0725 54.6946 27.7865 54.6946 27.5195 54.6565C27.119 54.6374 26.7376 54.5992 26.3752 54.523C16.8588 53.0926 9.55469 44.6824 9.55469 34.5367V11.9758C9.55469 10.2976 10.6608 7.11274 11.519 5.77777C12.5679 4.08047 13.1591 4.06139 15.6002 5.09122C18.5752 6.3499 23.0569 9.47753 23.0569 12.3954V15.8091C23.0569 16.3049 23.5146 16.7245 24.1058 16.7245H35.0143C35.6055 16.7245 36.0632 16.3049 36.0632 15.8091V12.3954C36.0632 9.47753 40.5449 6.3499 43.5199 5.09122C45.9801 4.06139 46.5522 4.08047 47.6011 5.77777C48.4593 7.11274 49.5654 10.2976 49.5654 11.9758H49.5845Z" stroke="#615849" stroke-width="2" stroke-miterlimit="10" />
                        <path d="M29.5579 49.2418C32.2543 49.2418 34.4401 47.6622 34.4401 45.7137C34.4401 43.7651 32.2543 42.1855 29.5579 42.1855C26.8616 42.1855 24.6758 43.7651 24.6758 45.7137C24.6758 47.6622 26.8616 49.2418 29.5579 49.2418Z" fill="#615849" />
                        <path d="M14.7034 48.0578C14.7034 48.0578 9.53516 44.4725 9.53516 33.2969C9.53516 22.1214 9.95472 10.183 9.95472 10.183C9.95472 10.183 10.0501 4.59525 14.074 4.51897C18.098 4.42362 23.495 9.24855 23.0564 11.9375L22.9038 16.7243L27.519 16.6671C27.519 16.6671 28.053 42.718 14.7034 48.0578ZM49.1645 10.183C49.1645 10.183 49.0691 4.59525 45.0452 4.51897C41.0212 4.42362 35.6241 9.24855 36.0628 11.9375L36.2153 16.7243L31.6002 16.6671C31.6002 16.6671 31.0662 42.718 44.4158 48.0578C44.4158 48.0578 49.584 44.4725 49.584 33.2969C49.584 22.1214 49.1645 10.183 49.1645 10.183Z" fill="#615849" />
                    </svg>
                    <h3 class="text-brown text-3xl lg:text-[56px]">Dog</h3>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/dog.png" alt="Dog" class="mx-auto md:mx-0">
            </div>
            <!-- Cat -->
            <div class="bg-white text-brown lowercase font-poppins text-3xl font-bold px-4 pt-4 rounded-[12px] ml-[10px] w-full cursor-pointer md:flex md:justify-around">
                <div class="flex items-center gap-2 pb-2">
                    <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg" class="block lg:hidden">
                        <path d="M5.98803 17.1185H2.64258M3.93349 20.6821L6.79712 20.0821M23.4698 17.1185H26.8153M22.3971 20.073L25.5244 20.6821M19.5971 4.64578L17.5244 8.44578H11.9244L9.86076 4.69123C8.45167 2.18214 5.99712 3.78214 5.99712 7.17305V14.2003C5.99712 19.973 9.98803 24.0912 14.7426 24.0912C19.4971 24.0912 23.488 19.8185 23.488 13.8094V7.15487C23.488 3.72759 21.0153 2.10941 19.6153 4.64578H19.5971Z" stroke="#615849" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" />
                        <path d="M14.7333 21.6633C15.5115 21.6633 16.1424 21.2075 16.1424 20.6451C16.1424 20.0828 15.5115 19.627 14.7333 19.627C13.9551 19.627 13.3242 20.0828 13.3242 20.6451C13.3242 21.2075 13.9551 21.6633 14.7333 21.6633Z" fill="#615849" />
                        <path d="M19.3784 18.627C20.3776 18.627 21.1875 17.817 21.1875 16.8179C21.1875 15.8187 20.3776 15.0088 19.3784 15.0088C18.3793 15.0088 17.5693 15.8187 17.5693 16.8179C17.5693 17.817 18.3793 18.627 19.3784 18.627Z" fill="#615849" />
                        <path d="M22.5876 14.7454C20.7876 13.3635 19.8058 11.9726 19.8058 11.9726C18.1785 8.41809 22.6967 7.82719 22.6967 7.82719C23.2421 12.7181 22.5785 14.7454 22.5785 14.7454H22.5876ZM13.3422 12.3272C12.0785 8.69991 11.6967 8.44537 11.6967 8.44537C7.06942 -1.991 5.97852 7.18173 5.97852 7.18173V14.209C5.97852 21.2272 10.3512 22.9181 10.3512 22.9181C11.2149 23.4181 12.1058 23.7272 12.1058 23.7272C10.924 21.9999 13.024 18.209 13.024 18.209C13.024 18.209 14.6058 15.9545 13.3512 12.3272H13.3422Z" fill="#615849" />
                    </svg>
                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="hidden lg:block">
                        <path d="M10.9281 37.3491H3.62891M6.44544 45.1243L12.6934 43.8152M49.0702 37.3491H56.3694M46.7297 43.7954L53.5529 45.1243M40.6206 10.1359L36.0983 18.4268H23.8801L19.3777 10.2351C16.3033 4.76068 10.9479 8.25159 10.9479 15.6499V30.9822C10.9479 43.5772 19.6554 52.5623 30.0289 52.5623C40.4025 52.5623 49.1099 43.24 49.1099 30.1293V15.6103C49.1099 8.13258 43.7149 4.602 40.6603 10.1359H40.6206Z" stroke="#615849" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" />
                        <path d="M30.0099 47.2652C31.7079 47.2652 33.0843 46.2706 33.0843 45.0438C33.0843 43.8169 31.7079 42.8223 30.0099 42.8223C28.312 42.8223 26.9355 43.8169 26.9355 45.0438C26.9355 46.2706 28.312 47.2652 30.0099 47.2652Z" fill="#615849" />
                        <path d="M40.1463 40.6423C42.3263 40.6423 44.0934 38.8751 44.0934 36.6952C44.0934 34.5152 42.3263 32.748 40.1463 32.748C37.9664 32.748 36.1992 34.5152 36.1992 36.6952C36.1992 38.8751 37.9664 40.6423 40.1463 40.6423Z" fill="#615849" />
                        <path d="M47.1462 32.1724C43.2189 29.1575 41.0768 26.1228 41.0768 26.1228C37.5264 18.3675 47.3842 17.0782 47.3842 17.0782C48.5743 27.7493 47.1264 32.1724 47.1264 32.1724H47.1462ZM26.9743 26.8964C24.2173 18.9823 23.3842 18.427 23.3842 18.427C13.2884 -4.34328 10.9082 15.6699 10.9082 15.6699V31.0022C10.9082 46.3146 20.4487 50.0038 20.4487 50.0038C22.333 51.0947 24.2768 51.7691 24.2768 51.7691C21.6983 48.0005 26.2801 39.7294 26.2801 39.7294C26.2801 39.7294 29.7313 34.8104 26.9942 26.8964H26.9743Z" fill="#615849" />
                    </svg>
                    <h3 class="text-brown text-3xl lg:text-[56px]">Cat</h3>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/cat.png" alt="Cat" class="mx-auto md:mx-0">
            </div>
        </div>
    </section>

    <!-- Shop All -->
    <section class="px-[24px] mb-[20px] lg:px-[90px] lg:mb-[30px]">
        <h2 class="lowercase text-brown text-4xl mb-[20px] lg:text-7xl lg:mb-[30px]">Shop All</h2>
        <button id="shop-filter-btn" class="md:hidden bg-blue text-white text-lg font-poppins rounded-full font-bold px-[40px] py-[6px] mb-8 lowercase hover:bg-darkblue">Filter</button>
    </section>
    <!-- Filter and Shop -->
    <section class="px-[24px] lg:px-[90px] md:flex md:gap-[70px]">
        <!-- Filters -->
        <div id="filter-menu-shop" class="hidden md:block min-w-[300px]">
            <div class="flex justify-between items-center">
                <div class="flex justify-between items-center md:flex-1 py-7">
                    <h3 class="mr-4 text-lightbrown text-3xl lg:text-[42px]">filter all</h3>
                    <button id="clear-all-shop" class="text-darkbrown text-base lg:text-2xl">Clear All</button>
                </div>
                <svg id="filter-close-btn" class="md:hidden md:absolute" width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.201172" y="20" width="28" height="4" transform="rotate(-45 0.201172 20)" fill="#47423B" />
                    <rect x="3.20117" width="28" height="4" transform="rotate(45 3.20117 0)" fill="#47423B" />
                </svg>
            </div>
            <form method="GET" id="filter-form" class="w-full max-w-md mb-10 lg:mb-14">
                <!-- By Pet -->
                <div class="w-full max-w-md mb-[20px] lg:mb-[30px]">
                    <div class="border-b-2 border-cream pb-6 lg:pb-8 mb-6 lg:mb-10">
                        <h4 class="lowercase text-brown text-2xl lg:text-3xl font-bold mb-4">Who are you shopping for?</h4>
                        <div class="flex flex-wrap gap-3">
                            <?php
                            $uncat = get_term_by('slug', 'uncategorized', 'product_cat');
                            $exclude = $uncat ? [$uncat->term_id] : [];
                            $pets = get_terms([
                                'taxonomy' => 'product_cat',
                                'hide_empty' => false,
                                'exclude'    => $exclude,
                            ]);

                            $selected_pets = $_GET['pets'] ?? [];

                            foreach ($pets as $pet) :
                                $slug = esc_attr($pet->slug);
                                $id = 'pet_' . $slug;
                                $checked = in_array($slug, (array) $selected_pets);
                            ?>
                                <input
                                    type="checkbox"
                                    name="pets[]"
                                    value="<?php echo $slug; ?>"
                                    id="<?php echo $id; ?>"
                                    class="hidden"
                                    <?php checked($checked); ?> />
                                <label
                                    for="<?php echo $id; ?>" aria-pressed="<?php echo $checked ? 'true' : 'false'; ?>" class="bg-cream text-darkbrown font-poppins font-bold text-sm lg:text-base uppercase rounded-full px-6 py-2.5 cursor-pointer transition-colors">
                                    <?php echo esc_html($pet->name); ?>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- Brands -->
                <div class="w-full max-w-md mb-[20px] lg:mb-[30px]">
                    <div class="border-b-2 border-cream pb-6 lg:pb-8 mb-6 lg:mb-10">
                        <h4 class="lowercase text-brown text-2xl lg:text-3xl font-bold mb-4">Brand</h4>
                        <div class="flex flex-wrap gap-3">
                            <?php
                            $brands = get_terms(array(
                                'taxonomy'   => 'product_brand',
                                'hide_empty' => false,
                            ));

                            $selected_brands = $_GET['brands'] ?? [];

                            foreach ($brands as $brand) :
                                $slug = esc_attr($brand->slug);
                                $id = 'brand_' . $slug;
                                $checked = in_array($slug, (array) $selected_brands);
                            ?>
                                <input
                                    type="checkbox"
                                    name="brand[]"
                                    value="<?php echo $slug; ?>"
                                    id="<?php echo $id; ?>"
                                    class="hidden"
                                    <?php checked($checked); ?> />
                                <label
                                    for="<?php echo $id; ?>" aria-pressed="<?php echo $checked ? 'true' : 'false'; ?>" class="bg-cream text-darkbrown font-poppins font-bold text-sm lg:text-base uppercase rounded-full px-6 py-2.5 cursor-pointer transition-colors">
                                    <?php echo esc_html($brand->name); ?>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- Food -->
                <div class="w-full max-w-md mb-[20px] lg:mb-[30px]">
                    <div class="border-b-2 border-cream pb-6 lg:pb-8 mb-6 lg:mb-10">
                        <h4 class="lowercase text-brown text-2xl lg:text-3xl font-bold mb-4">Food</h4>
                        <div class="flex flex-wrap gap-3">
                            <?php
                            $foods = get_terms(array(
                                'taxonomy'   => 'food',
                                'hide_empty' => false,
                            ));

                            $selected_foods = $_GET['foods'] ?? [];

                            foreach ($foods as $food) :
                                $slug = esc_attr($food->slug);
                                $id = 'food_' . $slug;
                                $checked = in_array($slug, (array) $selected_foods);
                            ?>
                                <input
                                    type="checkbox"
                                    name="foods[]"
                                    value="<?php echo $slug; ?>"
                                    id="<?php echo $id; ?>"
                                    class="hidden"
                                    <?php checked($checked); ?> />
                                <label
                                    for="<?php echo $id; ?>" aria-pressed="<?php echo $checked ? 'true' : 'false'; ?>" class="bg-cream text-darkbrown font-poppins font-bold text-sm lg:text-base uppercase rounded-full px-6 py-2.5 cursor-pointer transition-colors">
                                    <?php echo esc_html($food->name); ?>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- Treats -->
                <div class="w-full max-w-md mb-[20px] lg:mb-[30px]">
                    <div class="border-b-2 border-cream pb-6 lg:pb-8 mb-6 lg:mb-10">
                        <h4 class="lowercase text-brown text-2xl lg:text-3xl font-bold mb-4">Treats</h4>
                        <div class="flex flex-wrap gap-3">
                            <?php
                            $treats = get_terms(array(
                                'taxonomy'   => 'treat',
                                'hide_empty' => false,
                            ));

                            $selected_treats = $_GET['treats'] ?? [];

                            foreach ($treats as $treat) :
                                $slug = esc_attr($treat->slug);
                                $id = 'treat_' . $slug;
                                $checked = in_array($slug, (array) $selected_treats);
                            ?>
                                <input
                                    type="checkbox"
                                    name="treats[]"
                                    value="<?php echo $slug; ?>"
                                    id="<?php echo $id; ?>"
                                    class="hidden"
                                    <?php checked($checked); ?> />
                                <label
                                    for="<?php echo $id; ?>" aria-pressed="<?php echo $checked ? 'true' : 'false'; ?>" class="bg-cream text-darkbrown font-poppins font-bold text-sm lg:text-base uppercase rounded-full px-6 py-2.5 cursor-pointer transition-colors">
                                    <?php echo esc_html($treat->name); ?>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- Supplies -->
                <div class="w-full max-w-md mb-[20px] lg:mb-[30px]">
                    <div class="border-b-2 border-cream pb-6 lg:pb-8 mb-6 lg:mb-10">
                        <h4 class="lowercase text-brown text-2xl lg:text-3xl font-bold mb-4">Supplies</h4>
                        <div class="flex flex-wrap gap-3">
                            <?php
                            $supplies = get_terms(array(
                                'taxonomy'   => 'supply',
                                'hide_empty' => false,
                            ));

                            $selected_supplies = $_GET['supplies'] ?? [];

                            foreach ($supplies as $supply) :
                                $slug = esc_attr($supply->slug);
                                $id = 'supply_' . $slug;
                                $checked = in_array($slug, (array) $selected_supplies);
                            ?>
                                <input
                                    type="checkbox"
                                    name="supplies[]"
                                    value="<?php echo $slug; ?>"
                                    id="<?php echo $id; ?>"
                                    class="hidden"
                                    <?php checked($checked); ?> />
                                <label
                                    for="<?php echo $id; ?>" aria-pressed="<?php echo $checked ? 'true' : 'false'; ?>" class="bg-cream text-darkbrown font-poppins font-bold text-sm lg:text-base uppercase rounded-full px-6 py-2.5 cursor-pointer">
                                    <?php echo esc_html($supply->name); ?>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </form>

        </div>

        <!-- Products -->
        <div>
            <div class="products grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <?php
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        wc_get_template_part('content', 'product'); // Loads content-product.php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p class="text-brown">No products found.</p>';
                endif;
                ?>
            </div>
    </section>
</div>

<?php get_footer(); ?>
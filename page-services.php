<?php
/**
 * Template Name: Services
 * Description: Displays a list of services.
 *
 * @package tailz
 */

get_header();
?>


<div class="container mx-auto px-4 py-6">

    <!-- Page Title & Intro -->
    <section class="mb-6">
        <h1 class="text-2xl font-extrabold mb-2">SERVICES</h1>
        <p class="text-sm text-gray-700 leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam malesuada consectetur justo.
        </p>
    </section>

    <!-- Services List -->
    <?php
    // Services in array (ACF Later)
    $services = [
        [
            'title' => 'GROOMING',
            'slug'  => 'grooming',
            'desc'  => 'Lorem ipsum.',
        ],
        [
            'title' => 'DAYCARE',
            'slug'  => 'daycare',
            'desc'  => 'Lorem ipsum.',
        ],
        [
            'title' => 'TRAINING',
            'slug'  => 'training',
            'desc'  => 'Lorem ipsum.',
        ],
        [
            'title' => 'HOTEL',
            'slug'  => 'hotel',
            'desc'  => 'Lorem ipsum.',
        ],
        [
            'title' => 'EXERCISE',
            'slug'  => 'exercise',
            'desc'  => 'Lorem ipsum.',
        ],
        [
            'title' => 'PORTRAITS',
            'slug'  => 'portraits',
            'desc'  => 'Lorem ipsum.',
        ],
        [
            'title' => 'PUPPY PROGRAMS',
            'slug'  => 'puppy-programs',
            'desc'  => 'Lorem ipsum.',
        ],
    ];
    ?>

    <!-- Cards Loop -->
    <div class="space-y-6">
        <?php foreach ($services as $service) : ?>
            <div class="bg-white border border-gray-200 p-4 rounded-lg shadow-sm">
                <!-- Placeholder Image -->
                <div class="bg-gray-300 w-full h-32 rounded-md mb-4"></div>

                <!-- Title & Description -->
                <h2 class="text-lg font-bold mb-1"><?php echo esc_html($service['title']); ?></h2>
                <p class="text-sm text-gray-600 mb-4">
                    <?php echo esc_html($service['desc']); ?>
                </p>

                <!-- CTA Button (Right-Aligned) -->
                <div class="flex justify-end">
                    <a href="<?php echo esc_url(home_url('/' . $service['slug'])); ?>"
                       class="inline-block border border-black text-black text-sm font-bold px-4 py-2 
                              rounded-full shadow-md hover:bg-black hover:text-white transition cursor-pointer">
                        GO TO <?php echo esc_html($service['title']); ?>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>

<?php
get_footer();

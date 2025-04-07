<?php
/**
 * Template Name: Gallery
 * Description: A custom template for the Gallery page.
 *
 * @package tailz
 */

get_header();
?>

<div class="container mx-auto my-8">
    <article class="flex flex-col">
        <!-- Shortcuts -->
        <nav class="flex flex-col gap-3">
            <h3 class="uppercase mb-2">Jump To</h3>
            <ul class="flex flex-wrap gap-x-3 gap-y-6 font-bold">
                <li><a href="<?php echo esc_url(home_url('/grooming')); ?>" class="uppercase p-2 bg-gray-400">Grooming</a></li>
                <li><a href="<?php echo esc_url(home_url('/daycare')); ?>" class="uppercase p-2 bg-gray-400">Daycare</a></li>
                <li><a href="<?php echo esc_url(home_url('/hotel')); ?>" class="uppercase p-2 bg-gray-400">Hotel</a></li>
                <li><a href="<?php echo esc_url(home_url('/training')); ?>" class="uppercase p-2 bg-gray-400">Training</a></li>
                <li><a href="<?php echo esc_url(home_url('/exercise')); ?>" class="uppercase p-2 bg-gray-400">Exercise</a></li>
                <li><a href="<?php echo esc_url(home_url('/portraits')); ?>" class="uppercase p-2 bg-gray-400">Portraits</a></li>
                <li><a href="<?php echo esc_url(home_url('/puppy-programs')); ?>" class="uppercase p-2 bg-gray-400">Puppy Programs</a></li>
            </ul>
        </nav>

        <!-- Page heading -->
        <section>
            <h1 class="uppercase font-bold">Gallery</h1>
            <p class="uppercase font-bold">A picture speaks a thousand words</p>
        </section>

        <!-- Gallery Content -->
        <section class="my-8">
            <h2>Capturing Moments of Joy: A Glimpse into Our Pet Paradise</h2>
            <p>At Tailz, every wag of a tail, every playful bark, and every cozy nap tells a story. Our gallery is a celebration of our dedication to your furry friend's happiness and wellbeing. From being pampered during our luxurious grooming session to our rewarding training programs, we capture it all. Explore our galleries and see why pets and their parents love being a part of the Tailz family!</p>
        </section>

        <!-- Page Content -->
        <section class="flex flex-col gap-3 mt-8">
            <div class="page-content">
                <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                    endif;
                ?>
            </div>
        </section>

        <!-- Album Start -->
        <section class="flex flex-col gap-6">
            <!-- Grooming -->
            <article class="flex flex-col">
                <div class="flex justify-between">
                    <h3 class="uppercase font-bold">Grooming</h3>
                    <a class="py-1 px-5 bg-gray-400" href="<?php echo esc_url(home_url('/grooming')); ?>">View Grooming Album</a>
                </div>
                <!-- select * from grooming_pics limit 4 random | flexbox configuration 2x2 contained width and not screen width -->
            </article>

            <!-- Daycare -->
            <!-- Add similar structure for other services -->
        </section>
    </article>
</div>

<?php
get_footer();
?>
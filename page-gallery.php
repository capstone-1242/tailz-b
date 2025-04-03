<?php
/**
 * Template Name: Gallery
 * Description: Gallery page that uses Meta Box for prices and descriptions.
 *
 * @package tailz
 */

get_header();
?>

<div class="container mx-auto my-8">
    <article class="flex flex-col">
        <!-- Shortcuts -->
        <!-- <nav class="flex flex-col gap-3">
            <h3 class="uppercase mb-2">Jump To</h3>
            <ul class="flex flex-wrap gap-x-3 gap-y-6 font-bold">
                <li><a href="#" class="uppercase p-2 bg-gray-400">Grooming</a></li>
                <li><a href="#" class="uppercase p-2 bg-gray-400">Daycare</a></li>
                <li><a href="#" class="uppercase p-2 bg-gray-400">Hotel</a></li>
                <li><a href="#" class="uppercase p-2 bg-gray-400">Training</a></li>
                <li><a href="#" class="uppercase p-2 bg-gray-400">Exercise</a></li>
                <li><a href="#" class="uppercase p-2 bg-gray-400">Portraits</a></li>
                <li><a href="#" class="uppercase p-2 bg-gray-400">Puppy Programs</a></li>
            </ul>
        </nav> -->

        <!-- Page heading -->
        <section>
            <h1 class="uppercase font-bold">Gallery</h1>
            <p class="uppercase font-bold">A picture speaks a thousand words</p>
        </section>

        <!-- Gallery Content -->
        <!-- <section class="my-8">
            <h2>Capturing Moments of Joy: A Glimpse into Our Pet Paradise</h2>
            <p>At Tailz, every wag of a tail, every playful bark, and every cozy nap tells a story. Our gallery is a celebration of our dedication to your furry friend's happiness and wellbeing. From being pampered during our luxurious grooming session to our rewarding training programs, we capture it all. Explore our galleries and see why pets and their parents love being a part of the Tailz family!</p>
        </section> -->

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
                    <a class="py-1 px-5 bg-gray-400" href="#">View Grooming Album</a>
                </div>
                <!-- select * from grooming_pics limit 4 random | flexbox configuration 2x2 contained width and not screen width -->
            </article>
            <h2>Gallery</h2>
      <div class="masonry-grid">
        <div class="masonry-grid-item">
          <img src="https://placehold.co/200x300" alt="Some Text">
        </div>
        <div class="masonry-grid-item">
          <img src="https://placehold.co/500x300" alt="Some Text">
        </div>
        <div class="masonry-grid-item">
          <img src="https://placehold.co/300x200" alt="Some Text">
        </div>
        <div class="masonry-grid-item">
          <img src="https://placehold.co/800x200" alt="Some Text">
        </div>
        <div class="masonry-grid-item">
          <img src="https://placehold.co/700x200" alt="Some Text">
        </div>
        <div class="masonry-grid-item">
          <img src="https://placehold.co/200x300" alt="Some Text">
        </div>
        <div class="masonry-grid-item">
          <img src="https://placehold.co/300x200" alt="Some Text">
        </div>
        <div class="masonry-grid-item">
          <img src="https://placehold.co/700x200" alt="Some Text">
        </div>
        <div class="masonry-grid-item">
          <img src="https://placehold.co/300x500" alt="Some Text">
        </div>
        <div class="masonry-grid-item">
          <img src="https://placehold.co/300x500" alt="Some Text">
        </div>
        <div class="masonry-grid-item">
          <img src="https://placehold.co/700x600" alt="Some Text">
        </div>
        <div class="masonry-grid-item">
          <img src="https://placehold.co/500x600" alt="Some Text">
        </div>
      </div>

            <!-- Daycare -->
        </section>
    </article>
</div>
<script>
    $('.masonry-grid').masonry({
    // options
    itemSelector: '.masonry-grid-item',
    columnWidth: 300,
    gutter: 15  
});
</script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<?php
    get_footer();
?>
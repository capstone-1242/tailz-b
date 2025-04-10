<?php
get_header();
?>

<style>
    .container {
        margin: 20px 24px;
    }

    .wp-block-image img {
        border-radius: 9px;
    }

    .gallery-filter-btn {
        background-color: var(--color-brand-blue);
        border-radius: 30px;
        color: var(--color-white);
        font-weight: bold;
        padding: 10px 20px 10px 20px;
        text-transform: lowercase;

        &:hover {
            background-color: var(--color-brand-darkblue);
        }
    }

    .filter-option-btn {
        align-self: start;
        background-color: var(--color-brand-cream);
        border-radius: 30px;
        font-size: 15px;
        font-weight: bold;
        padding: 10px 20px 10px 20px;
        text-transform: uppercase;

        &.default:hover {
            background-color: var(--color-brand-blue);
            color: var(--color-white);
        }

        &.grooming:hover {
            background-color: var(--color-brand-red);
        }

        &.daycare:hover {
            background-color: var(--color-brand-orange);
        }

        &.hotel:hover {
            background-color: var(--color-brand-yellow);
        }

        &.training:hover {
            background-color: var(--color-brand-lime);
        }

        &.exercise:hover {
            background-color: var(--color-brand-sky);
        }

        &.portraits:hover {
            background-color: var(--color-brand-purple);
        }

        &.puppy-programs:hover {
            background-color: var(--color-brand-pink);
        }
    }
</style>

<div class="relative">
    <img class="h-32 w-full object-cover object-[100%_20%]" src="https://images.unsplash.com/photo-1495360010541-f48722b34f7d?q=80&w=2836&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
    <div class="absolute top-1/2 left-[24px] transform -translate-y-1/2">
        <h1 class="font-bold">Gallery</h1>
        <p class="uppercase">A sneak peak into Tailz</p>
    </div>
</div>



<div class="container">
    <!-- Tagline -->
    <section>
        <h2 class="lowercase">A picture speaks a thousand woofs</h2>
    </section>
    <!-- Gallery -->
    <section class="gallery">
        <h3>photos</h3>
        <button id="gallery-filter-btn" class="gallery-filter-btn default">Filter</button>
        <div class="page-content columns-2 md:columns-4 gap-4 space-y-4">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </div>
    </section>
    <!-- Filters -->
    <section>
        <div>
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <h3>filter</h3>
                    <p>Clear All</p>
                </div>
                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.201172" y="20" width="28" height="4" transform="rotate(-45 0.201172 20)" fill="#47423B" />
                    <rect x="3.20117" width="28" height="4" transform="rotate(45 3.20117 0)" fill="#47423B" />
                </svg>
            </div>
            <div class="w-full border-b-1 mb-4">
                <h4>by pet</h4>
                <div class="py-4">
                    <button class="filter-option-btn default">Dog</button>
                    <button class="filter-option-btn default">Cat</button>
                </div>
            </div>
            <div class="border-b-1 mb-4">
                <h4>by service</h4>
                <div class="flex flex-col column-gap-8">
                    <button class="filter-option-btn grooming">Grooming</button>
                    <button class="filter-option-btn daycare">Daycare</button>
                    <button class="filter-option-btn hotel">Hotel</button>
                    <button class="filter-option-btn training">Training</button>
                    <button class="filter-option-btn exercise">Exercise</button>
                    <button class="filter-option-btn portraits">Portraits</button>
                    <button class="filter-option-btn puppy-programs">Puppy Programs</button>
                </div>
            </div>
            <div class="border-b-1">
                <h4>by media</h4>
                <div class="py-4">
                    <button class="filter-option-btn default">Photo</button>
                    <button class="filter-option-btn default">Video</button>
                </div>
            </div>
        </div>
    </section>
</div>


<?php
get_footer();
?>
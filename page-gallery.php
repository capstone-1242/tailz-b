<?php
get_header();
get_template_part('template-parts/banner');
?>

<div class="mx-6 my-5">
    <!-- Tagline -->
    <section>
        <h2 class="lowercase">A picture speaks a thousand woofs</h2>
    </section>
    <!-- Gallery -->
    <section class="gallery">
        <h3>photos</h3>
        <button id="gallery-filter-btn" class="bg-brand-blue rounded-full text-white font-bold px-5 py-2.5 lowercase hover:bg-brand-darkblue">Filter</button>
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
            <div class="w-full border-b-1 pb-4">
                <h4>by pet</h4>
                <div class="py-4">
                    <button class="self-start bg-brand-cream rounded-full text-sm font-bold px-5 py-2.5 uppercase hover:bg-brand-blue hover:text-white">Dog</button>
                    <button class="self-start bg-brand-cream rounded-full text-sm font-bold px-5 py-2.5 uppercase hover:bg-brand-blue hover:text-white">Cat</button>
                </div>
            </div>
            <div class="border-b-1 mb-4">
                <h4 class="mb-4">by service</h4>
                <div class="flex flex-col column-gap-8">
                    <!-- Grooming -->
                    <input type="checkbox" id="grooming" name="service[]" value="grooming" class="peer hidden">
                    <label for="grooming" class="self-start bg-brand-cream rounded-full text-sm font-bold px-5 py-2.5 uppercase cursor-pointer peer-checked:bg-brand-red transition">
                        Grooming
                    </label>

                    <!-- Daycare -->
                    <input type="checkbox" id="daycare" name="service[]" value="daycare" class="peer hidden">
                    <label for="daycare" class="self-start bg-brand-cream rounded-full text-sm font-bold px-5 py-2.5 uppercase cursor-pointer peer-checked:bg-brand-orange transition">
                        Daycare
                    </label>

                    <!-- Hotel -->
                    <input type="checkbox" id="hotel" name="service[]" value="hotel" class="peer hidden">
                    <label for="hotel" class="self-start bg-brand-cream rounded-full text-sm font-bold px-5 py-2.5 uppercase cursor-pointer peer-checked:bg-brand-yellow transition">
                        Hotel
                    </label>

                    <!-- Training -->
                    <input type="checkbox" id="training" name="service[]" value="training" class="peer hidden">
                    <label for="training" class="self-start bg-brand-cream rounded-full text-sm font-bold px-5 py-2.5 uppercase cursor-pointer peer-checked:bg-brand-lime transition">
                        Training
                    </label>

                    <!-- Exercise -->
                    <input type="checkbox" id="exercise" name="service[]" value="exercise" class="peer hidden">
                    <label for="exercise" class="self-start bg-brand-cream rounded-full text-sm font-bold px-5 py-2.5 uppercase cursor-pointer peer-checked:bg-brand-sky transition">
                        Exercise
                    </label>

                    <!-- Portraits -->
                    <input type="checkbox" id="portraits" name="service[]" value="portraits" class="peer hidden">
                    <label for="portraits" class="self-start bg-brand-cream rounded-full text-sm font-bold px-5 py-2.5 uppercase cursor-pointer peer-checked:bg-brand-pink transition">
                        Portraits
                    </label>

                    <!-- Puppy Programs -->
                    <input type="checkbox" id="puppy-programs" name="service[]" value="puppy-programs" class="peer hidden">
                    <label for="puppy-programs" class="self-start bg-brand-cream rounded-full text-sm font-bold px-5 py-2.5 uppercase cursor-pointer peer-checked:bg-brand-purple transition">
                        Puppy Programs
                    </label>
                </div>
            </div>
            <div class="border-b-1">
                <h4>by media</h4>
                <div class="py-4">
                    <button class="self-start bg-brand-cream rounded-full text-sm font-bold px-5 py-2.5 uppercase hover:bg-brand-blue hover:text-white">Photo</button>
                    <button class="self-start bg-brand-cream rounded-full text-sm font-bold px-5 py-2.5 uppercase hover:bg-brand-blue hover:text-white">Video</button>
                </div>
            </div>
        </div>
    </section>
</div>


<?php
get_footer();
?>
<?php
    get_header();
?>

<div class="container mx-auto my-8">
    <!-- Shortcuts -->
    <div class="flex flex-col gap-3">
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
    </div>

    <!-- Page Content -->
    <div class="flex flex-col gap-3 mt-8">
        <h2 class="uppercase font-bold">A picture speaks a thousand words</h2>
        <div class="page-content">
            <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                endif;
            ?>
        </div>
    </div>

    <!-- Album Start -->
    <div class="flex flex-col gap-6">
        <!-- Grooming -->
        <div class="flex flex-col">
            <div class="flex justify-between">
                <h3 class="uppercase font-bold">Grooming</h3>
                <a class="py-1 px-5 bg-gray-400" href="#">View Grooming Album</a>
            </div>
            <!-- select * from grooming_pics limit 4 random | flexbox configuration 2x2 contained width and not screen width -->
        </div>
    </div>
</div>

<?php
    get_footer();
?>
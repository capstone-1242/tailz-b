<?php
    get_header();
?>

<style>
    .wp-block-image img {
        border-radius: 9px;
    }

</style>

<div class="relative">
    <img class="h-32 w-full object-cover object-[100%_20%]" src="https://images.unsplash.com/photo-1495360010541-f48722b34f7d?q=80&w=2836&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
    <div class="absolute top-1/2 left-[24px] transform -translate-y-1/2">
        <h1 class="font-bold">Gallery</h1>
        <p class="uppercase">A sneak peak into Tailz</p>
    </div>
</div>


<div class="container mx-auto my-8">
    <article class="flex flex-col">
        

        <!-- Page heading -->
        <section>
            <h2 class="lowercase">A picture speaks a thousand woofs</h2>
        </section>
        <!-- Page Content -->
        <section class="gallery">
            <h3>photos</h3>
            <button class="button bg-sky-500 hover:bg-sky-700">filter</button>
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
    </article>
</div>


<?php
    get_footer();
?>
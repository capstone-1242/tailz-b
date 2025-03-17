<?php
    get_header();
?>

<div class="container mx-auto my-8">
    <!-- Page Content -->
    <div class="flex flex-col gap-3 mt-8">
        <h2 class="uppercase font-bold">Fixed Heading</h2>
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
</div>

<?php
    get_footer();
?>
<?php
    get_header();
?>

<div class="container mx-auto my-8">

<div class="flex flex-col">
    <!-- Page heading -->
        <div>
            <h2 class="uppercase font-bold">About Us</h2>
            <p class="uppercase font-bold">Pets are our passion</p>
        </div>

    <!-- Page Content -->
        <div class="page-content">
            <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                endif;
            ?>
        </div>

    <!-- Staff Post Type Query Loop -->
        <div>
            <h3 class="uppercase font-bold">Meet Our Team</h3>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3">
            <?php
                    $staff_query = new WP_Query(array(
                        'post_type' => 'staff',
                        'posts_per_page' => -1,
                    ));
    
                    if($staff_query->have_posts()) :
                        while($staff_query->have_posts()) : $staff_query->the_post(); ?>
    
                            <div>
                                <?php if(has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php endif; ?>
                                <?php the_title(); ?>
                                <?php the_content();  ?>
                            </div>
    
    
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>No staff members found.</p>';
                    endif;
                ?>
        </div>
</div>

</div>

<?php
    get_footer();
?>
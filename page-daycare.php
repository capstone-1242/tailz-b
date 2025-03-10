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

    <div class="tabs-container" id="page-tabs">
        <div class="tabs flex mb-4">
            <button class="tab-button active bg-[#E2E2E2] pt-[25px] pb-[20px] px-[25px] rounded-tl-[15px] rounded-tr-[15px]" data-tab="tab1">
                Dog
            </button>
            <button class="tab-button" data-tab="tab2">
                Cat
            </button>
        </div>

        <section class="tab-content" id="tab1-content">
        <?php
$daycare_query = new WP_Query(array(
    'post_type' => 'daycare',
    'posts_per_page' => -1,
));
if ($daycare_query->have_posts()) :
    while ($daycare_query->have_posts()) : $daycare_query->the_post(); ?>
        <div>
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php endif; ?>
            <?php the_title(); ?>
            <?php the_content(); ?>

            <!-- Display ACF Fields -->
            <?php
            $full_day = get_field('full_day');
            $half_day = get_field('half_day');
            $saturday = get_field('saturday');
            ?>

            <?php if ($full_day) : ?>
                <p><strong>Full Day:</strong> <?php echo esc_html($full_day); ?></p>
            <?php endif; ?>

            <?php if ($half_day) : ?>
                <p><strong>Half Day:</strong> <?php echo esc_html($half_day); ?></p>
            <?php endif; ?>

            <?php if ($saturday) : ?>
                <p><strong>Saturday:</strong> <?php echo esc_html($saturday); ?></p>
            <?php endif; ?>
        </div>
    <?php
    endwhile;
    wp_reset_postdata();
else :
    echo '<p>No staff members found.</p>';
endif;
?>
        </section>
        
        <section class="tab-content hidden" id="tab2-content">

        </section>
    </div>
</div>

<?php
    get_footer();
?>
<?php
    get_header();
?>

<div class="container mx-auto my-8">
    <!-- Page Content -->
     <section class="flex flex-col gap-3 mt-8">
        <h2 class="uppercase font-bold">Exercise</h2>
        <div class="page-content">
            <?php
                if(have_posts()) :
                    while(have_posts()) : the_post();
                        the_content();
                endwhile;
            endif;
            ?>
        </div>
     </section>

     <section class="tabs-container" id="page-tabs">
        <h2>Daycare Rates</h2>
        <div class="tabs flex mb-4">
            <button class="tab-button active bg-[#E2E2E2] pt-[25px] pb-[20px] px-[25px] rounded-tl-[15px] rounded-tr-[15px]" data-tab="tab1">
                Dog
            </button>
            <button class="tab-button" data-tab="tab2">
                Cat
            </button>
        </div>

        <div>
            <!-- Dog Tab -->
            <div class="tab-content" id="tab1-content">
                <!-- Card 1 -->
                <div>
                    <?php
                        $dog_exercise_prices = new WP_Query(array(
                            'post_type' => 'exercise',
                            'posts_per_page' => -1,
                            'title' => 'Dogs - Exercise',
                        ));
                        if ($dog_exercise_prices->have_posts()) :
                            while ($dog_exercise_prices->have_posts()) : $dog_exercise_prices->the_post(); ?>
                                <div>
                                    <?php
                                    $option1 = get_field('option_1');
                                    $option2 = get_field('option_2');
                                    $option3 = get_field('option_3');
                                    ?>
                                    <?php if ($option1) : ?>
                                        <p><?php echo esc_html($option1); ?></p>
                                    <?php endif; ?>
                                    <?php if ($option2) : ?>
                                        <p><?php echo esc_html($option2); ?></p>
                                    <?php endif; ?>
                                    <?php if ($option3) : ?>
                                        <p><?php echo esc_html($option3); ?></p>
                                    <?php endif; ?>
                                </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                            echo '<p>No daily rates available.</p>';
                        endif;
                    ?>
                </div>
            </div>
            <!-- Cat Tab -->
            <div class="tab-content hidden" id="tab2-content">

            </div>
        </div>
        <h3>Book some workouts for your pup today!</h3>
        <button>
            Book Now
        </button>
    </section>
</div>
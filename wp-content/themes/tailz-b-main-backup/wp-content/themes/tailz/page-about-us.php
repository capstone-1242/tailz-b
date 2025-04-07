<?php
    get_header();
?>

<main class="container mx-auto my-8">

    <article class="flex flex-col">
    <!-- Page heading -->
        <section>
            <h1 class="uppercase font-bold">About Us</h1>
            <p class="uppercase font-bold">Pets are our passion</p>
        </section>

    <!-- About Us Content -->
        <section class="my-8">
            <h2>We treat pets as though they were our own</h2>
            <p>Since 2008, the team at Tailz has been passionately promoting healthy lifestyles for canine companions. We have been caring about the well-being of their minds, bodies and emotions through the range of products we carry and services we offer.</p>
            <p>Scientific studies have proven that having a pet improves our health and extends our lies. This is why at tails, we focus on making their lives the best they can be. Using positive reinforcement techniques, we build bonds of trust with the animals in our care. In our retail store, we carry tasty high-quality pet foods that your pet is sure to enjoy for years - many of which are proudly Canadian made!</p>
            <p>Let your pup enjoy a day of pampering in our Doggy Daycare, Luxury Overnight Lodging, and Pet Spa then treat them with some healthy food and treats! Tailz is your one-stop-shop for your furry loved one's health and wellness needs. We look forward to a long and happy relationship with your family!</p>
        </section>

    <!-- Page Content -->
        <section class="page-content">
            <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                endif;
            ?>
        </section>

    <!-- Staff Post Type Query Loop -->
        <section>
            <h2 class="uppercase font-bold">Meet Our Team</h2>
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
        </section>
    </article>

</main>

<?php
    get_footer();
?>
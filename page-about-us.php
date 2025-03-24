<?php
    get_header();
?>

<div class="container mx-auto my-8">

    <article class="flex flex-col">
        <section>
            <h1>about Us</h1>
            <p>our goals - our story - our team</p>
        </section>

        <section class="my-8">
            <h2>our goals at TAILZ</h2>
            <div>
                <h3>To Care</h3>
                <p>Since 2008, the team at Tailz has been passionately promoting healthy lifestyles for canine companions. We have been caring about the well-being of their minds, bodies and emotions through the range of products we carry and services we offer.</p>
            </div>
            <div>
                <h3>To Educate</h3>
                <p>Scientific studies have proven that having a pet improves our health and extends our lies. This is why at tails, we focus on making their lives the best they can be. Using positive reinforcement techniques, we build bonds of trust with the animals in our care. In our retail store, we carry tasty high-quality pet foods that your pet is sure to enjoy for years - many of which are proudly Canadian made!</p>
            </div>
            <div>
                <h3>To Be Accessible</h3>
                <p>Let your pup enjoy a day of pampering in our Doggy Daycare, Luxury Overnight Lodging, and Pet Spa then treat them with some healthy food and treats! Tailz is your one-stop-shop for your furry loved one's health and wellness needs. We look forward to a long and happy relationship with your family!</p>
            </div>
        </section>

        <section>
            <h2>our philosophy</h2>
            <div>
                <p>Passionate about promoting healthy foods and lifestyles for our canine and feline companions.</p>
                <p>We treat your pets as though they were our own. Caring for the well-being of their minds, bodies, and emotions we use posivitive reinforcement.</p>
            </div>
        </section>

        <section>
            <h2>TAILZ's story</h2>
            <div>
                <div>
                    <img src="" alt="">
                    <p>Line 1</p>
                </div>
                <div>
                    <div>
                        <p>Line 2</p>
                        <p>Line 3</p>
                    </div>
                    <img src="" alt="">
                </div>
                <div>
                    <img src="" alt="">
                    <p>Line 4</p>
                </div>
                <div>
                    <img src="" alt="">
                    <p>Line 5</p>
                </div>
                <div>
                    <div>
                        <p>Line 6</p>
                        <p>Line 7</p>
                    </div>
                    <img src="" alt="">
                </div>
                <div>
                    <p>Line 8</p>
                </div>
            </div>
        </section>

        <section>
            <h2>the TAILZ team</h2>
            <div>
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

</div>

<?php
    get_footer();
?>
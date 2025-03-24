<?php
get_header();
?>

<div class="container mx-auto my-8">
    <!-- Page Content -->
    <section class="flex flex-col gap-3 mt-8">
        <h2 class="uppercase font-bold">Daycare</h2>
        <div class="page-content">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
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
                        $dog_daycare_prices = new WP_Query(array(
                            'post_type' => 'daycare',
                            'posts_per_page' => -1,
                            'title' => 'Dogs - Daily Rates',
                        ));
                        if ($dog_daycare_prices->have_posts()) :
                            while ($dog_daycare_prices->have_posts()) : $dog_daycare_prices->the_post(); ?>
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
                <!-- Card 2 -->
                <div>
                    <?php
                        $dog_daycare_prices = new WP_Query(array(
                            'post_type' => 'daycare',
                            'posts_per_page' => -1,
                            'title' => 'Dogs - Monthly Play Packages',
                        ));
                        if ($dog_daycare_prices->have_posts()) :
                            while ($dog_daycare_prices->have_posts()) : $dog_daycare_prices->the_post(); ?>
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
                            echo '<p>No monthly play passes available.</p>';
                        endif;
                    ?>
                    <div>
                        <p>Flex Packages expire 90 DAYS after the date of purchase</p>
                        <p>Advanced booking is required</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div>
                    <?php
                        $dog_daycare_prices = new WP_Query(array(
                            'post_type' => 'daycare',
                            'posts_per_page' => -1,
                            'title' => 'Dogs - Flex Passes',
                        ));
                        if ($dog_daycare_prices->have_posts()) :
                            while ($dog_daycare_prices->have_posts()) : $dog_daycare_prices->the_post(); ?>
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
                            echo '<p>No flex passes available.</p>';
                        endif;
                    ?>
                    <div>
                        <div>
                            <p>30-Day Advance Emailed Cancellation Notice is Required.</p>
                            <p>Monthly Play-Packages expire 30 DAYS after the date of purchase.</p>
                        </div>
                        <div>
                            <h3>monthly membership perks</h3>
                            <ol>
                                <li>Priority Overnight Booking</li>
                                <li>Wag More Rewards - VIP Bonus</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cat Tab -->
            <div class="tab-content hidden" id="tab2-content">
                <!-- Card 1 -->
                <div>
                    <?php
                        $cat_daycare_prices = new WP_Query(array(
                            'post_type' => 'daycare',
                            'posts_per_page' => -1,
                            'title' => 'Cats - Daily Rates',
                        ));
                        if ($cat_daycare_prices->have_posts()) :
                            while ($cat_daycare_prices->have_posts()) : $cat_daycare_prices->the_post(); ?>
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
                <!-- Card 2 -->
                <div>
                    <?php
                        $cat_daycare_prices = new WP_Query(array(
                            'post_type' => 'daycare',
                            'posts_per_page' => -1,
                            'title' => 'Cats - Monthly Play Packages',
                        ));
                        if ($cat_daycare_prices->have_posts()) :
                            while ($cat_daycare_prices->have_posts()) : $cat_daycare_prices->the_post(); ?>
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
                            echo '<p>No monthly play passes available.</p>';
                        endif;
                    ?>
                </div>
                <!-- Card 3 -->
                <div>
                    <?php
                        $cat_daycare_prices = new WP_Query(array(
                            'post_type' => 'daycare',
                            'posts_per_page' => -1,
                            'title' => 'Cats - Flex Passes',
                        ));
                        if ($cat_daycare_prices->have_posts()) :
                            while ($cat_daycare_prices->have_posts()) : $cat_daycare_prices->the_post(); ?>
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
                            echo '<p>No flex passes available.</p>';
                        endif;
                    ?>
                </div>
            </div>
        </div>
        <p>Monthly Automatic Passes and Flex Package purchases are non-refundable, not transferable and not eligible for in-store credit.</p>
        <button>
            book now
        </button>
    </section>

    <section>
        <!-- <div>
            <h2>Requirements For Attending</h2>
            <p>All pups must meet a standard to attend Doggy Daycare</p>
        </div>

        <div>
            <h3>Spay & Neuter</h3>
            <p>Puppies are encouraged to attend prior to being altered. This is their prime socialization window and getting proper exposure during this time can affect their interactions for the rest of their lives. Our Puppy Program is a great fit for young pups to develop.</p>
            <p>All pets must be spayed or neutered by 6 months of age. Exceptions may be conditionally granted with written emdical reasons for delaying alteration up to 10 months of age. Our management team will speak with your pup's veterinarian should this be the case.</p>
        </div>

        <div>
            <h3>Vaccinations</h3>
            <p>Puppies are welcome to attend during the vaccination process. Your puppy needs the exposure to develop friends and reduce the chance of fearful perceptions.</p>
            <p>Vacination schedules are a bit different for different sized puppies. We ask that each pup have the distemper combo as well as the Bordetella vaccination for canine cought prevention prior to attending doggy daycare.</p>
            <p>Vaccination requirement exceptiosn require written medical reasons by your pup's veterinarian and proof of titer tests every 6 months. Any approvals for exceptions are handled on a case-by-case basis and are not guaranteed. Management will review any request for exception before their meet & greet, and will consult veterinarians prior to making any decision.</p>
        </div>

        <div>
            <h3>Pest Management</h3>
            <p>We strongly recommend that your dog be on a monthly anti-parasite medication such as Revolution or Advantage. This will greatly help in reducing the risk of introducing fleas, ticks or lice to our facility and will protect your pup against them.</p>
            <p>You can obtain these directly from your veternarian and are often available over-the-counter.</p>
        </div> -->
        <h2>requirements for attending</h2>
        <ol>
            <li>All dogs looking to join us at Doggy Daycare are assessed during their Meet & Greet, and an ongoing basis for suitability in our daycare program. This behavioural assessment is to ensure initial suitability for our facility and pups. As we want all pups to be safe and ejoy their time in a structured daycare, not all pups are accepted into our daycare program</li>
            <li>Our day is very busy and active, therefore we have mandatory nap times for all of our daycare guests to ensure the dogs get adequate rest for their mental well being</li>
            <li>Our daycare program is not only about coming to play, but to enrich their life through physucal exercise, mental stimulation, and socialization</li>
            <li>Safety and comfort of your pup is important, so our playgroups are based on size and termperament and are always supervised by a qualified team member</li>
        </ol>
    </section>

    <section>
        <h2>Frequently Asked Questions</h2>
        <div>
            <h3>Why does Tailz need copies of vaccination records? Will my dog's rabies tag work?</h3>
            <p>We respect the trust our clients have in us. We also understand that saying the vaccinations were done is not the same as knowing when the vaccinations were in fact administered and when they are due next. The details on a rabies tag do not provide us with enough information to count as proof.</p>
            <p>We use a computerized system to help us keep track of when they are due next. This gives our clients the peace of mind they deserve knowing all dogs in our care are vaccinated according to their veterinarian's schedule.</p>
        </div>
        <div>
            <h3>Will the vaccinations I did myself work?</h3>
            <p>They may work, however, we require proof of purchase (the till receipt) and the sticker from the vaccination vile. Without both parts, we cannot accept the self-administered vaccine. We will also count vaccines as valid for only 1 year from the day of purchase.</p>
        </div>
        <div>
            <h3>Can I get my dog's grooming done while they attend doggy daycare?</h3>
            <p>Of course. Speak to our client care team member to see about availability. Walk-in requests such as nail trims and brushings can be squeezed in. Full grooms take more time and will need to be scheduled in advance.</p>
        </div>
        <div>
            <h3>Do you have a littles area?</h3>
            <p>Yes, we do! Little ones have an area fenced off and exclusively dedicateed to them adn boy do they love it! Play structures that are more suited to their smaller structures are available for them to play on.</p>
        </div>
        <div>
            <h3>How are dogs grouped together?</h3>
            <p>We separate dogs according to size and play style</p>
        </div>
        <div>
            <h3>Are dogs free to roam?</h3>
            <p>Think of us like a supervised off leash park. We do have crates, however they are mostly used to allow a dog to have their own personal space to nap, or occasionally for a time out.</p>
        </div>
        <div>
            <h3>What techniques do your Canine Play Specialists use when handling dogs?</h3>
            <p>It is our mission to use scientifically-based techniques when handling the dogs. This means absolutely no dominating, no alpha-rolling, and no Cesar Milan anything. These are all techniques that can and often do cause fear and negative association for dogs.</p>
        </div>
        <div>
            <h3>What is your philosophy on dog training and handling?</h3>
            <p>At Tailz, we believe in treating animals with the kindness and respect they deserve. It is our mandate to cause no undue harm or stress to an animal in our care. You may see us ask for your dog to have manners. Kindly offer our team your patience while we work with your dog during its stay including at home time. Fortunately, repetition works... it just needs time :)</p>
        </div>
    </section>
</div>

<?php
get_footer();
?>
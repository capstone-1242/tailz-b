<?php
get_header();
?>

<div class="container mx-auto">
    <!-- Page Content -->
    <section class="flex flex-col gap-3">
        <div class="relative h-[15.375rem] w-full overflow-hidden">
            <?php
                $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                if($featured_image_url) : ?>
                    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo esc_url($featured_image_url); ?>')"></div>
                <?php endif; ?>

                <div class="flex flex-col absolute inset-0 mx-6 justify-end my-[43px]">
                    <h2 class="lowercase font-bold text-white text-[53.8px]"><?php the_title(); ?></h2>
                    <p class="uppercase text-white text-[18px]">Stay at our five star motel</p>
                </div>            
        </div>

        <div class="flex flex-col mx-6 gap-3">
            <h3 class="lowercase font-bold text-[22px] text-[#615849]">Rest & relaxation, for both you and your pets</h3>
            <p class="text-[18px] text-[#47423B]">You've earned your time off, but travel isn't always pet-friendly. Luckily, Tailz offers safe and comfortable overnight lodging for your dog!</p>
        </div>

        <div class="flex flex-col mx-6 gap-3">
            <h3 class="lowercase font-bold text-[22px] text-[#FCD41D]">Two in one</h3>
            <p class="text-[18px] text-[#47423B]">At Tailz, overnight stays include all the perks of doggy daycare plus extra bedtime care! Your pup enjoys a full day of play, restful sleep in a comfy suite, and wakes up ready for more fun. Every overnight stay includes a full day of daycare!</p>
            <p class="text-[18px] text-[#47423B]">We provide blankets, beds, bowls, and toys - just bring their food! Note: Personal items may get damaged.</p>
            <p class="text-[18px] text-[#47423B]">Enjoy peace of mind knowing your pet is well cared for.</p>
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
                        $dog_hotel_rates = new WP_Query(array(
                            'post_type' => 'hotel',
                            'posts_per_page' => -1,
                            'title' => 'Dogs - Hotel Rates',
                        ));
                        if ($dog_hotel_rates->have_posts()) :
                            while ($dog_hotel_rates->have_posts()) : $dog_hotel_rates->the_post(); ?>
                                <div>
                                    <?php
                                    $option1 = get_field('option_1');
                                    $option2 = get_field('option_2');
                                    $option3 = get_field('option_3');
                                    ?>
                                    <?php if ($option1) : ?>
                                        <div>
                                            <h3>Bronze Package</h3>
                                            <p><?php echo esc_html($option1); ?> / night</p>
                                        </div>
                                        <div>
                                            <h4>Lowest Cost</h4>
                                            <div>
                                                <p>Morning Play Session</p>
                                                <p>Bedtime Story</p>
                                                <p>Extra Cuddles</p>
                                                <p>Gourmet Bedtime Treat</p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($option2) : ?>
                                        <div>
                                            <h3>Silver Package</h3>
                                            <p><?php echo esc_html($option2); ?> / night</p>
                                        </div>
                                        <div>
                                            <h4>Most Pupular</h4>
                                            <div>
                                                <p>Morning Play Session</p>
                                                <p>Afternoon Play Session</p>
                                                <p>Bedtime Story</p>
                                                <p>Extra Cuddles</p>
                                                <p>Gourmet Bedtime Treat</p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($option3) : ?>
                                        <div>
                                            <h3>Gold Package</h3>
                                            <p><?php echo esc_html($option3); ?> / night</p>
                                        </div>
                                        <div>
                                            <h4>Ultimutt Value</h4>
                                            <div>
                                                <p>Morning Play Session</p>
                                                <p>Afternoon Play Session</p>
                                                <p>Evening Stroll</p>
                                                <p>Bedtime Story</p>
                                                <p>Extra Cuddles</p>
                                                <p>Gourmet Bedtime Treat</p>
                                            </div>
                                        </div>
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
                <!-- Card 1 -->
                <div>
                    <?php
                        $cat_hotel_rates = new WP_Query(array(
                            'post_type' => 'hotel',
                            'posts_per_page' => -1,
                            'title' => 'Cats - Hotel Rates',
                        ));
                        if ($cat_hotel_rates->have_posts()) :
                            while ($cat_hotel_rates->have_posts()) : $cat_hotel_rates->the_post(); ?>
                                <div>
                                    <?php
                                    $option1 = get_field('option_1');
                                    $option2 = get_field('option_2');
                                    $option3 = get_field('option_3');
                                    ?>
                                    <?php if ($option1) : ?>
                                        <div>
                                            <h3>Bronze Package</h3>
                                            <p><?php echo esc_html($option1); ?> / night</p>
                                        </div>
                                        <div>
                                            <h4>Lowest Cost</h4>
                                            <div>
                                                <p>Morning Play Session</p>
                                                <p>Bedtime Story</p>
                                                <p>Extra Cuddles</p>
                                                <p>Gourmet Bedtime Treat</p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($option2) : ?>
                                        <div>
                                            <h3>Silver Package</h3>
                                            <p><?php echo esc_html($option2); ?> / night</p>
                                        </div>
                                        <div>
                                            <h4>Most Pupular</h4>
                                            <div>
                                                <p>Morning Play Session</p>
                                                <p>Afternoon Play Session</p>
                                                <p>Bedtime Story</p>
                                                <p>Extra Cuddles</p>
                                                <p>Gourmet Bedtime Treat</p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($option3) : ?>
                                        <div>
                                            <h3>Gold Package</h3>
                                            <p><?php echo esc_html($option3); ?> / night</p>
                                        </div>
                                        <div>
                                            <h4>Ultimutt Value</h4>
                                            <div>
                                                <p>Morning Play Session</p>
                                                <p>Afternoon Play Session</p>
                                                <p>Evening Stroll</p>
                                                <p>Bedtime Story</p>
                                                <p>Extra Cuddles</p>
                                                <p>Gourmet Bedtime Treat</p>
                                            </div>
                                        </div>
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
        </div>
        <h3>Book a sleepover with us!</h3>
        <button>
            Book Now
        </button>
    </section>

    <section>
        <div>
            <h2>Lodging Requirements</h2>
            <p>Our base sleepover standards</p>
        </div>

        <div>
            <h3>Lodging Offers</h3>
            <p>Lodging stays over 10-days or lonnger receive a 5% discount.</p>
        </div>

        <div>
            <h3>Friendly Dogs</h3>
            <p>Only social, dog friendly dogs are accepted into our lodging. We do not take aggressive dogs.</p>
        </div>

        <div>
            <h3>First Impressions</h3>
            <p>All dogs must pass a Meet & Greet prior to lodging.</p>
        </div>

        <div>
            <h3>Lasting Impressions</h3>
            <p>They must have attended Doggy Daycare at least once in the last 3 months. Alternatively, new pups must have passed their Meet & Greet within the last 2 months.</p>
        </div>

        <div>
            <h3>Vaccinations & Shots</h3>
            <p>All dogs require up-to-date vaccinations for Bordetella, Distemper/Parvovirus/Parainfluenza, and Rabies (after 6 months of age.)</p>
            <p>All current vaccination records must be received 24-hours in advance of your pet’s overnight stay.</p>
        </div>
        
        <div>
            <h3>Spay & Neuter</h3>
            <p>All pups are to be spayed or neutered by 7 months of age. If a medical exception has been granted, intact pups older than 10 months will not be accepted.</p>
        </div>

        <div>
            <h3>Changes On The Fly</h3>
            <p>Our Canine Care Team may change the activity level of your dog should their needs require it during their stay.</p>
        </div>

        <div>
            <h3>Check-in & Check-out Times</h3>
            <p>Check-in time is 12:00PM or afterwards during regular business hours. Early check-in fee of $17.99 applies before 12:00PM.</p>
            <p>Checkout time is by 12:00PM during regular business hours. Late checkout fee of $17.99 applies after 12:00PM.</p>
            <p>Dogs not checked out by closing time must stay overnight, and will be surcharged for additional night's stay and can be picked up the following business day. </p>
        </div>
    </section>

    <!-- Used same FAQ as daycare page except the irrelevant ones -->
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
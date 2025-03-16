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
        <!-- Hardcode for now -->
        <div>
            <p>You’ve worked hard throughout the year to take time off. Whether it’s a vacation, or a business trip - there are plenty of times when our lives take us out of town for a few days and pets are not always welcome. Luckily, you can feel comfortable leaving your dog at Tailz for a few nights of overnight lodging!</p>
            <p>When dogs stay the night at Tailz, they receive all the benefits of doggy daycare, plus extra special time at night before being tucked into bed! The mental and physical stimulation throughout the day provides a restful sleep at night in one of our suites, and your pup will wake up in the morning ready for another fun-filled day with us! A full day of doggy day care is included with every night of overnight lodging at Tailz.</p>
            <p>You deserve peace of mind in knowing that your beloved pet is being well cared for. Rest assured, we provide all the blankets, dog beds, feeding bowls, and toys that your dog needs; all you need to bring is a container with their food! <span>Blankets and personal items from home may be damaged.</span></p>
            <p>Though twice a day is normal, we will feed your pup up to three times per day with their allotted food. Bring all items in a marked reusable shopping bag. Food that is pre-portioned is appreciated.</p>
            <p>Sign your pup up for a departure bath on their last day of lodging so they come home fresh and squeaky clean!</p>
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
                            'post_type' => 'daycare',
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
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
            <p>When a dog’s behaviour is out of the “normal range”, extra guidance is required from skilled trainers who specialize in dog behaviour and additional attending from their companions.</p>
            <p>In these circumstances, it is crucial to know it is okay to ask for help. Training your pup needs to be a lifestyle and a life-long commitment. Open yourself up to learn why your pup may have these behaviours in order to understand how to help your pup get results.</p>
            <div>
                <p>During the Canine Skill Building process, we need to figure out your goals for your pup. Two different households can be looking for different results. Ultimately, we want you to able to answer a few fundamental questions:</p>
                <ol>
                    <li>How do I help them achieve my goal for them?</li>
                    <li>How much time and effort am I willing to commit to their success?</li>
                </ol>
            </div>
            <p>All these factors affect the outcome. Canine Skill building is not just training - it’s a learning process for both you and your pup. Throughout the process, you will be systematically given tools to help your pup build the skills they need to improve their behaviour.</p>
            <p>Training happens through repetition and with the Skill Building, learning occurs as a sensory experience. It is more holistic - one in which all your dog’s senses are activated in a rich and robust way. SKill Building will deepen your relationship with your dog.</p>
            <p>After your initial consultation, our trainer will thoughtfully develop a plan for ongoing skill enhances, structure and one-on-one support.</p>
            <div>
                <p>Some common Canine Skill Building Includes:</p>
                <ol>
                    <li>Leash reactivity</li>
                    <li>Reactivity (other dogs or humans)</li>
                    <li>Barrier frustration (ie. fence fighting)</li>
                    <li>Excessive barking</li>
                    <li>Door dashing</li>
                    <li>Resource guarding</li>
                    <li>Fearfulness (dogs or humans)</li>
                    <li>Poor leash manners</li>
                    <li>Confidence issues</li>
                </ol>
            </div>
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
                        $dog_skill_building_rates = new WP_Query(array(
                            'post_type' => 'canine skill building',
                            'posts_per_page' => -1,
                            'title' => 'Dogs - Canine Skill Building',
                        ));
                        if ($dog_skill_building_rates->have_posts()) :
                            while ($dog_skill_building_rates->have_posts()) : $dog_skill_building_rates->the_post(); ?>
                                <div>
                                    <?php
                                    $option1 = get_field('option_1');
                                    $option2 = get_field('option_2');
                                    $option3 = get_field('option_3');
                                    $option3 = get_field('option_4');
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
                                    <?php if ($option4) : ?>
                                        <p><?php echo esc_html($option4); ?></p>
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
        <h3>Book some skillz for your pup today!</h3>
        <button>
            Book Now
        </button>
        <p>Services must be pre-paid prior to commencing. Canine Skill Building sessions are to be scheduled in advance.</p>
        <p>We require a minimum of 24-hour notice for rescheduling any Canine Skill Building sessions - not doing so will result in a $50 late cancellation fee or use of one session from the bundle.</p>
    </section>

    <section>
        <div>
            <h2>Training requirements</h2>
            <p>Our basic requirements for attending training</p>
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
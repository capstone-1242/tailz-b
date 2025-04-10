<?php
get_header();
?>

<div>

    <div class="flex flex-col gap-[60px] md:gap-[130px]">
        <!-- Banner -->
        <section class="flex flex-col gap-3">
            <div class="relative h-[15.375rem] w-full overflow-hidden">
                <?php
                    $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    if($featured_image_url) : ?>
                        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo esc_url($featured_image_url); ?>')"></div>
                    <?php endif; ?>
                    <div class="flex flex-col absolute inset-0 mx-6 justify-end my-[43px]">
                        <h2 class="lowercase font-bold text-white text-[53.8px]"><?php the_title(); ?></h2>
                        <p class="uppercase text-white text-[18px]">It's tail waggin' enjoyment</p>
                    </div>
            </div>
        </section>

        <!-- Enriching doggy daycare -->
        <section>
            <div class="flex flex-col mx-6 md:mx-[89px] gap-5 md:w-2/3">
                <h2 class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Enriching doggy daycare</h2>
                <p class="text-[18px] text-[#2C2C2C]">Our daycare program is thoughtfully designed to create a unique experience for your pup. We are different from your typical dpoggy daycare, and that starts first with understanding dog behavior. This allows us to create an environtment in which your pup gets appropriate exercise, enrichment, socialization, and rest.</p>
                <p class="text-[18px] text-[#2C2C2C]">Our daycare schedule includes a variety of training, games, and activities specifically chosen to enrich your pet's life and ensure they have the best time.</p>
            </div>
        </section>

        <!-- Daycare rates -->
        <section>
            <div class="flex flex-col gap-[30px] md:gap-[40px]">
                <!-- Header -->
                <div class="flex flex-col gap-5 mx-6 md:mx-[89px] md:w-2/3">
                    <h2 class="text-[44.8px] md:text-[75.8px] text-[#FEA91D] lowercase">Daycare rates</h2>
                    <p class="text-[18px] text-[#2C2C2C]">We run carefully chosen play groups that will keep your dog happy and safe. Allowing your pup's activity level to be paced throughout the day means that we are constantly engaging with, supervising, and adjusting their environment to ensure they are comfortable, happy, and enjoying themselves.</p>
                </div>
                <!-- Packages -->
                <div class="px-6 md:px-[89px] bg-[#F3F2EC]">
                    <h2 class="text-[44.8px] text-[#FEA91D] lowercase py-[30px]">PACKAGES AND PRICES HERE</h2>
                </div>
            </div>
        </section>

        <!-- Requirements for attending -->
        <section>
            <div class="flex flex-col mx-6 md:mx-[89px] gap-5 md:w-2/3">
                <h2 class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Requirements for attending</h2>
                <ul class="flex flex-col md:text-[24px] text-[18px] text-[#2C2C2C] gap-3 leading-normal">
                    <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">All dogs looking to join us at Doggy Daycare are assessed during their Meet & Greet, and an ongoing basis for suitability in our daycare program. This behavioral assessment is to ensure initial suitability for our facility and pups. As we want all pups to be safe and enjoy their time in a structured daycare, not all pups are accepted into our daycare program</li>
                    <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Our day is very busy and active, therefore we have mandatory nap times for all of our daycare guests to ensure the dogs get adequate rest for their mental well being</li>
                    <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Our daycare program is not only about coming to play, but to enrich their life through physical exercise, mental stimulation, and socialization</li>
                    <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Safety and comfort of your pup is important, so our playgroups are based on size and temperament and are always supervised by a qualified team member</li>
                </ul>
            </div>
        </section>

        <!-- Puppy Program Sell -->
        <section class="bg-[#F3F2EC]">
            <div class="flex flex-col px-6 pt-6 pb-[41px] md:pt-[89px] md:pb-[100px] md:px-[89px] gap-5 md:w-2/3">
                <h2 class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Got a puppy?</h2>
                <p class="text-[18px] text-[#2C2C2C]">Our Puppy Program is designed to give your little one the perfect start with early training, socialization, and plenty of fun to help them throw into a happy, well-adjusted dog!</p>
                <button class="self-start"><a class="rounded-[40px] bg-[#FF8ECC] px-[20px] py-[11px] lowercase text-white" href="#">Puppy programs</a></button>
            </div>
        </section>  
        
        <!-- FAQs -->
        <section>
            <div class="flex flex-col mx-6 md:mx-[89px] gap-[20px] md:gap-[30px] md:w-2/3">
                <h2 class="md:text-[75.8px] text-[44.8px] text-[#47423B] lowercase">FAQs</h2>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">What makes your daycare different from others?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">Our daycare focuses on understanding dog behavior to provide a balanced experience with exercise, enrichment, socialization, and rest. We tailor activities to keep your pup happy and engaged.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">What does a typical day look like for my dog?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">Each day includes structured playtime, training exercises, interactive games, and rest periods to ensure a well-rounded experience.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">Do you separate dogs by size or temperament?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">Yes! We group dogs based on their play style, energy level, and temperament to ensure safe and positive interactions.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">Will my dogs receive any training while at daycare?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">Yes! Our daycare includes basic training exercises and enrichment activities to reinforce good manners and mental stimulation.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">How do you ensure the safety of all dogs?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">Our team closely supervises all play sessions, and we maintain small group sizes to prevent overstimulation. All dogs must meet our health and behavior requirements before joining daycare.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">Can my dog come for just a half-day?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">Yes! We offer both full-day and half-day daycare options to fit your schedule and your pup's needs.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">What vaccinations are required?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">All dogs must be up to date on rabies, distemper, and Bordetella vaccinations. Proof of vaccination is required before attending daycare.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">How do I sign up for daycare?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">You can register online or contact us directly to schedule an evaluation and book your pup's first daycare visit!</p>
                </div>
            </div>
        </section>
    </div>

</div>

<?php
get_footer();
?>
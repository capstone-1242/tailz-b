<?php
get_header();
?>

<div class="container mx-auto my-8">
    <!-- Page Content -->
    <section class="flex flex-col mx-6 gap-3">
        <div class="relative h-[15.375rem] w-full overflow-hidden">
        <?php
            $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            if($featured_image_url) : ?>
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo esc_url($featured_image_url); ?>')"></div>
            <?php endif; ?>
            <div class="flex flex-col absolute inset-0 mx-6 justify-end my-[43px]">
                <h2 class="lowercase font-bold text-white text-[53.8px]"><?php the_title(); ?></h2>
                <p class="uppercase text-white text-[18px]">our goals - our story - our team</p>
            </div>
        </div>
        <div class="flex flex-col mx-6 gap-3">
            <h3 class="lowercase font-bold text-[22px] text-[#615849]">Out of mind</h3>
            <p class="text-[18px] text-[#47423B]">We run carefully chosen play groups that will keep your dog happy and safe. Allowing your pup's activity level to be paced throughout the day means that we are constantly engaging with, supervising, and adjusting their environment to ensure they are comfortable, happy, and enjoying themselves!</p>
        </div>
        <div class="flex flex-col mx-6 gap-3">
            <h3 class="lowercase font-bold text-[22px] text-[#615849]">Daycare rates</h3>
            <p class="text-[18px] text-[#47423B]">Our daycare program is thoughtfully designed to create a unique experience for your pup. We are different from your typical doggy daycare, and that starts first with understanding dog behavior. This allows us to create an environment in which your pup gets appropriate exercise, enrichment, socialization, and rest.</p>
            <p class="text-[18px] text-[#47423B]">Our daycare schedule includes a variety of training, games, and activities specifically chosen to enrich your pet's life and ensure they have the best time possible!</p>
        </div>
    </section>

    <section class="flex flex-col mx-6 gap-3">
        <h2 class="lowercase font-bold text-[37px] text-[#615849] mx-6">requirements for attending</h2>
        <ol class="flex flex-col mx-6 gap-3">
            <li class="text-[18px] text-[#47423B]">All dogs looking to join us at Doggy Daycare are assessed during their Meet & Greet, and an ongoing basis for suitability in our daycare program. This behavioural assessment is to ensure initial suitability for our facility and pups. As we want all pups to be safe and ejoy their time in a structured daycare, not all pups are accepted into our daycare program</li>
            <li class="text-[18px] text-[#47423B]">Our day is very busy and active, therefore we have mandatory nap times for all of our daycare guests to ensure the dogs get adequate rest for their mental well being</li>
            <li class="text-[18px] text-[#47423B]">Our daycare program is not only about coming to play, but to enrich their life through physucal exercise, mental stimulation, and socialization</li>
            <li class="text-[18px] text-[#47423B]">Safety and comfort of your pup is important, so our playgroups are based on size and termperament and are always supervised by a qualified team member</li>
        </ol>
    </section>

    <section class="flex flex-col mx-6 gap-3">
            <h2 class="lowercase font-bold text-[37px] text-[#615849] mx-6">Frequently Asked Questions</h2>

            <div class="flex flex-col mx-6 gap-3">
                <h3 class="lowercase font-bold text-[22px] text-[#615849]">Why does Tailz need copies of vaccination records? Will my dog's rabies tag work?</h3>
                <p class="text-[18px] text-[#47423B]">We respect the trust our clients have in us. We also understand that saying the vaccinations were done is not the same as knowing when the vaccinations were in fact administered and when they are due next. The details on a rabies tag do not provide us with enough information to count as proof.</p>
                <p class="text-[18px] text-[#47423B]">We use a computerized system to help us keep track of when they are due next. This gives our clients the peace of mind they deserve knowing all dogs in our care are vaccinated according to their veterinarian's schedule.</p>
            </div>
            <div class="flex flex-col mx-6 gap-3">
                <h3 class="lowercase font-bold text-[22px] text-[#615849]">Will the vaccinations I did myself work?</h3>
                <p>They may work, however, we require proof of purchase (the till receipt) and the sticker from the vaccination vile. Without both parts, we cannot accept the self-administered vaccine. We will also count vaccines as valid for only 1 year from the day of purchase.</p>
            </div>
            <div class="flex flex-col mx-6 gap-3">
                <h3 class="lowercase font-bold text-[22px] text-[#615849]">Can I get my dog's grooming done while they attend doggy daycare?</h3>
                <p class="text-[18px] text-[#47423B]">Of course. Speak to our client care team member to see about availability. Walk-in requests such as nail trims and brushings can be squeezed in. Full grooms take more time and will need to be scheduled in advance.</p>
            </div>
            <div class="flex flex-col mx-6 gap-3">
                <h3 class="lowercase font-bold text-[22px] text-[#615849]">Do you have a littles area?</h3>
                <p class="text-[18px] text-[#47423B]">Yes, we do! Little ones have an area fenced off and exclusively dedicateed to them adn boy do they love it! Play structures that are more suited to their smaller structures are available for them to play on.</p>
            </div>
            <div class="flex flex-col mx-6 gap-3">
                <h3 class="lowercase font-bold text-[22px] text-[#615849]">How are dogs grouped together?</h3>
                <p class="text-[18px] text-[#47423B]">We separate dogs according to size and play style</p>
            </div>
            <div class="flex flex-col mx-6 gap-3">
                <h3 class="lowercase font-bold text-[22px] text-[#615849]">Are dogs free to roam?</h3>
                <p class="text-[18px] text-[#47423B]">Think of us like a supervised off leash park. We do have crates, however they are mostly used to allow a dog to have their own personal space to nap, or occasionally for a time out.</p>
            </div>
            <div class="flex flex-col mx-6 gap-3">
                <h3 class="lowercase font-bold text-[22px] text-[#615849]">What techniques do your Canine Play Specialists use when handling dogs?</h3>
                <p class="text-[18px] text-[#47423B]">It is our mission to use scientifically-based techniques when handling the dogs. This means absolutely no dominating, no alpha-rolling, and no Cesar Milan anything. These are all techniques that can and often do cause fear and negative association for dogs.</p>
            </div>
            <div class="flex flex-col mx-6 gap-3">
                <h3 class="lowercase font-bold text-[22px] text-[#615849]">What is your philosophy on dog training and handling?</h3>
                <p class="text-[18px] text-[#47423B]">At Tailz, we believe in treating animals with the kindness and respect they deserve. It is our mandate to cause no undue harm or stress to an animal in our care. You may see us ask for your dog to have manners. Kindly offer our team your patience while we work with your dog during its stay including at home time. Fortunately, repetition works... it just needs time :)</p>
            </div>
    </section>
</div>

<?php
get_footer();
?>
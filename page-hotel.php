<?php
/**
 * Template Name: Photos
 * Description: A custom template for the "Photos" (Portraits) page, displaying photoshoot packages with Dog/Cat tabs using Meta Box.
 *
 * @package tailz
 */

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
                        <p class="uppercase text-white text-[18px]">Five-star lodging for four-legged guests</p>
                    </div>
            </div>
        </section>

        <!-- A home away from home retreat for pets -->
        <section>
            <div class="flex flex-col gap-[60px]">
                <!-- Intro -->
                <div class="flex flex-col gap-[20px] md:gap-[30px] mx-6 md:mx-[89px] md:w-2/3">
                    <h2 class="text-[44.8px] text-[#47423B] lowercase">A home away from home retreat for pets</h2>
                    <p class="text-[#2C2C2C] text-[18px] md:text-[24px] md:w-3/4">You've worked hard throughout the year to take time off. Whether it's a vacation, or a business trip - there are plenty of times when our lives take us out of town for a few days and pets are not always welcome. Luckily, you can feel comfortable leaving your dog at Tailz for a few nights of overnight lodging!</p>
                </div>
                <!-- Your pet's stay at tailz -->
                <div class="flex flex-col gap-[20px] md:gap-[30px] mx-6 md:mx-[89px] md:w-2/3">
                    <h3 class="lowercase text-[#47423B] text-[31px] md:text-[56.85px]">Your pet's stay at tailz</h3>
                    <p class="text-[#2C2C2C] text-[18px] md:text-[24px] md:w-3/4">When dogs stay the night at Tailz, they receive all the benefits of doggy daycare, plus extra special time at night before being tucked into bed! The mental and physical stimulation throughout the day provides a restful sleep at night in one of our suites, and your pup will wake up in the morning ready for another fun-filled day with us! A full day of doggy day care is included with every night of overnight lodging at Tailz</p>
                    <p class="text-[#2C2C2C] text-[18px] md:text-[24px] md:w-3/4">You deserve peace of mind in knowing that your beloved pet is being well cared for. Rest assured, we provide all the blankets, dog beds, feeding bowls, and toys that your dog needs; all you need to bring is a container with their food!</p>
                    <div class="flex flex-col rounded-[20px] bg-[#F3F2EC] px-[25px] md:px-[30px] py-[20px] gap-[10px]">
                        <h4 class="uppercase text-[#47423B] text-[18px] md:text-[20px] italic">Please note</h4>
                        <p class="text-[#2C2C2C] text-[16px] md:text-[18px] italic md:w-3/4">Blankets and personal items from home may be damaged.</p>
                    </div>
                    <p class="text-[#2C2C2C] text-[18px] md:text-[24px]">Though twice a day is normal, we will feed your pup up to three times per day with their allotted food.</p>
                    <div class="flex flex-col rounded-[20px] bg-[#F3F2EC] px-[25px] md:px-[30px] py-[20px] gap-[10px]">
                        <h4 class="uppercase text-[#47423B] text-[18px] md:text-[20px] italic">Please note</h4>
                        <p class="text-[#2C2C2C] text-[16px] md:text-[18px] italic md:w-3/4">Bring all items in a marked resuable shopping bag.</p>
                        <p class="text-[#2C2C2C] text-[16px] md:text-[18px] italic md:w-3/4">Food that is pre-portioned is appreciated.</p>
                    </div>
                    <p class="text-[#2C2C2C] text-[18px] md:text-[24px]">For the perfect finishing touch, add a departure spa appointment on their last day - they'll come home fresh, squeaky clean, and ready to snuggle!</p>
                    <div class="flex flex-col rounded-[20px] bg-[#F3F2EC] px-[25px] md:px-[30px] py-[20px] gap-[10px]">
                        <h4 class="uppercase text-[#47423B] text-[18px] md:text-[20px] italic">Please note</h4>
                        <p class="text-[#2C2C2C] text-[16px] md:text-[18px] italic md:w-3/4">Sign your pup up for a departure bath on their last day of lodging.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Hotel packages -->
        <section>
            <div class="flex flex-col gap-[30px] md:gap-[40px]">
                <!-- Header -->
                <div class="flex flex-col gap-5 mx-6 md:mx-[89px] md:w-2/3">
                    <h2 class="text-[44.8px] md:text-[75.8px] text-[#FEA91D] lowercase">Hotel packages</h2>
                </div>
                <!-- Packages -->
                <div class="px-6 md:px-[89px] bg-[#F3F2EC]">
                    <h2 class="text-[44.8px] md:text-[75.8px] text-[#FEA91D] lowercase py-[30px]">PACKAGES AND PRICES HERE</h2>
                </div>
            </div>
        </section>

        <!-- Lodging requirements -->
        <section>
            <div class="flex flex-col gap-[20px] md:gap-[30px] mx-6 md:mx-[89px] md:w-2/3">
                <h2 class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Lodging requirements</h2>
                <ul class="flex flex-col md:text-[24px] text-[18px] text-[#2C2C2C] gap-3 leading-normal md:w-3/4">
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">All stays are required to be prepaids at the time of arrival.</li>
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">During the holiday season a single night deposit is required to hold your pup's Luxury Overnight Lodging reservation. This is a non-refundable holiday season deposit.</li>
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Only social, dog friendly dogs are accepted into our lodging. We do not take aggressive dogs.</li>
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">All dogs must pass a Meet & Greet prior to lodging.</li>
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">They must have attended Doggy Daycare at least once in the last 3 months.</li>
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Alternatively, new pups must have passed their Meet & Greet within the last 2 months.</li>
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">All dogs require up-to-date vaccinations for Bordetella, Distemper/Parvovirus/Parainfluenza, and Rabies (after 6 months of age.)</li>
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">All current vaccination records must be received 24-hours in advance of your pet's overnight stay.</li>
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">All pups are to be spayed or neutered by 7 months of age. If a medical exception has been granted, intact pups older than 10 months will not be accepted.</li>
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Our Canine Care Team may change the activity level of your dog should their needs require it during their stay.</li>
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Check-in time is 12:00PM or afterwards during regular business hours. Early check-in fee of $17.99 applies before 12:00PM.</li>
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Checkout time is 12:00PM during regular business hours. Late checkout fee of $17.99 applies after 12:00PM.</li>
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Dogs not checked out by closing time must stay overnight and will be surcharged for additional night's stay and can be picked up the following business day.</li>
                    </ul>
            </div>
        </section>

        <!-- Our rooms -->
        <section>
            <div class="flex flex-col gap-[20px] md:gap-[30px] mx-6 md:mx-[89px]">
                <h2 class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Our rooms</h2>
                <!-- Gallery Function -->
                <div>Gallery function here</div>
            </div>
        </section>

        <!-- FAQs -->
        <section>
            <div class="flex flex-col mx-6 md:mx-[89px] gap-[20px] md:gap-[30px] md:w-2/3">
                <h2 class="md:text-[75.8px] text-[44.8px] text-[#47423B] lowercase">FAQs</h2>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">What is included in my dog's overnight stay?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">Every overnight lodging stay includes a full day of doggy daycare, plenty of supervised playtime, and a cozy suite for restful sleep. Your pup will also enjoy special evening attention before being tucked in for the night.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">Do I need to bring anything for my dog's stay?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">The only thing you need to bring is your dog's food in a marked reusable shopping bag. We provide blankets, dog beds, feeding bowls, and toys to ensure your pup is comfortable during their stay.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">Can I bring my dog's favorite blanket or toy?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">We understand the comfort of familiar items, but personal belongings from home may get damaged. We provide everything your pup needs to feel safe and secure.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase"> How often will my dog be fed?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">We typically feed dogs twice a day, but if your pup requires three meals, we are happy to accommodate. Pre-portioned meals are appreciated.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase"> Will my dog interact with other dogs during their stay?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">Yes! Your pup will participate in our structured doggy daycare program, enjoying socialization, exercise, and mental enrichment during the day.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">Can I add a bath for my dog before they come home?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">Absolutely! We offer a departure bath service, so your pup comes home fresh, clean, and ready to cuddle.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">What if my dog has special dietary needs or medications?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">We can accommodate most dietary restrictions and administer medications as needed. Please provide clear instructions when dropping off your dog.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">Do you have staff on-site overnight?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">While our team is not in the facility overnight, our suites provide a safe and secure environment for your pup to rest peacefully after a fun-filled day.</p>
                </div>
            </div>
        </section>
    </div>
</div>

<?php
get_footer();
?>
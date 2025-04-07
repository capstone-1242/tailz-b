<?php
/**
 * Template Name: Training
 * Description: Displays training packages for dogs, managed by Meta Box fields.
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
                        <p class="uppercase text-white text-[18px]">Building bonds of trust for better behavior</p>
                    </div>
            </div>
        </section>

        <!-- Positive training methods for positive results -->
        <section>
            <div class="flex flex-col mx-6 md:mx-[89px] gap-5 md:w-2/3">
                <h2 class="text-[44.8px] text-[#47423B] lowercase">Positive training methods for positive results</h2>
                <p class="text-[18px] text-[#2C2C2C]">Humane handling and a positive approach are the foundation of our training philosophy. At Tailz, we believe in building relationships based on scientifically-backed training techniques.</p>
                <p class="text-[18px] text-[#2C2C2C]">Having a well-trained dog is very important for your dog's safety and your own peace of mind. We provide a wide range of training options for both puppies and older dogs who need to brush up on their obedience.</p>
                <p class="text-[18px] text-[#2C2C2C]">We teach you how to train your dog to make good choices that result in positive outcomes for your pup. The inherent nature of private lessons will help you build a stronger bond with your dog while we provide direct guidance and direction specific to your pup's needs. </p>           
            </div>
        </section>

        <!-- Puppy classes -->
        <section>
            <div class="flex flex-col gap-[30px] md:gap-[40px]">
                <!-- Header -->
                <div class="flex flex-col gap-5 mx-6 md:mx-[89px] md:w-2/3">
                    <h2 class="text-[44.8px] text-[#47423B] lowercase">Puppy classes</h2>
                </div>
                <!-- Packages -->
                <div class="px-6 md:px-[89px] bg-[#F3F2EC]">
                    <h2 class="text-[44.8px] text-[#FEA91D] lowercase py-[30px]">PACKAGES AND PRICES HERE</h2>
                </div>
            </div>
        </section>

        <!-- Puppy Program Sell -->
        <section class="bg-[#F3F2EC]">
            <div class="flex flex-col px-6 pt-6 pb-[41px] md:pt-[89px] md:pb-[100px] md:px-[89px] gap-5 md:w-2/3">
                <h2 class="text-[44.8px] text-[#47423B] lowercase">Need training and socializing done for you?</h2>
                <p class="text-[18px] text-[#2C2C2C]">Check out our Puppy Preschool, your all in one solution!</p>
                <button class="self-start"><a class="rounded-[40px] bg-[#FF8ECC] px-[20px] py-[11px] lowercase text-white" href="#">Puppy programs</a></button>
            </div>
        </section>

        <!-- Adult classes -->
        <section>
            <div class="flex flex-col gap-[30px] md:gap-[40px]">
                <!-- Header -->
                <div class="flex flex-col gap-5 mx-6 md:mx-[89px] md:w-2/3">
                    <h2 class="text-[44.8px] text-[#47423B] lowercase">Adult classes</h2>
                </div>
                <!-- Packages -->
                <div class="px-6 md:px-[89px] bg-[#F3F2EC]">
                    <h2 class="text-[44.8px] text-[#FEA91D] lowercase py-[30px]">PACKAGES AND PRICES HERE</h2>
                </div>
            </div>
        </section>

        <!-- Growly dog classes -->
        <section>
            <div class="flex flex-col gap-[30px] md:gap-[40px]">
                <!-- Header -->
                <div class="flex flex-col gap-5 mx-6 md:mx-[89px] md:w-2/3">
                    <h2 class="text-[44.8px] text-[#47423B] lowercase">Growly dog classes</h2>
                    <p class="text-[18px] text-[#2C2C2C]">Is your dog barking, growling, snapping, or snarling at other dogs or people out on walks? Do they frequently overwhelm other dogs when they try to say hello? Our Growly Dog classes are specially designed for dogs who need some extra help with their social skills, and use methods that will help keep you and your dog (and passers-by!) safe and happy.</p>
                    <p class="text-[18px] text-[#2C2C2C]">In Growly Dog classes or in private training, you will learn tactics to keep you and your dog safe right away, as well as how to teach your dog appropriate alternative behaviors. Our end goal is to help dogs learn to manage their social needs without aggression so that you don't have to constantly keep them distracted from their triggers.</p>
                    <p class="text-[18px] text-[#2C2C2C]">At Tailz we understand that Growly Dogs are not bad dogs, and their owners are not bad owners! Our trainers are highly educated and have experience with dog to dog aggression and dog to human aggression.  We look forward to helping rehabilitate both your dog's behavior and your relationship with them.</p>
                    <p class="text-[18px] text-[#2C2C2C]">The first step for most Growly Dogs is to attend our Fear and Aggression 101 class, which will help you understand why your dog might be growly, what to do about it, and what you’ll learn in the Growly Dog classes. If your dog has been aggressive with people, it may be most appropriate to start with private training to keep your dog and other students safe. Please contact us if you aren’t sure about where to start!</p>
                </div>
                <!-- Packages -->
                <div class="px-6 md:px-[89px] bg-[#F3F2EC]">
                    <h2 class="text-[44.8px] text-[#FEA91D] lowercase py-[30px]">PACKAGES AND PRICES HERE</h2>
                </div>
            </div>
        </section>

        <!-- Private training -->
        <section>
            <div class="flex flex-col gap-[30px] md:gap-[40px]">
                <!-- Header -->
                <div class="flex flex-col gap-5 mx-6 md:mx-[89px] md:w-2/3">
                    <h2 class="text-[44.8px] text-[#47423B] lowercase">Private training (one-on-one training)</h2>
                    <p class="text-[18px] text-[#2C2C2C]">One of our Certified Trainers will work with you and your family to improve your dog's manners. Lessons can be done in-person (on-site or in home) or virtual.</p>
                </div>
                <!-- List container 1 -->
                <div class="flex flex-col gap-[20px] md:gap-[30px] mx-6 md:mx-[89px] md:w-2/3">
                    <h3 class="text-[22px] md:text-[30px] text-[#47423B]">Your lessons will include working on basic manners and cues:</h3>
                    <ul class="flex flex-col md:text-[24px] text-[18px] text-[#2C2C2C] gap-3 leading-normal">
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Sit, Stay, Down</li>
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Release Commands</li>
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">"Come!" (Recall)</li>
                    </ul>
                </div>
                <!-- List container 2 -->
                <div class="flex flex-col gap-[20px] md:gap-[30px] mx-6 md:mx-[89px] md:w-2/3">
                    <h3 class="text-[22px] md:text-[30px] text-[#47423B]">We will also work on some general issues that are relevant to you and your dog's needs:</h3>
                    <ul class="flex flex-col md:text-[24px] text-[18px] text-[#2C2C2C] gap-3 leading-normal">
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Loose Leash Walking</li>
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Greeting Dogs Politely</li>
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Crate Training</li>
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">"Off!" (No jumping up)</li>
                    </ul>
                </div>
                <!-- Packages -->
                <div class="px-6 md:px-[89px] bg-[#F3F2EC]">
                    <h2 class="text-[44.8px] text-[#FEA91D] lowercase py-[30px]">PACKAGES AND PRICES HERE</h2>
                </div>
            </div>
        </section>

        <!-- FAQs -->
        <section>
            <div class="flex flex-col mx-6 md:mx-[89px] gap-[20px] md:gap-[30px] md:w-2/3">
                <h2 class="md:text-[75.8px] text-[44.8px] text-[#47423B] lowercase">FAQs</h2>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">What kind of training philosophy does tailz follow?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">We use only positive, science-backed training methods. Our approach is rooted in humane handling and building a trusting relationship between you and your dog.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">What's the difference between puppy kindergarten and puppy elementary?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">Puppy Kindergarten is for younger pups (8-22 weeks) and focuses on basic commands and socialization. Puppy Elementary (5-10 months) builds on those foundations with more advanced skills and the option to earn an AKC S.T.A.R. Puppy Certificate.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">My dog is older and hasn't had formal training - can we still join a class?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">Absolutely! Our Basic Dog Manners class (for dogs 9 months and up) is perfect for new learners or for dogs needing a refresher on obedience and manners.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">What if my dog has behavioral issues like barking or lunging at other dogs?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">We recommend starting with our Fear & Aggression 101 class online. From there, you may move into the Reactivity Evaluation or Growly Dog classes, which are designed to help reactive dogs in a safe, supportive environment.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">Are private lessons available if my dog needs one-on-one support?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">Yes! We offer private training both in-person and virtually. It's a great option for dogs with specific needs or if you want personalized guidance for your pup's training journey.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">Do I need to complete a certain class before enrolling in intermediate manners?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">Yes, dogs should have completed Puppy Elementary, Kindergarten, or Basic Manners. This ensures your pup has a foundation of skills before tackling more challenging distractions and tasks.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">Can I do something more playful with my dog than obedience training?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">Definitely! Try our Sports & Games or Nosework Games classes. They're fun, enriching, and designed to strengthen your bond through teamwork, tricks, and confidence-building exercises.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase">How do I know which class is right for my dog?</h3>
                    <p class="text-[18px] md:text-[24px] text-[#2C2C2C]">If you're unsure, reach out! We're happy to help assess your dog's age, experience, and temperament to find the best class. You can also book a private evaluation to get started on the right paw.</p>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- /.container -->

<?php get_footer(); ?>

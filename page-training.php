<?php
/**
 * Template Name: Training
 *
 * @package Tailz
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
                <h2 class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Positive training methods for positive results</h2>
                <p class="text-[18px] text-[#2C2C2C]">Humane handling and a positive approach are the foundation of our training philosophy. At Tailz, we believe in building relationships based on scientifically-backed training techniques.</p>
                <p class="text-[18px] text-[#2C2C2C]">Having a well-trained dog is very important for your dog's safety and your own peace of mind. We provide a wide range of training options for both puppies and older dogs who need to brush up on their obedience.</p>
                <p class="text-[18px] text-[#2C2C2C]">We teach you how to train your dog to make good choices that result in positive outcomes for your pup. The inherent nature of private lessons will help you build a stronger bond with your dog while we provide direct guidance and direction specific to your pup's needs.</p>           
            </div>
        </section>

        <!-- Puppy classes -->
        <section>
            <div class="flex flex-col gap-[30px] md:gap-[40px]">
                <!-- Header -->
                <div class="flex flex-col gap-5 mx-6 md:mx-[89px] md:w-2/3">
                    <h2 class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Puppy classes</h2>
                </div>
                <!-- Packages -->
                <div class="px-6 md:px-[89px] bg-[#F3F2EC] py-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <?php if (have_rows('puppy_classes')) : 
                            while (have_rows('puppy_classes')) : the_row(); ?>
                            <div class="bg-white p-6 rounded-[20px]">
                                <h3 class="font-poppins font-bold text-[32.65px] md:text-[42.65px] text-[#47423B] mb-4"><?php the_sub_field('title'); ?></h3>
                                <p class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-4"><?php the_sub_field('duration'); ?> - $<?php the_sub_field('price'); ?></p>
                                <?php if (have_rows('description')) : ?>
                                    <?php while (have_rows('description')) : the_row(); ?>
                                        <p class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C] mb-6"><?php the_sub_field('paragraph'); ?></p>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                
                                <?php if (have_rows('topics')) : ?>
                                <div class="mb-6">
                                    <h4 class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-3">Topics Reviewed:</h4>
                                    <ul class="list-disc list-inside space-y-2">
                                        <?php while (have_rows('topics')) : the_row(); ?>
                                            <li class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]"><?php the_sub_field('item'); ?></li>
                                        <?php endwhile; ?>
                                    </ul>
                                </div>
                                <?php endif; ?>

                                <?php if (have_rows('notes')) : ?>
                                    <?php while (have_rows('notes')) : the_row(); ?>
                                        <p class="font-work-sans font-bold italic text-[16px] md:text-[18px] text-[#47423B]"><?php the_sub_field('note'); ?></p>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Puppy Program Sell -->
        <section class="bg-[#F3F2EC]">
            <div class="flex flex-col px-6 pt-6 pb-[41px] md:pt-[89px] md:pb-[100px] md:px-[89px] gap-5 md:w-2/3">
                <h2 class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Need training and socializing done for you?</h2>
                <p class="text-[18px] text-[#2C2C2C]">Check out our Puppy Preschool, your all in one solution!</p>
                <button class="self-start"><a class="rounded-[40px] bg-[#FF8ECC] px-[20px] py-[11px] lowercase text-white hover:bg-white hover:text-[#FF8ECC] border-2 border-[#FF8ECC] transition-all duration-300 font-bold" href="#">Book now</a></button>
            </div>
        </section>

        <!-- Adult classes -->
        <section>
            <div class="flex flex-col gap-[30px] md:gap-[40px]">
                <!-- Header -->
                <div class="flex flex-col gap-5 mx-6 md:mx-[89px] md:w-2/3">
                    <h2 class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Adult classes</h2>
                </div>
                <!-- Packages -->
                <div class="px-6 md:px-[89px] bg-[#F3F2EC] py-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <?php if (have_rows('adult_classes')) : 
                            while (have_rows('adult_classes')) : the_row(); ?>
                            <div class="bg-white p-6 rounded-[20px]">
                                <h3 class="font-poppins font-bold text-[32.65px] md:text-[42.65px] text-[#47423B] mb-4"><?php the_sub_field('title'); ?></h3>
                                <p class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-4"><?php the_sub_field('duration'); ?> - $<?php the_sub_field('price'); ?></p>
                                <?php if (have_rows('description')) : ?>
                                    <?php while (have_rows('description')) : the_row(); ?>
                                        <p class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C] mb-6"><?php the_sub_field('paragraph'); ?></p>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                
                                <?php if (have_rows('topics')) : ?>
                                <div class="mb-6">
                                    <h4 class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-3">Topics Include:</h4>
                                    <ul class="list-disc list-inside space-y-2">
                                        <?php while (have_rows('topics')) : the_row(); ?>
                                            <li class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]"><?php the_sub_field('item'); ?></li>
                                        <?php endwhile; ?>
                                    </ul>
                                </div>
                                <?php endif; ?>

                                <?php if (have_rows('notes')) : ?>
                                    <?php while (have_rows('notes')) : the_row(); ?>
                                        <p class="font-work-sans font-bold italic text-[16px] md:text-[18px] text-[#47423B]"><?php the_sub_field('note'); ?></p>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Growly dog classes -->
        <section>
            <div class="flex flex-col gap-[30px] md:gap-[40px]">
                <!-- Header -->
                <div class="flex flex-col gap-5 mx-6 md:mx-[89px] md:w-2/3">
                    <h2 class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Growly dog classes</h2>
                    <p class="text-[18px] text-[#2C2C2C]">Is your dog barking, growling, snapping, or snarling at other dogs or people out on walks? Do they frequently overwhelm other dogs when they try to say hello? Our Growly Dog classes are specially designed for dogs who need some extra help with their social skills, and use methods that will help keep you and your dog (and passers-by!) safe and happy.</p>
                    <p class="text-[18px] text-[#2C2C2C]">In Growly Dog classes or in private training, you will learn tactics to keep you and your dog safe right away, as well as how to teach your dog appropriate alternative behaviors. Our end goal is to help dogs learn to manage their social needs without aggression so that you don't have to constantly keep them distracted from their triggers.</p>
                    <p class="text-[18px] text-[#2C2C2C]">At Tailz we understand that Growly Dogs are not bad dogs, and their owners are not bad owners! Our trainers are highly educated and have experience with dog to dog aggression and dog to human aggression.  We look forward to helping rehabilitate both your dog's behavior and your relationship with them.</p>
                    <p class="text-[18px] text-[#2C2C2C]">The first step for most Growly Dogs is to attend our Fear and Aggression 101 class, which will help you understand why your dog might be growly, what to do about it, and what you'll learn in the Growly Dog classes. If your dog has been aggressive with people, it may be most appropriate to start with private training to keep your dog and other students safe. Please contact us if you aren't sure about where to start!</p>
                </div>
                <!-- Packages -->
                <div class="px-6 md:px-[89px] bg-[#F3F2EC] py-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <?php if (have_rows('growly_classes')) : 
                            while (have_rows('growly_classes')) : the_row(); ?>
                            <div class="bg-white p-6 rounded-[20px]">
                                <div class="flex justify-between items-start mb-4">
                                    <h3 class="font-poppins font-bold text-[32.65px] md:text-[42.65px] text-[#47423B]"><?php the_sub_field('title'); ?></h3>
                                    <?php if (get_sub_field('is_online')) : ?>
                                    <span class="font-poppins font-semibold text-[32.65px] md:text-[42.65px] text-[#47423B]">Online</span>
                                    <?php endif; ?>
                                </div>
                                <p class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-4"><?php the_sub_field('duration'); ?> - $<?php the_sub_field('price'); ?></p>
                                <?php if (have_rows('description')) : ?>
                                    <?php while (have_rows('description')) : the_row(); ?>
                                        <p class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C] mb-6"><?php the_sub_field('paragraph'); ?></p>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                
                                <?php if (have_rows('topics')) : ?>
                                <div class="mb-6">
                                    <h4 class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-3">Topics Include:</h4>
                                    <ul class="list-disc list-inside space-y-2">
                                        <?php while (have_rows('topics')) : the_row(); ?>
                                            <li class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]"><?php the_sub_field('item'); ?></li>
                                        <?php endwhile; ?>
                                    </ul>
                                </div>
                                <?php endif; ?>

                                <?php if (have_rows('notes')) : ?>
                                    <?php while (have_rows('notes')) : the_row(); ?>
                                        <p class="font-work-sans font-bold italic text-[16px] md:text-[18px] text-[#47423B]"><?php the_sub_field('note'); ?></p>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Private training -->
        <section>
            <div class="flex flex-col gap-[30px] md:gap-[40px]">
                <!-- Header -->
                <div class="flex flex-col gap-5 mx-6 md:mx-[89px] md:w-2/3">
                    <h2 class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Private training (one-on-one training)</h2>
                    <p class="text-[18px] text-[#2C2C2C]">One of our Certified Trainers will work with you and your family to improve your dog's manners. Lessons can be done in-person (on-site or in home) or virtual.</p>
                </div>
                <!-- List containers -->
                <div class="flex flex-col gap-[20px] md:gap-[30px] mx-6 md:mx-[89px] md:w-2/3">
                    <h3 class="text-[22px] md:text-[30px] text-[#47423B]">Your lessons will include working on basic manners and cues:</h3>
                    <ul class="flex flex-col md:text-[24px] text-[18px] text-[#2C2C2C] gap-3 leading-normal">
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Sit, Stay, Down</li>
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">Release Commands</li>
                        <li class="flex items-baseline gap-2 before:content-['•'] before:text-[#2C2C2C] before:font-bold before:mr-2">"Come!" (Recall)</li>
                    </ul>
                </div>
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
                <div class="px-6 md:px-[89px] bg-[#F3F2EC] py-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <?php if (have_rows('private_training')) : 
                            while (have_rows('private_training')) : the_row(); ?>
                            <div class="bg-white p-6 rounded-[20px]">
                                <h3 class="font-poppins font-bold text-[32.65px] md:text-[42.65px] text-[#47423B] mb-4"><?php the_sub_field('title'); ?></h3>
                                <?php if (get_sub_field('additional_price')) : ?>
                                    <p class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-6">+ $<?php echo str_replace('$', '', get_sub_field('additional_price')); ?> per session</p>
                                <?php endif; ?>
                                
                                <div class="space-y-4 mb-6">
                                    <div class="flex justify-between items-center">
                                        <span class="font-work-sans font-semibold text-[22px] md:text-[28px] text-[#47423B]"><?php the_sub_field('single_session_duration'); ?> Session</span>
                                        <span class="font-work-sans text-[18px] md:text-[24px] text-[#47423B]">$<?php echo str_replace('$', '', get_sub_field('single_session_price')); ?></span>
                                    </div>
                                    <?php if (have_rows('bundles')) : ?>
                                        <?php while (have_rows('bundles')) : the_row(); ?>
                                        <div class="flex justify-between items-center">
                                            <span class="font-work-sans font-semibold text-[22px] md:text-[28px] text-[#47423B]"><?php the_sub_field('sessions'); ?> Session Bundle</span>
                                            <span class="font-work-sans text-[18px] md:text-[24px] text-[#47423B]">$<?php echo str_replace('$', '', get_sub_field('price')); ?></span>
                                        </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>

                                <?php if (have_rows('notes')) : ?>
                                    <?php while (have_rows('notes')) : the_row(); ?>
                                        <p class="font-work-sans font-semibold italic text-[16px] md:text-[18px] text-[#47423B]"><?php the_sub_field('note'); ?></p>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Training Preview -->
        <?php if (have_rows('training_preview')) : ?>
        <section class="flex flex-col gap-[30px] md:gap-[40px]">
            <div class="flex flex-col gap-5 mx-6 md:mx-[89px] md:w-2/3">
                <h2 class="font-poppins text-[37px] md:text-[75.78px] text-[#615849] uppercase">Training Preview</h2>
            </div>
            <div class="mx-6 md:mx-[89px]">
                <?php if (count(get_field('training_preview')) > 1) : ?>
                <!-- Carousel for multiple videos -->
                <div class="relative">
                    <div class="video-carousel">
                        <?php while (have_rows('training_preview')) : the_row(); ?>
                        <div class="carousel-item <?php echo get_row_index() === 1 ? 'active' : ''; ?>">
                            <div class="aspect-video w-full rounded-[20px] overflow-hidden mb-6">
                                <?php 
                                $video_url = get_sub_field('video_url');
                                if (strpos($video_url, 'youtube.com') !== false || strpos($video_url, 'youtu.be') !== false) {
                                    $video_id = preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $video_url, $match) ? $match[1] : '';
                                    echo '<iframe class="w-full h-full" src="https://www.youtube.com/embed/' . esc_attr($video_id) . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                                } elseif (strpos($video_url, 'vimeo.com') !== false) {
                                    $video_id = preg_match('/vimeo\.com\/([0-9]+)/', $video_url, $match) ? $match[1] : '';
                                    echo '<iframe class="w-full h-full" src="https://player.vimeo.com/video/' . esc_attr($video_id) . '" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>';
                                } else {
                                    echo '<video class="w-full h-full" controls><source src="' . esc_url($video_url) . '" type="video/mp4">Your browser does not support the video tag.</video>';
                                }
                                ?>
                            </div>
                            <h3 class="font-work-sans text-[24px] md:text-[31.99px] text-black mb-4 uppercase"><?php the_sub_field('title'); ?></h3>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <!-- Carousel Navigation -->
                    <div class="flex justify-between w-full px-0">
                        <button class="carousel-prev bg-white/80 p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </button>
                        <button class="carousel-next bg-white/80 p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>
                    </div>
                </div>
                <?php else : ?>
                <!-- Single video display -->
                <div class="aspect-video w-full rounded-[20px] overflow-hidden mb-6">
                    <?php 
                    the_row();
                    $video_url = get_sub_field('video_url');
                    if (strpos($video_url, 'youtube.com') !== false || strpos($video_url, 'youtu.be') !== false) {
                        $video_id = preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $video_url, $match) ? $match[1] : '';
                        echo '<iframe class="w-full h-full" src="https://www.youtube.com/embed/' . esc_attr($video_id) . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                    } elseif (strpos($video_url, 'vimeo.com') !== false) {
                        $video_id = preg_match('/vimeo\.com\/([0-9]+)/', $video_url, $match) ? $match[1] : '';
                        echo '<iframe class="w-full h-full" src="https://player.vimeo.com/video/' . esc_attr($video_id) . '" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>';
                    } else {
                        echo '<video class="w-full h-full" controls><source src="' . esc_url($video_url) . '" type="video/mp4">Your browser does not support the video tag.</video>';
                    }
                    ?>
                </div>
                <h3 class="font-work-sans text-[24px] md:text-[31.99px] text-black mb-4 uppercase"><?php the_sub_field('title'); ?></h3>
                <?php endif; ?>
                <div class="flex justify-center">
                    <button class="self-start"><a class="rounded-[40px] bg-[#FF8ECC] px-[20px] py-[11px] lowercase text-white hover:bg-white hover:text-[#FF8ECC] border-2 border-[#FF8ECC] transition-all duration-300 font-bold" href="#">View more in gallery</a></button>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <!-- FAQs -->
        <section>
            <div class="flex flex-col mx-6 md:mx-[89px] gap-[20px] md:gap-[30px] md:w-2/3">
                <h2 class="md:text-[75.8px] text-[44.8px] text-[#47423B] lowercase">FAQs</h2>

                <?php if (have_rows('faqs')) : ?>
                    <?php while (have_rows('faqs')) : the_row(); ?>
                    <div class="flex flex-col gap-3">
                        <h3 class="md:text-[42.7px] text-[22px] text-[#47423B] lowercase"><?php the_sub_field('question'); ?></h3>
                        <p class="text-[18px] md:text-[24px] text-[#2C2C2C]"><?php the_sub_field('answer'); ?></p>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>

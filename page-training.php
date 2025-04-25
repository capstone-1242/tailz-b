<?php
/**
 * Template Name: Training
 * Description: Displays training packages for dogs, with video preview carousel, using ACF.
 *
 * @package tailz
 */

get_header();

// Banner
get_template_part('template-parts/banner');

// Retrieve ACF group fields for training options
$training_preview_group = get_field('training_preview');
$puppy_classes_group    = get_field('puppy_classes');
$adult_classes_group    = get_field('adult_classes');
$growly_classes_group   = get_field('growly_classes');
$private_training_group = get_field('private_training');

// Build indexed arrays for each training type so we can loop easily
$puppyClasses = array();
if (!empty($puppy_classes_group['puppy_class_1']) && !empty($puppy_classes_group['puppy_class_1']['title'])) {
	$puppyClasses[] = $puppy_classes_group['puppy_class_1'];
}
if (!empty($puppy_classes_group['puppy_class_2']) && !empty($puppy_classes_group['puppy_class_2']['title'])) {
	$puppyClasses[] = $puppy_classes_group['puppy_class_2'];
}
if (!empty($puppy_classes_group['puppy_class_3']) && !empty($puppy_classes_group['puppy_class_3']['title'])) {
	$puppyClasses[] = $puppy_classes_group['puppy_class_3'];
}

$adultClasses = array();
if (!empty($adult_classes_group['adult_class_1']) && !empty($adult_classes_group['adult_class_1']['title'])) {
	$adultClasses[] = $adult_classes_group['adult_class_1'];
}
if (!empty($adult_classes_group['adult_class_2']) && !empty($adult_classes_group['adult_class_2']['title'])) {
	$adultClasses[] = $adult_classes_group['adult_class_2'];
}
if (!empty($adult_classes_group['adult_class_3']) && !empty($adult_classes_group['adult_class_3']['title'])) {
	$adultClasses[] = $adult_classes_group['adult_class_3'];
}

$growlyClasses = array();
if (!empty($growly_classes_group['growly_class_1']) && !empty($growly_classes_group['growly_class_1']['title'])) {
	$growlyClasses[] = $growly_classes_group['growly_class_1'];
}
if (!empty($growly_classes_group['growly_class_2']) && !empty($growly_classes_group['growly_class_2']['title'])) {
	$growlyClasses[] = $growly_classes_group['growly_class_2'];
}
if (!empty($growly_classes_group['growly_class_3']) && !empty($growly_classes_group['growly_class_3']['title'])) {
	$growlyClasses[] = $growly_classes_group['growly_class_3'];
}

$privateTrainings = array();
if (!empty($private_training_group['private_training_1']) && !empty($private_training_group['private_training_1']['title'])) {
	$privateTrainings[] = $private_training_group['private_training_1'];
}
if (!empty($private_training_group['private_training_2']) && !empty($private_training_group['private_training_2']['title'])) {
	$privateTrainings[] = $private_training_group['private_training_2'];
}
if (!empty($private_training_group['private_training_3']) && !empty($private_training_group['private_training_3']['title'])) {
	$privateTrainings[] = $private_training_group['private_training_3'];
}

// Build an array for training preview videos from the group – keys video_1, video_2, video_3
$trainingPreviews = array();
if (!empty($training_preview_group['video_1']) && !empty($training_preview_group['video_1']['video_url'])) {
	$trainingPreviews[] = $training_preview_group['video_1'];
}
if (!empty($training_preview_group['video_2']) && !empty($training_preview_group['video_2']['video_url'])) {
	$trainingPreviews[] = $training_preview_group['video_2'];
}
if (!empty($training_preview_group['video_3']) && !empty($training_preview_group['video_3']['video_url'])) {
	$trainingPreviews[] = $training_preview_group['video_3'];
}
?>

<!-- Skip to main content link -->
<a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-0 focus:left-0 focus:z-50 focus:bg-white focus:px-4 focus:py-2 focus:text-[#2C2C2C]">
  Skip to main content
</a>

<!-- Breadcrumb -->
<nav class="flex flex-col mx-6 md:mx-[89px] my-[16px] md:my-[60px]" aria-label="Breadcrumb">
    <ol class="flex items-center space-x-2 text-[14px] md:text-[16px] mb-[16px] lg-[20px]">
        <li><a href="<?php echo esc_url(home_url()); ?>" class="text-[#47423B]">Home</a></li>
        <li><span class="text-[#47423B]">/</span></li>
        <li><a href="<?php echo esc_url(home_url('/services')); ?>" class="text-[#47423B]">Services</a></li>
        <li><span class="text-[#47423B]">/</span></li>
        <li><span class="font-bold text-[#615849]" aria-current="page">Training</span></li>
    </ol>
    <hr class="w-full border-t-2 border-[#F3F2EC]">
</nav>

<div>
	<div class="flex flex-col gap-[60px] md:gap-[130px]">
		<!-- Positive training methods for positive results -->
		<section aria-labelledby="positive-training-heading" role="region">
			<div class="flex flex-col mx-6 md:mx-[89px] gap-5 md:w-2/3">
				<h2 id="positive-training-heading" class="text-[40px] md:text-[53.75px] text-[#47423B] lowercase">Positive training methods for positive results</h2>
				<p class="text-[18px] text-[#2C2C2C]">Humane handling and a positive approach are the foundation of our training philosophy. At Tailz, we believe in building relationships based on scientifically-backed training techniques.</p>
				<p class="text-[18px] text-[#2C2C2C]">Having a well-trained dog is very important for your dog's safety and your own peace of mind. We provide a wide range of training options for both puppies and older dogs who need to brush up on their obedience.</p>
				<p class="text-[18px] text-[#2C2C2C]">We teach you how to train your dog to make good choices that result in positive outcomes for your pup. The inherent nature of private lessons will help you build a stronger bond with your dog while we provide direct guidance and direction specific to your pup's needs.</p>
			</div>
		</section>

		<!-- Puppy classes -->
		<section aria-labelledby="puppy-classes-heading" role="region">
			<div class="flex flex-col gap-[30px] md:gap-[40px]">
				<!-- Header -->
				<div class="flex flex-col gap-5 mx-6 md:mx-[89px] md:w-2/3">
					<h2 id="puppy-classes-heading" class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Puppy classes</h2>
				</div>
				<!-- Packages -->
				<div class="px-6 md:px-[89px] bg-[#F3F2EC] py-8">
					<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
						<?php if (!empty($puppyClasses)) : 
						foreach ($puppyClasses as $class) : ?>
							<div class="bg-white p-6 rounded-[20px]" role="region" aria-label="<?php echo esc_attr($class['title']); ?> package">
								<h3 class="font-poppins font-bold text-[32.65px] md:text-[42.65px] text-[#47423B] mb-4"><?php echo esc_html($class['title']); ?></h3>
								<p class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-4">
									<?php echo esc_html($class['duration']); ?> - $<?php echo esc_html($class['price']); ?>
								</p>
								<?php if (!empty($class['description']['paragraph'])) : ?>
									<p class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C] mb-6">
										<?php echo esc_html($class['description']['paragraph']); ?>
									</p>
								<?php endif; ?>
								
								<?php
								$topics = array();
								if (!empty($class['topics']['topic_1'])) { $topics[] = $class['topics']['topic_1']; }
								if (!empty($class['topics']['topic_2'])) { $topics[] = $class['topics']['topic_2']; }
								if (!empty($class['topics']['topic_3'])) { $topics[] = $class['topics']['topic_3']; }
								if (!empty($topics)) : ?>
									<div class="mb-6">
										<h4 class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-3">Topics Reviewed:</h4>
										<ul class="list-disc list-inside space-y-2">
											<?php foreach ($topics as $topic) : ?>
												<li class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]"><?php echo esc_html($topic); ?></li>
											<?php endforeach; ?>
										</ul>
									</div>
								<?php endif; ?>

								<?php if (!empty($class['notes'])) : ?>
									<p class="font-work-sans font-bold italic text-[16px] md:text-[18px] text-[#47423B]"><?php echo esc_html($class['notes']); ?></p>
								<?php endif; ?>
							</div>
						<?php endforeach;
						endif; ?>
					</div>
				</div>
			</div>
		</section>

		<!-- Puppy Program Sell -->
		<section class="bg-[#F3F2EC]" role="region" aria-labelledby="puppy-preschool-heading">
			<div class="flex flex-col px-6 pt-6 pb-[41px] md:pt-[89px] md:pb-[100px] md:px-[89px] gap-5 md:w-2/3">
				<h2 id="puppy-preschool-heading" class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Need training and socializing done for you?</h2>
				<p class="text-[18px] text-[#2C2C2C]">Check out our Puppy Preschool, your all-in-one solution!</p>
				<button class="self-start">
					<a class="rounded-[40px] bg-[#FF8ECC] px-[20px] py-[11px] lowercase text-white hover:bg-white hover:text-[#FF8ECC] border-2 border-[#FF8ECC] transition-all duration-300 font-bold" 
					   href="<?php echo esc_url(home_url('/puppy-programs')); ?>" 
					   aria-label="Book puppy preschool training now">
						puppy programs
					</a>
				</button>
			</div>
		</section>

		<!-- Adult classes -->
		<section aria-labelledby="adult-classes-heading" role="region">
			<div class="flex flex-col gap-[30px] md:gap-[40px]">
				<!-- Header -->
				<div class="flex flex-col gap-5 mx-6 md:mx-[89px] md:w-2/3">
					<h2 id="adult-classes-heading" class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Adult classes</h2>
				</div>
				<!-- Packages -->
				<div class="px-6 md:px-[89px] bg-[#F3F2EC] py-8">
					<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
						<?php if (!empty($adultClasses)) : 
						foreach ($adultClasses as $class) : ?>
							<div class="bg-white p-6 rounded-[20px]" role="region" aria-label="<?php echo esc_attr($class['title']); ?> package">
								<h3 class="font-poppins font-bold text-[32.65px] md:text-[42.65px] text-[#47423B] mb-4"><?php echo esc_html($class['title']); ?></h3>
								<p class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-4">
									<?php echo esc_html($class['duration']); ?> - $<?php echo esc_html($class['price']); ?>
								</p>
								<?php if (!empty($class['description']['paragraph'])) : ?>
									<p class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C] mb-6">
										<?php echo esc_html($class['description']['paragraph']); ?>
									</p>
								<?php endif; ?>
								
								<?php
								$topics = array();
								if (!empty($class['topics']['topic_1'])) { $topics[] = $class['topics']['topic_1']; }
								if (!empty($class['topics']['topic_2'])) { $topics[] = $class['topics']['topic_2']; }
								if (!empty($class['topics']['topic_3'])) { $topics[] = $class['topics']['topic_3']; }
								if (!empty($topics)) : ?>
									<div class="mb-6">
										<h4 class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-3">Topics Include:</h4>
										<ul class="list-disc list-inside space-y-2">
											<?php foreach ($topics as $topic) : ?>
												<li class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]"><?php echo esc_html($topic); ?></li>
											<?php endforeach; ?>
										</ul>
									</div>
								<?php endif; ?>

								<?php if (!empty($class['notes'])) : ?>
									<p class="font-work-sans font-bold italic text-[16px] md:text-[18px] text-[#47423B]"><?php echo esc_html($class['notes']); ?></p>
								<?php endif; ?>
							</div>
						<?php endforeach;
						endif; ?>
					</div>
				</div>
			</div>
		</section>

		<!-- Growly dog classes -->
		<section aria-labelledby="growly-dog-heading" role="region">
			<div class="flex flex-col gap-[30px] md:gap-[40px]">
				<!-- Header -->
				<div class="flex flex-col gap-5 mx-6 md:mx-[89px] md:w-2/3">
					<h2 id="growly-dog-heading" class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Growly dog classes</h2>
					<p class="text-[18px] text-[#2C2C2C]">
						Is your dog barking, growling, snapping, or snarling at other dogs or people out on walks? Do they frequently overwhelm other dogs when they try to say hello? Our Growly Dog classes are specially designed for dogs who need some extra help with their social skills, and use methods that will help keep you and your dog (and passers-by!) safe and happy.
					</p>
					<p class="text-[18px] text-[#2C2C2C]">
						In Growly Dog classes or in private training, you will learn tactics to keep you and your dog safe right away, as well as how to teach your dog appropriate alternative behaviors. Our end goal is to help dogs learn to manage their social needs without aggression so that you don't have to constantly keep them distracted from their triggers.
					</p>
					<p class="text-[18px] text-[#2C2C2C]">
						At Tailz we understand that Growly Dogs are not bad dogs, and their owners are not bad owners! Our trainers are highly educated and experienced with dog-to-dog and dog-to-human aggression. We look forward to helping rehabilitate both your dog's behavior and your relationship with them.
					</p>
					<p class="text-[18px] text-[#2C2C2C]">
						The first step for most Growly Dogs is to attend our Fear and Aggression 101 class, which will help you understand why your dog might be growly, what to do about it, and what you'll learn in the Growly Dog classes. If your dog has been aggressive with people, it may be most appropriate to start with private training to keep your dog and other students safe. Please contact us if you aren't sure about where to start!
					</p>
				</div>
				<!-- Packages -->
				<div class="px-6 md:px-[89px] bg-[#F3F2EC] py-8">
					<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
						<?php if (!empty($growlyClasses)) : 
						foreach ($growlyClasses as $class) : ?>
							<div class="bg-white p-6 rounded-[20px]" role="region" aria-label="<?php echo esc_attr($class['title']); ?> package">
								<div class="flex justify-between items-start mb-4">
									<h3 class="font-poppins font-bold text-[32.65px] md:text-[42.65px] text-[#47423B]"><?php echo esc_html($class['title']); ?></h3>
									<?php if (!empty($class['is_online']) && $class['is_online']) : ?>
										<span class="font-poppins font-semibold text-[32.65px] md:text-[42.65px] text-[#47423B]">Online</span>
									<?php endif; ?>
								</div>
								<p class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-4">
									<?php echo esc_html($class['duration']); ?> - $<?php echo esc_html($class['price']); ?>
								</p>
								<?php if (!empty($class['description']['paragraph'])) : ?>
									<p class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C] mb-6">
										<?php echo esc_html($class['description']['paragraph']); ?>
									</p>
								<?php endif; ?>
								
								<?php
								$topics = array();
								if (!empty($class['topics']['topic_1'])) { $topics[] = $class['topics']['topic_1']; }
								if (!empty($class['topics']['topic_2'])) { $topics[] = $class['topics']['topic_2']; }
								if (!empty($class['topics']['topic_3'])) { $topics[] = $class['topics']['topic_3']; }
								if (!empty($topics)) : ?>
									<div class="mb-6">
										<h4 class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-3">Topics Include:</h4>
										<ul class="list-disc list-inside space-y-2">
											<?php foreach ($topics as $topic) : ?>
												<li class="font-work-sans text-[18px] md:text-[24px] text-[#2C2C2C]"><?php echo esc_html($topic); ?></li>
											<?php endforeach; ?>
										</ul>
									</div>
								<?php endif; ?>

								<?php if (!empty($class['notes'])) : ?>
									<p class="font-work-sans font-bold italic text-[16px] md:text-[18px] text-[#47423B]"><?php echo esc_html($class['notes']); ?></p>
								<?php endif; ?>
							</div>
						<?php endforeach;
						endif; ?>
					</div>
				</div>
			</div>
		</section>

		<!-- Private training -->
		<section aria-labelledby="private-training-heading" role="region">
			<div class="flex flex-col gap-[30px] md:gap-[40px]">
				<!-- Header -->
				<div class="flex flex-col gap-5 mx-6 md:mx-[89px] md:w-2/3">
					<h2 id="private-training-heading" class="text-[44.8px] md:text-[75.8px] text-[#47423B] lowercase">Private training (one-on-one training)</h2>
					<p class="text-[18px] text-[#2C2C2C]">One of our Certified Trainers will work with you and your family to improve your dog's manners. Lessons can be done in-person (on-site or in-home) or virtually.</p>
				</div>
				<!-- Lesson Details -->
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
				<!-- Private Training Packages -->
				<div class="px-6 md:px-[89px] bg-[#F3F2EC] py-8">
					<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
						<?php if (!empty($privateTrainings)) : 
						foreach ($privateTrainings as $training) : ?>
							<div class="bg-white p-6 rounded-[20px]" role="region" aria-label="<?php echo esc_attr($training['title']); ?> package">
								<h3 class="font-poppins font-bold text-[32.65px] md:text-[42.65px] text-[#47423B] mb-4"><?php echo esc_html($training['title']); ?></h3>
								<?php if (!empty($training['additional_price'])) : ?>
									<p class="font-poppins font-bold text-[21.99px] md:text-[31.99px] text-[#47423B] mb-6">+ $<?php echo esc_html(str_replace('$', '', $training['additional_price'])); ?> per session</p>
								<?php endif; ?>
								
								<div class="space-y-4 mb-6">
									<div class="flex justify-between items-center">
										<span class="font-work-sans font-semibold text-[22px] md:text-[28px] text-[#47423B]"><?php echo esc_html($training['single_session_duration']); ?> Session</span>
										<span class="font-work-sans text-[18px] md:text-[24px] text-[#47423B]">$<?php echo esc_html(str_replace('$', '', $training['single_session_price'])); ?></span>
									</div>
									<?php if (!empty($training['bundles'])) : 
										// If bundles are provided, assume a single bundle group for now
										$bundle = $training['bundles'];
										?>
										<div class="flex justify-between items-center">
											<span class="font-work-sans font-semibold text-[22px] md:text-[28px] text-[#47423B]"><?php echo esc_html($bundle['sessions']); ?> Session Bundle</span>
											<span class="font-work-sans text-[18px] md:text-[24px] text-[#47423B]">$<?php echo esc_html(str_replace('$', '', $bundle['price'])); ?></span>
										</div>
									<?php endif; ?>
								</div>

								<?php if (!empty($training['notes'])) : ?>
									<p class="font-work-sans font-semibold italic text-[16px] md:text-[18px] text-[#47423B]"><?php echo esc_html($training['notes']); ?></p>
								<?php endif; ?>
							</div>
						<?php endforeach;
						endif; ?>
					</div>
				</div>
			</div>
		</section>

		<!-- Training Preview -->
		<?php if (!empty($trainingPreviews)) : ?>
		<section class="flex flex-col gap-[30px] md:gap-[40px]" role="region" aria-labelledby="training-preview-heading">
			<div class="flex flex-col gap-5 mx-6 md:mx-[89px] md:w-2/3">
				<h2 id="training-preview-heading" class="font-poppins text-[37px] md:text-[75.78px] text-[#615849] uppercase">Training Preview</h2>
			</div>
			<div class="mx-6 md:mx-[89px]">
				<?php if (count($trainingPreviews) > 1) : ?>
					<!-- Carousel for multiple videos -->
					<div class="relative">
						<div class="video-carousel" role="region" aria-label="Training preview videos" aria-live="polite">
							<?php foreach ($trainingPreviews as $index => $video) : ?>
								<div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>" role="group" aria-label="Training video <?php echo $index + 1; ?>">
									<div class="aspect-video w-full rounded-[20px] overflow-hidden mb-6">
										<?php 
										$video_url = $video['video_url'];
										if (strpos($video_url, 'youtube.com') !== false || strpos($video_url, 'youtu.be') !== false) {
											preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $video_url, $match);
											$video_id = isset($match[1]) ? $match[1] : '';
											echo '<iframe class="w-full h-full" src="https://www.youtube.com/embed/' . esc_attr($video_id) . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen title="' . esc_attr($video['title']) . '"></iframe>';
										} elseif (strpos($video_url, 'vimeo.com') !== false) {
											preg_match('/vimeo\.com\/([0-9]+)/', $video_url, $match);
											$video_id = isset($match[1]) ? $match[1] : '';
											echo '<iframe class="w-full h-full" src="https://player.vimeo.com/video/' . esc_attr($video_id) . '" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen title="' . esc_attr($video['title']) . '"></iframe>';
										} else {
											echo '<video class="w-full h-full" controls><source src="' . esc_url($video_url) . '" type="video/mp4">Your browser does not support the video tag.</video>';
										}
										?>
									</div>
									<h3 class="font-work-sans text-[24px] md:text-[31.99px] text-black mb-4 uppercase"><?php echo esc_html($video['title']); ?></h3>
								</div>
							<?php endforeach; ?>
						</div>
						<!-- Carousel Navigation -->
						<div class="flex justify-between w-full px-0">
							<button class="carousel-prev bg-white/80 p-2" aria-label="Previous training video">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
								</svg>
							</button>
							<button class="carousel-next bg-white/80 p-2" aria-label="Next training video">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
								</svg>
							</button>
						</div>
					</div>
				<?php else : ?>
					<!-- Single video display -->
					<div class="aspect-video w-full rounded-[20px] overflow-hidden mb-6">
						<?php 
						$video = $trainingPreviews[0];
						$video_url = $video['video_url'];
						if (strpos($video_url, 'youtube.com') !== false || strpos($video_url, 'youtu.be') !== false) {
							preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $video_url, $match);
							$video_id = isset($match[1]) ? $match[1] : '';
							echo '<iframe class="w-full h-full" src="https://www.youtube.com/embed/' . esc_attr($video_id) . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen title="' . esc_attr($video['title']) . '"></iframe>';
						} elseif (strpos($video_url, 'vimeo.com') !== false) {
							preg_match('/vimeo\.com\/([0-9]+)/', $video_url, $match);
							$video_id = isset($match[1]) ? $match[1] : '';
							echo '<iframe class="w-full h-full" src="https://player.vimeo.com/video/' . esc_attr($video_id) . '" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen title="' . esc_attr($video['title']) . '"></iframe>';
						} else {
							echo '<video class="w-full h-full" controls><source src="' . esc_url($video_url) . '" type="video/mp4">Your browser does not support the video tag.</video>';
						}
						?>
					</div>
					<h3 class="font-work-sans text-[24px] md:text-[31.99px] text-black mb-4 uppercase"><?php echo esc_html($video['title']); ?></h3>
				<?php endif; ?>
				<div class="flex justify-center">
					<button class="self-start">
						<a class="rounded-[40px] bg-[#FF8ECC] px-[20px] py-[11px] lowercase text-white hover:bg-white hover:text-[#FF8ECC] border-2 border-[#FF8ECC] transition-all duration-300 font-bold" 
						   href="<?php echo esc_url(home_url('/gallery')); ?>" 
						   aria-label="View more training videos in gallery">
							View more in gallery
						</a>
					</button>
				</div>
			</div>
		</section>
		<?php endif; ?>

		<!-- FAQ Section -->
		<div class="mt-[60px] md:mt-[100px] mb-[60px] md:mb-[100px] mx-6 md:mx-[89px]">
			<?php get_template_part('template-parts/faq-section'); ?>
		</div>

	</div>
</div>

<?php get_footer(); ?>

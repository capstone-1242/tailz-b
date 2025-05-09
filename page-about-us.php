<?php

/**
 * Template Name: About US
 * Description: The about us page for Tailz.
 *
 * @package tailz
 */

get_header();

// Retrieve the images from ACF fields (assuming 'Image' type returning URL)
$tailz_shop_front_bubble = get_field('tailz_shop_front_bubble');
$dog_food_bubble         = get_field('dog_food_bubble');
$happy_dog_bubble        = get_field('happy_dog_bubble');
$cat_bubble              = get_field('cat_bubble');
$store_front_bubble      = get_field('store_front_bubble');

// Retrieve the group field for Team Members
$team_members_group = get_field('team_members');
// Build an indexed array from sub-groups: team_member_1, team_member_2, team_member_3
$team_members = [];
if (!empty($team_members_group['team_member_1']) && !empty($team_members_group['team_member_1']['name'])) {
  $team_members[] = $team_members_group['team_member_1'];
}
if (!empty($team_members_group['team_member_2']) && !empty($team_members_group['team_member_2']['name'])) {
  $team_members[] = $team_members_group['team_member_2'];
}
if (!empty($team_members_group['team_member_3']) && !empty($team_members_group['team_member_3']['name'])) {
  $team_members[] = $team_members_group['team_member_3'];
}
?>

<!-- Hero Section Banner -->
<?php get_template_part('template-parts/banner'); ?>

<!-- Main Content -->

<!-- Breadcrumb with Separator -->
<div class="relative">
  <nav class="border-b-2 border-cream mx-[24px] lg:mx-[90px] py-[20px] lg:py-[30px] " aria-label="Breadcrumb">
    <ol class="flex items-center font-worksans text-[14px] md:text-[16px] text-[#47423B]">
      <li>
        <a href="<?php echo home_url(); ?>" class="font-normal hover:opacity-80 transition-opacity">
          HOME
        </a>
      </li>
      <li class="mx-2" aria-hidden="true">/</li>
      <li aria-current="page">
        <span class="font-bold">ABOUT US</span>
      </li>
    </ol>
  </nav>

  <!-- Our Goals Section -->
  <section aria-label="Our Goals" class="mx-[24px] lg:mx-[90px] my-[60px] lg:my-[130px]">
    <h2 class="font-poppins font-bold text-[37px] md:text-[75.8px] text-[#615849] mb-[20px] lg:mb-[30px]">
      our goals at TAILZ
    </h2>

    <div class="grid lg:grid-cols-3 gap-8">
      <!-- To Care -->
      <div class="border-l-4 border-blue">
        <div class="pl-4">
          <h3 class="font-worksans text-[28px] md:text-[42.65px] text-[#2B3FB8] mb-[8px]">
            to care
          </h3>
          <p class="font-worksans text-[18px] md:text-[20px] text-[#47423B]">
            We create a safe, nurturing environment where every dog is treated like family - because love and compassion are at the heart of what we do.
          </p>
        </div>
      </div>

      <!-- To Be Educated -->
      <div class="border-l-4 border-orange">
        <div class="pl-4">
          <h3 class="font-worksans text-[28px] md:text-[42.65px] text-[#FEA91D] mb-[8px]">
            to educate
          </h3>
          <p class="font-worksans text-[18px] md:text-[20px] text-[#47423B]">
            We empower pet parents with knowledge and tools to better understand, train, and support their pups at every stage of life.
          </p>
        </div>
      </div>

      <!-- To Be Accessible -->
      <div class="border-l-4 border-yellow">
        <div class="pl-4">
          <h3 class="font-worksans text-[28px] md:text-[42.65px] text-[#FCD41D] mb-[8px]">
            to be accessible
          </h3>
          <p class="font-worksans text-[18px] md:text-[20px] text-[#47423B]">
            We're here for everyone - offering flexible options, open communication, and a welcoming space that's easy to reach and easy to love.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Philosophy Header -->
  <section class="mx-[24px] lg:mx-[90px]">
    <h2 class="font-poppins font-bold text-[31px] lg:text-[56.85px] text-[#2B3FB8] leading-5 lg:leading-9">
      OUR PHILOSOPHY
    </h2>
  </section>

  <!-- Our Philosophy Section -->
  <section class="bg-[#2B3FB8] py-20" aria-label="Our Philosophy">
    <div class="px-[24px] lg:px-[90px]">
      <div class="space-y-6">
        <p class="font-worksans text-[16px] lg:text-[24px] font-bold text-white max-w-[800px]">
          At TAILZ, we are dedicated to providing nutritious foods and fostering healthy lifestyles for both dogs and cats.
        </p>
        <p class="font-worksans text-[16px] lg:text-[24px] text-white max-w-[800px]">
          Treating every pet as our own, we prioritize their overall well-being—mind, body, and emotions—through compassionate care and positive reinforcement.
        </p>
      </div>
    </div>
  </section>

  <!-- TAILZ's Story Section -->
  <section class="relative overflow-hidden my-[60px] lg:my-[130px]" aria-label="TAILZ's Story">
    <div class="mx-[24px] lg:mx-[90px] max-w-7xl">
      <h2 class="font-poppins font-bold text-[37px] md:text-[75.8px] text-[#615849] text-center mb-[20px] lg:mb-[30px]">
        TAILZ's story
      </h2>

      <div class="relative">
        <!-- Row 1: Bubble left, Text right -->
        <div class="mb-16 md:mb-24">
          <div class="grid grid-cols-1 md:grid-cols-12 items-center gap-4">
            <!-- Bubble on Left -->
            <div class="md:col-span-4 flex justify-end">
              <div class="w-28 h-28 md:w-36 md:h-36 rounded-full overflow-hidden bg-gray-200 shadow-lg transform hover:-translate-y-1 transition-transform duration-300 relative z-10">
                <img
                  src="<?php echo esc_url($tailz_shop_front_bubble); ?>"
                  alt="Tailz Shop Front"
                  class="w-full h-full object-cover">
              </div>
            </div>
            <!-- Text on Right -->
            <div class="md:col-span-8 md:pl-8 text-left">
              <p class="font-worksans text-base md:text-lg leading-relaxed max-w-md mx-auto">
                Tailz began in 2008 as a small but <span class="text-[#2B3FB8]">mighty</span> shop with a big heart for dogs and their well-being.
              </p>
            </div>
          </div>
        </div>

        <!-- Row 2: Text left, Bubble right -->
        <div class="mb-16 md:mb-24">
          <div class="grid grid-cols-1 md:grid-cols-12 items-center gap-4">
            <!-- Text on Left -->
            <div class="md:col-span-8 md:pr-8 text-right">
              <p class="font-worksans text-base md:text-lg leading-relaxed max-w-md mx-auto">
                From the very start, we've been <span class="text-[#2B3FB8]">passionate</span> about supporting healthy, happy lives for pups and peace of mind for their people.
              </p>
            </div>
            <!-- Bubble on Right -->
            <div class="md:col-span-4 flex justify-start">
              <div class="w-28 h-28 md:w-36 md:h-36 rounded-full overflow-hidden bg-gray-200 shadow-lg transform hover:-translate-y-1 transition-transform duration-300 relative z-10">
                <img
                  src="<?php echo esc_url($dog_food_bubble); ?>"
                  alt="Dog Food"
                  class="w-full h-full object-cover">
              </div>
            </div>
          </div>
        </div>

        <!-- Row 3: Text only -->
        <div class="mb-16 md:mb-24">
          <div class="grid grid-cols-1">
            <div class="mx-auto text-left md:text-center">
              <p class="font-worksans text-base md:text-lg leading-relaxed max-w-lg">
                Our services focus on nurturing every dog's <span class="text-[#2B3FB8]">mind, body, and emotions</span> through play, learning, and care.
              </p>
            </div>
          </div>
        </div>

        <!-- Row 4: Overlapping bubbles on left, Text right -->
        <div class="mb-16 md:mb-24 relative">
          <div class="grid grid-cols-1 md:grid-cols-12 items-center gap-4">
            <!-- Bubbles on Left -->
            <div class="md:col-span-4 relative flex justify-center md:justify-end gap-4">
              <!-- Dog Bubble -->
              <div class="w-32 h-32 md:w-40 md:h-40 rounded-full overflow-hidden transform hover:-translate-y-1 transition-transform duration-300">
                <img
                  src="<?php echo esc_url($happy_dog_bubble); ?>"
                  alt="Happy Dog"
                  class="w-full h-full object-cover">
              </div>
              <!-- Cat Bubble -->
              <div class="w-28 h-28 md:w-32 md:h-32 rounded-full overflow-hidden hover:-translate-y-1 transition-transform duration-300">
                <img
                  src="<?php echo esc_url($cat_bubble); ?>"
                  alt="Cat"
                  class="w-full h-full object-cover">
              </div>
            </div>
            <!-- Text on Right -->
            <div class="md:col-span-8 md:pl-8 text-left">
              <p class="font-worksans text-base md:text-lg leading-relaxed max-w-md mx-auto">
                We use <span class="text-[#2B3FB8]">positive reinforcement</span> techniques to build trust, confidence, and strong bonds with each pup we meet.
              </p>
              <p class="font-worksans text-base md:text-lg leading-relaxed max-w-md mx-auto">
                Our shelves are stocked with <span class="text-[#2B3FB8]">high-quality</span>, delicious pet foods (many proudly Canadian-made!) and wholesome treats.
              </p>
            </div>
          </div>
        </div>

        <!-- Row 5: Text left, Large Bubble right -->
        <div class="mb-16 md:mb-24 relative overflow-hidden">
          <div class="grid grid-cols-1 md:grid-cols-12 items-center gap-4">
            <!-- Text on Left -->
            <div class="md:col-span-8 md:pl-16 text-right">
              <p class="font-worksans text-base md:text-lg leading-relaxed max-w-md mb-6 ml-auto">
                Whether your dog needs a <span class="text-[#2B3FB8]">fun</span> day at Daycare, a cozy overnight stay, or a refreshing Spa visit, Tailz has it covered.
              </p>
            </div>
            <!-- Large Bubble and Mobile Text Container -->
            <div class="md:col-span-4">
              <!-- Desktop Large Bubble -->
              <div class="hidden md:block w-[443px] h-[443px] rounded-full overflow-hidden bg-gray-200 shadow-lg transform hover:-translate-y-1 transition-transform duration-300">
                <img
                  src="<?php echo esc_url($store_front_bubble); ?>"
                  alt="Store Front"
                  class="w-full h-full object-cover object-center">
              </div>
              <!-- Mobile Layout -->
              <div class="md:hidden flex flex-row items-start gap-4">
                <p class="font-worksans text-base leading-relaxed text-left flex-1 pt-4">
                  After years of growing with our community, we've moved into a brand-new, expanded location with more space and exciting new features.
                </p>
                <div class="w-[250px] h-[250px] flex-shrink-0 rounded-full overflow-hidden bg-gray-200 shadow-lg transform hover:-translate-y-1 transition-transform duration-300">
                  <img
                    src="<?php echo esc_url($store_front_bubble); ?>"
                    alt="Store Front"
                    class="w-full h-full object-cover object-center">
                </div>
              </div>
            </div>
            <!-- Desktop-only text -->
            <div class="hidden md:block md:col-span-8 md:pl-16 text-left">
              <p class="font-worksans text-base md:text-lg leading-relaxed max-w-md mx-auto">
                After years of growing with our community, we've moved into a brand-new, expanded location with more space and exciting new features.
              </p>
            </div>
          </div>
        </div>

        <!-- Final Message: Centered -->
        <div class="mx-auto">
          <p class="font-worksans text-base md:text-lg leading-relaxed text-right mt-16 md:mt-24 max-w-md ml-auto">
            Tailz is your one-stop destination for dog care, and we can't wait to be part of your pup's journey for years to come!
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section aria-label="Team Members" class="mx-[24px] lg:mx-[90px] mb-[60px] lg:mb-[130px]">
    <h2 class="font-poppins font-bold text-[37px] md:text-[75.8px] text-[#615849] mb-[20px] lg:mb-[30px]">
      meet the TAILZ team
    </h2>

    <?php
    // Retrieve the team members group field (from free ACF).
    $team_members_group = get_field('team_members');
    $team_members = array();

    // Loop through all keys in the group; assume that keys with the prefix 'team_member_' contain member data.
    if (!empty($team_members_group) && is_array($team_members_group)) {
      foreach ($team_members_group as $key => $member) {
        // If the key starts with 'team_member_' and a member name is set, include this member.
        if (strpos($key, 'team_member_') === 0 && is_array($member) && !empty($member['name'])) {
          $team_members[] = $member;
        }
      }
    }
    ?>

    <div class="grid grid-cols-2 md:grid-cols-6 gap-8 max-w-[1200px] mx-auto">
      <?php if (!empty($team_members)) :
        foreach ($team_members as $member) : ?>
          <div class="text-center">
            <?php if (!empty($member['photo'])) :
              // Get the image URL based on the image ID
              $image_url = is_numeric($member['photo']) ?
                wp_get_attachment_image_url($member['photo'], 'full') :
                $member['photo'];
            ?>
              <img
                src="<?php echo esc_url($image_url); ?>"
                alt="<?php echo esc_attr($member['name']); ?>"
                class="w-[113px] h-[130px] rounded-[12px] mx-auto mb-4 object-cover">
            <?php endif; ?>
            <h3 class="font-poppins font-bold text-[18px] md:text-[24px] text-darkbrown uppercase">
              <?php echo esc_html($member['name']); ?>
            </h3>
            <p class="font-worksans text-[16px] md:text-[18px] text-brown">
              <?php echo esc_html($member['position']); ?>
            </p>
          </div>
      <?php endforeach;
      endif; ?>
    </div>
  </section>

  <?php get_footer(); ?>
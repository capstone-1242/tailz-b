<?php
/**
 * Template Name: About US
 * Description: The about us page for Tailz.
 *
 * @package tailz
 */
get_header();
?>

<!-- Hero Section -->
<div class="bg-[#2B3FB8] py-20">
  <div class="container mx-auto px-6 md:px-[90px]">
    <h1 class="font-poppins font-bold text-[53.75px] text-white">
      about us
    </h1>
    <p class="font-worksans text-[18px] uppercase text-white mt-4">
      Our Goals - Our Story - Our Team
    </p>
  </div>
</div>

<!-- Breadcrumb with Separator -->
<div class="relative">
  <nav class="container mx-auto px-6 md:px-[90px] py-6" aria-label="Breadcrumb">
    <ol class="flex items-center font-worksans text-[16px] text-[#47423B]">
      <li>
        <a href="<?php echo home_url(); ?>" class="font-normal hover:opacity-80 transition-opacity">
          HOME
        </a>
      </li>
      <li class="mx-2">/</li>
      <li aria-current="page">
        <span class="font-bold">ABOUT US</span>
      </li>
    </ol>
  </nav>
  
  <!-- Subtle separator -->
  <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-full h-[1px] bg-[#F3F2EC]"></div>
</div>

<!-- Our Goals Section -->
<div class="container mx-auto px-6 md:px-[90px] py-20">
  <h2 class="font-poppins font-bold text-[37px] md:text-[75.8px] text-[#615849] mb-16">
    our goals at TAILZ
  </h2>

  <div class="grid md:grid-cols-3 gap-8">
    <!-- To Care -->
    <div class="relative">
      <!-- Vertical Line -->
      <div class="absolute left-0 top-0 w-[4px] h-[179px] bg-[#2B3FB8]"></div>
      
      <div class="pl-3">
        <h3 class="font-worksans text-[28px] md:text-[42.65px] text-[#2B3FB8] mb-6">
          to care
        </h3>
        <p class="font-worksans text-[18px] md:text-[20px] text-[#47423B]">
          We create a safe, nurturing environment where every dog is treated like family - because love and compassion are at the heart of what we do.
        </p>
      </div>
    </div>

    <!-- To Be Educated -->
    <div class="relative">
      <!-- Vertical Line -->
      <div class="absolute left-0 top-0 w-[4px] h-[179px] bg-[#FEA91D]"></div>
      
      <div class="pl-3">
        <h3 class="font-worksans text-[28px] md:text-[42.65px] text-[#FEA91D] mb-6">
          to educate
        </h3>
        <p class="font-worksans text-[18px] md:text-[20px] text-[#47423B]">
          We empower pet parents with knowledge and tools to better understand, train, and support their pups at every stage of life.
        </p>
      </div>
    </div>

    <!-- To Be Accessible -->
    <div class="relative">
      <!-- Vertical Line -->
      <div class="absolute left-0 top-0 w-[4px] h-[179px] bg-[#FCD41D]"></div>
      
      <div class="pl-3">
        <h3 class="font-worksans text-[28px] md:text-[42.65px] text-[#FCD41D] mb-6">
          to be accessible
        </h3>
        <p class="font-worksans text-[18px] md:text-[20px] text-[#47423B]">
          We're here for everyone - offering flexible options, open communication, and a welcoming space that's easy to reach and easy to love.
        </p>
      </div>
    </div>
  </div>
</div>

<!-- Our Philosophy Header -->
<div class="container mx-auto px-6 md:px-[90px]">
  <h2 class="font-poppins font-bold text-[37px] text-[#2B3FB8] mb-8">
    OUR PHILOSOPHY
  </h2>
</div>

<!-- Our Philosophy Section -->
<div class="bg-[#2B3FB8] py-20">
  <div class="container mx-auto px-6 md:px-[90px]">
    <div class="space-y-6">
      <p class="font-worksans text-[16px] text-white max-w-[800px]">
        At TAILZ, we are dedicated to providing nutritious foods and fostering healthy lifestyles for both dogs and cats.
      </p>
      <p class="font-worksans text-[16px] text-white max-w-[800px]">
        Treating every pet as our own, we prioritize their overall well-being—mind, body, and emotions—through compassionate care and positive reinforcement.
      </p>
    </div>
  </div>
</div>

<!-- TAILZ's Story Section -->
<div class="relative py-20">
  <div class="container mx-auto">
    <h2 class="font-poppins font-bold text-[37px] text-[#615849] text-center mb-16">
      TAILZ's story
    </h2>

    <!-- Story Content -->
    <div class="relative">
      <!-- First Row - Circle on right -->
      <div class="relative mb-24">
        <p class="font-worksans text-[16px] leading-relaxed max-w-[400px]">
          Tailz began in 2008 as a small but <span class="text-[#2B3FB8]">mighty</span> shop with a big heart for dogs and their well-being.
        </p>
        <div class="absolute top-[-40px] right-[60px]">
          <img src="https://placehold.co/131x131" 
               alt="Tailz Shop Front" 
               class="w-[131px] h-[131px] rounded-full object-cover">
        </div>
      </div>

      <!-- Second Row - Large Circle on left -->
      <div class="relative mb-24">
        <div class="absolute left-[-80px] top-[-50px]">
          <img src="https://placehold.co/226x226" 
               alt="Happy Dogs" 
               class="w-[226px] h-[226px] rounded-full object-cover">
        </div>
        <div class="ml-[180px] max-w-[400px]">
          <p class="font-worksans text-[16px] leading-relaxed">
            From the very start, we've been <span class="text-[#2B3FB8]">passionate</span> about supporting healthy, happy lives for pups and peace of mind for their people.
          </p>
        </div>
      </div>

      <!-- Third Row - Indented text -->
      <div class="ml-[41px] mb-24 max-w-[500px]">
        <p class="font-worksans text-[16px] leading-relaxed">
          Our services focus on nurturing every dog's <span class="text-[#2B3FB8]">mind, body, and emotions</span> through play, learning, and care.
        </p>
      </div>

      <!-- Fourth and Fifth Rows - Overlapping Circles -->
      <div class="relative mb-24">
        <div class="absolute left-[-80px]">
          <!-- First circle -->
          <div class="relative">
            <img src="https://placehold.co/180x180" 
                 alt="Dog Training" 
                 class="w-[180px] h-[180px] rounded-full object-cover">
          </div>
          <!-- Second circle overlapping -->
          <div class="absolute top-[140px] left-[30px]">
            <img src="https://placehold.co/153x153" 
                 alt="Pet Food" 
                 class="w-[153px] h-[153px] rounded-full object-cover">
          </div>
        </div>
        <!-- Text for both circles -->
        <div class="ml-[140px] space-y-16">
          <p class="font-worksans text-[16px] leading-relaxed max-w-[400px]">
            We use <span class="text-[#2B3FB8]">positive reinforcement</span> techniques to build trust, confidence, and strong bonds with each pup we meet.
          </p>
          <p class="font-worksans text-[16px] leading-relaxed max-w-[400px]">
            Our shelves are stocked with <span class="text-[#2B3FB8]">high-quality</span>, delicious pet foods (many proudly Canadian-made!) and wholesome treats.
          </p>
        </div>
      </div>

      <!-- Sixth Row - Text with half circle -->
      <div class="relative mb-24 overflow-hidden">
        <div class="max-w-[400px]">
          <p class="font-worksans text-[16px] leading-relaxed mb-6">
            Whether your dog needs a <span class="text-[#2B3FB8]">fun</span> day at Daycare, a cozy overnight stay, or a refreshing Spa visit, Tailz has it covered.
          </p>
          <p class="font-worksans text-[16px] leading-relaxed">
            After years of growing with our community, we've moved into a brand-new, expanded location with more space and exciting new features.
          </p>
        </div>
        <!-- Half visible circle -->
        <div class="absolute right-[-221.5px] bottom-[-100px]">
          <img src="https://placehold.co/443x443" 
               alt="New Location" 
               class="w-[443px] h-[443px] rounded-full object-cover">
        </div>
      </div>

      <!-- Final Message -->
      <p class="font-worksans text-[16px] leading-relaxed text-center mt-24 max-w-[400px] mx-auto">
        Tailz is your one-stop destination for dog care, and we can't wait to be part of your pup's journey for years to come!
      </p>
    </div>
  </div>
</div>

<!-- Team Section -->
<div class="container mx-auto px-6 md:px-[90px] py-20">
  <h2 class="font-poppins font-bold text-[37px] md:text-[75.8px] text-[#615849] mb-16 text-center">
    meet the TAILZ team
  </h2>

  <div class="grid grid-cols-1 md:grid-cols-6 gap-8 max-w-[1200px] mx-auto">
    <!-- Jill -->
    <div class="text-center">
      <img src="https://placehold.co/113x130" 
           alt="Jill" 
           class="w-[113px] h-[130px] rounded-[12px] mx-auto mb-4 object-cover">
      <h3 class="font-poppins font-bold text-[18px] md:text-[24px] uppercase">JILL</h3>
      <p class="font-worksans text-[16px] md:text-[18px] text-[#2c2c2c]">Owner</p>
    </div>

    <!-- Megan -->
    <div class="text-center">
      <img src="https://placehold.co/113x130" 
           alt="Megan" 
           class="w-[113px] h-[130px] rounded-[12px] mx-auto mb-4 object-cover">
      <h3 class="font-poppins font-bold text-[18px] md:text-[24px] uppercase">MEGAN</h3>
      <p class="font-worksans text-[16px] md:text-[18px] text-[#2c2c2c]">Manager</p>
    </div>

    <!-- Chris -->
    <div class="text-center">
      <img src="https://placehold.co/113x130" 
           alt="Chris" 
           class="w-[113px] h-[130px] rounded-[12px] mx-auto mb-4 object-cover">
      <h3 class="font-poppins font-bold text-[18px] md:text-[24px] uppercase">CHRIS</h3>
      <p class="font-worksans text-[16px] md:text-[18px] text-[#2c2c2c]">Reception & Store</p>
    </div>

    <!-- Hana -->
    <div class="text-center">
      <img src="https://placehold.co/113x130" 
           alt="Hana" 
           class="w-[113px] h-[130px] rounded-[12px] mx-auto mb-4 object-cover">
      <h3 class="font-poppins font-bold text-[18px] md:text-[24px] uppercase">HANA</h3>
      <p class="font-worksans text-[16px] md:text-[18px] text-[#2c2c2c]">Groomer</p>
    </div>

    <!-- Laura -->
    <div class="text-center">
      <img src="https://placehold.co/113x130" 
           alt="Laura" 
           class="w-[113px] h-[130px] rounded-[12px] mx-auto mb-4 object-cover">
      <h3 class="font-poppins font-bold text-[18px] md:text-[24px] uppercase">LAURA</h3>
      <p class="font-worksans text-[16px] md:text-[18px] text-[#2c2c2c]">Canine Supervisor</p>
    </div>

    <!-- Grayson -->
    <div class="text-center">
      <img src="https://placehold.co/113x130" 
           alt="Grayson" 
           class="w-[113px] h-[130px] rounded-[12px] mx-auto mb-4 object-cover">
      <h3 class="font-poppins font-bold text-[18px] md:text-[24px] uppercase">GRAYSON</h3>
      <p class="font-worksans text-[16px] md:text-[18px] text-[#2c2c2c]">Feline Supervisor</p>
    </div>
  </div>
</div>

<?php get_footer(); ?>
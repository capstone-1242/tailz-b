<?php
/**
 * Template Name: Contact
 * Description: The contact page for Tailz
 *
 * @package tailz
 */
get_header();
?>

<!-- 
  MOBILE LAYOUT 
  (shown on screens < md)
-->
<div class="block md:hidden">
  <!-- Mobile Hero -->
  <section 
    class="relative w-full bg-center bg-cover bg-no-repeat min-h-[500px] flex items-center overflow-hidden" 
    style="background-image: url('<?php echo home_url('/wp-content/uploads/2025/03/contact-heading.webp'); ?>'); background-position: center 20%;"
    aria-labelledby="mobile-hero-title"
  >
    <!-- Dark overlay for mobile -->
    <div class="absolute inset-0 bg-black opacity-40"></div>
    
    <div class="container mx-auto px-6 md:px-[90px] py-20 relative z-10">
      <div class="max-w-[600px]">
        <h1 id="mobile-hero-title" class="font-poppins font-bold text-[52.8px] md:text-[134.6px] leading-none text-white lowercase">
          contact
        </h1>
        <p class="font-worksans font-normal text-[18px] md:text-[24px] leading-tight text-white uppercase mt-4 max-w-[400px]">
          We'll be happy to give you a paw when you need it!
        </p>
      </div>
    </div>
  </section>
</div>
<!-- end MOBILE layout -->

<!-- 
  DESKTOP LAYOUT 
  (shown on screens >= md)
-->
<div class="hidden md:block">
  <!-- Hero section with curved design -->
  <div class="curved-image-container">
    <!-- Image with curved edge -->
    <div class="curved-image" style="background-image: url('<?php echo home_url('/wp-content/uploads/2025/03/contact-heading.webp'); ?>'); background-position: center 20%;"></div>
    
    <!-- Content container -->
    <div class="container mx-auto px-6 md:px-[90px] content-container">
      <!-- Text container -->
      <div class="max-w-[910px]">
        <!-- 'contact' heading -->
        <h1 id="desktop-hero-title" class="font-poppins font-bold text-[52.8px] md:text-[134.6px] leading-none lowercase text-[#2C2C2C]">
          contact
        </h1>
        
        <!-- Subheading -->
        <p class="font-worksans font-normal text-[18px] md:text-[43.95px] font-medium leading-tight uppercase max-w-[909px] mt-[72px] text-[#2C2C2C]">
          We'll be happy to give you a paw when you need it!
        </p>
      </div>
    </div>
  </div>
</div>
<!-- end DESKTOP layout -->

<!-- Consolidated Breadcrumb Navigation - Visible on all screen sizes -->
<nav class="container mx-auto px-6 md:px-[90px] pt-4 pb-8 md:pt-6 md:pb-12" aria-label="Breadcrumb">
  <ol class="flex items-center font-worksans text-[16px] md:text-[24px] leading-none text-[#2C2C2C]" itemscope itemtype="https://schema.org/BreadcrumbList">
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a href="<?php echo home_url(); ?>" class="hover:opacity-80 transition-opacity" itemprop="item">
        <span itemprop="name">HOME</span>
      </a>
      <meta itemprop="position" content="1" />
    </li>
    <li class="mx-2">/</li>
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a href="<?php echo home_url('/services'); ?>" class="hover:opacity-80 transition-opacity" itemprop="item">
        <span itemprop="name">SERVICES</span>
      </a>
      <meta itemprop="position" content="2" />
    </li>
    <li class="mx-2">/</li>
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
      <span class="font-bold" itemprop="name">CONTACT</span>
      <meta itemprop="position" content="3" />
    </li>
  </ol>
</nav>

<!-- Mobile Content -->
<div class="block md:hidden">
  <div class="container mx-auto px-6 md:px-[90px] pt-4">
    <!-- Hours -->
    <section>
      <h2 class="font-poppins font-bold text-[37px] md:text-[75.8px] leading-none lowercase text-[#47423B]">
        hours
      </h2>
      <div class="mt-6 space-y-2 font-worksans text-[18px] md:text-[24px] leading-normal text-[#2C2C2C]">
        <p>Monday - Friday &nbsp;&nbsp;&nbsp;&nbsp; 6:30am - 6:30pm</p>
        <p>Saturday &nbsp;&nbsp;&nbsp;&nbsp; 10:00am - 5:00pm</p>
        <p>Closed Sundays and Holidays</p>
      </div>
    </section>

    <!-- Phone -->
    <section class="mt-6">
      <h2 class="font-poppins font-bold text-[37px] md:text-[75.8px] leading-none lowercase text-[#47423B]">
        phone
      </h2>
      <div class="flex items-center space-x-3 mt-6">
        <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M2.3125 10.0208C2.3125 5.76352 5.76352 2.3125 10.0208 2.3125H10.4594C10.9216 2.31258 11.3731 2.45111 11.7557 2.71024C12.1384 2.96937 12.4346 3.3372 12.6062 3.76629L14.5071 8.51771C14.7312 9.07794 14.7861 9.69163 14.6648 10.2827C14.5436 10.8738 14.2515 11.4164 13.8249 11.8431L11.453 14.2149C11.073 14.595 10.9135 15.1476 11.0692 15.6626C11.8083 18.0842 13.1313 20.2872 14.9217 22.0775C16.7121 23.8679 18.915 25.1909 21.3367 25.9301C21.8516 26.0865 22.4043 25.9262 22.7843 25.5462L25.1561 23.1743C25.5829 22.7477 26.1254 22.4557 26.7165 22.3344C27.3076 22.2131 27.9213 22.268 28.4815 22.4921L33.2337 24.393C33.6628 24.5646 34.0306 24.8609 34.2898 25.2435C34.5489 25.6261 34.6874 26.0777 34.6875 26.5398V26.9792C34.6875 31.2365 31.2365 34.6875 26.9792 34.6875H26.5938C13.4048 34.6875 2.67171 24.1718 2.32098 11.0676C2.32098 11.0638 2.31944 11.0599 2.31713 11.0576C2.31571 11.0563 2.31457 11.0548 2.31377 11.0531C2.31298 11.0513 2.31255 11.0495 2.3125 11.0476V10.0208Z" stroke="#2C2C2C" stroke-width="4" stroke-linejoin="round"/>
        </svg>
        <a href="tel:+1-780-988-0089" class="font-worksans text-[18px] leading-none text-[#2C2C2C] hover:opacity-80 transition-opacity">
          780-988-0089
        </a>
      </div>
    </section>

    <!-- Address -->
    <section class="mt-6">
      <h2 class="font-poppins font-bold text-[37px] md:text-[75.8px] leading-none lowercase text-[#47423B]">
        address
      </h2>
      <div class="mt-6 font-worksans text-[18px] md:text-[24px] leading-none text-[#2C2C2C]">
        <address class="not-italic">
          <a href="https://www.google.com/maps/place/Tailz/@53.5725,-113.5725,17z/" 
             target="_blank" 
             rel="noopener noreferrer" 
             class="hover:opacity-80 transition-opacity">
            12004 111 Ave NW, Edmonton
          </a>
        </address>
      </div>
    </section>

    <!-- Follow Us -->
    <section class="mt-6">
      <h2 class="font-poppins font-bold text-[37px] md:text-[75.8px] leading-none lowercase text-[#47423B]">
        follow us
      </h2>
      <div class="flex items-center space-x-4 mt-6">
        <!-- Social icons -->
        <a href="https://www.instagram.com/tailz" 
           class="text-[#2C2C2C] hover:text-[#555] transition-colors" 
           target="_blank" 
           rel="noopener noreferrer"
           aria-label="Visit our Instagram page">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M12 2C14.717 2 15.056 2.01 16.122 2.06C17.187 2.11 17.912 2.277 18.55 2.525C19.21 2.779 19.766 3.123 20.322 3.678C20.8305 4.1779 21.224 4.78259 21.475 5.45C21.722 6.087 21.89 6.813 21.94 7.878C21.987 8.944 22 9.283 22 12C22 14.717 21.99 15.056 21.94 16.122C21.89 17.187 21.722 17.912 21.475 18.55C21.2247 19.2178 20.8311 19.8226 20.322 20.322C19.822 20.8303 19.2173 21.2238 18.55 21.475C17.913 21.722 17.187 21.89 16.122 21.94C15.056 21.987 14.717 22 12 22C9.283 22 8.944 21.99 7.878 21.94C6.813 21.89 6.088 21.722 5.45 21.475C4.78233 21.2245 4.17753 20.8309 3.678 20.322C3.16941 19.8222 2.77593 19.2175 2.525 18.55C2.277 17.913 2.11 17.187 2.06 16.122C2.013 15.056 2 14.717 2 12C2 9.283 2.01 8.944 2.06 7.878C2.11 6.812 2.277 6.088 2.525 5.45C2.77524 4.78218 3.1688 4.17732 3.678 3.678C4.17767 3.16923 4.78243 2.77573 5.45 2.525C6.088 2.277 6.812 2.11 7.878 2.06C8.944 2.013 9.283 2 12 2ZM12 7C10.6739 7 9.40215 7.52678 8.46447 8.46447C7.52678 9.40215 7 10.6739 7 12C7 13.3261 7.52678 14.5979 8.46447 15.5355C9.40215 16.4732 10.6739 17 12 17C13.3261 17 14.5979 16.4732 15.5355 15.5355C16.4732 14.5979 17 13.3261 17 12C17 10.6739 16.4732 9.40215 15.5355 8.46447C14.5979 7.52678 13.3261 7 12 7ZM18.5 6.75C18.5 6.41848 18.3683 6.10054 18.1339 5.86612C17.8995 5.6317 17.5815 5.5 17.25 5.5C16.9185 5.5 16.6005 5.6317 16.3661 5.86612C16.1317 6.10054 16 6.41848 16 6.75C16 7.08152 16.1317 7.39946 16.3661 7.63388C16.6005 7.8683 16.9185 8 17.25 8C17.5815 8 17.8995 7.8683 18.1339 7.63388C18.3683 7.39946 18.5 7.08152 18.5 6.75ZM12 9C12.7956 9 13.5587 9.31607 14.1213 9.87868C14.6839 10.4413 15 11.2044 15 12C15 12.7956 14.6839 13.5587 14.1213 14.1213C13.5587 14.6839 12.7956 15 12 15C11.2044 15 10.4413 14.6839 9.87868 14.1213C9.31607 13.5587 9 12.7956 9 12C9 11.2044 9.31607 10.4413 9.87868 9.87868C10.4413 9.31607 11.2044 9 12 9Z" />
          </svg>
        </a>
        <a href="https://www.facebook.com/tailz" 
           class="text-[#2C2C2C] hover:text-[#555] transition-colors" 
           target="_blank" 
           rel="noopener noreferrer"
           aria-label="Visit our Facebook page">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M22 12C22 6.48 17.52 2 12 2C6.48 2 2 6.48 2 12C2 16.84 5.44 20.87 10 21.8V15H8V12H10V9.5C10 7.57 11.57 6 13.5 6H16V9H14C13.45 9 13 9.45 13 10V12H16V15H13V21.95C18.05 21.45 22 17.19 22 12Z" />
          </svg>
        </a>
        <a href="https://twitter.com/tailz" 
           class="text-[#2C2C2C] hover:text-[#555] transition-colors" 
           target="_blank" 
           rel="noopener noreferrer"
           aria-label="Visit our Twitter page">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
          </svg>
        </a>
      </div>
    </section>

    <!-- Send Us An Email -->
    <section class="mt-6">
      <h2 class="font-poppins font-bold text-[37px] md:text-[75.8px] leading-none lowercase text-[#47423B]">
        send us an email
      </h2>
      <div class="flex items-center space-x-3 mt-6">
        <a href="mailto:info@tailz.ca" class="text-[#2C2C2C] hover:text-[#555] transition-colors" aria-label="Send us an email">
          <svg width="37" height="37" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M20 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 8L12 13L4 8V6L12 11L20 6V8Z" />
          </svg>
        </a>
        <span class="font-worksans text-[18px] leading-none text-[#2C2C2C]">info@tailz.ca</span>
      </div>
    </section>

    <!-- The Form -->
    <section class="mt-6">
      <div 
        class="bg-brand-cream rounded-[20px] p-6 w-full mx-auto max-w-[500px]"
        aria-labelledby="contact-form-heading-mobile"
      >
        <div class="flex items-start justify-between mb-8">
          <h3 id="contact-form-heading-mobile" class="font-poppins font-bold text-[22px] leading-tight text-[#2C2C2C] lowercase">
            please enter in your information below
          </h3>
          <button 
            type="reset" 
            class="font-poppins text-[12px] uppercase text-[#666666] hover:text-[#444444] transition-colors"
            aria-label="Clear form"
            onclick="return confirm('Are you sure you want to clear the form?');"
          >
            CLEAR
          </button>
        </div>

        <?php
        // Form component to reduce duplication
        get_template_part('template-parts/contact-form', null, ['form_id' => 'mobile']);
        ?>
      </div>
    </section>
  </div><!-- end .container -->
</div>
<!-- end MOBILE layout -->

<!-- 
  DESKTOP LAYOUT 
  (shown on screens >= md)
-->
<div class="hidden md:block">
  <!-- Contact content section -->
  <div class="container mx-auto px-6 md:px-[90px] py-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 md:gap-8">
      <!-- Left column with hours, address, email -->
      <div>
        <!-- Hours -->
        <section class="mb-16">
          <h2 class="font-poppins font-bold text-[37px] md:text-[75.8px] leading-none lowercase text-[#47423B]">
            hours
          </h2>
          <div class="mt-6 font-worksans text-[18px] md:text-[24px] leading-tight text-[#2C2C2C] capitalize">
            <p>Monday - Friday: 6:30am - 6:30pm</p>
            <p>Saturday: 10:00am - 5:00pm</p>
            <p class="italic">Closed Sundays and Holidays</p>
          </div>
        </section>
        
        <!-- Address -->
        <section class="mb-16">
          <h2 class="font-poppins font-bold text-[37px] md:text-[75.8px] leading-none lowercase text-[#47423B]">
            address
          </h2>
          <div class="mt-6 font-worksans text-[18px] md:text-[24px] leading-none text-[#2C2C2C]">
            <address class="not-italic">
              <a href="https://www.google.com/maps/place/Tailz/@53.5725,-113.5725,17z/" 
                 target="_blank" 
                 rel="noopener noreferrer" 
                 class="hover:opacity-80 transition-opacity">
                12004 111 Ave NW, Edmonton
              </a>
            </address>
          </div>
        </section>
        
        <!-- Send us an email -->
        <section class="mb-16">
          <h2 class="font-poppins font-bold text-[37px] md:text-[75.8px] leading-none lowercase text-[#47423B]">
            send us an email
          </h2>
          <div class="flex items-center space-x-3 mt-6">
            <a href="mailto:info@tailz.ca" class="text-[#2C2C2C] hover:text-[#555] transition-colors" aria-label="Send us an email">
              <svg width="54" height="54" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M20 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 8L12 13L4 8V6L12 11L20 6V8Z" />
              </svg>
            </a>
            <span class="font-worksans text-[18px] md:text-[24px] leading-none text-[#2C2C2C]">info@tailz.ca</span>
          </div>
        </section>
        
        <!-- WP Editor Content -->
        <section class="mb-16">
          <?php
            if ( have_posts() ) :
              while ( have_posts() ) : the_post();
                the_content();
              endwhile;
            endif;
          ?>
        </section>
      </div>
      
      <!-- Right column with phone, follow us, and form -->
      <div>
        <!-- Phone -->
        <section class="mb-16">
          <h2 class="font-poppins font-bold text-[37px] md:text-[75.8px] leading-none lowercase text-[#47423B]">
            phone
          </h2>
          <div class="flex items-center space-x-4 mt-6">
            <svg width="54" height="54" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M2.3125 10.0208C2.3125 5.76352 5.76352 2.3125 10.0208 2.3125H10.4594C10.9216 2.31258 11.3731 2.45111 11.7557 2.71024C12.1384 2.96937 12.4346 3.3372 12.6062 3.76629L14.5071 8.51771C14.7312 9.07794 14.7861 9.69163 14.6648 10.2827C14.5436 10.8738 14.2515 11.4164 13.8249 11.8431L11.453 14.2149C11.073 14.595 10.9135 15.1476 11.0692 15.6626C11.8083 18.0842 13.1313 20.2872 14.9217 22.0775C16.7121 23.8679 18.915 25.1909 21.3367 25.9301C21.8516 26.0865 22.4043 25.9262 22.7843 25.5462L25.1561 23.1743C25.5829 22.7477 26.1254 22.4557 26.7165 22.3344C27.3076 22.2131 27.9213 22.268 28.4815 22.4921L33.2337 24.393C33.6628 24.5646 34.0306 24.8609 34.2898 25.2435C34.5489 25.6261 34.6874 26.0777 34.6875 26.5398V26.9792C34.6875 31.2365 31.2365 34.6875 26.9792 34.6875H26.5938C13.4048 34.6875 2.67171 24.1718 2.32098 11.0676C2.32098 11.0638 2.31944 11.0599 2.31713 11.0576C2.31571 11.0563 2.31457 11.0548 2.31377 11.0531C2.31298 11.0513 2.31255 11.0495 2.3125 11.0476V10.0208Z" stroke="#2C2C2C" stroke-width="4" stroke-linejoin="round"/>
            </svg>
            <a href="tel:+1-780-988-0089" class="font-worksans text-[18px] md:text-[24px] leading-none text-[#2C2C2C] hover:opacity-80 transition-opacity">
              780-988-0089
            </a>
          </div>
        </section>

        <!-- Follow Us -->
        <section class="mb-16">
          <h2 class="font-poppins font-bold text-[37px] md:text-[75.8px] leading-none lowercase text-[#47423B]">
            follow us
          </h2>
          <div class="flex items-center space-x-4 mt-6">
            <a href="https://www.instagram.com/tailz" 
               class="text-[#2C2C2C] hover:text-[#555] transition-colors" 
               target="_blank" 
               rel="noopener noreferrer"
               aria-label="Visit our Instagram page">
              <svg width="42" height="42" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M12 2C14.717 2 15.056 2.01 16.122 2.06C17.187 2.11 17.912 2.277 18.55 2.525C19.21 2.779 19.766 3.123 20.322 3.678C20.8305 4.1779 21.224 4.78259 21.475 5.45C21.722 6.087 21.89 6.813 21.94 7.878C21.987 8.944 22 9.283 22 12C22 14.717 21.99 15.056 21.94 16.122C21.89 17.187 21.722 17.912 21.475 18.55C21.2247 19.2178 20.8311 19.8226 20.322 20.322C19.822 20.8303 19.2173 21.2238 18.55 21.475C17.913 21.722 17.187 21.89 16.122 21.94C15.056 21.987 14.717 22 12 22C9.283 22 8.944 21.99 7.878 21.94C6.813 21.89 6.088 21.722 5.45 21.475C4.78233 21.2245 4.17753 20.8309 3.678 20.322C3.16941 19.8222 2.77593 19.2175 2.525 18.55C2.277 17.913 2.11 17.187 2.06 16.122C2.013 15.056 2 14.717 2 12C2 9.283 2.01 8.944 2.06 7.878C2.11 6.812 2.277 6.088 2.525 5.45C2.77524 4.78218 3.1688 4.17732 3.678 3.678C4.17767 3.16923 4.78243 2.77573 5.45 2.525C6.088 2.277 6.812 2.11 7.878 2.06C8.944 2.013 9.283 2 12 2ZM12 7C10.6739 7 9.40215 7.52678 8.46447 8.46447C7.52678 9.40215 7 10.6739 7 12C7 13.3261 7.52678 14.5979 8.46447 15.5355C9.40215 16.4732 10.6739 17 12 17C13.3261 17 14.5979 16.4732 15.5355 15.5355C16.4732 14.5979 17 13.3261 17 12C17 10.6739 16.4732 9.40215 15.5355 8.46447C14.5979 7.52678 13.3261 7 12 7ZM18.5 6.75C18.5 6.41848 18.3683 6.10054 18.1339 5.86612C17.8995 5.6317 17.5815 5.5 17.25 5.5C16.9185 5.5 16.6005 5.6317 16.3661 5.86612C16.1317 6.10054 16 6.41848 16 6.75C16 7.08152 16.1317 7.39946 16.3661 7.63388C16.6005 7.8683 16.9185 8 17.25 8C17.5815 8 17.8995 7.8683 18.1339 7.63388C18.3683 7.39946 18.5 7.08152 18.5 6.75ZM12 9C12.7956 9 13.5587 9.31607 14.1213 9.87868C14.6839 10.4413 15 11.2044 15 12C15 12.7956 14.6839 13.5587 14.1213 14.1213C13.5587 14.6839 12.7956 15 12 15C11.2044 15 10.4413 14.6839 9.87868 14.1213C9.31607 13.5587 9 12.7956 9 12C9 11.2044 9.31607 10.4413 9.87868 9.87868C10.4413 9.31607 11.2044 9 12 9Z" />
              </svg>
            </a>
            <a href="https://www.facebook.com/tailz" 
               class="text-[#2C2C2C] hover:text-[#555] transition-colors" 
               target="_blank" 
               rel="noopener noreferrer"
               aria-label="Visit our Facebook page">
              <svg width="42" height="42" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M22 12C22 6.48 17.52 2 12 2C6.48 2 2 6.48 2 12C2 16.84 5.44 20.87 10 21.8V15H8V12H10V9.5C10 7.57 11.57 6 13.5 6H16V9H14C13.45 9 13 9.45 13 10V12H16V15H13V21.95C18.05 21.45 22 17.19 22 12Z" />
              </svg>
            </a>
            <a href="https://twitter.com/tailz" 
               class="text-[#2C2C2C] hover:text-[#555] transition-colors" 
               target="_blank" 
               rel="noopener noreferrer"
               aria-label="Visit our Twitter page">
              <svg width="42" height="42" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
              </svg>
            </a>
          </div>
        </section>

        <!-- Desktop Form -->
        <section>
          <div class="bg-brand-cream rounded-[20px] p-6 w-full" aria-labelledby="contact-form-heading-desktop">
            <div class="flex items-start justify-between mb-8">
              <h3 id="contact-form-heading-desktop" class="font-poppins font-bold text-[22px] leading-tight text-[#2C2C2C] lowercase">
                please enter in your information below
              </h3>
              <button 
                type="reset" 
                class="font-poppins text-[12px] uppercase text-[#666666] hover:text-[#444444] transition-colors"
                aria-label="Clear form"
                onclick="return confirm('Are you sure you want to clear the form?');"
              >
                CLEAR
              </button>
            </div>
            
            <?php
            // Form component to reduce duplication
            get_template_part('template-parts/contact-form', null, ['form_id' => 'desktop']);
            ?>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>

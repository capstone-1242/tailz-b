<?php
/**
 * Template Name: Contact
 * Description: The contact page for Tailz
 *
 * @package tailz
 */
get_header();

// Banner
get_template_part('template-parts/banner');
?>

<!-- Consolidated Breadcrumb Navigation with Bar -->
<div class="relative">
  <nav class="flex flex-col mx-6 md:mx-[89px] pt-4 pb-8 md:pt-6 md:pb-12" aria-label="Breadcrumb">
    <ol class="flex items-center text-[16px] md:text-[24px] leading-none text-[#2C2C2C]" itemscope itemtype="https://schema.org/BreadcrumbList">
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="<?php echo esc_url(home_url()); ?>" class="font-poppins font-normal hover:opacity-80 transition-opacity focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#2C2C2C]" itemprop="item">
          <span itemprop="name">HOME</span>
        </a>
        <meta itemprop="position" content="1" />
      </li>
      <li class="mx-2 font-poppins" aria-hidden="true">/</li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="<?php echo esc_url(home_url('/services')); ?>" class="font-poppins font-normal hover:opacity-80 transition-opacity focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#2C2C2C]" itemprop="item">
          <span itemprop="name">SERVICES</span>
        </a>
        <meta itemprop="position" content="2" />
      </li>
      <li class="mx-2 font-poppins" aria-hidden="true">/</li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
        <span class="font-poppins font-bold" itemprop="name">CONTACT</span>
        <meta itemprop="position" content="3" />
      </li>
    </ol>
  </nav>
  
  <!-- Subtle bar under breadcrumb -->
  <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-full h-[3px] bg-[#F3F2EC]" aria-hidden="true"></div>
</div>

<!-- Main Content -->
<main id="main-content" class="mx-6 md:mx-[89px] py-10">
  <!-- Mobile Content -->
  <div class="block md:hidden">
    <!-- Hours -->
    <section class="mb-12" aria-labelledby="mobile-hours-heading">
      <h2 id="mobile-hours-heading" class="font-poppins font-bold text-[37px] text-[#47423B] lowercase mb-6">
        hours
      </h2>
      <dl class="space-y-4">
        <div class="flex items-center">
          <dt class="font-worksans text-[16px] uppercase text-[#2C2C2C] w-[160px]">MONDAY - FRIDAY</dt>
          <dd class="font-worksans text-[16px] uppercase text-[#2C2C2C]">6:30am - 6:30pm</dd>
        </div>
        <div class="flex items-center">
          <dt class="font-worksans text-[16px] uppercase text-[#2C2C2C] w-[160px]">SATURDAY</dt>
          <dd class="font-worksans text-[16px] uppercase text-[#2C2C2C]">10:00am - 5:00pm</dd>
        </div>
        <div>
          <dd class="font-worksans text-[16px] italic text-[#2C2C2C]">
            Closed Sundays and Holidays
          </dd>
        </div>
      </dl>
    </section>

    <!-- Phone -->
    <section class="mb-12" aria-labelledby="mobile-phone-heading">
      <h2 id="mobile-phone-heading" class="font-poppins font-bold text-[37px] text-[#47423B] lowercase mb-6">
        phone
      </h2>
      <div class="flex items-center gap-3">
        <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M2.3125 10.0208C2.3125 5.76352 5.76352 2.3125 10.0208 2.3125H10.4594C10.9216 2.31258 11.3731 2.45111 11.7557 2.71024C12.1384 2.96937 12.4346 3.3372 12.6062 3.76629L14.5071 8.51771C14.7312 9.07794 14.7861 9.69163 14.6648 10.2827C14.5436 10.8738 14.2515 11.4164 13.8249 11.8431L11.453 14.2149C11.073 14.595 10.9135 15.1476 11.0692 15.6626C11.8083 18.0842 13.1313 20.2872 14.9217 22.0775C16.7121 23.8679 18.915 25.1909 21.3367 25.9301C21.8516 26.0865 22.4043 25.9262 22.7843 25.5462L25.1561 23.1743C25.5829 22.7477 26.1254 22.4557 26.7165 22.3344C27.3076 22.2131 27.9213 22.268 28.4815 22.4921L33.2337 24.393C33.6628 24.5646 34.0306 24.8609 34.2898 25.2435C34.5489 25.6261 34.6874 26.0777 34.6875 26.5398V26.9792C34.6875 31.2365 31.2365 34.6875 26.9792 34.6875H26.5938C13.4048 34.6875 2.67171 24.1718 2.32098 11.0676C2.32098 11.0638 2.31944 11.0599 2.31713 11.0576C2.31571 11.0563 2.31457 11.0548 2.31377 11.0531C2.31298 11.0513 2.31255 11.0495 2.3125 11.0476V10.0208Z" stroke="#2C2C2C" stroke-width="4" stroke-linejoin="round"/>
        </svg>
        <a href="tel:+1-780-988-0089" class="font-worksans text-[18px] text-[#2C2C2C] hover:underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#2C2C2C] py-2 px-1">
          780-988-0089
        </a>
      </div>
    </section>

    <!-- Address -->
    <section class="mb-12" aria-labelledby="mobile-address-heading">
      <h2 id="mobile-address-heading" class="font-poppins font-bold text-[37px] text-[#47423B] lowercase mb-6">
        address
      </h2>
      <address class="not-italic">
        <a href="https://www.google.com/maps/place/Tailz/@53.5725,-113.5725,17z/" 
           target="_blank" 
           rel="noopener noreferrer"
           class="font-worksans text-[18px] text-[#2C2C2C] lowercase hover:underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#2C2C2C] inline-block py-2"
           aria-label="Our address: 12004 111 avenue northwest, edmonton. Opens Google Maps in a new tab.">
          12004 111 ave nw, edmonton
        </a>
      </address>
    </section>

    <!-- Social Media Icons -->
    <section class="mb-12" aria-labelledby="mobile-social-heading">
      <h2 id="mobile-social-heading" class="font-poppins font-bold text-[37px] text-[#47423B] lowercase mb-6">
        follow us
      </h2>
      <div class="flex items-center gap-6">
        <a href="https://www.instagram.com/tailz_yeg" 
           class="text-[#2C2C2C] hover:opacity-80 transition-opacity p-2 -m-2" 
           target="_blank" 
           rel="noopener noreferrer"
           aria-label="Visit our Instagram page">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M12 2C14.717 2 15.056 2.01 16.122 2.06C17.187 2.11 17.912 2.277 18.55 2.525C19.21 2.779 19.766 3.123 20.322 3.678C20.8305 4.1779 21.224 4.78259 21.475 5.45C21.722 6.087 21.89 6.813 21.94 7.878C21.987 8.944 22 9.283 22 12C22 14.717 21.99 15.056 21.94 16.122C21.89 17.187 21.722 17.912 21.475 18.55C21.2247 19.2178 20.8311 19.8226 20.322 20.322C19.822 20.8303 19.2173 21.2238 18.55 21.475C17.913 21.722 17.187 21.89 16.122 21.94C15.056 21.987 14.717 22 12 22C9.283 22 8.944 21.99 7.878 21.94C6.813 21.89 6.088 21.722 5.45 21.475C4.78233 21.2245 4.17753 20.8309 3.678 20.322C3.16941 19.8222 2.77593 19.2175 2.525 18.55C2.277 17.913 2.11 17.187 2.06 16.122C2.013 15.056 2 14.717 2 12C2 9.283 2.01 8.944 2.06 7.878C2.11 6.812 2.277 6.088 2.525 5.45C2.77524 4.78218 3.1688 4.17732 3.678 3.678C4.17767 3.16923 4.78243 2.77573 5.45 2.525C6.088 2.277 6.812 2.11 7.878 2.06C8.944 2.013 9.283 2 12 2ZM12 7C10.6739 7 9.40215 7.52678 8.46447 8.46447C7.52678 9.40215 7 10.6739 7 12C7 13.3261 7.52678 14.5979 8.46447 15.5355C9.40215 16.4732 10.6739 17 12 17C13.3261 17 14.5979 16.4732 15.5355 15.5355C16.4732 14.5979 17 13.3261 17 12C17 10.6739 16.4732 9.40215 15.5355 8.46447C14.5979 7.52678 13.3261 7 12 7ZM18.5 6.75C18.5 6.41848 18.3683 6.10054 18.1339 5.86612C17.8995 5.6317 17.5815 5.5 17.25 5.5C16.9185 5.5 16.6005 5.6317 16.3661 5.86612C16.1317 6.10054 16 6.41848 16 6.75C16 7.08152 16.1317 7.39946 16.3661 7.63388C16.6005 7.8683 16.9185 8 17.25 8C17.5815 8 17.8995 7.8683 18.1339 7.63388C18.3683 7.39946 18.5 7.08152 18.5 6.75ZM12 9C12.7956 9 13.5587 9.31607 14.1213 9.87868C14.6839 10.4413 15 11.2044 15 12C15 12.7956 14.6839 13.5587 14.1213 14.1213C13.5587 14.6839 12.7956 15 12 15C11.2044 15 10.4413 14.6839 9.87868 14.1213C9.31607 13.5587 9 12.7956 9 12C9 11.2044 9.31607 10.4413 9.87868 9.87868C10.4413 9.31607 11.2044 9 12 9Z"/>
          </svg>
        </a>
        <a href="https://www.facebook.com/Tailz_YEG" 
           class="text-[#2C2C2C] hover:opacity-80 transition-opacity p-2 -m-2" 
           target="_blank" 
           rel="noopener noreferrer"
           aria-label="Visit our Facebook page">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M22 12C22 6.48 17.52 2 12 2C6.48 2 2 6.48 2 12C2 16.84 5.44 20.87 10 21.8V15H8V12H10V9.5C10 7.57 11.57 6 13.5 6H16V9H14C13.45 9 13 9.45 13 10V12H16V15H13V21.95C18.05 21.45 22 17.19 22 12Z" />
          </svg>
        </a>
        <a href="https://x.com/tailz_yeg" 
           class="text-[#2C2C2C] hover:opacity-80 transition-opacity p-2 -m-2" 
           target="_blank" 
           rel="noopener noreferrer"
           aria-label="Visit our Twitter page">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
          </svg>
        </a>
      </div>
    </section>

    <!-- Send Us An Email -->
    <section class="mb-10" aria-labelledby="mobile-email-heading">
      <h2 id="mobile-email-heading" class="font-poppins font-bold text-[37px] text-[#47423B] lowercase mb-6">
        send us an email
      </h2>
      <div class="flex items-center">
        <svg width="37" height="37" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M20 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 8L12 13L4 8V6L12 11L20 6V8Z" />
        </svg>
        <a href="mailto:info@tailz.com" class="ml-2 font-worksans text-[18px] text-[#2C2C2C] hover:underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#2C2C2C] py-2 px-1">
          info@tailz.com
        </a>
      </div>
    </section>

    <!-- Mobile Form Section -->
    <section class="mb-8" aria-labelledby="mobile-form-heading">
      <h2 id="mobile-form-heading" class="sr-only">Contact Form</h2>
      <div class="bg-[#F3F2EC] rounded-[20px] p-5 max-w-[100%] mx-auto shadow-sm">
        <?php 
        // Pass additional parameters to the form template to optimize for mobile
        get_template_part('template-parts/contact-form', null, [
          'form_id' => 'mobile',
          'is_mobile' => true,
          'input_class' => 'text-[14px] py-2', 
          'button_class' => 'text-[16px] py-2 px-4'
        ]); 
        ?>
      </div>
    </section>
  </div>
  <!-- end MOBILE layout -->

  <!-- Desktop Layout -->
  <div class="hidden md:block">
    <div class="grid grid-cols-2 gap-x-[200px] gap-y-[100px] w-[70%]">
      <!-- Hours -->
      <section aria-labelledby="desktop-hours-heading">
        <h2 id="desktop-hours-heading" class="font-poppins font-bold text-[75.8px] text-[#47423B] lowercase mb-8">
          hours
        </h2>
        <dl class="space-y-4">
          <div class="flex justify-between items-center">
            <dt class="font-worksans text-[24px] uppercase text-[#2C2C2C]">MONDAY - FRIDAY</dt>
            <dd class="font-worksans text-[24px] uppercase text-[#2C2C2C]">6:30am - 6:30pm</dd>
          </div>
          <div class="flex justify-between items-center">
            <dt class="font-worksans text-[24px] uppercase text-[#2C2C2C]">SATURDAY</dt>
            <dd class="font-worksans text-[24px] uppercase text-[#2C2C2C]">10:00am - 5:00pm</dd>
          </div>
          <div>
            <dd class="font-worksans text-[24px] italic text-[#2C2C2C]">
              Closed Sundays and Holidays
            </dd>
          </div>
        </dl>
      </section>

      <!-- Phone -->
      <section aria-labelledby="desktop-phone-heading">
        <h2 id="desktop-phone-heading" class="font-poppins font-bold text-[75.8px] text-[#47423B] lowercase mb-8">
          phone
        </h2>
        <div class="flex items-center gap-4">
          <svg width="54" height="54" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M2.3125 10.0208C2.3125 5.76352 5.76352 2.3125 10.0208 2.3125H10.4594C10.9216 2.31258 11.3731 2.45111 11.7557 2.71024C12.1384 2.96937 12.4346 3.3372 12.6062 3.76629L14.5071 8.51771C14.7312 9.07794 14.7861 9.69163 14.6648 10.2827C14.5436 10.8738 14.2515 11.4164 13.8249 11.8431L11.453 14.2149C11.073 14.595 10.9135 15.1476 11.0692 15.6626C11.8083 18.0842 13.1313 20.2872 14.9217 22.0775C16.7121 23.8679 18.915 25.1909 21.3367 25.9301C21.8516 26.0865 22.4043 25.9262 22.7843 25.5462L25.1561 23.1743C25.5829 22.7477 26.1254 22.4557 26.7165 22.3344C27.3076 22.2131 27.9213 22.268 28.4815 22.4921L33.2337 24.393C33.6628 24.5646 34.0306 24.8609 34.2898 25.2435C34.5489 25.6261 34.6874 26.0777 34.6875 26.5398V26.9792C34.6875 31.2365 31.2365 34.6875 26.9792 34.6875H26.5938C13.4048 34.6875 2.67171 24.1718 2.32098 11.0676C2.32098 11.0638 2.31944 11.0599 2.31713 11.0576C2.31571 11.0563 2.31457 11.0548 2.31377 11.0531C2.31298 11.0513 2.31255 11.0495 2.3125 11.0476V10.0208Z" stroke="#2C2C2C" stroke-width="4" stroke-linejoin="round"/>
          </svg>
          <a href="tel:+1-780-988-0089" class="font-worksans text-[24px] text-[#2C2C2C] hover:underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#2C2C2C]">
            780-988-0089
          </a>
        </div>
      </section>

      <!-- Address -->
      <section aria-labelledby="desktop-address-heading">
        <h2 id="desktop-address-heading" class="font-poppins font-bold text-[75.8px] text-[#47423B] lowercase mb-8">
          address
        </h2>
        <address class="not-italic">
          <a href="https://www.google.com/maps/place/Tailz/@53.5725,-113.5725,17z/" 
             target="_blank" 
             rel="noopener noreferrer"
             class="font-worksans text-[24px] text-[#2C2C2C] lowercase hover:underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#2C2C2C]"
             aria-label="Our address: 12004 111 avenue northwest, edmonton. Opens Google Maps in a new tab.">
            12004 111 ave nw, edmonton
          </a>
        </address>
      </section>

      <!-- Follow Us -->
      <section aria-labelledby="desktop-social-heading">
        <h2 id="desktop-social-heading" class="font-poppins font-bold text-[75.8px] text-[#47423B] lowercase mb-8">
          follow us
        </h2>
        <div class="flex items-center gap-6">
          <a href="https://www.instagram.com/tailz_yeg" 
             class="text-[#2C2C2C] hover:opacity-80 transition-opacity" 
             target="_blank" 
             rel="noopener noreferrer"
             aria-label="Visit our Instagram page">
            <svg width="42" height="42" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M12 2C14.717 2 15.056 2.01 16.122 2.06C17.187 2.11 17.912 2.277 18.55 2.525C19.21 2.779 19.766 3.123 20.322 3.678C20.8305 4.1779 21.224 4.78259 21.475 5.45C21.722 6.087 21.89 6.813 21.94 7.878C21.987 8.944 22 9.283 22 12C22 14.717 21.99 15.056 21.94 16.122C21.89 17.187 21.722 17.912 21.475 18.55C21.2247 19.2178 20.8311 19.8226 20.322 20.322C19.822 20.8303 19.2173 21.2238 18.55 21.475C17.913 21.722 17.187 21.89 16.122 21.94C15.056 21.987 14.717 22 12 22C9.283 22 8.944 21.99 7.878 21.94C6.813 21.89 6.088 21.722 5.45 21.475C4.78233 21.2245 4.17753 20.8309 3.678 20.322C3.16941 19.8222 2.77593 19.2175 2.525 18.55C2.277 17.913 2.11 17.187 2.06 16.122C2.013 15.056 2 14.717 2 12C2 9.283 2.01 8.944 2.06 7.878C2.11 6.812 2.277 6.088 2.525 5.45C2.77524 4.78218 3.1688 4.17732 3.678 3.678C4.17767 3.16923 4.78243 2.77573 5.45 2.525C6.088 2.277 6.812 2.11 7.878 2.06C8.944 2.013 9.283 2 12 2ZM12 7C10.6739 7 9.40215 7.52678 8.46447 8.46447C7.52678 9.40215 7 10.6739 7 12C7 13.3261 7.52678 14.5979 8.46447 15.5355C9.40215 16.4732 10.6739 17 12 17C13.3261 17 14.5979 16.4732 15.5355 15.5355C16.4732 14.5979 17 13.3261 17 12C17 10.6739 16.4732 9.40215 15.5355 8.46447C14.5979 7.52678 13.3261 7 12 7ZM18.5 6.75C18.5 6.41848 18.3683 6.10054 18.1339 5.86612C17.8995 5.6317 17.5815 5.5 17.25 5.5C16.9185 5.5 16.6005 5.6317 16.3661 5.86612C16.1317 6.10054 16 6.41848 16 6.75C16 7.08152 16.1317 7.39946 16.3661 7.63388C16.6005 7.8683 16.9185 8 17.25 8C17.5815 8 17.8995 7.8683 18.1339 7.63388C18.3683 7.39946 18.5 7.08152 18.5 6.75ZM12 9C12.7956 9 13.5587 9.31607 14.1213 9.87868C14.6839 10.4413 15 11.2044 15 12C15 12.7956 14.6839 13.5587 14.1213 14.1213C13.5587 14.6839 12.7956 15 12 15C11.2044 15 10.4413 14.6839 9.87868 14.1213C9.31607 13.5587 9 12.7956 9 12C9 11.2044 9.31607 10.4413 9.87868 9.87868C10.4413 9.31607 11.2044 9 12 9Z"/>
            </svg>
          </a>
          <a href="https://www.facebook.com/Tailz_YEG" 
             class="text-[#2C2C2C] hover:text-[#555] transition-colors" 
             target="_blank" 
             rel="noopener noreferrer"
             aria-label="Visit our Facebook page">
            <svg width="42" height="42" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M22 12C22 6.48 17.52 2 12 2C6.48 2 2 6.48 2 12C2 16.84 5.44 20.87 10 21.8V15H8V12H10V9.5C10 7.57 11.57 6 13.5 6H16V9H14C13.45 9 13 9.45 13 10V12H16V15H13V21.95C18.05 21.45 22 17.19 22 12Z" />
            </svg>
          </a>
          <a href="https://x.com/tailz_yeg" 
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
    </div>

    <!-- Send Us An Email -->
    <section class="mt-16" aria-labelledby="desktop-email-heading">
      <h2 id="desktop-email-heading" class="font-poppins font-bold text-[75.8px] text-[#47423B] lowercase mb-6">
        send us an email
      </h2>
      <div class="flex items-center">
        <svg width="54" height="54" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M20 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 8L12 13L4 8V6L12 11L20 6V8Z" />
        </svg>
        <a href="mailto:info@tailz.com" class="ml-4 font-worksans text-[24px] text-[#2C2C2C] hover:underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#2C2C2C]">
          info@tailz.com
        </a>
      </div>
    </section>

    <!-- Desktop Form Section -->
    <section class="mt-16" aria-labelledby="desktop-form-heading">
      <h2 id="desktop-form-heading" class="sr-only">Contact Form</h2>
      <div class="bg-[#F3F2EC] rounded-[30px] p-8">
        <?php get_template_part('template-parts/contact-form', null, ['form_id' => 'desktop']); ?>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>
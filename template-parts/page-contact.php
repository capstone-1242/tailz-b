<?php
/**
 * Template Name: Contact
 * Description: The contact page for Tailz, with a mobile-friendly layout (stacked) and a custom desktop layout 
 *              (#F3F2EC background, absolutely-positioned image, headings, form, etc.).
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
  >
    <!-- Dark overlay for mobile -->
    <div class="absolute inset-0 bg-black opacity-40"></div>
    
    <div class="container mx-auto px-4 py-20 relative z-10">
      <div class="max-w-[600px]">
        <h1 class="font-poppins font-bold text-[53.75px] leading-[100%] text-white lowercase">
          contact
        </h1>
        <p class="font-worksans font-normal text-[18px] leading-[140%] text-white uppercase mt-4 max-w-[400px]">
          We'll be happy to give you a paw when you need it!
        </p>
      </div>
    </div>
  </section>

  <!-- Mobile Breadcrumb -->
  <nav class="container mx-auto px-4 mt-4" aria-label="Breadcrumb">
    <ol class="flex items-center font-worksans text-[16px] leading-[100%] text-[#2C2C2C]" itemscope itemtype="https://schema.org/BreadcrumbList">
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
  <div class="container mx-auto px-4 py-8">
    <!-- Hours -->
    <section>
      <h2 class="font-poppins font-bold text-[37px] leading-[100%] lowercase text-[#2C2C2C]">
        hours
      </h2>
      <div class="mt-4 space-y-2 font-worksans text-[18px] leading-[100%] text-[#2C2C2C]">
        <p>Monday - Friday &nbsp;&nbsp;&nbsp;&nbsp; 6:30am - 6:30pm</p>
        <p>Saturday &nbsp;&nbsp;&nbsp;&nbsp; 10:00am - 5:00pm</p>
        <p>Closed Sundays and Holidays</p>
      </div>
    </section>

    <!-- Phone -->
    <section class="mt-8">
      <h2 class="font-poppins font-bold text-[37px] leading-[100%] lowercase text-[#2C2C2C]">
        phone
      </h2>
      <div class="flex items-center space-x-3 mt-4">
        <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
          <path d="M33.1383 26.1155C31.075 24.0522 28.466 22.9781 25.7025 22.9781C22.9391 22.9781 20.3301 24.0522 18.2668 26.1155L16.8949 27.4874C12.5043 25.3055 8.94452 21.7457 6.76257 17.3551L8.13452 15.9832C10.1978 13.9199 11.2719 11.3109 11.2719 8.54741C11.2719 5.78392 10.1978 3.17497 8.13452 1.11169L3.84913 -3.17369C1.78585 -5.23697 -0.823098 -6.31109 -3.58659 -6.31109C-6.35008 -6.31109 -8.95903 -5.23697 -11.0223 -3.17369L-12.3943 -1.80174C-15.3488 1.15278 -16.2322 5.35824 -14.8602 9.32024C-13.0878 14.5296 -9.37624 20.2173 -3.90546 25.7336C1.56533 31.2499 7.25301 34.9615 12.4624 36.7339C13.6458 37.1435 14.829 37.3481 16.0123 37.3481C19.0761 37.3481 21.9576 36.1419 24.093 34.0057L25.465 32.6338C27.5283 30.5705 28.6024 27.9615 28.6024 25.198C28.6024 22.4346 27.5283 19.8256 25.465 17.7623L21.1796 13.4769L19.6713 14.9852L23.9567 19.2705C25.465 20.7789 26.2301 22.7333 26.2301 25.198C26.2301 27.6628 25.465 29.6172 23.9567 31.1255L22.5848 32.4975C19.487 35.5953 14.6246 36.1233 10.4489 34.5741C5.76118 32.9842 0.603372 29.5711 -4.417 24.5274C-9.43771 19.4838 -12.8508 14.326 -14.4407 9.6383C-15.581 6.09307 -14.9252 2.43741 -12.5988 -0.0890923L-11.2268 -1.46104C-9.71853 -2.96934 -7.76414 -3.7344 -5.29936 -3.7344C-2.83458 -3.7344 -0.880193 -2.96934 0.62811 -1.46104L4.9135 2.86435C6.4218 4.37265 7.18686 6.32704 7.18686 8.79182C7.18686 11.2566 6.4218 13.211 4.9135 14.7193L3.13118 16.5016L3.95514 17.7486C6.71863 23.2444 11.0631 27.5889 16.5589 30.3524L17.8059 31.1764L19.5882 29.3941C21.0965 27.8858 23.0509 27.1207 25.5157 27.1207C27.9804 27.1207 29.9348 27.8858 31.4431 29.3941L35.7285 33.6795L37.2368 32.1712L33.1383 28.0726L33.1383 26.1155Z" fill="#495139"/>
        </svg>
        <a href="tel:+1-780-988-0089" class="font-worksans text-[18px] leading-[100%] text-[#2C2C2C] hover:opacity-80 transition-opacity">
          780-988-0089
        </a>
      </div>
    </section>

    <!-- Address -->
    <section class="mt-8">
      <h2 class="font-poppins font-bold text-[37px] leading-[100%] lowercase text-[#2C2C2C]">
        address
      </h2>
      <div class="mt-4 font-worksans text-[18px] leading-[100%] text-[#2C2C2C]">
        <address class="not-italic">
          <a href="https://www.google.com/maps/search/?api=1&query=Tailz+12004+111+Ave+NW+Edmonton" 
             target="_blank" 
             rel="noopener noreferrer" 
             class="hover:opacity-80 transition-opacity">
            <p>12004 111 Ave NW, Edmonton</p>
          </a>
        </address>
      </div>
    </section>

    <!-- Follow Us -->
    <section class="mt-8">
      <h2 class="font-poppins font-bold text-[37px] leading-[100%] lowercase text-[#2C2C2C]">
        follow us
      </h2>
      <div class="flex items-center space-x-4 mt-4">
        <!-- Social icons -->
        <a href="#" class="text-[#2C2C2C] hover:text-[#555] transition-colors" aria-label="Visit our Instagram page">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
            <path d="M12 2C14.717 2 15.056 2.01 16.122 2.06C17.187 2.11 17.912 2.277 18.55 2.525C19.21 2.779 19.766 3.123 20.322 3.678C20.8305 4.1779 21.224 4.78259 21.475 5.45C21.722 6.087 21.89 6.813 21.94 7.878C21.987 8.944 22 9.283 22 12C22 14.717 21.99 15.056 21.94 16.122C21.89 17.187 21.722 17.912 21.475 18.55C21.2247 19.2178 20.8311 19.8226 20.322 20.322C19.822 20.8303 19.2173 21.2238 18.55 21.475C17.913 21.722 17.187 21.89 16.122 21.94C15.056 21.987 14.717 22 12 22C9.283 22 8.944 21.99 7.878 21.94C6.813 21.89 6.088 21.722 5.45 21.475C4.78233 21.2245 4.17753 20.8309 3.678 20.322C3.16941 19.8222 2.77593 19.2175 2.525 18.55C2.277 17.913 2.11 17.187 2.06 16.122C2.013 15.056 2 14.717 2 12C2 9.283 2.01 8.944 2.06 7.878C2.11 6.812 2.277 6.088 2.525 5.45C2.77524 4.78218 3.1688 4.17732 3.678 3.678C4.17767 3.16923 4.78243 2.77573 5.45 2.525C6.088 2.277 6.812 2.11 7.878 2.06C8.944 2.013 9.283 2 12 2ZM12 7C10.6739 7 9.40215 7.52678 8.46447 8.46447C7.52678 9.40215 7 10.6739 7 12C7 13.3261 7.52678 14.5979 8.46447 15.5355C9.40215 16.4732 10.6739 17 12 17C13.3261 17 14.5979 16.4732 15.5355 15.5355C16.4732 14.5979 17 13.3261 17 12C17 10.6739 16.4732 9.40215 15.5355 8.46447C14.5979 7.52678 13.3261 7 12 7ZM18.5 6.75C18.5 6.41848 18.3683 6.10054 18.1339 5.86612C17.8995 5.6317 17.5815 5.5 17.25 5.5C16.9185 5.5 16.6005 5.6317 16.3661 5.86612C16.1317 6.10054 16 6.41848 16 6.75C16 7.08152 16.1317 7.39946 16.3661 7.63388C16.6005 7.8683 16.9185 8 17.25 8C17.5815 8 17.8995 7.8683 18.1339 7.63388C18.3683 7.39946 18.5 7.08152 18.5 6.75ZM12 9C12.7956 9 13.5587 9.31607 14.1213 9.87868C14.6839 10.4413 15 11.2044 15 12C15 12.7956 14.6839 13.5587 14.1213 14.1213C13.5587 14.6839 12.7956 15 12 15C11.2044 15 10.4413 14.6839 9.87868 14.1213C9.31607 13.5587 9 12.7956 9 12C9 11.2044 9.31607 10.4413 9.87868 9.87868C10.4413 9.31607 11.2044 9 12 9Z" />
          </svg>
        </a>
        <a href="#" class="text-[#2C2C2C] hover:text-[#555] transition-colors" aria-label="Visit our Facebook page">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
            <path d="M22 12C22 6.48 17.52 2 12 2C6.48 2 2 6.48 2 12C2 16.84 5.44 20.87 10 21.8V15H8V12H10V9.5C10 7.57 11.57 6 13.5 6H16V9H14C13.45 9 13 9.45 13 10V12H16V15H13V21.95C18.05 21.45 22 17.19 22 12Z" />
          </svg>
        </a>
        <a href="#" class="text-[#2C2C2C] hover:text-[#555] transition-colors" aria-label="Visit our Twitter page">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
          </svg>
        </a>
      </div>
    </section>

    <!-- Send Us An Email -->
    <section class="mt-8">
      <h2 class="font-poppins font-bold text-[37px] leading-[100%] lowercase text-[#2C2C2C]">
        send us an email
      </h2>
      <div class="flex items-center space-x-3 mt-4">
        <a href="mailto:info@tailz.ca" class="text-[#2C2C2C] hover:text-[#555] transition-colors" aria-label="Send us an email">
          <svg width="37" height="37" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
            <path d="M20 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 8L12 13L4 8V6L12 11L20 6V8Z" />
          </svg>
        </a>
        <span class="font-worksans text-[18px] leading-[100%] text-[#2C2C2C]">info@tailz.ca</span>
      </div>
    </section>

    <!-- The Form -->
    <section class="mt-8">
      <div 
        class="bg-brand-cream rounded-[20px] p-6 w-full mx-auto max-w-[500px]"
        aria-labelledby="contact-form-heading-mobile"
      >
        <div class="flex items-start justify-between mb-8">
          <h3 id="contact-form-heading-mobile" class="font-poppins font-bold text-[22px] leading-[120%] text-[#2C2C2C] lowercase">
            please enter in your information below
          </h3>
          <button 
            type="reset" 
            class="font-poppins text-[14px] uppercase text-[#666666] hover:text-[#444444] transition-colors"
            aria-label="Clear form"
            onclick="return confirm('Are you sure you want to clear the form?');"
          >
            CLEAR
          </button>
        </div>

        <form action="#" class="space-y-5" novalidate>
          <!-- first name -->
          <div class="w-full">
            <label 
              for="first-name-mob" 
              class="font-poppins font-bold text-[18px] leading-[100%] text-[#2C2C2C] lowercase block mb-1.5"
            >
              first name <span class="text-[#47423B]" aria-hidden="true">*</span>
              <span class="sr-only">(required)</span>
            </label>
            <input 
              id="first-name-mob" 
              name="first-name-mob" 
              type="text"
              class="w-full bg-white border border-[#D9D9D9] rounded-[10px] h-[42px] px-4 text-[16px] focus:outline-none focus:ring-2 focus:ring-[#FEA91D] focus:border-transparent"
              required
              aria-required="true"
              autocomplete="given-name"
            />
          </div>

          <!-- last name -->
          <div class="w-full">
            <label 
              for="last-name-mob" 
              class="font-poppins font-bold text-[18px] leading-[100%] text-[#2C2C2C] lowercase block mb-1.5"
            >
              last name <span class="text-[#47423B]" aria-hidden="true">*</span>
              <span class="sr-only">(required)</span>
            </label>
            <input 
              id="last-name-mob" 
              name="last-name-mob" 
              type="text"
              class="w-full bg-white border border-[#D9D9D9] rounded-[10px] h-[42px] px-4 text-[16px] focus:outline-none focus:ring-2 focus:ring-[#FEA91D] focus:border-transparent"
              required
              aria-required="true"
              autocomplete="family-name"
            />
          </div>

          <!-- email -->
          <div class="w-full">
            <label 
              for="email-mob" 
              class="font-poppins font-bold text-[18px] leading-[100%] text-[#2C2C2C] lowercase block mb-1.5"
            >
              email <span class="text-[#47423B]" aria-hidden="true">*</span>
              <span class="sr-only">(required)</span>
            </label>
            <input 
              id="email-mob" 
              name="email-mob" 
              type="email"
              class="w-full bg-white border border-[#D9D9D9] rounded-[10px] h-[42px] px-4 text-[16px] focus:outline-none focus:ring-2 focus:ring-[#FEA91D] focus:border-transparent"
              required
              aria-required="true"
              autocomplete="email"
            />
          </div>

          <!-- separator -->
          <hr class="border-[#AAAAAA] border-[1px] w-full my-6" role="presentation" />

          <!-- subject -->
          <div class="w-full">
            <label 
              for="subject-mob" 
              class="font-poppins font-bold text-[18px] leading-[100%] text-[#2C2C2C] lowercase block mb-1.5"
            >
              subject <span class="text-[#47423B]" aria-hidden="true">*</span>
              <span class="sr-only">(required)</span>
            </label>
            <input 
              id="subject-mob" 
              name="subject-mob" 
              type="text"
              class="w-full bg-white border border-[#D9D9D9] rounded-[10px] h-[42px] px-4 text-[16px] focus:outline-none focus:ring-2 focus:ring-[#FEA91D] focus:border-transparent"
              required
              aria-required="true"
            />
          </div>

          <!-- message -->
          <div class="w-full">
            <label 
              for="message-mob" 
              class="font-poppins font-bold text-[18px] leading-[100%] text-[#2C2C2C] lowercase block mb-1.5"
            >
              message <span class="text-[#47423B]" aria-hidden="true">*</span>
              <span class="sr-only">(required)</span>
            </label>
            <textarea
              id="message-mob" 
              name="message-mob" 
              rows="6"
              class="w-full bg-white border border-[#D9D9D9] rounded-[10px] px-4 py-3 h-[200px] text-[16px] focus:outline-none focus:ring-2 focus:ring-[#FEA91D] focus:border-transparent"
              required
              aria-required="true"
            ></textarea>
          </div>

          <!-- send button -->
          <div class="pt-2">
            <button 
              type="submit" 
              class="bg-[#FEA91D] text-white font-poppins font-bold text-[14px] leading-[100%] lowercase rounded-[60px] px-4 py-1.5 hover:bg-[#FEA91D]/90 transition-colors min-w-[100px] focus:outline-none focus:ring-2 focus:ring-[#FEA91D] focus:ring-offset-2"
              aria-label="Send message"
            >
              send
            </button>
          </div>
        </form>
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
  <!-- Main content wrapper with min-height to ensure visibility -->
  <div class="min-h-screen pb-32">
    <!-- Hero section with curved design -->
    <div class="relative bg-brand-cream overflow-hidden h-[577px]">
      <!-- Image section - placed first in DOM order but with lower z-index -->
      <div class="absolute top-0 right-0 w-[45%] h-full z-0">
        <!-- SVG mask definition -->
        <svg width="0" height="0" class="absolute">
          <defs>
            <clipPath id="curve-mask" clipPathUnits="objectBoundingBox">
              <path d="M0.326 0.5C0.316 0.215 0.207 0.048 0 0H1V1H0.652C0.409 0.969 0.336 0.785 0.326 0.5Z" />
            </clipPath>
          </defs>
        </svg>
        
        <!-- Image with mask applied -->
        <div class="w-full h-full relative" style="clip-path: url(#curve-mask);">
          <div 
            class="h-full w-full bg-cover bg-center"
            style="background-image: url('<?php echo home_url('/wp-content/uploads/2025/03/contact-heading.webp'); ?>'); 
                   background-position: 30% center;"
          ></div>
        </div>
      </div>
      
      <!-- Content container - highest z-index to ensure text is visible -->
      <div class="container mx-auto px-12 py-20 relative z-20">
        <!-- Text container -->
        <div class="max-w-[600px]">
          <!-- 'contact' heading -->
          <h1 class="font-poppins font-bold text-[53.75px] xl:text-[134.65px] leading-[100%] text-[#2C2C2C] lowercase">
            contact
          </h1>
          
          <!-- Subheading -->
          <p class="font-worksans font-normal text-[18px] leading-[140%] text-[#2C2C2C] uppercase mt-4 max-w-[400px]">
            We'll be happy to give you a paw when you need it!
          </p>
        </div>
      </div>
    </div>
    
    <!-- Breadcrumb nav - Combined mobile/desktop version -->
    <div class="container mx-auto px-4 md:px-6 py-4">
      <nav aria-label="Breadcrumb">
        <ol class="flex items-center font-worksans text-[16px] md:text-lg leading-[100%] text-[#2C2C2C]" itemscope itemtype="https://schema.org/BreadcrumbList">
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
    </div>
    
    <!-- Contact content section -->
    <div class="container mx-auto px-6 py-10">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Left column with hours, address, email -->
        <div>
          <!-- Hours -->
          <section class="mb-16">
            <h2 class="font-poppins font-bold text-4xl xl:text-[75.78px] leading-[100%] lowercase text-[#47423B]">
              hours
            </h2>
            <div class="mt-6 font-worksans text-xl xl:text-2xl leading-[140%] text-[#2C2C2C] capitalize">
              <p>Monday - Friday: 6:30am - 6:30pm</p>
              <p>Saturday: 10:00am - 5:00pm</p>
              <p class="italic">Closed Sundays and Holidays</p>
            </div>
          </section>
          
          <!-- Address -->
          <section class="mb-16">
            <h2 class="font-poppins font-bold text-4xl xl:text-[75.78px] leading-[100%] lowercase text-[#47423B]">
              address
            </h2>
            <p class="mt-6 font-worksans text-xl xl:text-2xl leading-[100%] text-[#2C2C2C] lowercase">
              12004 111 Ave NW, Edmonton
            </p>
          </section>
          
          <!-- Send us an email -->
          <section class="mb-16">
            <h2 class="font-poppins font-bold text-4xl xl:text-[75.78px] leading-[100%] lowercase text-[#47423B]">
              send us an email
            </h2>
            <div class="flex items-center space-x-3 mt-6">
              <a href="mailto:info@tailz.ca" class="text-[#2C2C2C] hover:text-[#555] transition-colors" aria-label="Send us an email">
                <svg width="54" height="54" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 8L12 13L4 8V6L12 11L20 6V8Z" />
                </svg>
              </a>
              <span class="font-worksans text-xl xl:text-2xl leading-[100%] text-[#2C2C2C]">info@tailz.ca</span>
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
            <h2 class="font-poppins font-bold text-4xl xl:text-[75.78px] leading-[100%] lowercase text-[#47423B]">
              phone
            </h2>
            <div class="flex items-center space-x-4 mt-6">
              <svg width="54" height="53" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg" class="-scale-x-100">
                <path d="M33.1383 26.1155C31.075 24.0522 28.466 22.9781 25.7025 22.9781C22.9391 22.9781 20.3301 24.0522 18.2668 26.1155L16.8949 27.4874C12.5043 25.3055 8.94452 21.7457 6.76257 17.3551L8.13452 15.9832C10.1978 13.9199 11.2719 11.3109 11.2719 8.54741C11.2719 5.78392 10.1978 3.17497 8.13452 1.11169L3.84913 -3.17369C1.78585 -5.23697 -0.823098 -6.31109 -3.58659 -6.31109C-6.35008 -6.31109 -8.95903 -5.23697 -11.0223 -3.17369L-12.3943 -1.80174C-15.3488 1.15278 -16.2322 5.35824 -14.8602 9.32024C-13.0878 14.5296 -9.37624 20.2173 -3.90546 25.7336C1.56533 31.2499 7.25301 34.9615 12.4624 36.7339C13.6458 37.1435 14.829 37.3481 16.0123 37.3481C19.0761 37.3481 21.9576 36.1419 24.093 34.0057L25.465 32.6338C27.5283 30.5705 28.6024 27.9615 28.6024 25.198C28.6024 22.4346 27.5283 19.8256 25.465 17.7623L21.1796 13.4769L19.6713 14.9852L23.9567 19.2705C25.465 20.7789 26.2301 22.7333 26.2301 25.198C26.2301 27.6628 25.465 29.6172 23.9567 31.1255L22.5848 32.4975C19.487 35.5953 14.6246 36.1233 10.4489 34.5741C5.76118 32.9842 0.603372 29.5711 -4.417 24.5274C-9.43771 19.4838 -12.8508 14.326 -14.4407 9.6383C-15.581 6.09307 -14.9252 2.43741 -12.5988 -0.0890923L-11.2268 -1.46104C-9.71853 -2.96934 -7.76414 -3.7344 -5.29936 -3.7344C-2.83458 -3.7344 -0.880193 -2.96934 0.62811 -1.46104L4.9135 2.86435C6.4218 4.37265 7.18686 6.32704 7.18686 8.79182C7.18686 11.2566 6.4218 13.211 4.9135 14.7193L3.13118 16.5016L3.95514 17.7486C6.71863 23.2444 11.0631 27.5889 16.5589 30.3524L17.8059 31.1764L19.5882 29.3941C21.0965 27.8858 23.0509 27.1207 25.5157 27.1207C27.9804 27.1207 29.9348 27.8858 31.4431 29.3941L35.7285 33.6795L37.2368 32.1712L33.1383 28.0726L33.1383 26.1155Z" fill="#495139"/>
              </svg>
              <a href="tel:+1-780-988-0089" class="font-worksans text-xl xl:text-2xl leading-[100%] text-[#2C2C2C] hover:opacity-80 transition-opacity">
                780-988-0089
              </a>
            </div>
          </section>

          <!-- Follow Us -->
          <section class="mb-16">
            <h2 class="font-poppins font-bold text-4xl xl:text-[75.78px] leading-[100%] lowercase text-[#47423B]">
              follow us
            </h2>
            <div class="flex items-center space-x-4 mt-6">
              <a href="#" class="text-[#2C2C2C] hover:text-[#555] transition-colors" aria-label="Visit our Instagram page">
                <svg width="42" height="42" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 2C14.717 2 15.056 2.01 16.122 2.06C17.187 2.11 17.912 2.277 18.55 2.525C19.21 2.779 19.766 3.123 20.322 3.678C20.8305 4.1779 21.224 4.78259 21.475 5.45C21.722 6.087 21.89 6.813 21.94 7.878C21.987 8.944 22 9.283 22 12C22 14.717 21.99 15.056 21.94 16.122C21.89 17.187 21.722 17.912 21.475 18.55C21.2247 19.2178 20.8311 19.8226 20.322 20.322C19.822 20.8303 19.2173 21.2238 18.55 21.475C17.913 21.722 17.187 21.89 16.122 21.94C15.056 21.987 14.717 22 12 22C9.283 22 8.944 21.99 7.878 21.94C6.813 21.89 6.088 21.722 5.45 21.475C4.78233 21.2245 4.17753 20.8309 3.678 20.322C3.16941 19.8222 2.77593 19.2175 2.525 18.55C2.277 17.913 2.11 17.187 2.06 16.122C2.013 15.056 2 14.717 2 12C2 9.283 2.01 8.944 2.06 7.878C2.11 6.812 2.277 6.088 2.525 5.45C2.77524 4.78218 3.1688 4.17732 3.678 3.678C4.17767 3.16923 4.78243 2.77573 5.45 2.525C6.088 2.277 6.812 2.11 7.878 2.06C8.944 2.013 9.283 2 12 2ZM12 7C10.6739 7 9.40215 7.52678 8.46447 8.46447C7.52678 9.40215 7 10.6739 7 12C7 13.3261 7.52678 14.5979 8.46447 15.5355C9.40215 16.4732 10.6739 17 12 17C13.3261 17 14.5979 16.4732 15.5355 15.5355C16.4732 14.5979 17 13.3261 17 12C17 10.6739 16.4732 9.40215 15.5355 8.46447C14.5979 7.52678 13.3261 7 12 7ZM18.5 6.75C18.5 6.41848 18.3683 6.10054 18.1339 5.86612C17.8995 5.6317 17.5815 5.5 17.25 5.5C16.9185 5.5 16.6005 5.6317 16.3661 5.86612C16.1317 6.10054 16 6.41848 16 6.75C16 7.08152 16.1317 7.39946 16.3661 7.63388C16.6005 7.8683 16.9185 8 17.25 8C17.5815 8 17.8995 7.8683 18.1339 7.63388C18.3683 7.39946 18.5 7.08152 18.5 6.75ZM12 9C12.7956 9 13.5587 9.31607 14.1213 9.87868C14.6839 10.4413 15 11.2044 15 12C15 12.7956 14.6839 13.5587 14.1213 14.1213C13.5587 14.6839 12.7956 15 12 15C11.2044 15 10.4413 14.6839 9.87868 14.1213C9.31607 13.5587 9 12.7956 9 12C9 11.2044 9.31607 10.4413 9.87868 9.87868C10.4413 9.31607 11.2044 9 12 9Z" />
                </svg>
              </a>
              <a href="#" class="text-[#2C2C2C] hover:text-[#555] transition-colors" aria-label="Visit our Facebook page">
                <svg width="42" height="42" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M22 12C22 6.48 17.52 2 12 2C6.48 2 2 6.48 2 12C2 16.84 5.44 20.87 10 21.8V15H8V12H10V9.5C10 7.57 11.57 6 13.5 6H16V9H14C13.45 9 13 9.45 13 10V12H16V15H13V21.95C18.05 21.45 22 17.19 22 12Z" />
                </svg>
              </a>
              <a href="#" class="text-[#2C2C2C] hover:text-[#555] transition-colors" aria-label="Visit our Twitter page">
                <svg width="42" height="42" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                </svg>
              </a>
            </div>
          </section>

          <!-- Desktop Form -->
          <section>
            <div class="bg-brand-cream rounded-[20px] p-6 w-full" aria-labelledby="contact-form-heading-desktop">
              <div class="flex items-start justify-between mb-8">
                <h3 id="contact-form-heading-desktop" class="font-poppins font-bold text-[22px] leading-[120%] text-[#2C2C2C] lowercase">
                  please enter in your information below
                </h3>
                <button type="reset" class="font-poppins text-[14px] uppercase text-[#666666] hover:text-[#444444] transition-colors" aria-label="Clear form">
                  CLEAR
                </button>
              </div>
              <form action="#" class="space-y-5" novalidate>
                <!-- First Name & Last Name Row -->
                <div class="flex flex-col md:flex-row gap-5">
                  <div class="w-full">
                    <label for="first-name-desktop" class="font-poppins font-bold text-[18px] leading-[100%] text-[#2C2C2C] lowercase block mb-1.5">
                      first name <span class="text-[#47423B]" aria-hidden="true">*</span><span class="sr-only">(required)</span>
                    </label>
                    <input id="first-name-desktop" name="first-name-desktop" type="text" class="w-full bg-white border border-[#D9D9D9] rounded-[10px] h-[42px] px-4 text-[16px]" required aria-required="true" />
                  </div>
                  <div class="w-full">
                    <label for="last-name-desktop" class="font-poppins font-bold text-[18px] leading-[100%] text-[#2C2C2C] lowercase block mb-1.5">
                      last name <span class="text-[#47423B]" aria-hidden="true">*</span><span class="sr-only">(required)</span>
                    </label>
                    <input id="last-name-desktop" name="last-name-desktop" type="text" class="w-full bg-white border border-[#D9D9D9] rounded-[10px] h-[42px] px-4 text-[16px]" required aria-required="true" />
                  </div>
                </div>
                <!-- Email -->
                <div class="w-full">
                  <label for="email-desktop" class="font-poppins font-bold text-[18px] leading-[100%] text-[#2C2C2C] lowercase block mb-1.5">
                    email <span class="text-[#47423B]" aria-hidden="true">*</span><span class="sr-only">(required)</span>
                  </label>
                  <input id="email-desktop" name="email-desktop" type="email" class="w-full bg-white border border-[#D9D9D9] rounded-[10px] h-[42px] px-4 text-[16px]" required aria-required="true" />
                </div>
                <!-- Separator -->
                <hr class="border-[#AAAAAA] border-[1px] w-full my-6" role="presentation" />
                <!-- Subject -->
                <div class="w-full">
                  <label for="subject-desktop" class="font-poppins font-bold text-[18px] leading-[100%] text-[#2C2C2C] lowercase block mb-1.5">
                    subject <span class="text-[#47423B]" aria-hidden="true">*</span><span class="sr-only">(required)</span>
                  </label>
                  <input id="subject-desktop" name="subject-desktop" type="text" class="w-full bg-white border border-[#D9D9D9] rounded-[10px] h-[42px] px-4 text-[16px]" required aria-required="true" />
                </div>
                <!-- Message -->
                <div class="w-full">
                  <label for="message-desktop" class="font-poppins font-bold text-[18px] leading-[100%] text-[#2C2C2C] lowercase block mb-1.5">
                    message <span class="text-[#47423B]" aria-hidden="true">*</span><span class="sr-only">(required)</span>
                  </label>
                  <textarea id="message-desktop" name="message-desktop" rows="6" class="w-full bg-white border border-[#D9D9D9] rounded-[10px] px-4 py-3 h-[200px] text-[16px]" required aria-required="true"></textarea>
                </div>
                <!-- Send Button -->
                <div class="pt-2">
                  <button type="submit" class="bg-[#FEA91D] text-white font-poppins font-bold text-[14px] leading-[100%] lowercase rounded-[60px] px-4 py-1.5 hover:bg-[#FEA91D]/90 transition-colors min-w-[100px]" aria-label="Send message">
                    send
                  </button>
                </div>
              </form>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>

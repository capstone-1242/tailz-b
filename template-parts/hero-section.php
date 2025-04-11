<?php
/**
 * Hero Section Template Part
 * 
 * @param array $args {
 *     @type string $title           The main title of the page
 *     @type string $tagline         The tagline/subtitle
 *     @type string $image_url       The background image URL
 *     @type string $image_position  The background image position (default: center 20%)
 *     @type array  $breadcrumbs     Array of breadcrumb items
 * }
 */

$args = wp_parse_args($args, [
    'title' => get_the_title(),
    'tagline' => '',
    'image_url' => get_the_post_thumbnail_url(get_the_ID(), 'full'),
    'image_position' => 'center 20%',
    'breadcrumbs' => []
]);

// Mobile Hero
?>
<div class="block md:hidden">
    <section 
        class="relative w-full bg-center bg-cover bg-no-repeat min-h-[500px] flex items-center overflow-hidden" 
        style="background-image: url('<?php echo esc_url($args['image_url']); ?>'); background-position: <?php echo esc_attr($args['image_position']); ?>;"
        aria-labelledby="mobile-hero-title"
    >
        <!-- Dark overlay for mobile -->
        <div class="absolute inset-0 bg-black opacity-40"></div>
        
        <div class="container mx-auto px-6 py-20 relative z-10">
            <div class="max-w-[600px]">
                <h1 id="mobile-hero-title" class="font-poppins font-bold text-[53.75px] text-white lowercase">
                    <?php echo esc_html($args['title']); ?>
                </h1>
                <?php if ($args['tagline']) : ?>
                    <p class="font-worksans font-normal text-[18px] uppercase text-white mt-4">
                        <?php echo esc_html($args['tagline']); ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>

<!-- Desktop Hero -->
<div class="hidden md:block">
    <div class="curved-image-container">
        <div class="curved-image" style="background-image: url('<?php echo esc_url($args['image_url']); ?>'); background-position: <?php echo esc_attr($args['image_position']); ?>;"></div>
        
        <div class="container mx-auto px-6 md:px-[90px] content-container">
            <div class="max-w-[910px]">
                <h1 id="desktop-hero-title" class="font-poppins font-bold text-[134.65px] leading-none lowercase text-[#2C2C2C]">
                    <?php echo esc_html($args['title']); ?>
                </h1>
                
                <?php if ($args['tagline']) : ?>
                    <p class="font-poppins font-medium text-[43.95px] leading-tight uppercase max-w-[909px] mt-[72px] text-[#47423B]">
                        <?php echo esc_html($args['tagline']); ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- Breadcrumb Navigation -->
<?php if (!empty($args['breadcrumbs'])) : ?>
<div class="relative">
    <nav class="container mx-auto px-6 md:px-[90px] pt-4 pb-8 md:pt-6 md:pb-12" aria-label="Breadcrumb">
        <ol class="flex items-center text-[16px] md:text-[24px] leading-none text-[#2C2C2C]" itemscope itemtype="https://schema.org/BreadcrumbList">
            <?php 
            $position = 1;
            foreach ($args['breadcrumbs'] as $crumb) : 
                $is_last = $position === count($args['breadcrumbs']);
            ?>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <?php if (!$is_last) : ?>
                        <a href="<?php echo esc_url($crumb['url']); ?>" class="font-poppins font-normal hover:opacity-80 transition-opacity" itemprop="item">
                            <span itemprop="name"><?php echo esc_html($crumb['title']); ?></span>
                        </a>
                    <?php else : ?>
                        <span class="font-poppins font-bold" itemprop="name"><?php echo esc_html($crumb['title']); ?></span>
                    <?php endif; ?>
                    <meta itemprop="position" content="<?php echo $position; ?>" />
                </li>
                <?php if (!$is_last) : ?>
                    <li class="mx-2 font-poppins">/</li>
                <?php endif; ?>
            <?php 
                $position++;
            endforeach; 
            ?>
        </ol>
    </nav>
    
    <!-- Subtle bar under breadcrumb -->
    <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-full h-[3px] bg-[#F3F2EC]"></div>
</div>
<?php endif; ?> 
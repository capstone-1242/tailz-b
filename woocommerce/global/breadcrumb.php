<?php
if (! defined('ABSPATH')) {
    exit;
}

if (! empty($breadcrumb)) :
?>
    <nav class="border-b-2 border-cream pb-[20px] lg:pb-[30px]" aria-label="Breadcrumb">
        <ol class="flex flex-wrap items-center text-[14px] md:text-[16px] font-worksans text-darkbrown">
            <?php foreach ($breadcrumb as $key => $crumb) : ?>
                <li>
                    <?php if (! empty($crumb[1]) && count($breadcrumb) !== $key + 1) : ?>
                        <a href="<?php echo esc_url($crumb[1]); ?>" class="uppercase font-normal hover:opacity-80 transition-opacity">
                            <?php echo esc_html($crumb[0]); ?>
                        </a>
                    <?php else : ?>
                        <span class="uppercase font-bold">
                            <?php echo esc_html($crumb[0]); ?>
                        </span>
                    <?php endif; ?>
                </li>
                <?php if (count($breadcrumb) !== $key + 1) : ?>
                    <li class="mx-2" aria-hidden="true">/</li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ol>
    </nav>
<?php endif; ?>
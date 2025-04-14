<?php
/**
 * Template Name: Portraits
 *
 * @package Tailz
 */

get_header();

// Banner
get_template_part('template-parts/banner'); 
?>

<main id="primary" class="site-main">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-8">Portrait Packages</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service cards will be added here -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-2xl font-semibold mb-4">Basic Portrait</h2>
                <p class="text-gray-600 mb-4">Starting at $150</p>
                <ul class="list-disc list-inside mb-4">
                    <li>30-minute session</li>
                    <li>5 digital images</li>
                    <li>Basic editing</li>
                    <li>Online gallery</li>
                </ul>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-2xl font-semibold mb-4">Premium Portrait</h2>
                <p class="text-gray-600 mb-4">Starting at $250</p>
                <ul class="list-disc list-inside mb-4">
                    <li>Everything in Basic Portrait</li>
                    <li>60-minute session</li>
                    <li>10 digital images</li>
                    <li>Advanced editing</li>
                </ul>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-2xl font-semibold mb-4">Luxury Portrait</h2>
                <p class="text-gray-600 mb-4">Starting at $350</p>
                <ul class="list-disc list-inside mb-4">
                    <li>Everything in Premium Portrait</li>
                    <li>90-minute session</li>
                    <li>15 digital images</li>
                    <li>Professional prints</li>
                </ul>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>
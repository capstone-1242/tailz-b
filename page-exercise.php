<?php
/**
 * Template Name: Exercise
 *
 * @package Tailz
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-8">Exercise Services</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service cards will be added here -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-2xl font-semibold mb-4">Basic Exercise</h2>
                <p class="text-gray-600 mb-4">Starting at $25/session</p>
                <ul class="list-disc list-inside mb-4">
                    <li>30-minute walk</li>
                    <li>Basic training</li>
                    <li>Playtime</li>
                    <li>Water breaks</li>
                </ul>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-2xl font-semibold mb-4">Advanced Exercise</h2>
                <p class="text-gray-600 mb-4">Starting at $45/session</p>
                <ul class="list-disc list-inside mb-4">
                    <li>Everything in Basic Exercise</li>
                    <li>60-minute walk</li>
                    <li>Advanced training</li>
                    <li>Agility exercises</li>
                </ul>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-2xl font-semibold mb-4">Premium Exercise</h2>
                <p class="text-gray-600 mb-4">Starting at $65/session</p>
                <ul class="list-disc list-inside mb-4">
                    <li>Everything in Advanced Exercise</li>
                    <li>90-minute walk</li>
                    <li>Personalized training</li>
                    <li>Swimming session</li>
                </ul>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>

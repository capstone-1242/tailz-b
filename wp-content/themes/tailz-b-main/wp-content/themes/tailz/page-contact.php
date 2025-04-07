<?php
/**
 * Template Name: Contact
 * Description: A custom template for the Contact page.
 *
 * @package tailz
 */

get_header();
?>

<div class="container mx-auto my-8">
    <article class="flex flex-col">
        <!-- Page heading -->
        <section>
            <h1 class="uppercase font-bold">Contact</h1>
            <p class="uppercase font-bold">Tagline Here</p>
        </section>

        <!-- Contact Content -->
        <section class="my-8">
            <h2>Business Hours</h2>
            <div>
                <div>
                    <p>Sunday & Holidays</p>
                    <p>CLOSED</p>
                </div>
                <div>
                    <p>Monday - Friday</p>
                    <p>6:30AM - 7:00PM</p>
                </div>
                <div>
                    <p>Saturday</p>
                    <p>10:00AM - 6:00PM</p>
                </div>
            </div>
        </section>

        <section class="my-8">
            <h2>Address</h2>
            <div>
                <p>11204 119 St NW</p>
                <p>Edmonton, AB T5G 2X3</p>
            </div>
        </section>

        <section class="my-8">
            <h2>Social Media</h2>
            <div>
                <img src="https://placehold.co/50x50" alt="Social Media Icon">
                <img src="https://placehold.co/50x50" alt="Social Media Icon">
                <img src="https://placehold.co/50x50" alt="Social Media Icon">
            </div>
        </section>

        <section>
            <h2>Phone Number</h2>
            <div>
                <img src="https://placehold.co/50x50" alt="Phone Icon">
                <p>780-988-0089</p>
            </div>
        </section>

        <!-- Page Content -->
        <section class="page-content">
            <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                endif;
            ?>
        </section>

        <!-- Form -->
        <section class="my-8">
            <h2>Send us an email!</h2>
            <form action="#" method="post">
                <div>
                    <label for="first-name">First Name</label>
                    <input id="first-name" name="first-name" type="text" required>
                </div>

                <div>
                    <label for="last-name">Last Name</label>
                    <input id="last-name" name="last-name" type="text" required>
                </div>

                <div>
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" required>
                </div>

                <div>
                    <label for="message">Your Message</label>
                    <textarea name="message" id="message" rows="6" required></textarea>
                </div>

                <div>
                    <button type="submit">Send</button>
                </div>
            </form>
        </section>
    </article>
</div>

<?php
get_footer();
?>
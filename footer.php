
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer bg-gray-50 py-12" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>

	<div class="container mx-auto text-center text-gray-500">
		&copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?>
	</div>
	
	<!-- Footer Start -->
	<div class="mx-auto container">
		<div class="flex flex-col gap-5">

			<!-- Hours & Address -->
			<div class="flex flex-col gap-3">
				<h2 class="uppercase font-bold">Visit Us!</h2>

				<!-- Hours  -->
				<div class="flex flex-col gap-3">
					<h3 class="uppercase font-bold">Hours</h3>
					<div class="flex gap-5">
						<ul class="flex flex-col gap-2">
							<li>Sunday</li>
							<li>Monday - Friday</li>
							<li>Saturday</li>
						</ul>
						<ul class="flex flex-col gap-2">
							<li>Closed</li>
							<li>6:30am - 7:00pm</li>
							<li>10:00am - 6:00pm</li>
						</ul>
					</div>
				</div>

				<!-- Address -->
				<div class="flex flex-col gap-3">
					<h3 class="uppercase font-bold">Address</h3>
					<ul class="flex flex-col gap-3">
						<li>11204 119st NW</li>
						<li>Edmonton, AB</li>
						<li>T5G 2X3</li>
					</ul>
				</div>
			</div>

			<!-- Google Map -->
			<div class="self-center">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1922.9597619688468!2d-113.52907477517583!3d53.561621584151794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a023c6693a924b%3A0x3d62cc652cdd68b4!2s11204%20119%20St%20NW%2C%20Edmonton%2C%20AB%20T5G%202X3!5e1!3m2!1sen!2sca!4v1741293696592!5m2!1sen!2sca" width="320" height="240" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>

			<!-- Social -->
			<div class="flex gap-5">
				<img src="https://placehold.co/80x80" alt="">
				<div class="flex flex-col gap-3">
					<h3 class="uppercase font-bold">Follow Us!</h3>
					<div class="flex gap-3">
						<img src="https://placehold.co/50x50" alt="">
						<img src="https://placehold.co/50x50" alt="">
						<img src="https://placehold.co/50x50" alt="">
					</div>
				</div>
				<div class="flex flex-col gap-3">
					<h3 class="uppercase font-bold">Contact Us</h3>
					<button class="border p-3"><a href="#">Link Button</a></button>
				</div>
			</div>
		</div>

		<div class="bg-gray-400">
			<div class="flex gap-3 py-3">
				<h2 class="uppercase font-bold">2025 Tailz</h2>
				<a class="uppercase" href="#">Terms of Use</a>
				<a class="uppercase" href="#">Privacy Policy</a>
			</div>
		</div>
	</div>
</footer>

</div>






	<?php wp_footer(); ?>

</body>
</html>
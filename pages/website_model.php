<?php require "../require/header.php"; ?>

<div class="margin_two">

	<div class="visual">

                <div class="visual__item">
						<p class="visual__item__text_mobile">
							<span style="color:white;" >WEBSITE</span><br> 
							DISHONORED II
						</p>
					
						<div class="visual__item__thumbnail">
							<a href="dishonored_II.php">
								<img src="../assets/images/thumbnail_dishonored_II.jpg">

								<p style="color:white;" class="visual__item__thumbnail__text_pc"> DISHONORED II </p>
								
								<div class="visual__item__thumbnail__background"></div>
							</a>
						</div>
				</div>

				<div class="visual__item" data-aos="fade-up">
						<p class="visual__item__text_mobile">
							<span style="color:white;" >WEBSITE</span><br> 
							THE BATMAN
						</p>

						<div class="visual__item__thumbnail">
							<a href="batman.php">
								<img src="../assets/images/thumbnail_batman.jpg">

								<p style="color:white;" class="visual__item__thumbnail__text_pc"> THE BATMAN </p>
								
								<div class="visual__item__thumbnail__background"></div>
							</a>
						</div>
				</div>

	</div>

</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
 	<script src="../assets/scripts/jquery.fittext.js"></script>
	<script type="text/javascript">
        $(".visual__item__text_mobile").fitText(1.4, { minFontSize: '20px', maxFontSize: '60px' });
</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init({
			duration: 500,
			easing: 'ease-in-out',
		});
	</script>

<?php require "../require/footer.php"; ?>
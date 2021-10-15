<?php 
	$title = "Website model";
	$style = "article"; 
	require "../require/header.php"; 
?>

    <div class="menu_computer">
        <a href="../pages/home.php" id="video"> Home </a>
        <a href="../pages/visual.php" id="onFocus" class="current"> Visuals </a>
        <a href="../pages/contact.php" id="synopsis"> Contact </a>
    </div>  


	<div class="visual">

                <div class="visual__item">
						<p class="visual__item__text_mobile">
							<span style="color:white;" >WEBSITE</span><br> 
							DISHONORED II
						</p>
					
						<div class="visual__item__thumbnail">
							<a href="dishonored_II.php">
								<img src="../assets/images/thumbnail_dis.png">

								<p style="color:white;" class="visual__item__thumbnail__text_pc"> DISHONORED II </p>
								
								<div class="visual__item__thumbnail__background"></div>
							</a>
						</div>
				</div>

				<div class="visual__item">
						<p class="visual__item__text_mobile">
							<span style="color:white;" >WEBSITE</span><br> 
							THE BATMAN
						</p>

						<div class="visual__item__thumbnail">
							<a href="batman.php">
								<img src="../assets/images/thumbnail_batman.png">

								<p style="color:white;" class="visual__item__thumbnail__text_pc"> THE BATMAN </p>
								
								<div class="visual__item__thumbnail__background"></div>
							</a>
						</div>
				</div>

	</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
 	<script src="../assets/scripts/jquery.fittext.js"></script>
	<script type="text/javascript">
        $(".visual__item__text_mobile").fitText(1.4, { minFontSize: '20px', maxFontSize: '60px' }),
		$(".visual__item__thumbnail__text_pc").fitText(1.4);
</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init({
			duration: 500,
			easing: 'ease-in-out',
		});
	</script>

<?php require "../require/footer.php"; ?>
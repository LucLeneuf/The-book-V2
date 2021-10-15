<?php 
	$title = "Visuals";
	$style = "visual"; 
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
							MODEL
						</p>
					
						<div class="visual__item__thumbnail">
							<a href="website_model.php">
								<img src="../assets/images/miniabat.png">

								<p style="color:white;" class="visual__item__thumbnail__text_pc"> WEBSITE <br> MODEL </p>
								
								<div class="visual__item__thumbnail__background"></div>
							</a>
						</div>
				</div>

				<div class="visual__item">
						<p class="visual__item__text_mobile">
							<span style="color:white;" >MAGAZINE</span><br> 
							MOCKUP
						</p>

						<div class="visual__item__thumbnail">
							<a href="magazine_mockup.php">
								<img src="../assets/images/miniabook.png">

								<p style="color:white;" class="visual__item__thumbnail__text_pc"> MAGAZINE <br> MOCKUP </p>
								
								<div class="visual__item__thumbnail__background"></div>
							</a>
						</div>
				</div>

				<div class="visual__item">
						<p class="visual__item__text_mobile">
							<span style="color:white;" >DIGITAL</span><br> 
							COLORING
						</p>

						<div class="visual__item__thumbnail">
							<a href="digital_coloring.php">
								<img src="../assets/images/miniacol.png">

								<p style="color:white;" class="visual__item__thumbnail__text_pc"> DIGITAL <br> COLORING </p>
								
								<div class="visual__item__thumbnail__background"></div>
							</a>
						</div>
				</div>
				
				<div class="visual__item">
						<p class="visual__item__text_mobile">
							<span style="color:white;" >SOON</span><br> 
							W.I.P
						</p>
					
						<div class="visual__item__thumbnail">
							<a href="website_model.php">
								<img src="../assets/images/miniabat.png">

								<p style="color:white;" class="visual__item__thumbnail__text_pc"> SOON <br> W.I.P</p>
								
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

<?php require "../require/footer.php"; ?>
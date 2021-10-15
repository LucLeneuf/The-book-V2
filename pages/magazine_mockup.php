<?php 
	$title = "Magazine Mockup II";
	$style = "article"; 
	require "../require/header.php"; 
?>

    <div class="menu_computer">
        <a href="../pages/home.php" id="video"> Home </a>
        <a href="../pages/visual.php" id="onFocus" class="current"> Visuals </a>
        <a href="../pages/contact.php" id="synopsis"> Contact </a>
    </div>  



    <div class="article">

                <div class="article__text">
    	            <p class="article__text__title">MAGAZINE - THE ART OF AC VALHALLA</p>
    	
					<p class="article__text__description">
						Turning the artbook : The Art of Assassin's Creed Valhalla to a magazine. <br>
						A good way to practice typography.

					</p>
				</div>
    	
    	
				<div class="article__pc__items">
					<div data-aos="fade-up">
						<p style="margin-bottom:0.6rem;">Cover</p>
						<img id="gp" src="../assets/images/picture__magazine_cover.jpg" alt="Image magazine cover + double pages">
					</div>

					<div data-aos="fade-up">
						<p style="margin-bottom:0.6rem;">Summary</p>
						<img id="gp" src="../assets/images/picture__magazine_sommaire.jpg" alt="Image magazine full double pages">
					</div>
						
					<div data-aos="fade-up">
						<p style="margin-bottom:0.6rem;">Double pages</p>
						<img id="gp" src="../assets/images/picture__magazine_double.jpg" alt="Image magazine full double pages">
					</div>
    			</div>	

				<p class="sources">
					Download images for high resolution.<br><br>

					Arca Majora 3 by <a style="font-style: italic;"href="https://www.behance.net/pradil" target="blank">Alfredo Marco Pradil</a> - Alexana by <span style="font-style: italic; target="blank"">Mark Mora</span> - Jaapokki by <a style="font-style: italic;" href="https://mikkonuuttila.com/" target="blank">Mikko Nuuttila</a>. <br>
					Warrior illustration by <a style="font-style: italic;"href="https://www.iamag.co/the-art-of-emilis-emka/" target="blank">Emilis Emka</a>. Everything else comes from <a style="font-style: italic;" href="https://www.artstation.com/raphael-lacoste" target="blank">Raphaël Lacoste</a>.
				</p>
	</div>
	
	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="../assets/scripts/jquery.fittext.js"></script>
<script type="text/javascript">
    $(".article__pc__title, .article__mobile__title").fitText(2, { minFontSize: '16px', maxFontSize: '22px' }),
    $(".article__text__title").fitText(1.6, { minFontSize: '24px', maxFontSize: '100px' });
</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init({
            startEvent: 'DOMContentLoaded',
			duration: 500,
			easing: 'ease-in-out',
			once: false,
			disable: 'mobile',
		});
	</script>


<?php require "../require/footer.php"; ?>





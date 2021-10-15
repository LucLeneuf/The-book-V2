<?php 
    $title = "Digital Coloring";
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
                <p class="article__text__title"> DIGITAL COLORING - KUGO GINJO </p>
        
                <p class="article__text__description">
                    Coloring of the character Kugo Ginjo, from the manga Bleach. <br> 
                    Inspired by the talented <a style="font-style: italic;" href="https://www.deviantart.com/benderzz">benderZz</a> . 
                </p>
            </div>
 
            <div class="article__pc">
                <div class="article__pc__items">
                    <div>
                        <p style="margin-bottom:0.6rem;"> Definitive version </p>
                        <img src="../assets/images/picture__kugo_ginjo.jpg" alt="Index version pc">
                    </div>
                </div>
            </div>

            <div class="article__pc">
            <p class="article__pc__title"> TIMELAPSE </p>
                <div class="article__pc__items">
                    <div data-aos="fade-up">
                        <p style="margin-bottom:0.6rem;"> Click on it to see the different steps </p>
                        <img src="../assets/images/timelapse/image0.jpg" alt="Index version pc" id="image">
                    </div>
                </div>
            </div>
    	
    </div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="../assets/scripts/timelapse.js"></script>
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

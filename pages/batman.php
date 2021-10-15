<?php 
    $title = "The Batman";
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
                <p class="article__text__title"> WEBSITE - THE BATMAN </p>
        
                <p class="article__text__description">
                    Remake of the Official Website The Batman. <br> 
                    The visuals are thought mobile first and have been realized on Photoshop.
                </p>
            </div>


            <div class="article__pc">
                    <p class="article__pc__title"> COMPUTER DISPLAY </p>

                    <div class="article__pc__items">
                        <div>
                            <p style="margin-bottom:0.6rem;"> Home </p>
                            <img src="../assets/images/picture_batman__home_pc.jpg" alt="Home version pc">
                        </div>

                        <div data-aos="fade-up">
                            <p style="margin-bottom:0.6rem;"> Synopsis </p>
                            <img src="../assets/images/picture_batman__synopsis_pc.jpg" alt="Synopsis version pc">
                        </div>

                        <div data-aos="fade-up">
                            <p style="margin-bottom:0.6rem;"> Video </p>
                            <img src="../assets/images/picture_batman__video_pc.jpg" alt="Video version pc">
                        </div>
                    </div>
            </div>


            <div class="article__mobile">
                    <p class="article__mobile__title"> MOBILE DISPLAY </p>

                    <div class="article__mobile__items__group">
                        <div data-aos="fade-up">
                            <p style="margin-bottom:0.6rem;"> Home </p>
                            <img src="../assets/images/picture_batman__home_mobile.jpg" alt="Home version mobile">
                        </div>

                        <div data-aos="fade-up">
                            <p style="margin-bottom:0.6rem;"> Synopsis </p>
                            <img src="../assets/images/picture_batman__synopsis_mobile.jpg" alt="Synopsis version mobile">
                        </div>
                    </div>
                    <div class="article__mobile__items__group">
                        <div data-aos="fade-up">
                            <p style="margin-bottom:0.6rem;"> Video </p>
                            <img src="../assets/images/picture_batman__video_mobile.jpg" alt="Video version mobile">
                        </div>
                    </div>
            </div>
   

            <p class="sources">
                    Download images for high resolution.<br><br>
                    
                    Arca Majora 3 by <a style="font-style: italic;"href="https://www.behance.net/pradil" target="blank">Alfredo Marco Pradil</a> <br>
                    Illustration from the artist <a style="font-style: italic;"href="https://www.artstation.com/jsmarantz" target="blank">Jerad Marantz</a>.
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



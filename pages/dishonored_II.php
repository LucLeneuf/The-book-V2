<?php require "../require/header.php"; ?>

<div class="margin_two">

    <div class="article">

                <div class="article__text">
                    <p class="article__text__title"> WEBSITE - DISHONORED II </p>
            
                    <p class="article__text__description">
                        Design of mockup for a future site. <br> 
                        The visuals are thought mobile first and have been realized on Photoshop.
                    </p>
                </div>


    			<div class="article__pc">
                        <p class="article__pc__title"> COMPUTER DISPLAY </p>

                        <div class="article__pc__items">
                            <div>
                                <p style="margin-bottom:0.6rem;"> Home </p>
                                <img src="../assets/images/picture_dishonored_II__index_pc.jpg" alt="Index version pc">
                            </div>

                            <div>
                                <p style="margin-bottom:0.6rem;"> Contents </p>
                                <img src="../assets/images/picture_dishonored_II__sommaire_pc.jpg" alt="Sommaire version pc">
                            </div>

                            <div>
                                <p style="margin-bottom:0.6rem;"> Characters </p>
                                <img src="../assets/images/picture_dishonored_II__characters_pc.jpg" alt="Personnage version pc">
                            </div>

                            <div>
                                <p style="margin-bottom:0.6rem;"> Corvo </p>
                                <img src="../assets/images/picture_dishonored_II__corvo_attano_pc.jpg" alt="Présentation Corvo Attano version pc">
                            </div>
                        </div>
		   		</div>

			
				<div class="article__mobile">
                        <p class="article__mobile__title"> MOBILE DISPLAY </p>

                        <div class="article__mobile__items">
                            <div class="article__mobile__items__group">
                                <div>
                                    <p style="margin-bottom:0.6rem;"> Home </p>
                                    <img src="../assets/images/picture_dishonored_II__index_mobile.jpg" alt="Index version pc">
                                </div>

                                <div>
                                    <p style="margin-bottom:0.6rem;"> Contents </p>
                                    <img src="../assets/images/picture_dishonored_II__sommaire_mobile.jpg" alt="Sommaire version pc">
                                </div>
                            </div>
                            
                            <div class="article__mobile__items__group">
                                <div>
                                    <p style="margin-bottom:0.6rem;"> Characters </p>
                                    <img src="../assets/images/picture_dishonored_II__characters_mobile.jpg" alt="Personnage version pc">
                                </div>

                                <div>
                                    <p style="margin-bottom:0.6rem;"> Corvo </p>
                                    <img src="../assets/images/picture_dishonored_II__corvo_attano_mobile.jpg" alt="Présentation Corvo Attano version pc">
                                </div>
                            </div>
                        </div>
				</div>

                <p class=" gris1 info top2">
                        Download images for high resolution.<br><br>
                        Fonts used : Arca Majora 3 by Alfredo Marco Pradil / Multicolore by Neogrey Creative / Century Gothic.<br><br> 
                        Pictures used : All come from the artist Sergey Kolesov.
    		    </p>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
 	<script src="../assets/scripts/jquery.fittext.js"></script>
	<script type="text/javascript">
		$(".article__pc__title, .article__mobile__title").fitText(2, { minFontSize: '16px', maxFontSize: '22px' }),
        $(".article__text__title").fitText(1.6, { minFontSize: '24px', maxFontSize: '100px' });
</script>

<?php require "../require/footer.php"; ?>


<?php require "../require/header.php"; ?>

<div class="margin_two">

    <div class="article">

            <div class="article__text">
                <p class="article__text__title"> DIGITAL COLORING - KUGO GINJO </p>
        
                <p class="article__text__description">
                    Coloring of the character Kugo Ginjo, from the manga Bleach. <br> 
                    A lot of time spent to achieve this.
                </p>
            </div>
 
            <div class="article__pc">
                <div class="article__pc__items">
                    <div>
                        <p style="margin-bottom:0.6rem;"> Final result </p>
                        <img src="../assets/images/picture__kugo_ginjo.jpg" alt="Index version pc">
                    </div>
                </div>
            </div>

            <div class="article__pc">
                <div class="article__pc__items">
                    <div>
                        <p class="article__pc__title"> TIMELAPSE </p>
                        <img src="../assets/images/timelapse/image0.jpg" alt="Index version pc" id="image">
                    </div>
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

<?php require "../require/footer.php"; ?>

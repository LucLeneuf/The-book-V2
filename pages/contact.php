<?php 
    $title = "Contact";
    $style = "contact"; 
    require "../require/header.php"; 
?>

    <div class="menu_computer">
        <a href="../pages/home.php" id="synopsis" > Home </a>
        <a href="../pages/visual.php" id="video"> Visuals </a>
        <a href="../pages/contact.php" id="onFocus" class="current"> Contact </a>
    </div>  

    <form action="contact_handler.php" method="post">
        
            <p class="form__title"> CONTACT ME </p>

            <div class="form__field">

                    <div class="form__field__data">
                            <div class="form__field__data__name">
                                <label for="name">Name *</label>
                                <input type="text" id="name" name="name" required>
                            </div>

                            <div class="form__field__data__email">
                                <label for="email">Email *</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                    </div>
                    
                            <div class="form__field__content">
                                <label for="message">Message *</label>
                                <textarea id="content" name="message" rows="10" required></textarea>
                            </div>
            </div>

            <div class="submit_button">
                <input type="submit" name="send" value="SEND">
            </div>
            
    </form>

<?php require "../require/footer.php"; ?>
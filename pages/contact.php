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
            <p class="title_contact"> CONTACT ME </p>

            <div class="field">
                    <div class="field__info">
                        <div class="name">
                            <label for="name">Name *</label>
                            <input type="text" id="name" name="name" required>
                        </div>

                        <div class="email">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required >
                        </div>
                    </div>
                    
                    <div class="content">
                        <label for="message">Message *</label>
                        <textarea id="content" name="message"  rows="6" required></textarea>
                    </div>
            </div>

            <div class="button">
                <input type="submit" name="send" value="SEND">
            </div>
    </form>

<?php require "../require/footer.php"; ?>
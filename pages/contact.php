<?php require "../require/header.php"; ?>



    <form action="contact_handler.php" method="post">

        <p class="article__text__title big"> CONTACT ME </p>

        <div class="field">

            <div class="field__info">
                <div class="name">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="email">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required >
                </div>
            </div>
                
                <div class="content">
                    <label for="message">Message</label>
                    <textarea id="content" name="message" cols="40" rows="6" required></textarea>
                </div>
        </div>

        <input type="submit" name="send" value="Send">
        
    </form>

<?php require "../require/footer.php"; ?>
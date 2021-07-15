<?php require "../require/header.php"; ?>

    <form action="contact_handler.php" method="post">

        <div class="field">
                <div class="name">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="email">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required >
                </div>

                
                <div class="content">
                    <label for="content">Content</label>
                    <input type="textarea" id="content" name="content" required >
                </div>
        </div>

        <input type="submit" name="send">
        
    </form>

<?php require "../require/footer.php"; ?>
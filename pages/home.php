<?php 
    $title = "Home";
    $style = "Home"; 
    require "../require/header.php"; 
?>

    <div class="menu_computer">
        <a href="../pages/home.php" id="onFocus" class="current"> Home </a>
        <a href="../pages/visual.php" id="video"> Visuals </a>
        <a href="../pages/contact.php" id="synopsis"> Contact </a>
    </div>  

    <main class="home">
            <p class="home__hi">HI.</p>

            <div class="home__main_text"> 
                <p>Welcome to my book.</p> 

                <p>To briefly introduce myself, my name is Luc, I am 26 years old and I am passionate about design, typography and images.</p>

                <p>
                    You will find here the projects I worked on during my free time.<br> 
                    I hope you will enjoy my design.
                <p>
            </div>
        
            <p class="home__link"> 
                <a href="visual.php">Over here</a> 
            </p>
    </main>
    
<?php require "../require/footer.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to my book">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../assets/styles/style.css">
    <link rel="stylesheet" href="../assets/styles/<?= $style ?>.css">
    <title>Book - <?= $title ?></title>
</head>

<body>
    <div class="menu_mobile">
            <div class="menu_mobile__items" id="menu">
                <a href="../pages/home.php"> Home </a>
                <a href="../pages/contact.php"> Contact </a>
                <a href="../pages/visual.php"> Visual </a>
            </div>

            <div class="menu_mobile__button" id="button_mobile">
                <div class="menu_mobile__button__hamburger" id="hamburger"> 
                    <div></div>
                    <div></div>
                </div>
                <div class="menu_mobile__button__cross" id="cross">x</div>
            </div>
    </div>

    

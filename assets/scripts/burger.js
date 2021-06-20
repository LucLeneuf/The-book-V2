const btn = document.getElementById('button_mobile');
const btnCross = document.getElementById('cross');
const btnHamburger = document.getElementById('hamburger');
const menu = document.getElementById('menu');

btn.addEventListener("click", see);

function see(){
    menu.classList.toggle("slide");
    btnCross.classList.toggle("show");
    btnHamburger.classList.toggle("hide");
}



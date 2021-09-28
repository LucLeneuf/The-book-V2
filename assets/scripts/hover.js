const onFocus = document.getElementById('onFocus');
const synopsis = document.getElementById('synopsis');
const video = document.getElementById('video');

synopsis.addEventListener("mouseover", hoverin);
synopsis.addEventListener("mouseleave", hoverout);
video.addEventListener("mouseover", hoverin);
video.addEventListener("mouseleave", hoverout);

function hoverin(){
    onFocus.classList.toggle("current");
    console.log('hover');
}

function hoverout(){
    onFocus.classList.toggle("current");
    console.log('hoverout');
}
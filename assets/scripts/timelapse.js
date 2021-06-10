let compteur = 0;

const image0 = "../assets/images/timelapse/image0.jpg";
const image1 = "../assets/images/timelapse/image1.jpg";
const image2 = "../assets/images/timelapse/image2.jpg";
const image3 = "../assets/images/timelapse/image3.jpg";
const image4 = "../assets/images/timelapse/image4.jpg";
const image5 = "../assets/images/timelapse/image5.jpg";
const image6 = "../assets/images/timelapse/image6.jpg";
const image7 = "../assets/images/timelapse/image7.jpg";
const image8 = "../assets/images/timelapse/image8.jpg";
const image9 = "../assets/images/timelapse/image9.jpg";

document.getElementById('image').addEventListener("click", function()
{
    compteur++;
    if (compteur>9){
        compteur=0;
        document.getElementById('image').src=image0;
    }
    else if (compteur==1){
        document.getElementById('image').src=image1;
    }
    else if (compteur==2){
        document.getElementById('image').src=image2;
    }
    else if (compteur==3){
        document.getElementById('image').src=image3;
    }
    else if (compteur==4){
        document.getElementById('image').src=image4;
    }
    else if (compteur==5){
        document.getElementById('image').src=image5;
    }
    else if (compteur==6){
        document.getElementById('image').src=image6;
    }
    else if (compteur==7){
        document.getElementById('image').src=image7;
    }
    else if (compteur==8){
        document.getElementById('image').src=image8;
    }
    else if (compteur==9){
        document.getElementById('image').src=image9;
    }
});
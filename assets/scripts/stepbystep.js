
/*
    https://www.motorlegend.com/modules/breve/photos/src/voiture-de-l-annee-2021-38-modeles-en-course-21735-5.jpg

    https://static1.caroom.fr/guide/wp-content/uploads/2020/10/malus-poids-voiture.jpg

    https://img4.autodeclics.com/photo_article/88484/23462/1200-L-fai-2020-en-images.jpg


*/

let compteur = 0;

const image0 = "https://www.largus.fr/images/images/test-voiture-autonome-tesla-utac-maif-2018-11.jpg";

const image1 = "https://www.motorlegend.com/modules/breve/photos/src/voiture-de-l-annee-2021-38-modeles-en-course-21735-5.jpg";

const image2 = "https://static1.caroom.fr/guide/wp-content/uploads/2020/10/malus-poids-voiture.jpg";

const image3 = "https://img4.autodeclics.com/photo_article/88484/23462/1200-L-fai-2020-en-images.jpg";

document.getElementById('image').addEventListener("click", function(){
    compteur++;
    if (compteur>3){
        compteur=0;
        console.log("image4");
    }
    else if (compteur==1){
        console.log("image1");
        document.getElementById('image').src=image1;
    }
    else if (compteur==2){
        console.log("image2");
    }
    else if (compteur==3){
        console.log("image3");
    }
    console.log(compteur);
});
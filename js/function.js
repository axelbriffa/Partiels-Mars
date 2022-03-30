// tableau avec toutes les images
const slide = ['unsplash_E5egsk4eUQ0.png','eneko-urunuela-I2YSmEUAgDY-unsplash.jpg','anupam-mahapatra-Vz0RbclzG_w-unsplash.jpg','jared-rice-xce530fBHrk-unsplash.jpg', 's-migaj-Yui5vfKHuzs-unsplash.jpg', 'windows-ZQ-3NFtNOOc-unsplash.jpg', 'zen-bear-yoga-IVf7hm88zxY-unsplash.jpg'];
// variable pour les flèches
var num = 0;
// variable pour les ronds
var point =1;


// fonction du slider avec comme paramètre x

function slider (x){
    // ajout du fonc blanc à tous les ronds
    (document.querySelectorAll('#circle > *')).forEach((e) => {
        e.style.background = "#fff";
    });
    // ajout du paramètre x aux variables
    num += x;
    point += x;

    // si on arrive au boucle de la slide on remet la première photo, slide.length-1 est utile car le premier index de slide est 0
    if (num > slide.length -1)
        num = 0;
    // pour la gauche dès le début
    if (num <0)
        num = slide.length -1;
    // affichage de la bonne image choisie dans slide en fonction de son index determiné par num
    document.querySelector('#slider img').src = 'img/'+slide[num];

    // pour le retour à la première image au niveau des ronds qui lui n'a pas un index à 0
    if (point == 8)
        point =1;
    // indique quel rond doit être rempli en fonction de point qui indique la position
    document.querySelector('#slider #circle i:nth-child('+point+')').style.background = "#645D43";

    
}


// fonction pour lors du clic sur les ronds également changer l'image avec le paramètre x
function pointer(x) {
    // boucle pour initialiser tous les fonds des ronds
    (document.querySelectorAll('#circle > *')).forEach((e) => {
        e.style.background = "#fff";
    });

    // ajout du paramètre à des variables
    num= x;
    point = x+1;


    //ajout de la bonne image en fonction du paramètre
    document.querySelector('#slider img').src = 'img/'+slide[num];
    // ajout du bon fond au rond en fonction du paramètre; +1 car l'index ne commence pas à 0
    document.querySelector('#slider #circle i:nth-child('+point+')').style.background = "#645D43";

}




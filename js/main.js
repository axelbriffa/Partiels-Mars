// affichage du menu burger en mode responsive

// déclaration des différentes variables

// icon ouverture
var burger = document.getElementById('burger');
// icon fermeture
var close = document.getElementById('close');
//  les deux icons
var i = document.querySelectorAll('#icon i');

// boucle pour selectionner toutes les icones qui vont dans la valeur e
i.forEach((e) => {
    // au clic sur une icone déclenchement de la fonction clic
    e.onclick = function click(){
    // si lors du clic l'icone ouverture est présente
    if (burger.style.display == 'block'){

        // affichage et désactivation de certains élements
        (document.getElementById('resp')).style.display ="flex";
        (document.getElementById('close')).style.display ="block";
        (document.querySelector('main')).style.display ="none";

       
        document.getElementById('resp').animate([
            {left :'0'}
        ],{
            duration: 250,
            iterations: 1,

        });        setTimeout(document.getElementById('resp').style.left = "0", 500);

        // annimation de l'icone ouverture
        burger.animate([
            // étapes/keyframes
            { transform: 'rotate(360deg)' }
            
        ], {
            // temporisation
            duration: 250,
            iterations: 1,
        });
        // affichage d'une icone et enleve l'autre
        setTimeout(burger.style.display = "none", 250);
        setTimeout(close.style.display= "block", 500);


        // annimation de l'icone fermeture
        close.animate([
            // étapes/keyframes
            { transform: 'rotate(360deg)' }
        ], {
            // temporisation
            duration: 250,
            iterations: 1,
        });


    }   
    // si clic sur l'icone fermer
    else{
        // affichage et désactivation de certains élements
        (document.querySelector('#resp')).style.display ="none";
        (document.querySelector('#close')).style.display ="none";
        (document.querySelector('main')).style.display ="block";

        // animation de l'icone fermeture
        close.animate([
            // étapes/keyframes
            { transform: 'rotate(360deg)' }
        ], {
            // temporisation
            duration: 250,
            iterations: 1,
        });
        // activer et désactiver les icones
        setTimeout(close.style.display = "none", 250);
        setTimeout(burger.style.display= "block", 500);

        // animation de l'icone ouverture
        burger.animate([
            // étapes/keyframes
            { transform: 'rotate(360deg)' }
        ], {
            // temporisation
            duration: 250,
            iterations: 1,
        });
    }    
}
});

// affichage et desactiver la newsletter lors du clic via la fonction
const btn = document.querySelector('#button')
const news = document.querySelector('#news');

btn.addEventListener('click', ()=>{
    news.classList.toggle('display');
});
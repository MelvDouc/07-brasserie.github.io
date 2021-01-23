// [0] Variables

const paragraphesCoordFooter = document.querySelectorAll('footer #coordonnees > p');
let aujourdhui = new Date();
const jours = new Array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
const mois = new Array('janvier', 'février',  'mars',  'avril',  'mai',  'juin', 'juillet',  'août',  'septembre',  'octobre',  'novembre',  'décembre');
const horloge = document.querySelector('#horloge');
const liensNavBar = document.querySelectorAll('nav ul > li > a');
const fichiersAudio = document.querySelectorAll('audio');

// [1] Ajouter classes

let ajouterClasses = (elements, ...classesBootstrap) => {
    for(element of elements) {
        element.classList.add(...classesBootstrap)
    }
};

ajouterClasses(paragraphesCoordFooter, 'mb-1');

// [2] Afficher date et heure

document.querySelector('#date').innerHTML = `${jours[aujourdhui.getDay()-1]} ${aujourdhui.getDate()} ${mois[aujourdhui.getMonth()]} ${aujourdhui.getFullYear()}`;

let heureActuelle = setInterval(obtenirHeure, 1000);

function obtenirHeure() {
    let d = new Date();
    let heure = d.toLocaleTimeString();
    horloge.innerHTML = heure;
    if(d.getSeconds() % 2 == 0) {
        horloge.style.fontWeight = '600'
    } else {horloge.style.fontWeight = '400'}
}

// [3] Lire fichiers audio

for(let i = 0; i < liensNavBar.length; i++){
    liensNavBar[i].addEventListener('mouseover', () => {
        fichiersAudio[i].play();
    })
}
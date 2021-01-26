/**
 * Mise en place du selecteur d'image 
 * 
 * Suivant le clique ça affiche une image précise
 */

function afficher() {
    document.getElementById('image').src='src/resources/laurent/qrcode.svg';
    var qrcode = document.getElementById("btn-qrcode");
    var profil = document.getElementById("btn-profil");
    qrcode.classList.add("disable");
    profil.classList.remove("disable");
}

function effacer() {
    document.getElementById('image').src='src/resources/laurent/hero.jpg';
    var qrcode = document.getElementById("btn-qrcode");
    var profil = document.getElementById("btn-profil");
    qrcode.classList.remove("disable");
    profil.classList.add("disable");
}
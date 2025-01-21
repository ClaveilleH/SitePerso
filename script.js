// script.js
var animation = lottie.loadAnimation({
    container: document.getElementById('lottie-logo'), // ID du conteneur où l'animation sera rendue
    renderer: 'svg',
    loop: false, // Désactiver la boucle
    autoplay: false, // Désactiver l'autoplay
    path: 'icons8-menu.json' // Chemin vers votre fichier JSON
});

// Ajouter des événements de souris
var lottieLogo = document.getElementById('lottie-logo');
var isCross = false; // Variable pour suivre l'état actuel

lottieLogo.addEventListener('click', function() {
    if (isCross) {
        // Si l'état actuel est la croix, jouer l'animation pour revenir aux trois lignes
        animation.goToAndPlay(animation.totalFrames / 2, true);
        animation.addEventListener('enterFrame', function(event) {
            if (event.currentTime >= animation.totalFrames) {
                animation.goToAndStop(0, true);
                animation.removeEventListener('enterFrame');
            }
        });
        isCross = false;
    } else {
        // Si l'état actuel est les trois lignes, jouer l'animation pour aller à la croix
        animation.goToAndPlay(0, true);
        animation.addEventListener('enterFrame', function(event) {
            if (event.currentTime >= animation.totalFrames / 2) {
                animation.goToAndStop(animation.totalFrames / 2, true);
                animation.removeEventListener('enterFrame');
            }
        });
        isCross = true;
    }
});
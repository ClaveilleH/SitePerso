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

lottieLogo.addEventListener('click', function () {
    if (isCross) {
        closeSideBar();
        animation.goToAndPlay(animation.totalFrames / 2, true); // Jouer l'animation à partir de la moitié
        isCross = false;
    } else {
        animation.goToAndPlay(0, true); // Jouer l'animation à partir de la première image
        // var onEnterFrame = function (event) {
        //     if (event.currentTime >= animation.totalFrames / 2) {
        //         animation.removeEventListener('enterFrame', onEnterFrame);
        //         animation.goToAndStop(animation.totalFrames / 2, true);
        //     }
        // };
        // animation.addEventListener('enterFrame', onEnterFrame);
        animation.addEventListener("enterFrame", function () {
            if (animation.currentFrame >= animation.totalFrames / 2) {
                animation.removeEventListener("enterFrame");
                animation.goToAndStop(animation.totalFrames / 2, true);
            }
        });
        // ! ERREUR DANS LA CONSOLLE A CORRIGER
        openSideBar();
        isCross = true;
    }
});

function openSideBar() {
    document.getElementById("sidebar").style.width = "250px";
}

function closeSideBar() {
    document.getElementById("sidebar").style.width = "50px";
}
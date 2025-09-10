

window.onload = function () {
    var header = document.querySelector("header");
    var footer = document.querySelector("footer");
    var main = document.querySelector("main");
    var sidebar = document.getElementById("sidebar");
    var leftBar = document.getElementById("left-bar");


    var animation = lottie.loadAnimation({
        container: document.getElementById('lottie-logo'), // ID du conteneur où l'animation sera rendue
        renderer: 'svg',
        loop: false, // Désactiver la boucle
        autoplay: false, // Désactiver l'autoplay
        path: '../icons8-menu.json' // Chemin vers votre fichier JSON
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
            animation.addEventListener("enterFrame", function () {
                if (animation.currentFrame >= animation.totalFrames / 2) {
                    animation.removeEventListener("enterFrame");
                    animation.goToAndStop(animation.totalFrames / 2, true);
                }
            });
            openSideBar();
            isCross = true;
        }
    });

    function openSideBar() {
        // sidebar.style.whiteSpace = "normal";
        sidebar.style.width = "250px";
        leftBar.style.width = "250px"; // elle grandit trop c'est chelou
        main.style.width = "calc(99% - 250px)"; 
    }

    function closeSideBar() {
        sidebar.style.width = "50px";
        leftBar.style.width = "50px";
        main.style.width = "100%";
        // sidebar.style.whiteSpace = "nowrap";
        // main.style.marginLeft = "50px";
    }

}
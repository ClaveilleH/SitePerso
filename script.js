window.onload = function () {

    var footer = document.querySelector("footer");
    var sidebar = document.getElementById("sidebar");

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
        sidebar.style.width = "250px";
        // main.style.marginLeft = "250px";
    }

    function closeSideBar() {
        sidebar.style.width = "50px";
        // main.style.marginLeft = "50px";
    }

    function getFooterDistance() {
        var rect = footer.getBoundingClientRect();
        // console.log("Distance entre le footer et le haut de l'écran : " + rect.top + "px");
        return rect.top; // Distance entre le haut de l'écran et le footer
    }

    // Appeler la fonction au chargement de la page
    // getFooterDistance();

    function updateSidebarHeight() {
        var dist = getFooterDistance();
        sidebar.style.height = (dist-100) + "px";
        // console.log("Sidebar height updated to: " + sidebarHeight + "px");
    }

    window.addEventListener("scroll", function () {
        // updateSidebarHeight();
    });


}
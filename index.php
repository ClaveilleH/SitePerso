<!DOCTYPE html>
<?php include 'config.php'; ?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hugoat</title>
    <link rel="stylesheet" href="<?php echo BASE_URL . $mainStylePath; ?>">
    <link rel="icon" href="<?php echo BASE_URL . $faviconPath; ?>" type="image/x-icon">
    <script src="script.js"></script>
</head>
<body>
    <div id="left-bar"></div>
    <?php include 'base/header.php'; ?>
    <div id="prime-container">
        <?php include 'base/navbar.php'; ?>
        <div class="container" >
            <div id="sidebar" class="sidebar" >
                <a href="#home"> <img src="imgs/home.png"> Accueil </a>
                <a href="#about"> <img src="imgs/wip.png"> S-À propos  </a>
                <a href="#contact"> <img src="imgs/wip.png"> S-Contact</a>
            </div>
            <main>
                <div id="presentation-generale">
                    <p>
                        <h2>Bonjour, je suis Hugo CLAVEILLE.</h2>
                        Étudiant en informatique en première année de master à l’Université Côte d’Azur,
                         je suis passionné de sciences et de nouvelles technologies.
                          J’aime apprendre et maîtriser de nouveaux domaines, quels qu’ils soient,
                           les expérimenter, en comprendre les mécanismes et progresser chaque jour.
                    </p>
                    <img src="imgs/hugoat.png" alt="Hugoat Logo" id="hugoat-logo">
                </div>
                </p>

            </main>
        </div>
    </div>
    <?php include 'base/footer.php'; ?>
</body>
</html>


<!-- 

browser-sync start --proxy "http://localhost:3000" --files "./*.php, ./css/*.css, ./js/*.js"

-->
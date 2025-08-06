<?php include 'config.php'; ?>
<!DOCTYPE html>
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
                <section id="home">
                    <h2>Accueil</h2>
                    <p>Bienvenue sur la section Accueil de mon site.</p>
                </section>
                <p >
                    0 <br>
                    1 <br>
                    2 <br>
                    3 <br>
                    4 <br>
                    5 <br>
                    6 <br>
                    7 <br>
                    8 <br>
                    9 <br>
                    10 <br>
                    11 <br>
                    12 <br>     
                    13 <br>
                    14 <br>
                    15 <br>
                    16 <br>
                    17 <br>
                    18 <br>
                    19 <br>
                    20 <br>
                    21 <br>
                    22 <br>
                    23 <br>
                    24 <br>
                    25 <br>
                    26 <br>
                    27 <br>
                    28 <br>
                    29 <br>
                    30 <br>
                    31 <br>
                    32 <br>
                    33 <br>
                    34 <br>
                    35 <br>
                    36 <br>
                    37 <br>
                    38 <br>
                    39 <br>
                    40 <br>
                    41 <br>
                    42 <br>
                    43 <br>
                    44 <br>
                    45 <br>
                    46 <br>
                    47 <br>
                    48 <br>
                    49 <br>
                    50 <br>
                    51 <br>


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
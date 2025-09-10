<?php include '../config.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Randonées</title>
    <link rel="stylesheet" href="<?php echo $mainStylePath; ?>">
    <link rel="stylesheet" href="projets.css">
    <link rel="icon" href="<?php echo BASE_URL . $faviconPath; ?>" type="image/x-icon">
    <!-- <script src="../base/script.js"></script> -->
    <script src="<?php echo BASE_URL . $baseScriptPath; ?>"></script>
    
</head>
<body class="hidden">
    <div id="left-bar"></div>
    <?php include '../base/header.php'; ?>
    <div id="prime-container">
        <?php include '../base/navbar.php'; ?>
        <div class="container">
            <div id="sidebar" class="sidebar">
                
                
            </div>
            <main>
                <div id="aa" class="project-grid">
                    <div class="project-card" onclick="window.location.href='projet1.php'">
                        <img src="/imgs//projets/projSite.json" alt="image projet 1">
                        <div class="content">
                            <h3>Site perso</h3>
                            <div class="date">date</div>
                            <p class="description">Site personnel afin de faire un portfolio et de simplifier l'organisation des activitées avec mes proches</p>
                        </div>
                    </div>
                    <div class="project-card" onclick="window.location.href='projet1.php'">
                        <img src="https://placehold.co/600x400" alt="image projet 1">
                        <div class="content">
                            <h3>Compilateur MiniC vers DOT</h3>
                            <div class="date">2025</div>
                            <p class="description" >Compilateur d'un sous langage de C (MiniC) vers un graphe DOT.
                                Réalisé en C avec lex et yacc.
                                Projet académique réalisé en groupe de 2.
                            </p>
                        </div>
                    </div>
                    <div class="project-card" onclick="window.location.href='projet2.php'">
                        <img src="https://placehold.co/600x400" alt="image projet 2">
                        <div class="content">
                            <h3>Mon projet PHP 2</h3>
                            <div class="date">15/04/2024</div>
                            <p class="description">Une petite description rapide de ton projet PHP.</p>
                        </div>
                    </div>
                    <div class="project-card" onclick="window.location.href='projet3.php'">
                        <img src="https://placehold.co/600x400" alt="image projet 3">
                        <div class="content">
                            <h3>Mon projet PHP 3</h3>
                            <div class="date">15/04/2024</div>
                            <p class="description">Une petite description rapide de ton projet PHP.</p>
                        </div>
                    </div>

            </main>
        </div>
    </div>
    <?php include '../base/footer.php'; ?>
</body>
</html>
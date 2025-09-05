<?php include '../config.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Randonées</title>
    <link rel="stylesheet" href="<?php echo $mainStylePath; ?>">
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
                <a href="#home"> <img src="../imgs/wip.png"> Liste </a>
                <a href="#home"> <img src="../imgs/wip.png"> Calendrier </a>
                <a href="#home"> <img src="../imgs/wip.png"> Roles </a>
                <a href="#home"> <img src="../imgs/wip.png"> Créer </a>
            </div>
            <main>
                <section id="rando-list">
                    <h2>Panel activitées</h2>
                    <!-- Contenu à ajouter ici -->
                </section>
            </main>
        </div>
    </div>
    <?php include '../base/footer.php'; ?>
</body>
</html>
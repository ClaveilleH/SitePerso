<?php session_start(); 
include '../config.php'; 

function isMobile() {
    return preg_match('/(android|iphone|ipad|ipod|mobile)/i', $_SERVER['HTTP_USER_AGENT']);
}

if (isMobile()) {
    header('Location: ' . BASE_URL . 'mobile.php');
    exit;
}

?>
<script src="/js/captcha.js"></script>
<link rel="stylesheet" href="/styles/header.css">
<link rel="stylesheet" href="/styles/login.css">
<link rel="stylesheet" href="/styles/captcha.css">
<header>
    
    <a href="<?php echo BASE_URL; ?>">
        <img id="logo" src="<?php echo $logoPath; ?>" alt="Logo de mon site web">
    </a>
    <div id="nom">
        <h1>Hugo CLAVEILLE</h1>
    </div>
    <!-- <div id="buttons"> -->
        <!-- <?php if (isset($_SESSION['user_id'])): ?> -->
            <!-- <button id="accout_button">Mon compte</button> -->
        <!-- <?php else: ?> -->
            <!-- <button id="login_button" url="<?php echo BASE_URL . $loginPath; ?>">Connexion</button> -->
            <!-- <button id="register_button">Inscription</button> -->
        <!-- <?php endif; ?> -->
    <!-- </div> -->
    <?php if (!isset($_SESSION['user_id']) & false): ?>
        
        <div id="login-overlay" class="overlay">
            <div class="overlay-content">
                <!-- <span class="close-btn" id="close-login">&times;</span> -->
                <h2>Connexion</h2>
                <form id="login-form">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
                
                <div id="captcha" class="captcha" >
                    <input type="checkbox" id="captcha-checkbox">
                    <label for="captcha-checkbox" id="captcha-label">Im not a robot</label>
                </div>

                <button type="button" id="close-login">Fermer</button>
                <button type="submit" id="submit-login">Se connecter</button>
                </form>
                <div id="login-message"></div>
            </div>
        </div>
        <div id="captcha-overlay" class="overlay">
            <div id="captcha-overlay-content" class="overlay-content">
                <div id="zone-bleu" class="zone-bleu">
                    <div id="text">
                        <p> Selectionner les cases avec des  </p>
                        <h2>panneaux de signalisation </h2>
                        <p> si il n'y en a pas cliquer sur skip</p>
                    </div>
                </div>
                <!-- <button type="button" id="submit-captcha">Vérifier</button> -->
            </div>
        </div>  
    <?php endif; ?>
    
</header>
<script src="/js/login.js"></script>

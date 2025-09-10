<?php include_once 'config.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script>
<script src="<?php echo BASE_URL; ?>base/navbar.js"></script>
<nav id="navbar" >
    <div class="nav-content">
        <a>
            <div id="lottie-logo" ></div>
        </a>
        <ul class="nav-list">
            <li><a href="<?php echo BASE_URL;?>">Home</a></li>
            <li><a href="<?php echo BASE_URL . "projets/"; ?>">Projets</a></li>
            <li><a href="<?php echo BASE_URL . "rando/"; ?>">Randonées</a></li>
            <li><a href="<?php echo BASE_URL . "activites/"; ?>">Activitées</a></li>
            <li><a href="<?php echo BASE_URL . "activites/"; ?>">Citations&</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

        <div class="nav-images">
            <a href="https://www.instagram.com/hugo.claveille/">
                <img id="redirect-menu-icon" src="../imgs/insta.png" alt="Vers mon compte Instagram" >
            </a>
            <a href="https://github.com/ClaveilleH">
                <img id="redirect-menu-icon" src="../imgs/github.png" alt="Vers mon compte GitHub" >
            </a>
            <a href="https://www.linkedin.com/in/claveille/">
                <img id="redirect-menu-icon" src="../imgs/linkedin.png" alt="Vers mon compte Linkedin" >
            </a>
            <a href="https://www.instagram.com/hugo.claveille/">
                <img id="redirect-menu-icon" src="../imgs/youtube.png" alt="Vers mon compte Youtube" >
            </a>
            <a href="https://www.instagram.com/hugo.claveille/">
                <img id="redirect-menu-icon" src="../imgs/youtube.png" alt="Vers mon compte Youtube" >
            </a>
        </div>
    </div>
</nav>
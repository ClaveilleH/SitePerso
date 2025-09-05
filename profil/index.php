<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require '../config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php');
    exit;
}

$userId = $_SESSION['user_id'];

// Connexion DB
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($mysqli->connect_errno) {
    exit("Erreur de connexion à MySQL : " . $mysqli->connect_error);
}

// Récup info utilisateur
$sql = "SELECT u.*, r.name 
        FROM users u
        LEFT JOIN user_roles ur ON u.id = ur.user_id
        LEFT JOIN roles r ON ur.role_id = r.id
        WHERE u.id = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Récup tous les rôles dispo
$rolesResult = $mysqli->query("SELECT * FROM roles");
$roles = $rolesResult->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Mon profil</title>
    <link rel="stylesheet" href="../styles/styles.css" />
    <link rel="icon" href="<?php echo BASE_URL . $faviconPath; ?>" type="image/x-icon">

</head>
<body>
    <h1>Gestion de mon compte</h1>

    <form id="profil-form" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">

        <label>Photo de profil :</label><br>
        <?php if ($user['photo']) : ?>
        <img src="/uploads/avatars/<?= $user['photo'] ?>" width="100" alt="photo"><br>
        <?php endif; ?>
        <input type="file" name="photo"><br><br>

        <label>Login :</label>
        <input type="text" name="login" value="<?= $user['login'] ?>"><br><br>

        <label>Prénom :</label>
        <input type="text" name="prenom" value="<?= $user['prenom'] ?>"><br><br>

        <label>Nom :</label>
        <input type="text" name="nom" value="<?= $user['nom'] ?>"><br><br>

        <label>Numéro :</label>
        <input type="text" name="numero" value="<?= $user['numero'] ?>"><br><br>

        <!-- <label>Nouveau mot de passe :</label>
        <input type="password" name="password" placeholder="laisser vide pour ne pas changer"><br><br> -->
        
        <label>Rôle :</label>
        <select name="role_id">
        <?php foreach ($roles as $role) : ?>
            <option value="<?= $role['id'] ?>" <?= ($role['rolename'] == $user['rolename']) ? 'selected' : '' ?>>
            <?= htmlspecialchars($role['rolename']) ?>
            </option>
        <?php endforeach; ?>
        </select><br><br>

        <button type="button" id="change-password-btn">Changer le mot de passe</button>
        <button type="submit">Enregistrer</button>
    </form>

    <div id="message"></div>

    <script src="/js/profil.js"></script>
</body>
</html>

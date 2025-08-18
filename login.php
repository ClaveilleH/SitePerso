<?php
session_start();
header('Content-Type: application/json');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$mysqli = new mysqli('localhost', 'hugo', '8556933aa', 'site_clav');
$mysqli->set_charset('utf8mb4');
if ($mysqli->connect_errno) {
    echo json_encode([
        "success" => false,
        "message" => "Erreur de connexion à MySQL: " . $mysqli->connect_error
    ]);
    exit;   
}

$user = $_POST['username'] ?? '';
$pass = $_POST['password'] ?? '';

$sql = "SELECT * FROM users WHERE login = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $user);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user) {
    // Comparaison du mot de passe (haché)
    // if (password_verify($pass, $user['password'])) {
    if ($pass === $user['password']) { // Pour le test, on utilise une comparaison simple
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['login'] = $user['login'];

        
        echo json_encode([
            "success" => true,
            "message" => "Connexion réussie"
        ]);
    } else {
        echo json_encode([
            "success" => false,
            "message" => "Mot de passe incorrect"
        ]);
    }
} else {
    echo json_encode([
        "success" => false,
        "message" => "Login introuvable"
    ]);
}

$mysqli->close();
?>
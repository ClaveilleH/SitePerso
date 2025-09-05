<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require 'config.php';

header('Content-Type: application/json');

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'Non autorisé']);
    exit;
}

$id = intval($_POST['id'] ?? 0);
$login = $_POST['login'] ?? '';
$prenom = $_POST['prenom'] ?? '';
$nom = $_POST['nom'] ?? '';
$numero = $_POST['numero'] ?? '';
$password = $_POST['password'] ?? '';
$role_id = intval($_POST['role_id'] ?? 0);

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($mysqli->connect_errno) {
    echo json_encode(['success' => false, 'message' => 'Erreur MySQL']);
    exit;
}

// 1) Upload photo si une nouvelle image est envoyée
$photoName = null;
if (!empty($_FILES['photo']['name'])) {
    $photoName = uniqid() . '_' . basename($_FILES['photo']['name']);
    $uploadDir = __DIR__ . '/uploads/avatars/';
    move_uploaded_file($_FILES['photo']['tmp_name'], $uploadDir . $photoName);
}

// 2) Préparer la requête UPDATE utilisateur
$fields = [];
$params = [];

if ($login)   { $fields[] = 'login=?';    $params[] = $login; }
if ($prenom)  { $fields[] = 'prenom=?';   $params[] = $prenom; }
if ($nom)     { $fields[] = 'nom=?';      $params[] = $nom; }
if ($numero)  { $fields[] = 'numero=?';   $params[] = $numero; }
if ($password){ $fields[] = 'password=?'; $params[] = $password; }
if ($photoName){$fields[] = 'photo=?';     $params[] = $photoName; }

if (!empty($fields)) {
    $query = "UPDATE users SET " . implode(',', $fields) . " WHERE id=?";
    $params[] = $id;
    $types = str_repeat('s', count($params)-1) . 'i';
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param($types, ...$params);
    $stmt->execute();
}

// 3) Mettre à jour le rôle (table user_roles)
if ($role_id) {
    // supprime l'actuel
    $mysqli->query("DELETE FROM user_roles WHERE user_id=" . $id);
    // ajoute le nouveau
    $stmt2 = $mysqli->prepare("INSERT INTO user_roles (user_id, role_id) VALUES (?,?)");
    $stmt2->bind_param("ii", $id, $role_id);
    $stmt2->execute();
}

echo json_encode(['success' => true]);

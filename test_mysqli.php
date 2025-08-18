<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$mysqli = new mysqli('localhost', 'hugo', '8556933aa', 'site_clav');
$mysqli->set_charset('utf8mb4');
if ($mysqli->connect_errno) {
  die('Erreur MySQLi: ' . $mysqli->connect_error);
}
echo 'Connexion MySQLi OK';
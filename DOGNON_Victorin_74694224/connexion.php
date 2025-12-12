<?php
$host = "localhost";
$user = "root";
$pass = ""; 
$db = "app";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("Erreur connexion : " . $e->getMessage());
}
?>

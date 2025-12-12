<?php
require 'connexion.php';

if (!empty($_POST)) {
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];

    $stmt = $pdo->prepare("INSERT INTO produits (nom,dsp, prix) VALUES (?, ?, ?)");
    $stmt->execute([$nom,$description,$prix]);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ajouter un produit</title>
</head>
<body>

<h1>Ajouter un produit</h1>

<form method="POST">
    <label>Nom :</label><br>
    <input type="text" name="nom" required><br><br>
    <label>Description :</label><br>
    <input type="text" name="description" required><br><br>
    <label>Prix :</label><br>
    <input type="number" name="prix" required><br><br>

    <button type="submit">Ajouter</button>
</form>

<br>
<a href="index.php">Revenir à la liste de produit </a>
<style>
    a{
        text-decoration: none;
        color: black;
    }
    a:hover{
     color: green;
     text-shadow:0 0 20px black;
    }
    form{
        align-items: center;
    }
    input{
        border-radius: 4px;
        border: 1px solid black;
        padding: 10px 90px;
    }
    button{
        border-radius: 4px;
        border: 1px solid black;
        background: green;
        padding: 10px 40px;
    }
    h1{
    color: green;
    }
</style>
</body>
</html>

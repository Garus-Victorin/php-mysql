<?php
require 'connexion.php';

// Récupérer tous les produits
$stmt = $pdo->query("SELECT * FROM produits");
$produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liste des produits</title>
</head>
<body>

<h1>Liste des Produits</h1>

<a href="ajouter.php" class="add"> Ajouter un produit</a>
<br><br>

<center>
    <table border="1"   >
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Description</th>
        <th>Prix</th>
        <th>Action</th>
    </tr>

    <?php foreach ($produits as $p): ?>
    <tr>
        <td><?= $p['id'] ?></td>
        <td><?= $p['nom'] ?></td>
        <td><?= $p['dsp'] ?></td>
        <td><?= $p['prix'] ?> F cfa</td>
        <td>
            <a class="delete" href="supprimer.php?id=<?= $p['id'] ?>" onclick="return confirm('Supprimer ?');">
                Supprimer
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</center>
<style>
    a{
        text-decoration: none;
        color: green;
    }
    h1{
        color: green;
    }
    table{
        border-collapse:collapse;
        align-items:center;
    }
    td{
        padding: 90px;
    }
     th{
        padding: 10px;
    }
    .delete,.add{
        background:green;
        padding: 10px;
        color:black;
        border-radius:4px;
    }
</style>
</body>
</html>

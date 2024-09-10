<?php
    // Se connecter à la base de données avec PDO
    include("../connexion.php");
    
    // Récupérer la liste des utilisateurs depuis la base de données
    $query = "SELECT * FROM utilisateur";
    $result = $pdo->prepare($query);
    $result->execute();
    $utilisateurs = $result->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des utilisateurs</title>
    <!-- Inclure les fichiers CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
      
        .container {
            margin-top: 50px;
        }
        .table th {
            text-align: center;
        }
        .table .actions {
            text-align: center;
        }
        .btn {
            margin: 5px;
        }
        .text-center {
            margin-top: 20px;
            text-align: center;
        }
        /* Ajouter des animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        /* Appliquer l'animation aux éléments */
        table {
            animation: fadeIn 1s ease-in-out;
        }
        .btn {
            transition: background-color 0.3s ease-in-out;
        }
        .btn:hover {
            background-color:gray;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Liste des utilisateurs</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Username</th>
                    <th>Mail</th>
                    <th>Mot de passe</th>
                    <th>Téléphone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($utilisateurs as $utilisateur): ?>
                    <tr>
                        <td><?= $utilisateur['id_user'] ?></td>
                        <td><?= $utilisateur['Nom'] ?></td>
                        <td><?= $utilisateur['Prenom'] ?></td>
                        <td><?= $utilisateur['Username'] ?></td>
                        <td><?= $utilisateur['mail'] ?></td>
                        <td><?= $utilisateur['mdp'] ?></td>
                        <td><?= $utilisateur['tel'] ?></td>
                        <td class="actions">
                            <a href="modifier.php" class="btn btn-primary">Modifier</a>
                            <a href="supprimer.php" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="text-center">
            <a href="ajouter.php" class="btn btn-success">Ajouter</a>
        </div>
    </div>

    <!-- Inclure le fichier JavaScript de Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>

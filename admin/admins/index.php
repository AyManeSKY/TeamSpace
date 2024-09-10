<?php
    // Se connecter à la base de données avec PDO
    include("../connexion.php");
    
    // Récupérer la liste des utilisateurs depuis la base de données
    $query = "SELECT * FROM admin";
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
        <h2 class="text-center">Liste des Admins</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Mot de pass</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($utilisateurs as $utilisateur): ?>
                    <tr>
                        <td><?= $utilisateur['admin_ID'] ?></td>
                        <td><?= $utilisateur['Nom'] ?></td>
                        <td><?= $utilisateur['Prenom'] ?></td>
                        <td><?= $utilisateur['mail'] ?></td>
                        <td><?= $utilisateur['mdp'] ?></td>
                 
                        <td class="actions">
                            <a href='modifier.php?admin_ID=".$row["admin_ID"]"' class="btn btn-primary">Modifier</a>
                            <a href='supprimer.php?admin_ID=".$row["admin_ID"]"' class="btn btn-danger">Supprimer</a>
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

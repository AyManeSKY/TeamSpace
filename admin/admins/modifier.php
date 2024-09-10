<?php
// Paramètres de connexion à la base de données
include("../connexion.php");

// Informations de l'utilisateur à modifier
$admin_ID = ""; // ID de l'utilisateur à modifier
$Nom = "";
$Prenom = "";
$mail = "";
$mdp = "";

if (isset($_POST['valider'])) {
    $admin_ID = $_POST['admin_ID']; // Récupérer l'ID de l'utilisateur à partir du formulaire

    // Récupérer les autres informations de l'utilisateur à partir du formulaire
    $Nom = $_POST['Nom'];
    $Prenom = $_POST['Prenom'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    try {
        // Connexion à la base de données
        // ...

        // Préparation de la requête de mise à jour
        $sql = "UPDATE admin SET Nom=:Nom, Prenom=:Prenom, mail=:mail, mdp=:mdp WHERE admin_ID=:admin_ID";

        $stmt = $pdo->prepare($sql);

        // Exécution de la requête de mise à jour
        $stmt->bindParam(':Nom', $Nom);
        $stmt->bindParam(':Prenom', $Prenom);
        $stmt->bindParam(':mail', $mail);
        $stmt->bindParam(':mdp', $mdp);
        $stmt->bindParam(':admin_ID', $admin_ID);

        $stmt->execute();

        echo "Les informations de l'admin ont été mises à jour avec succès.";

        // Redirection vers la page d'accueil
        header("Location: index.php");
        exit();
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }

    // Fermeture de la connexion à la base de données
    $pdo = null;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ajout des fichiers CSS de Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/bootstrap-icons.min.css">
    <title>Modifier utilisateur</title>
</head>
<body>
    <!-- Votre contenu HTML ici -->
    <!-- Formulaire de modification -->
    <form method="POST" action="">
        <div class="container">
            <div class="form-group">
                <label for="admin_ID">ID Admin:</label>
                <input type="text" class="form-control" id="admin_ID" name="admin_ID" value="<?php echo htmlspecialchars($admin_ID); ?>">
            </div>
            <div class="form-group">
                <label for="Nom">Nom:</label>
                <input type="text" class="form-control" id="Nom" name="Nom" value="<?php echo htmlspecialchars($Nom); ?>">
            </div>
            <div class="form-group">
                <label for="Prenom">Prenom :</label>
                <input type="text" class="form-control" id="Prenom" name="Prenom" value="<?php echo htmlspecialchars($Prenom); ?>">
            </div>
            <div class="form-group">
                <label for="mail">Email:</label>
                <input type="email" class="form-control" id="mail" name="mail" value="<?php echo htmlspecialchars($mail); ?>">
            </div>
            <div class="form-group">
                <label for="mdp">Mot de passe:</label>
                <input type="password" class="form-control" id="mdp" name="mdp" value="<?php echo htmlspecialchars($mdp); ?>">
            </div>
            <button type="submit" name="valider" class="btn btn-primary">Modifier</button>
        </div>
    </form>
    <!-- Ajout des scripts JavaScript de Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$admin_ID = isset($_GET["admin_ID"]) ? $_GET["admin_ID"] : "";
$confirmer = isset($_GET["confirmer"]) ? $_GET["confirmer"] : "";

if ($confirmer) {
    include("../connexion.php");

    // Requête de suppression
    $sql = "DELETE FROM admin WHERE admin_ID = :admin_ID";
    $query = $pdo->prepare($sql);
    $query->bindParam("admin_ID", $admin_ID, PDO::PARAM_INT);
    $query->execute();

    // Redirection vers la page de liste des utilisateurs après la suppression
    header("Location: index.php");
    exit();
}
?>



<!-- Liens vers les fichiers CSS de Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">

<!-- Formulaire de confirmation -->
<form method="GET" action="">
    <!-- Champ caché pour l'ID de l'utilisateur -->
    <input type="hidden" name="admin_ID" value="<?php echo htmlspecialchars($admin_ID); ?>">

    <p class="fade-in">Êtes-vous sûr de vouloir supprimer cet utilisateur ?</p>
    <div class="button-container fade-in">
        <button type="submit" name="confirmer" value="1" class="btn btn-danger">Oui</button>
        <a href="index.php" class="btn btn-secondary">Non</a>
    </div>
</form>

<!-- Liens vers les fichiers JavaScript de Bootstrap (facultatif, mais nécessaires pour certaines fonctionnalités) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/js/bootstrap.bundle.min.js"></script>

<style>
    body {
        background-color: #f2f2f2;
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .fade-in {
        animation: fadeIn 0.5s ease-in-out forwards;
        opacity: 0;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(-10px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .button-container {
        margin-top: 20px;
        text-align: center;
    }
</style>




<?php
$Nom = isset($_POST["Nom"]) ? $_POST["Nom"] : "";
$Prenom = isset($_POST["Prenom"]) ? $_POST["Prenom"] : "";
$Username = isset($_POST["Username"]) ? $_POST["Username"] : "";
$mail = isset($_POST["mail"]) ? $_POST["mail"] : "";
$mdp = isset($_POST["mdp"]) ? $_POST["mdp"] : "";
$tel = isset($_POST["tel"]) ? $_POST["tel"] : "";
$valider = isset($_POST["valider"]);

if ($valider) {
    include("../connexion.php");

    // Hash the password
    $hashedPassword = password_hash($mdp, PASSWORD_DEFAULT);

    $ins = $pdo->prepare("INSERT INTO utilisateur (Nom, Prenom, Username, mail, mdp, tel) VALUES (?, ?, ?, ?, ?, ?)");

    if (!$pdo) {
        echo "Failed to connect to the database.";
    } else {
        $ins->execute([$Nom, $Prenom, $Username, $mail, $hashedPassword, $tel]);
    }

    if ($ins) {
        echo "New record created successfully.";
    } else {
        echo "Error: " . $ins->errorInfo()[2];
    }

    $pdo = null;
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .google-translate-container {
            float: right;
            padding: 5px 10px;
            background-color: lightgray;
        }
        
        #google_translate_element {
            display: inline-block;
        }
    </style>
    <title>Ajouter Utilisateur</title>
</head>
<body>
    <div class="google-translate-container">
        <div id="google_translate_element"></div>
    </div>
   
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <div class="container">
        <form method="POST" action="">
            <div class="form-group">
                <label for="Nom">Nom:</label>
                <input type="text" class="form-control" id="Nom" name="Nom" value="<?php echo htmlspecialchars($Nom); ?>">
            </div>
            <div class="form-group">
                <label for="Prenom">Prenom:</label>
                <input type="text" class="form-control" id="Prenom" name="Prenom" value="<?php echo htmlspecialchars($Prenom); ?>">
            </div>
            <div class="form-group">
                <label for="Username">Username:</label>
                <input type="text" class="form-control" id="Username" name="Username" value="<?php echo htmlspecialchars($Username); ?>">
            </div>
            <div class="form-group">
                <label for="mail">mail:</label>
                <input type="email" class="form-control" id="mail" name="mail" value="<?php echo htmlspecialchars($mail); ?>">
            </div>
            <div class="form-group">
                <label for="mdp">mdp:</label>
                <input type="password" class="form-control" id="mdp" name="mdp" value="<?php echo htmlspecialchars($mdp); ?>">
            </div>
            <div class="form-group">
                <label for="tel">tel:</label>
                <input type="text" class="form-control" id="tel" name="tel" value="<?php echo htmlspecialchars($tel); ?>">
            </div>
            <button type="submit" name="valider" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>

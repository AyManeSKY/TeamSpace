<?php
$Nom = isset($_POST["Nom"]) ? $_POST["Nom"] : "";
$Prenom = isset($_POST["Prenom"]) ? $_POST["Prenom"] : "";
$mail = isset($_POST["mail"]) ? $_POST["mail"] : "";
$mdp = isset($_POST["mdp"]) ? $_POST["mdp"] : "";
$valider = isset($_POST["valider"]);

if ($valider) {
    include("../connexion.php");

    // Hash the password

    $ins = $pdo->prepare("INSERT INTO admin (Nom,Prenom, mail, mdp) VALUES (?, ?, ?, ?)");

    if (!$pdo) {
        echo "Failed to connect to the database.";
    } else {
        $ins->execute([$Nom, $mail, $mdp]);
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
    <title>Ajouter Admin</title>
</head>
<body>
    <div class="google-translate-container">
        <div id="google_translate_element"></div>
    </div>
   
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <div class="container">
        <form method="POST" action="">
            <div class="form-group">
                <label for="Nom">Nom :</label>
                <input type="text" class="form-control" id="Nom" name="Nom" value="<?php echo htmlspecialchars($Nom); ?>">
            </div>
            <div class="form-group">
                <label for="Prenom">Prenom :</label>
                <input type="text" class="form-control" id="Prenom" name="Prenom" value="<?php echo htmlspecialchars($Prenom); ?>">
            </div>
            <div class="form-group">
                <label for="mail">Nom :</label>
                <input type="email" class="form-control" id="mail" name="mail" value="<?php echo htmlspecialchars($mail); ?>">
            </div>
            <div class="form-group">
                <label for="mdp">mot de passe :</label>
                <input type="password" class="form-control" id="mdp" name="mdp" value="<?php echo htmlspecialchars($mdp); ?>">
            </div>
            
            <button type="submit" name="valider" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>

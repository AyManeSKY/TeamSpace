<?php
session_start();
$mail = htmlspecialchars($_POST["mail"] ?? "");
$mdp = $_POST["mdp"] ?? "";
$valider = $_POST["valider"] ?? "";
$erreur = "";

if (isset($valider)) {
   include("connexion.php");
   $sel = $pdo->prepare("SELECT * FROM admin WHERE mail=? AND mdp=? LIMIT 1");
   $sel->execute(array($mail, $mdp));
   $tab = $sel->fetchAll();
   if (count($tab) > 0) {
      $_SESSION["prenomNom"] = ucfirst(strtolower($tab[0]["prenom"])) . " " . strtoupper($tab[0]["nom"]);
      $_SESSION["autoriser"] = true;
      header("location: admins/index.php");
      exit();
   } else {
      $erreur = "Mauvais Email ou mot de passe!";
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="login.css">
   <title>Login</title>
</head>

<body>
   <div class="loginBox">
      <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
      <h3>Admin</h3>
      <form action="login.php" method="post">
         <div class="inputBox">
            <input id="mail" type="email" name="mail" placeholder="Email">
            <input id="mdp" type="password" name="mdp" placeholder="Password">
         </div>
         <input type="submit" name="valider" value="Login">
      </form>
   </div>
</body>

</html>

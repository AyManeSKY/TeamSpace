<?php
   session_start();
   $mail = htmlspecialchars($_POST["mail"] ?? "");
   $mdp = md5($_POST["mdp"] ?? "");
   $valider = $_POST["valider"] ?? "";
   $erreur = "";

   if(isset($valider)){
      include("connexion.php");
      $sel = $pdo->prepare("SELECT * FROM utilisateur WHERE mail=? AND mdp=? LIMIT 1");
      $sel->execute(array($mail, $mdp));
      $tab = $sel->fetchAll();
      if(count($tab) > 0){
         $_SESSION["prenomNom"] = ucfirst(strtolower($tab[0]["prenom"])) . " " . strtoupper($tab[0]["nom"]);
         $_SESSION["autoriser"] = true;
         header("location: ../appweb/users.php");
         exit();
      }
      else {
         $erreur = "Mauvais Email ou mot de passe!";
      }
   }
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- ================================== bootstrap link ================================== -->

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous">
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>

    <!-- ================================== Css link ================================== -->

    <link rel="stylesheet" href="login.css">

  </head>

  <body>
          <!-- ================================== alert ==================================  -->
        <div class="alert alert-warning alert-dismissible fade show" role="alert"
          id="alert">
          <strong>Pay attention!</strong> Please enter your real coordinates.
          <button type="button" class="btn-close" data-bs-dismiss="alert"
            aria-label="Close"></button>
        </div>

    <section class="wrapper">

      <div id="stars"></div>
      <div id="stars2"></div>
      <div id="stars3"></div>
      <div id="title">
      </div>

      <header>
        <div class="form-check form-switch" id="switch">
          <input class="form-check-input" type="checkbox" id="toggle-dark-mode">

        </div>
        <h1>Hello!</h1>
        <p>
          Enter Your Coordinates
        </p>
      </header>
      <section>

        <!-- ================================== form ==================================  -->

        <div class="contenaire">
          <div class="mydiv1">
            <form class="row g-3 needs-validation" novalidate action="" method="POST">


              <!-- ================================== Email ==================================  -->
              <div class="col-12">
                <label for="validationCustom03" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="mail" id="validationCustom03"
                  placeholder="fullname@example.com" required>
              </div>
              <!-- ================================== PASSWORD ==================================  -->
              <div class="col-12">
                <label for="validationCustom03" class="form-label">Password</label>
                <input type="password" name="mdp" class="form-control"
                  id="validationCustom03"
                  required>
              </div>
              
             
              
              <!-- ================================== SUBMIT ==================================  -->

              <div class="col-12">
                <button class="btn btn-primary" type="submit" name="valider" id="btn">login</button>
              </div>
            </form>
            <a href="signup.php"> Don't have an account?</a>
          </div>
          <div class="mydiv2">
            <div class="img-container">
              <img src="img/saly-39.png" id="logo">
              <img src="img/saly-40.png" id="bola">




            </div>
          </div>
        </div>
        
        
      </section>



      <script>
      var toggleButton = document.getElementById('toggle-dark-mode');
      var logoImage = document.getElementById('bola');
      var darkModeEnabled = localStorage.getItem('darkModeEnabled');

      if (darkModeEnabled === 'true') {
      enableDarkMode();
    }
  
      toggleButton.addEventListener('click', function() {
        
  
        if (document.body.classList.contains('dark-mode')) {
          disableDarkMode();
        } else {
        enableDarkMode();
        }
      });

      function enableDarkMode() {
      document.body.classList.add('dark-mode');
      logoImage.src = 'img/saly-41.png';
      localStorage.setItem('darkModeEnabled', 'true');
    }

    function disableDarkMode() {
      document.body.classList.remove('dark-mode');
      logoImage.src = 'img/saly-40.png';
      localStorage.setItem('darkModeEnabled', 'false');
    }


    </script>
    </section>
  </body>
</html>

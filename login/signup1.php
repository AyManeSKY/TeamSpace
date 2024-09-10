<?php
session_start();
$fname = $_POST["fname"] ?? "";
$lname = $_POST["lname"] ?? "";
$Username = $_POST["username"] ?? "";
$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";
$repass = $_POST["repass"] ?? "";
$tel = $_POST["tel"] ?? "";
$valider = $_POST["valider"] ?? "";
$erreur = "";

if (isset($valider)) {
    if (empty($fname)) {
        $erreur = "fname laissé vide!";
    } elseif (empty($lname)) {
        $erreur = "Préfname laissé vide!";
    } elseif (empty($Username)) {
        $erreur = "Username laissé vide!";
    } elseif (empty($email)) {
        $erreur = "email laissé vide!";
    } elseif (empty($password)) {
        $erreur = "Mot de passe laissé vide!";
    } elseif ($password != $repass) {
        $erreur = "Mots de passe non identiques!";
    } elseif (empty($tel)) {
        $erreur = "Téléphone laissé vide!";
    } else {
        include("connexion.php");
        $sel = $pdo->prepare("SELECT user_id FROM users WHERE email=? LIMIT 1");
        $sel->execute(array($email));
        $tab = $sel->fetchAll();
        if (count($tab) > 0) {
            $erreur = "email existe déjà!";
        } else {
            $ins = $pdo->prepare("INSERT INTO users(fname, lname, Username, email, password, tel) VALUES(?, ?, ?, ?, ?, ?)");
            if ($ins->execute(array($fname, $lname, $Username, $email, md5($password), $tel))) {
                echo "Inscription effectuée";
                header("Location: signin.php");
                exit();
            } else {
                $erreur = "Erreur lors de l'ajout du membre";
            }
        }
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

    <!-- ================================== Css link ================================== -->

    <link rel="stylesheet" href="login.css">

</head>

<body>
    <div class="erreur"><?php echo $erreur ?></div>
    <!-- ================================== alert ==================================  -->
    <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert">
        <strong>Pay attention!</strong> Please enter your real coordinates.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                Here you can create your account
            </p>
        </header>
        <section>

            <!-- ================================== form ==================================  -->

            <div class="contenaire">
                <div class="mydiv1">
                    <form class="row g-3 needs-validation" novalidate method="post">
                        <!-- ================================== first name ==================================  -->
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">First name</label>
                            <input type="text" name="fname" class="form-control" id="validationCustom01"
                                placeholder="John" value="<?php echo $fname; ?>" autofocus required>
                        </div>
                        <!-- ================================== last name ==================================  -->
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">Last name</label>
                            <input type="text" name="lname" class="form-control" id="validationCustom02"
                                placeholder="Doe" value="<?php echo $lname; ?>" required>
                        </div>
                        <!-- ================================== user name ==================================  -->
                        <div class="col-md-12">
                            <label for="validationCustomUsername" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <input type="text" name="username" class="form-control"
                                    id="validationCustomUsername" value="<?php echo $Username; ?>" required>
                            </div>
                        </div>
                        <!-- ================================== Eemail ==================================  -->
                        <div class="col-md-12">
                            <label for="validationCustom03" class="form-label">E-email</label>
                            <input type="eemail" name="email" class="form-control" id="validationCustom03"
                                placeholder="example@gemail.com" value="<?php echo $email; ?>" required>
                        </div>
                        <!-- ================================== PASSWORD ==================================  -->
                        <div class="col-md-12">
                            <label for="validationCustom03" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="validationCustom03"
                                required>
                        </div>
                        <!-- ================================== CONFIRM PASSWORD ==================================  -->
                        <div class="col-md-12">
                            <label for="validationCustom03" class="form-label">Confirm your
                                Password</label>
                            <input type="password" name="repass" class="form-control" id="validationCustom03"
                                required>
                        </div>
                        <!-- ================================== TELEPHONE ==================================  -->
                        <div class="col-md-12">
                            <label for="validationCustom03" class="form-label">Phone number</label>
                            <input type="text" name="tel" class="form-control" id="validationCustom03"
                                value="<?php echo $tel; ?>" required>
                        </div>
                        <!-- ================================== PRIVACY ==================================  -->

                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="true" id="invalidCheck"
                                    required>
                                <label class="form-check-label" for="invalidCheck">
                                    Agree to terms and conditions
                                </label>
                            </div>
                        </div>
                        <!-- ================================== SUBMIT ==================================  -->

                        <div class="col-12">
                            <button class="btn btn-primary" name="valider" type="submit" id="btn">Submit
                                form</button>
                        </div>
                    </form>
                    <a href="signin1.php"> You already have an account?</a>
                </div>
                <div class="mydiv2">
                    <div class="img-container">
                        <img src="img/02.png" id="logo">
                        <img src="img/03.png" id="img02">
                        <img src="img/05.png" id="img03">
                        <img src="img/04.png" id="img04">
                        <img src="img/04.png" id="img05">
                        <img src="img/04.png" id="img06">
                        <img src="img/03.png" id="img07">
                        <img src="img/saly-18.png" id="img08">

                    </div>
                </div>
            </div>

        </section>



        <script>
            var toggleButton = document.getElementById('toggle-dark-mode');
            var logoImage = document.getElementById('logo');
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
                logoImage.src = 'img/01.png';
                localStorage.setItem('darkModeEnabled', 'true');
            }

            function disableDarkMode() {
                document.body.classList.remove('dark-mode');
                logoImage.src = 'img/02.png';
                localStorage.setItem('darkModeEnabled', 'false');
            }
        </script>
    </section>
</body>

</html>

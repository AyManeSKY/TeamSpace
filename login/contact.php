<?php
if(isset($_POST['send'])){
    // Récupérer les valeurs des champs du formulaire
    $firstName = $_POST['First_name'];
    $lastName = $_POST['Last_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Adresse e-mail de destination
    $to = "teamspace2023@gmail.com";

    // Sujet du courrier électronique
    $subject = "Nouveau message de contact";

    // Corps du courrier électronique
    $emailBody = "Nom: $lastName\n";
    $emailBody .= "Prénom: $firstName\n";
    $emailBody .= "Email: $email\n";
    $emailBody .= "Message:\n$message";

    // En-têtes du courrier électronique
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Envoyer le courrier électronique
    if(mail($to, $subject, $emailBody, $headers)){
        echo "Le message a été envoyé avec succès.";
    } else{
        echo "Une erreur s'est produite lors de l'envoi du message.";
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
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <style>
        body{
            background-color: #e9ecef;
        }
    </style>
 <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../index.php">
          <img src="../images/logo.png" alt="logo image">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarNav" aria-controls="navbarNav"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link " aria-current="page"
                href="../index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="../index.php">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="../index.php">Testimonials</a></li>
            <li class="nav-item"><a class="nav-link" href="../index.php">faq</a></li>
            <li class="nav-item"><a class="nav-link active" href="#">contact</a>
            </li>
            <li>
              <button type="button" class="btnLogin-popup" id="ctn"><a
                  href="signin1.php" id="lien">Login</a></button>
            </li>
            <li class="flex">
              <!-- <div class="form-check form-switch" id="switch">
                <input class="form-check-input" type="checkbox" id="toggle-dark-mode">
              </div> -->

            </li>
          </ul>

      
        </div>
      </div>
    </nav>
      <style>
        #nsab{
            width: 45%;
            position: absolute;
            right: -350px;
            top: 10%;
            
        }
        body{
          overflow-x: hidden;
            position: relative;
        }
      </style>
      <br><br>
      <img src="../images/-uyX.png" id="nsab">
    <section id="contact" class="get-started">
        <div class="container">
          <div class="row text-center">
            <h1 class="display-3 fw-bold text-capitalize">Submit a request</h1>
            <div class="heading-line"></div>
            <p class="lh-lg">
            What can we help you with?
            </p>
          </div>
  
          <!-- START THE CTA CONTENT  -->
          <div class="row text-white">
            <div class="col-12 col-lg-6 gradient shadow p-3">
              <div class="cta-info w-100">
                <h4 class="display-4 fw-bold">100% Satisfaction Guaranteed</h4>
                <p class="lh-lg">
                We value your feedback, questions, and inquiries. Feel free to reach out to us using the contact details provided below, or by filling out the contact form. We will get back to you as soon as possible.
                </p>
                <h3 class="display-3--brief">What will be the next step?</h3>
                <ul class="cta-info__list">
                  <li>We'll prepare the proposal.</li>
                  <li>we'll discuss it together.</li>
                  <li>let's start the discussion.</li>
                </ul>
              </div>
            </div>
            <div class="col-12 col-lg-6 bg-white shadow p-3">
              <div class="form w-100 pb-2">
                <h4 class="display-3--title mb-5">start your project</h4>
                <form action="#" class="row" method="POST">
                  <div class="col-lg-6 col-md mb-3">
                    <input type="text" placeholder="First Name" name="First_name"
                      id="inputFirstName"
                      class="shadow form-control form-control-lg">
                  </div>
                  <div class="col-lg-6 col-md mb-3">
                    <input type="text" placeholder="Last Name" name="Last_name" id="inputLastName"
                      class="shadow form-control form-control-lg">
                  </div>
                  <div class="col-lg-12 mb-3">
                    <input type="email" placeholder="email address" name="email"
                      id="inputEmail" class="shadow form-control form-control-lg">
                  </div>
                  <div class="col-lg-12 mb-3">
                    <textarea name="message" placeholder="message" id="message"
                      rows="8" class="shadow form-control form-control-lg"></textarea>
                  </div>
                  <div class="text-center d-grid mt-1">
                    <button type="submit"
                      class="btn btn-primary rounded-pill pt-3 pb-3" name="send">
                      submit
                      <i class="fas fa-paper-plane"></i>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>






      <footer class="footer">
        <div class="container">
          <div class="row">
            <!-- CONTENT FOR THE MOBILE NUMBER  -->
            <div
              class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
              <div class="contact-box__icon">
                <svg xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-phone-call"
                  viewBox="0 0 24 24" stroke-width="1" fill="none"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path
                    d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                  <path d="M15 7a2 2 0 0 1 2 2" />
                  <path d="M15 3a6 6 0 0 1 6 6" />
                </svg>
              </div>
              <div class="contact-box__info">
                <a href="#" class="contact-box__info--title">+212 6012345678</a>
                <p class="contact-box__info--subtitle"> Mon-Fri 9am-6pm</p>
              </div>
            </div>
            <!-- CONTENT FOR EMAIL  -->
            <div
              class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
              <div class="contact-box__icon">
                <svg xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-mail-opened"
                  viewBox="0 0 24 24" stroke-width="1" fill="none"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <polyline points="3 9 12 15 21 9 12 3 3 9" />
                  <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                  <line x1="3" y1="19" x2="9" y2="13" />
                  <line x1="15" y1="13" x2="21" y2="19" />
                </svg>
              </div>
              <div class="contact-box__info">
                <a href="#" class="contact-box__info--title">TSpace@gmail.com</a>
                <p class="contact-box__info--subtitle">Online support</p>
              </div>
            </div>
            <!-- CONTENT FOR LOCATION  -->
            <div
              class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
              <div class="contact-box__icon">
                <svg xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-map-2" viewBox="0 0 24 24"
                  stroke-width="1" fill="none" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <line x1="18" y1="6" x2="18" y2="6.01" />
                  <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
                  <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
                  <line x1="9" y1="4" x2="9" y2="17" />
                  <line x1="15" y1="15" x2="15" y2="20" />
                </svg>
              </div>
              <div class="contact-box__info">
                <a href="#" class="contact-box__info--title">Marrakech, Morocco</a>
                <p class="contact-box__info--subtitle">40000, MR</p>
              </div>
            </div>
          </div>
        </div>
  
        <!-- START THE SOCIAL MEDIA CONTENT  -->
        <div class="footer-sm" style="background-color: #212121;">
          <div class="container">
            <div class="row py-4 text-center text-white">
              <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                connect with us on social media
              </div>
              <div class="col-lg-7 col-md-6">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
  
        <!-- START THE CONTENT FOR THE CAMPANY INFO -->
        <div class="container mt-5">
          <div class="row text-white justify-content-center mt-3 pb-3">
            <div class="col-12 col-sm-6 col-lg-6 mx-auto">
              <h5 class="text-capitalize fw-bold">Teams Space</h5>
              <hr class="bg-white d-inline-block mb-4"
                style="width: 60px; height: 2px;">
              <p class="lh-lg">
                Imagine a place where you can belong to a school club, a gaming group, or a
                worldwide art community. Where just you and a handful of friends
                can spend time together. A place that makes it easy to talk every
                day and hang out more often.
              </p>
            </div>
  
            <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
              <h5 class="text-capitalize fw-bold">useful links</h5>
              <hr class="bg-white d-inline-block mb-4"
                style="width: 60px; height: 2px;">
              <ul class="list-inline campany-list">
                <li><a href="login/sign in.html"> Your Account</a></li>
                <li><a href="login/login.html">create an account</a></li>
                <li><a href="login/contact.html">Help</a></li>
              </ul>
            </div>
  
          </div>
        </div>
  
        <!-- START THE COPYRIGHT INFO  -->
        <div class="footer-bottom pt-5 pb-5">
          <div class="container">
            <div class="row text-center text-white">
              <div class="col-12">
                <div class="footer-bottom__copyright">
                  &COPY; Copyright 2023 <a href="#">Teams Space</a> | Created by
                  <a
                    href="http://codewithpatrick.com" target="_blank">Teams Space</a><br><br>
  
                  Distributed by <a href="http://themewagon.com" target="_blank">Teams
                    Space</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
</body>
</html>
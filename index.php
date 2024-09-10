<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TeamSpace</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous">
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/login.css">

    <!-- boxicons link -->
    <link rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  </head>
  <body>
    <!-- ////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 1 - THE NAVBAR SECTION  
/////////////////////////////////////////////////////////////////////////////////////////////-->
    <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/logo.png" alt="logo image">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarNav" aria-controls="navbarNav"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link active" aria-current="page"
                href="index.php">Acceuil</a></li>
            <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
            <li class="nav-item"><a class="nav-link" href="#faq">faq</a></li>
            <li class="nav-item"><a class="nav-link" href="login/contact.php">contact</a>
            </li>
            <li>
              <button type="button" class="btnLogin-popup" id="ctn"><a
                  href="login/signin1.php" id="lien">Login</a></button>
            </li>
            <li class="flex">
              <!-- <div class="form-check form-switch" id="switch">
                <input class="form-check-input" type="checkbox" id="toggle-dark-mode">
              </div> -->

            </li>
          </ul>

          <!-- container -->
          <!-- <div class="container">
                <div class="main-box login">
                    <h1>Login</h1>
                    <form action="">
                        <div class="input-box">
                            <span class="icon"><i class="bx bxs-envelope"></i></span>
                            <input type="email" required>
                            <label>Email</label>
                        </div>
        
        
                        <div class="input-box">
                            <span class="icon"><i class="bx bxs-lock-alt"></i></span>
                            <input type="password" required>
                            <label>Password</label>
                        </div>
        
                        <div class="check">
                            <label><input type="checkbox">Remember me</label>
                            <a href="#">Forget Password</a>
                        </div>
        
                        <button type="submit" class="main-btn">Login</button>
        
                        <div class="register">
                            <p>If you don't have an account?<a href="#" class="register-link">Register Here!</a></p>
                        </div>
                    </form>
                </div>
        
                 -------------------------------------------------- 
        
                <div class="main-box register">
                    <h1>Registration</h1>
                    <form action="">
                        <div class="input-box">
                            <span class="icon"><i class="bx bxs-user"></i></span>
                            <input type="text" required>
                            <label>Username</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><i class="bx bxs-envelope"></i></span>
                            <input type="email" required>
                            <label>Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><i class="bx bxs-lock-alt"></i></span>
                            <input type="password" required>
                            <label>Password</label>
                        </div>
        
                        <div class="check">
                            <label><input type="checkbox">I accept all terms & conditions</label>
                        </div>
        
                        <button type="submit" class="main-btn">Register Now</button>
        
                        <div class="register">
                            <p>Already have an account?<a href="#" class="login-link">Login!</a></p>
                        </div>
                    </form>
                </div>
        
                 -------------------------------------------------- 
        
                <span class="close-icon">
                    <div class="bx bx-x"></div>
                </span>
            </div> 
          </li>
        </ul>
         <button type="button" class="rounded-pill btn-rounded">
          Login
           <span>
             <i class="fas fa-phone-alt"></i> 
          </span> 
        </button> -->
        </div>
      </div>
    </nav>

    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////
                            START SECTION 2 - THE INTRO SECTION  
/////////////////////////////////////////////////////////////////////////////////////////////////////-->

    <section id="home" class="intro-section">
      <div class="container">
        <div class="row align-items-center text-white">
          <!-- START THE CONTENT FOR THE INTRO  -->
          <div class="col-md-8  intros text-start">
            <h1 class="display-2">
              <span class="display-2--intro">IMAGINE A PLACE...</span>
              <span class="display-2--description lh-base">
                ...where you can belong to a school club, a gaming group, or a
                worldwide art community. Where just you and a handful of friends
                can spend time together. A place that makes it easy to talk
                every day and hang out more often.
              </span>
            </h1>
            <button type="button" class="rounded-pill btn-rounded" id="ctn"><a
                href="login/sign in.html" id="lien">Start Right Now</a>
              <span><i class="fas fa-arrow-right"></i></span>
            </button>
          </div>
          <!-- START THE CONTENT FOR THE VIDEO -->
          <div class="col-md-4 intros text-end">
            <div class="video-box">
              <img src="images/arts/intro-section-illustration.png"
                alt="video illutration" class id="image01">
              <img src="images/arts/2.png" alt id="image02">
              <img src="images/arts/3.png" alt id="image03">
              <img src="images/arts/4.png" alt id="image04">
              <img src="images/arts/5.png" alt id="image05">

              <style>
                  .video-box{
                    position: relative;
                  }
                  .video-box #image01{
                    width: 150%;
                    animation: floaty 1.8s infinite alternate;

                  }
                  #image02{
                    position: absolute;
                    top: 0;
                    right: -50%;
                    width: 150%;
                    animation: floaty2 1.8s infinite alternate;
                  }
                  #image03{
                    position: absolute;
                    top: 15%;
                    right: -30%;
                    width: 30%;
                    animation: floaty4 1s infinite alternate;

                    

                  }                  
                  #image04{
                    position: absolute;
                    /* filter: blur(5px); */
                    top: 20%;
                    right: 50%;
                    width: 30%;
                    animation: floaty5 3.8s infinite alternate;

                  }                  
                  #image05{
                    position: absolute;
                    top: 5%;
                    width: 20%;
                    right: 15%;
                    animation: floaty3 3.8s infinite alternate;

                  }
                  #lien{
                    color: blueviolet;
                    text-decoration: none;
                  }
                  #lien:hover{
                    color: white;
                  }

                  @keyframes floaty5 {
    0% {
        transform: rotate(1);

    }

    100% {
        transform: rotate(.25turn);

    }
}

@keyframes floaty {
    0% {
        transform: translateY(0);
    }

    100% {
        transform: translateY(15px);
    }
}
@keyframes floaty4 {
    0% {
        transform: translateY(0);
        transform: translateX(10px);
    }

    100% {
        transform: translateY(15px);
    }
}
@keyframes floaty2 {
    0% {
        transform: scaleX(2PX);
        opacity: 20%;
    }

    100% {
        transform: scaleX(15px);
        opacity: 60%;
    }
}
@keyframes floaty3 {
    0% {
        transform: rotate(0);

    }

    100% {
        transform: rotate(.25turn);

    }
}


                </style>

              <!-- <a href="#"
                class="glightbox position-absolute top-50 start-50 translate-middle">
                <span>
                  <i class="fas fa-play-circle"></i>
                </span>
                <span class="border-animation border-animation--border-1"></span>
                <span class="border-animation border-animation--border-2"></span>
              </a> -->
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path
          fill="#ffffff" fill-opacity="1"
          d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>

    <!-- :


<!-- //////////////////////////////////////////////////////////////////////////////////////////////
                             START SECTION 3 - THE CAMPANIES SECTION  
////////////////////////////////////////////////////////////////////////////////////////////////////-->

    <!-- <section id="campanies" class="campanies">
    <div class="container">
      <div class="row text-center">
        <h4 class="fw-bold lead mb-3">Trusted by campanies like</h4>
        <div class="heading-line mb-5"></div>
      </div>
    </div> -->
    <!-- START THE CAMPANIES CONTENT  -->
    <!-- <div class="container">
      <div class="row">
        <div class="col-md-4 col-lg-2">
          <div class="campanies__logo-box shadow-sm">
            <img src="images/campanies/campany-1.png" alt="Campany 1 logo" title="Campany 1 Logo" class="img-fluid">
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="campanies__logo-box shadow-sm">
            <img src="images/campanies/campany-2.png" alt="Campany 2 logo" title="Campany 2 Logo" class="img-fluid">
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="campanies__logo-box shadow-sm">
            <img src="images/campanies/campany-3.png" alt="Campany 3 logo" title="Campany 3 Logo" class="img-fluid">
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="campanies__logo-box shadow-sm">
            <img src="images/campanies/campany-4.png" alt="Campany 4 logo" title="Campany 4 Logo" class="img-fluid">
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="campanies__logo-box shadow-sm">
            <img src="images/campanies/campany-5.png" alt="Campany 5 logo" title="Campany 5 Logo" class="img-fluid">
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="campanies__logo-box shadow-sm">
            <img src="images/campanies/campany-6.png" alt="Campany 6 logo" title="Campany 6 Logo" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section> -->

    <!-- //////////////////////////////////////////////////////////////////////////////////////////////
                         START SECTION 4 - THE SERVICES  
///////////////////////////////////////////////////////////////////////////////////////////////////-->
    <section id="services" class="services">
      <div class="container">
        <div class="row text-center">
          <h1 class="display-3 fw-bold">Our Services</h1>
          <div class="heading-line mb-1"></div>
        </div>
        <!-- START THE DESCRIPTION CONTENT  -->
        <div class="row pt-2 pb-2 mt-0 mb-3">
          <div class="col-md-6 border-right">
            <div class="bg-white p-3">
              <h2 class="fw-bold text-capitalize text-center">
                Teams Space offer an exceptional array of diverse and dynamic
                services
              </h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="bg-white p-4 text-start">
              <p class="fw-light">
                A captivating collection of exquisitely tailored services awaits
                to fulfill your every desire. Immerse yourself in an
                unrivaled symphony of innovative solutions and meticulous
                attention to detail, meticulously
                crafted to elevate your experience beyond imagination. </p>
            </div>
          </div>
        </div>
      </div>

      <!-- START THE CONTENT FOR THE SERVICES  -->
      <div class="container">
        <!-- START THE MARKETING CONTENT  -->
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
            <div class="services__content">
              <div class="icon d-block fas fa-code"></div><br><br>
              <h3 class="display-3--title mt-1">Create an invite-only place
                where you belong
              </h3>
              <p class="lh-lg">
                Team Space servers are organized into topic-based channels where
                you can collaborate, share, and just talk about your day without
                clogging up a group chat. </p>
              <!-- <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
            <span><i class="fas fa-arrow-right"></i></span>
          </button> -->
            </div>
          </div>
          <div
            class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
            <div class="services__pic">
              <img src="images/services/service-1.png"
                alt="marketing illustration" class="img-fluid">
            </div>
          </div>
        </div>
        <!-- START THE WEB DEVELOPMENT CONTENT  -->
        <div class="row">
          <div
            class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
            <div class="services__pic">
              <img src="images/services/service-2.png"
                alt="web development illustration" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
            <div class="services__content">
              <div class="icon d-block fas fa-paper-plane"></div><br><br>
              <h3 class="display-3--title mt-1">From few to a fandom</h3>
              <p class="lh-lg">
                Get any community running with moderation tools and custom
                member
                access. Give members special powers, set up private channels,
                and more.
              </p>
              <!-- <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
            <span><i class="fas fa-arrow-right"></i></span>
          </button> -->
            </div>
          </div>
        </div>
        <!-- START THE CLOUD HOSTING CONTENT  -->
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
            <div class="services__content">
              <div class="icon d-block fas fa-cloud-upload-alt"></div><br><br>
              <h3 class="display-3--title mt-1">RELIABLE TECH FOR STAYING CLOSE</h3>
              <p class="lh-lg">
                Low-latency voice and video feels like you’re in the same room.
                Wave hello over video,
                watch friends stream their games, or gather up and have a
                drawing session with screen
                share.
              </p>
              <!-- <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
            <span><i class="fas fa-arrow-right"></i></span>
          </button> -->
            </div>
          </div>
          <div
            class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
            <div class="services__pic">
              <img src="images/services/service-3.png"
                alt="cloud hosting illustration" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 5 - THE TESTIMONIALS  
/////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <section id="testimonials" class="testimonials">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path
          fill="#fff" fill-opacity="1"
          d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
      <div class="container">
        <div class="row text-center text-white">
          <h1 class="display-3 fw-bold">Testimonials</h1>
          <hr style="width: 100px; height: 3px; " class="mx-auto">
          <p class="lead pt-1">what our clients are saying</p>
        </div>

        <!-- START THE CAROUSEL CONTENT  -->
        <div class="row align-items-center">
          <div id="carouselExampleCaptions" class="carousel slide"
            data-bs-ride="carousel">
            <div class="carousel-inner">
              <!-- CAROUSEL ITEM 1 -->
              <div class="carousel-item active">
                <!-- testimonials card  -->
                <div class="testimonials__card">
                  <p class="lh-lg">
                    <i class="fas fa-quote-left"></i>
                    Teams Space offers seamless communication features that
                    facilitate smooth and effective collaboration
                    among team members. Whether it's through text chat, audio
                    calls, or video meetings, Teams Space provides
                    reliable and efficient communication channels.
                    <i class="fas fa-quote-right"></i>
                    <div class="ratings p-1">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                  </p>
                </div>
                <!-- client picture  -->
                <div class="testimonials__picture">
                  <img src="images/testimonials/client-1.jfif"
                    alt="client-1 picture" class="rounded-circle img-fluid">
                </div>
                <!-- client name & role  -->
                <div class="testimonials__name">
                  <h3>Patrick Muriungi</h3>
                  <p class="fw-light">Client</p>
                </div>
              </div>
              <!-- CAROUSEL ITEM 2 -->
              <div class="carousel-item">
                <!-- testimonials card  -->
                <div class="testimonials__card">
                  <p class="lh-lg">
                    <i class="fas fa-quote-left"></i>
                    Teams Space is designed to enhance collaboration within
                    teams. It offers a range of tools and
                    features that enable members to work together on projects,
                    share files, co-edit documents, and track progress in
                    real-time.
                    <i class="fas fa-quote-right"></i>
                    <div class="ratings p-1">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                  </p>
                </div>
                <!-- client picture  -->
                <div class="testimonials__picture">
                  <img src="images/testimonials/client-2.jfif"
                    alt="client-2 picture" class="rounded-circle img-fluid">
                </div>
                <!-- client name & role  -->
                <div class="testimonials__name">
                  <h3>Joy Marete</h3>
                  <p class="fw-light">Client</p>
                </div>
              </div>
              <!-- CAROUSEL ITEM 3 -->
              <div class="carousel-item">
                <!-- testimonials card  -->
                <div class="testimonials__card">
                  <p class="lh-lg">
                    <i class="fas fa-quote-left"></i>
                    With Teams Space, teams can streamline their workflow by
                    centralizing their communication, collaboration, and project
                    management activities in one platform. This eliminates the
                    need to switch between multiple tools, resulting in
                    increased productivity and efficiency.
                    <i class="fas fa-quote-right"></i>
                    <div class="ratings p-1">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                  </p>
                </div>
                <!-- client picture  -->
                <div class="testimonials__picture">
                  <img src="images/testimonials/client-3.jfif"
                    alt="client-3 picture" class="rounded-circle img-fluid">
                </div>
                <!-- client name & role  -->
                <div class="testimonials__name">
                  <h3>ClaireBelle Zawadi</h3>
                  <p class="fw-light">Client</p>
                </div>
              </div>
              <!-- CAROUSEL ITEM 4 -->
              <div class="carousel-item">
                <!-- testimonials card  -->
                <div class="testimonials__card">
                  <p class="lh-lg">
                    <i class="fas fa-quote-left"></i>
                    Teams Space prioritizes the security and privacy of its
                    users' data. It provides features like data encryption,
                    access controls, and compliance certifications to ensure
                    that sensitive information remains protected.
                    <i class="fas fa-quote-right"></i>
                    <div class="ratings p-1">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                  </p>
                </div>
                <!-- client picture  -->
                <div class="testimonials__picture">
                  <img src="images/testimonials/client-4.jfif"
                    alt="client-4 picture" class="rounded-circle img-fluid">
                </div>
                <!-- client name & role  -->
                <div class="testimonials__name">
                  <h3>Uhuru Kenyatta</h3>
                  <p class="fw-light">Client</p>
                </div>
              </div>
            </div>
            <div class="text-center">
              <button class="bx bx-arrow-back " type="button"
                data-bs-target="#carouselExampleCaptions" data-bs-slide="prev"
                id="btn">
              </button>
              <button class="bx bx-arrow-back bx-rotate-180" type="button"
                data-bs-target="#carouselExampleCaptions" data-bs-slide="next"
                id="btn">
              </button>
              <style>
          #btn{
            background-color: transparent;
            padding: 1%;
            border: 1px solid white;
            border-radius: 5px;
            color: white;
          }
          #btn:hover{
            background-color: #212121 ;
            opacity: 50%;
          }
        </style>
            </div>

          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path
          fill="#fff" fill-opacity="1"
          d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>

    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////
                       START SECTION 6 - THE FAQ 
//////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <section id="faq" class="faq">
      <div class="container">
        <div class="row text-center">
          <h1 class="display-3 fw-bold text-uppercase">faq</h1>
          <div class="heading-line"></div>
          <p class="lead">frequently asked questions, get knowledge befere hand</p>
        </div>
        <!-- ACCORDION CONTENT  -->
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="accordion" id="accordionExample">
              <!-- ACCORDION ITEM 1 -->
              <div class="accordion-item shadow mb-3">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    What are the main features?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show"
                  aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Teams Space is a collaboration and communication platform
                    that offers several key features to enhance teamwork and
                    productivity. Here are some of the main features you can
                    highlight:
                    <ol>
                      <li><strong>Chat and Messaging:</strong>> Teams Space
                        provides robust chat and messaging capabilities,
                        allowing team members to communicate in real-time. Users
                        can send text messages, share files, and even create
                        dedicated channels for specific topics or projects.
                      </li>
                      <li><strong>Video and Audio Conferencing:</strong> Teams
                        Space enables high-quality video and audio conferencing,
                        making it easy for team members to connect face-to-face
                        regardless of their physical location. It supports group
                        meetings, one-on-one calls, and screen sharing for
                        effective collaboration.
                      </li>
                      <li><strong>File Sharing and Collaboration:</strong> Teams
                        Space offers seamless file sharing and collaboration
                        features. Team members can share documents,
                        presentations, and other files within the platform,
                        allowing for real-time collaboration, version control,
                        and comments.
                      </li>
                      <li><strong>Task and Project Management:</strong> Teams
                        Space provides features to manage tasks and projects. It
                        allows users to create and assign tasks, set deadlines,
                        track progress, and organize project-related discussions
                        and files, all in one central location.
                      </li>
                      <li><strong>Integration with Productivity Tools:</strong>
                        Teams Space integrates with various productivity tools,
                        such as project management software, document storage
                        services, and calendar applications. This integration
                        enables users to access and collaborate on files and
                        information from different tools within the Teams Space
                        platform.
                      </li>
                      <li><strong>Customizable and Extensible:</strong> Teams
                        Space offers customization options to tailor the
                        platform to your team's specific needs. You can create
                        custom channels, set permissions and access controls,
                        and even integrate custom apps or bots to automate
                        workflows.
                      </li>
                      <li><strong>Mobile and Cross-Platform Support:</strong>
                        Teams Space is available on multiple platforms,
                        including desktop, web, and mobile devices. This ensures
                        that team members can stay connected and collaborate
                        regardless of their preferred device or operating
                        system.
                      </li>
                    </ol>

                    Remember that Teams Space may evolve over time, and new
                    features may be introduced. It's always a good idea to check
                    the official documentation or website for the most
                    up-to-date information on the platform's features and
                    capabilities.
                  </div>
                </div>
              </div>
              <!-- ACCORDION ITEM 2 -->
              <div class="accordion-item shadow mb-3">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                    aria-expanded="false" aria-controls="collapseTwo">
                    do i have to pay anything
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse"
                  aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>No,</strong>
                    Teams Space is not available for free. Teams Space
                    offers both free and paid versions. The basic features of
                    Teams Space, such as creating and joining spaces, text
                    chatting, and voice communication, are available to all
                    users without any cost. However, Teams Space also offers a
                    premium subscription called Teams Space Plus, which provides
                    additional features such as enhanced file storage, advanced
                    security options, and priority customer support. Teams Space
                    Plus is an optional paid upgrade, but it is not required to
                    use and enjoy the core functionalities of Teams Space.
                  </div>
                </div>
              </div>
              <!-- ACCORDION ITEM 3 -->
              <div class="accordion-item shadow mb-3">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                    aria-expanded="false" aria-controls="collapseThree">
                    How can I get started?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse"
                  aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>To
                      get started with Teams Space, follow these steps:</strong>
                    <ol>
                      <li>Sign Up: Visit the Teams Space website or download the
                        Teams
                        Space app on your device. Click on the "Sign Up" button
                        to
                        create a new account. You can sign up with your email
                        address or link your Teams Space account to your
                        existing
                        Microsoft or organizational account.
                      </li>
                      <li> Create or Join a Space: Once you've created your
                        account,
                        you can create your own space or join an existing space.
                        Spaces in Teams Space are collaborative environments
                        where
                        you can connect with others and work on projects or
                        tasks
                        together. You can create a space by clicking the "+"
                        icon on
                        the left sidebar and selecting "Create a Space."
                        Alternatively, you may receive invitations to join
                        specific
                        spaces from other users.
                      </li>
                      <li> Customize Your Profile: Personalize your Teams Space
                        profile
                        by adding a profile picture, a display name, and other
                        relevant details. You can access your profile settings
                        by
                        clicking on your username or profile picture in the
                        Teams
                        Space interface.</li>
                      <li> Explore and Join Spaces: Join public spaces or
                        request
                        access to private spaces based on your interests or work
                        requirements. Teams Space offers a variety of spaces
                        dedicated to different topics, departments, or projects.
                        You
                        can search for specific spaces using the search bar or
                        browse through the available space directories.</li>
                      <li> Engage in Collaborative Work: Once you've joined a
                        space,
                        you can participate in discussions, share files, and
                        collaborate with other members. Teams Space provides
                        text-based communication, file sharing, and task
                        management
                        features to facilitate teamwork and productivity.</li>
                      <li>
                        Voice and Video Communication: Teams Space also supports
                        voice and video communication for real-time discussions
                        and
                        meetings. You can join voice or video calls within a
                        space
                        to communicate with other members.</li>
                      <li> Customize and Configure: Teams Space allows you to
                        customize
                        your spaces by creating channels, setting permissions,
                        and
                        configuring various settings. Explore the space settings
                        to
                        tailor the environment according to your team's needs.
                      </li>
                    </ol>

                    <span class="text-warning">Remember to familiarize yourself
                      with
                      the Teams Space terms
                      of service and any specific guidelines or policies set by
                      your organization to ensure a productive and collaborative
                      experience.</span>

                    That's it! You're now ready to explore and engage with the
                    Teams Space environment. Enjoy connecting with others and
                    working together effectively in your spaces.
                  </div>
                </div>
              </div>
              <!-- ACCORDION ITEM 4 -->

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////
                              START SECTION 7 - THE PORTFOLIO  
//////////////////////////////////////////////////////////////////////////////////////////////////////-->

    <!-- <section id="portfolio" class="portfolio">
  <div class="container">
    <div class="row text-center mt-5">
      <h1 class="display-3 fw-bold text-capitalize">Latest work</h1>
      <div class="heading-line"></div>
      <p class="lead">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint porro temporibus distinctio.
      </p>
    </div>
     FILTER BUTTONS  
    <div class="row mt-5 mb-4 g-3 text-center">
      <div class="col-md-12">
        <button class="btn btn-outline-primary" type="button">All</button>
        <button class="btn btn-outline-primary" type="button">websites</button>
        <button class="btn btn-outline-primary" type="button">design</button>
        <button class="btn btn-outline-primary" type="button">mockup</button>
      </div>
    </div>

     START THE PORTFOLIO ITEMS  
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="images/portfolio/portfolio-1.jpg" alt="portfolio 1 image" title="portfolio 1 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name goes here 1</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="images/portfolio/portfolio-2.jpg" alt="portfolio 2 image" title="portfolio 2 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name goes here 2</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="images/portfolio/portfolio-3.jpg" alt="portfolio 3 image" title="portfolio 3 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name goes here 3</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="images/portfolio/portfolio-4.jpg" alt="portfolio 4 image" title="portfolio 4 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name goes here 4</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="images/portfolio/portfolio-5.jpg" alt="portfolio 5 image" title="portfolio 5 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name goes here 5</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="images/portfolio/portfolio-6.jpg" alt="portfolio 6 image" title="portfolio 6 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name goes here 6</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="images/portfolio/portfolio-7.jpg" alt="portfolio 7 image" title="portfolio 7 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name goes here 7</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="images/portfolio/portfolio-8.jpg" alt="portfolio 8 image" title="portfolio 8 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name goes here 8</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="images/portfolio/portfolio-9.jpg" alt="portfolio 9 image" title="portfolio 9 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name goes here 9</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////
              START SECTION 8 - GET STARTED  
/////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <!-- <section id="contact" class="get-started">
      <div class="container">
        <div class="row text-center">
          <h1 class="display-3 fw-bold text-capitalize">Get started</h1>
          <div class="heading-line"></div>
          <p class="lh-lg">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero
            illum architecto modi.
          </p>
        </div>

         START THE CTA CONTENT  
        <div class="row text-white">
          <div class="col-12 col-lg-6 gradient shadow p-3">
            <div class="cta-info w-100">
              <h4 class="display-4 fw-bold">100% Satisfaction Guaranteed</h4>
              <p class="lh-lg">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam
                alias optio minima, tempore architecto sint ipsam dolore tempora
                facere laboriosam corrupti!
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
              <form action="#" class="row">
                <div class="col-lg-6 col-md mb-3">
                  <input type="text" placeholder="First Name"
                    id="inputFirstName"
                    class="shadow form-control form-control-lg">
                </div>
                <div class="col-lg-6 col-md mb-3">
                  <input type="text" placeholder="Last Name" id="inputLastName"
                    class="shadow form-control form-control-lg">
                </div>
                <div class="col-lg-12 mb-3">
                  <input type="email" placeholder="email address"
                    id="inputEmail" class="shadow form-control form-control-lg">
                </div>
                <div class="col-lg-12 mb-3">
                  <textarea name="message" placeholder="message" id="message"
                    rows="8" class="shadow form-control form-control-lg"></textarea>
                </div>
                <div class="text-center d-grid mt-1">
                  <button type="button"
                    class="btn btn-primary rounded-pill pt-3 pb-3">
                    submit
                    <i class="fas fa-paper-plane"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- ///////////////////////////////////////////////////////////////////////////////////////////
                           START SECTION 9 - THE FOOTER  
///////////////////////////////////////////////////////////////////////////////////////////////-->
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

    <!-- BACK TO TOP BUTTON  -->
    <a href="#" class="shadow btn-primary rounded-circle back-to-top">
      <i class="fas fa-chevron-up"></i>
    </a>

    <script src="assets/vendors/js/glightbox.min.js"></script>

    <script type="text/javascript">
      const lightbox = GLightbox({
        'touchNavigation': true,
        'href': 'https://www.youtube.com/watch?v=J9lS14nM1xg',
        'type': 'video',
        'source': 'youtube', //vimeo, youtube or local
        'width': 900,
        'autoPlayVideos': 'true',
});
    
    </script>
    <script>
         function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE},
                'google_translate_element'
            );
        }
    </script>
   <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<?php
session_start(); // Démarre la session
use Controller\Mail;

require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  if (isset($_POST['email']) && !empty($_POST['email']) && 
  isset($_POST['nom']) && !empty($_POST['nom']) &&
  isset($_POST['objet']) && !empty($_POST['objet']) &&
  isset($_POST['message']) && !empty($_POST['message'])
  ) {
    $mail = new Mail($_POST['email'], $_POST['nom'], $_POST['objet'], $_POST['message']);
    $resp = $mail->send();
    $_SESSION['mail_status'] = $resp ? 'success' : 'error'; // Enregistrer le résultat dans $_SESSION
    $_SESSION['mail_message'] = $resp ? 'Votre message a bien été envoyé' : 'Une erreur est survenue, veuillez réessayer.';

    $class = $resp ? 'succes':'danger';
    $info = $resp ? 'Mail envoyé avec succes':'Mail non envoyé !!';

    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!--My resum = mon cv-->
  <title>--Guillaume--</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/boule-de-billard.png" rel="icon">


  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <!-- SweetAlert2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.1/dist/sweetalert2.min.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Accueil</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Profil</span></a></li>
        <li><a href="#skills" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Skills</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Compétences</span></a>
        </li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Mes
              projets</span></a>
        </li>
        <!-- <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>-->
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Guillaume</h1>
      <p><span class="typed"
          data-typed-items="Développeur Web, Développeur Web et Web Mobile, Développeur HTML/CSS, Développeur JavaScript, Développeur Symfony/PHP "></span>
      </p>
      <!-- <div class="social-links">
        <a target="_blank" href="https://github.com/GuillaumeReb" class="githyb"><i class="bi bi-github"></i></a> -->
        <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a> -->
        <!-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
      <!-- </div> -->
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <br>
    <br>
    <!-- ======= About Section A propos de moi ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>A propos de moi</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
            in iste officiis commodi quidem hic quas.</p>-->
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/code.gif" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Développeur Web &amp; Web mobile.</h3>
            <p class="fst-italic">
              Bonjour, je m'appelle Guillaume et je suis développeur Web junior.
              Fort de ma formation et de mes compétences en développement web,
              je suis enthousiaste à l'idée de contribuer activement à des projets innovants et de mettre en
              pratique mes connaissances dans un environnement professionnel dynamique.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <!-- <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>25 March 1982</span></li>-->
                  <!-- <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <a
                      href="https://guillaume-rebourgeon.fr/" target="_blank">
                      <span>Mon portfolio</span></a></li>-->
                  <li><i class="bi bi-chevron-right"></i> <strong>Mobile:</strong> <span>06 58 99 27 51</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Ville:</strong> <span>Villefranche Sur Saône</span>
                  </li>
                  <li><i class="bi bi-chevron-right"></i> <strong>GitHub:</strong> <span><a target="_blank" href="https://github.com/GuillaumeReb"><i class="bi bi-github"></i></a></span>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>42</span></li>
                  <!--<li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Diploma Advanced
                      Technician</span></li>-->
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                    <span><a href="mailto:guillaume.rebourgeon@hotmail.fr">Guillaume</a></span>
                  </li>
                  <!--<li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>-->
                </ul>
              </div>
            </div>
            <p>
              Je suis à la recherche d'opportunités dans le domaine de
              l'informatique. Je suis passionné par la technologie et les systèmes
              informatiques. Je suis déterminé à changer de carrière pour me
              diriger vers ce domaine. Mon objectif est de contribuer de manière
              proactive à des projets dynamiques, en apportant mes
              compétences techniques et ma volonté d'apprendre dans ce
              secteur en constante évolution. Je suis enthousiaste à l'idée de
              relever de nouveaux défis et de mettre en pratique mes
              connaissances pour contribuer au succès de l'entreprise.
              <br>
            </p>
          </div>
        </div>
        <br>


        <!--bouton de message pop up-->
        <!-- <div class="position-relative m-5"> -->
          <!-- Button trigger modal enveloppe avec le message -->
          <!-- <button type="button"
            class="btn btn-primary btn-lg btn position-absolute top-50 start-50 translate-middle bi bi-envelope-exclamation fs-1"
            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            
          </button> -->
        <!-- </div> -->
        <!-- Modal -->
        <!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
          aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Recherche</h5>

              </div>
              <div class="modal-body">
                Actuellement en formation de développeur Web et Web Mobile, je suis à la <strong> recherche d'un stage
                  non remunéré de 10 semaines, du 29 juillet au 4 octobre 2024, </strong> afin de mettre en pratique les
                compétences acquises durant ma formation. N'hésitez pas à me joindre
                par <a href="mailto:guillaume.rebourgeon@hotmail.fr">e-mail</a>.
              </div>
              <br>
              <br>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><strong>X</strong></button>
              </div>
            </div>
          </div>
        </div> -->

        <!--Fin du message-->

      </div>
    </section><!-- End About Section -->
    <!-- ======= Facts Section ======= -->
    <!--
    <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Facts</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
            in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section>
  -->
    <!-- End Facts Section -->

    <br>
    <br>
    <br>
    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>

          <br>

          <h4>Grâce à ma formation intensive et à mon stage de 3 mois, j'ai acquis une solide autonomie, une grande
            polyvalence et des compétences techniques variées. Voici un aperçu de mes savoir-faire :</h4>
          <br>
        </div>
        <div class="row skills-content">
          <div class="col-lg-6">
            <!--Penser a changer les valeurs au fur et a mesure que la formation avance-->
            <div class="progress">
              <span class="skill">HTML <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS<i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript<i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Bootstrap<i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Symfony<i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">PHP<i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">MySQL <i class="val">45%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Tailwind CSS<i class="val">40%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Compétences</h2>
          <p>Mes compétences sont en perpétuelle évolution car, pour moi, la satisfaction de ce métier est renforcée par
            l'apprentissage continu,
            d'autant plus lorsque l'on s'investit, que l'on est curieux et passionné.
          </p>
        </div>
        <!--Rajouter la possibilité de télécharger mon cv en pdf-->
        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Formation</h3>
            <div class="resume-item pb-0">
              <h4>AFPA</h4>
              <h5>2023 - 2024</h5>
              <p><em>Diplômé en développement Web, j'ai suivi une formation complète couvrant tous les aspects du
                  développement web.
                  De la conception front-end à la gestion de bases de données back-end, j'ai acquis une maîtrise d'une
                  variété de langages et
                  d'outils essentiels tels que HTML, CSS, JavaScript, PHP, Symfony, React, et bien d'autres.
                  Cette formation m'a permis d'approfondir ma compréhension des principes fondamentaux du développement
                  web et de développer
                  les compétences pratiques nécessaires pour créer des applications web dynamiques et réactives.</em>
              </p>
              <ul>
                <li>HTML/CSS</li>
                <li>JavaScript</li>
                <li>SYMFONY/PHP</li>
              </ul>
            </div>
            <div class="resume-item pb-0">
              <h4>Formation autodidacte pour être développeur web</h4>
              <h5>2020 - aujourd'hui</h5>
              <p><em>Au fil des années, je me suis plongé dans l'apprentissage autodidacte
                  du codage en explorant diverses plateformes telles
                  qu'Openclassroom, des tutoriels sur YouTube, et d'autres sites
                  spécialisés.</em></p>
              <!-- <ul>
                <li>Portland par 127,Orlando, FL</li>
                <li>(123) 456-7891</li>
                <li>alice.barkley@example.com</li>
              </ul>-->
            </div>
            <h3 class="resume-title">Diplômes</h3>
            <div class="resume-item">
              <h4>Titre Professionnel (Niveau 5) Développeur web et web mobile</h4>
              <h5>2024</h5>
              <p><em></em></p>
              <p></p>
            </div>
            <div class="resume-item">
              <h4>Baccalauréat Professionnel Accueil et Services</h4>
              <h5>2002</h5>
              <p><em>Villefranche-Sur-Saône</em></p>
              <p></p>
            </div>
            <div class="resume-item">
              <h4>Brevet d'études Professionnel Vente</h4>
              <h5>2000</h5>
              <p><em>Villefranche-Sur-Saône</em></p>
              <p></p>
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Expérience Professionnelle</h3>

            <div class="resume-item">
              <h4>SmartBooster</h4>
              <h5>2024</h5>
              <p><em>Villefranche-Sur-Saône</em></p>
            </div>

            <div class="resume-item">
              <h4>Ouverture d'un restaurant à Hua Hin</h4>
              <h5>2021 - 2023</h5>
              <p><em>Hua Hin Thaïlande </em></p>
              <!--<ul>
                <li>Lead in the design, development, and implementation of the graphic, layout, and production
                  communication materials</li>
                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the
                  project. </li>
                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the
                  design</li>
                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
              </ul>-->
            </div>
            <div class="resume-item">
              <h4>Hôtel Mercure Réceptionniste</h4>
              <h5>2018 - 2021</h5>
              <p><em>Villefranche-Sur-Saône</em></p>
            </div>

            <div class="resume-item">
              <h4>Étudiant en Thaïlande</h4>
              <h5>2017 - 2018</h5>
              <p><em>Thaïlande</em></p>
            </div>

            <div class="resume-item">
              <h4>Résidence Temporim Réceptionniste</h4>
              <h5>2016 - 2017</h5>
              <p><em>Lyon</em></p>
            </div>

            <div class="resume-item">
              <h4>HLO Réceptionniste</h4>
              <h5>2015 - 2016</h5>
              <p><em>Lyon</em></p>
            </div>

            <div class="resume-item">
              <h4>Ibis Style Réceptionniste</h4>
              <h5>2012 - 2014</h5>
              <p><em>Avignon</em></p>
            </div>

          </div>
        </div>
      </div>

      <!--Bouton pour télécharger mon cv-->
      <!--RAJOUTER MON CV mis a jour rajouter la formation AFPA-->
      <div class="position-relative m-5">
        <a href="./assets/img/CV.pdf" target="_blank">
          <button type="button"
            class="bi bi-file-earmark-arrow-down btn position-absolute top-50 start-50 translate-middle fs-4">
            Téléchargez mon CV</button>
        </a>
      </div>
    </section><!-- End Resume Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Mes projets</h2>
          <p>Ci-dessous, quelques exemples de réalisations effectuées durant la formation, le stage et plus encore.</p>
          <p>Mon GitHub : <a target="_blank" href="https://github.com/GuillaumeReb" class="githyb"><i
                class="bi bi-github"></i></a></p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-api">HTML/CSS</li>
              <li data-filter=".filter-card">JavaScript</li>
              <li data-filter=".filter-web">PHP</li>
              <li data-filter=".filter-symfony">SYMFONY</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container " data-aos="fade-up" data-aos-delay="200">
          <!--Premier galerie attention a la taille des images-->
          <div class="col-lg-4 col-md-6 portfolio-item filter-api">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/galerie.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Galerie</h4>
                <p>HTML CSS</p>
                <div class="portfolio-links">
                  <!-- Permet d'ouvrir le lien dans une nouvelle page -->
                  <a href="./galerie/index.html" target="_blank"><i class="bx bx-plus"></i></a>
                  <a href="./galerie/index.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bi bi-eye-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!--Fin du premier-->
          <!--Mon site en test (garder le second a)-->
          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-api">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-les-breves.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mon premier site</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  
                   <a href="https://juridic-view.000webhostapp.com/" target="_blank"><i class="bx bx-plus"></i></a>
                  <a href="https://juridic-view.000webhostapp.com/" class="portfolio-details-lightbox"
                    data-glightbox="type: external" title="Les Brèves du Web"><i class="bi bi-eye-fill"></i></a>
                </div>
              </div>
            </div>
          </div> -->
          <!--Chocoboom-->
          <div class="col-lg-4 col-md-6 portfolio-item filter-api">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/choco.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>ChocoBoom</h4>
                <p>HTML / CSS</p>
                <div class="portfolio-links">
                  <!-- Permet d'ouvrir le lien dans une nouvelle page -->
                  <a href="./chocolatboom/index.html" target="_blank"><i class="bx bx-plus"></i></a>
                  <a href="./chocolatboom/index.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bi bi-eye-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!--Super Avenger-->
          <div class="col-lg-4 col-md-6 portfolio-item filter-api">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/avenger.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Super Avenger</h4>
                <p>HTML / CSS</p>
                <div class="portfolio-links">
                  <!-- Permet d'ouvrir le lien dans une nouvelle page -->
                  <a href="./super/index.html" target="_blank"><i class="bx bx-plus"></i></a>
                  <a href="./super/index.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bi bi-eye-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!--ACDC-->
          <div class="col-lg-4 col-md-6 portfolio-item filter-api">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/ac-dc-1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>AC/DC</h4>
                <p>HTML / CSS</p>
                <div class="portfolio-links">
                  <!-- Permet d'ouvrir le lien dans une nouvelle page -->
                  <a href="./acdc/index.html" target="_blank"><i class="bx bx-plus"></i></a>
                  <a href="./acdc/index.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bi bi-eye-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!-- API Voitures -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/alfa2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Voitures</h4>
                <p>API / JS</p>
                <div class="portfolio-links">
                  <!-- Permet d'ouvrir le lien dans une nouvelle page -->
                  <a href="./voitures/index.html" target="_blank"><i class="bx bx-plus"></i></a>
                  <a href="./voitures/index.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bi bi-eye-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- API Voitures et clients npm -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/couperVert.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Voitures et clients</h4>
                <p>API / JS</p>
                <div class="portfolio-links">
                  <!-- Permet d'ouvrir le lien dans une nouvelle page -->
                  <a href="./voituresEtClients/index.html" target="_blank"><i class="bx bx-plus"></i></a>
                  <a href="./voituresEtClients/index.html" class="portfolio-details-lightbox"
                    data-glightbox="type: external" title="Portfolio Details"><i class="bi bi-eye-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- API Cave -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/caveTonneau.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Gestion Cave à vin</h4>
                <p>API / JS</p>
                <div class="portfolio-links">
                  <!-- Permet d'ouvrir le lien dans une nouvelle page -->
                  <a href="./ProjetCave" target="_blank"><i class="bx bx-plus"></i></a>
                  <a href="./ProjetCave" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bi bi-eye-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/sdbm.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SDBM</h4>
                <p>PHP</p>
                <div class="portfolio-links">
                  <!-- Permet d'ouvrir le lien dans une nouvelle page -->
                  <a href="https://guillaume-rebourgeon.fr/projetSDBM/" target="_blank"><i class="bx bx-link"></i></a>
                  <a href="./projetSDBM" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bi bi-eye-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/formulaire.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Formulaire</h4>
                <p>PHP</p>
                <div class="portfolio-links">
                  <!-- Permet d'ouvrir le lien dans une nouvelle page -->
                  <a href="./Captcha" target="_blank"><i class="bx bx-link"></i></a>
                  <a href="./Captcha" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bi bi-eye-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-symfony">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Bieres.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SDBM Symfony</h4>
                <p>SYMFONY/PHP</p>
                <div class="portfolio-links">
                  <!-- Permet d'ouvrir le lien dans une nouvelle page -->
                  <a href="./sdbmSymfony/public/" target="_blank"><i class="bx bx-link"></i></a>
                  <a href="./sdbmSymfony/public/" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bi bi-eye-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-symfony">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/countries.png" class="img-fluid" alt="Map Monde">
              <div class="portfolio-info">
                <h4>SDBM Admin</h4>
                <p>SYMFONY/EasyAdmin</p>
                <div class="portfolio-links">
                  <!-- Permet d'ouvrir le lien dans une nouvelle page -->
                  <a href="./sdbmSmart/public/" target="_blank"><i class="bx bx-link"></i></a>
                  <a href="./sdbmSmart/public/" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bi bi-eye-fill"></i></a>
                </div>
              </div>
            </div>
          </div>


          <!--<div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                    class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        -->

          <!--ATTENTION NE PAS DETRUIRE METTRE EN COMMENTAIRE -->
          <!--
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                    class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        -->
          <!--Fin du dernier bloc-->

        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <!--Mettre 3 ou 4 citations de gens connu de la tech, enlever le titre-->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Citations</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/Oscar-Wilde-Portrait.webp" class="testimonial-img" alt="">
                <h3>Oscar Wilde</h3>
                <h4>Ecrivain irlandais</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  La beauté est dans les yeux de celui qui regarde
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/St-EX.jpg" class="testimonial-img" alt="">
                <h3>Antoine de Saint-Exupéry</h3>
                <h4>écrivain, poète, aviateur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fais de ta vie un rêve, et d'un rêve, une réalité.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/gandhi.jpg" class="testimonial-img" alt="">
                <h3>Gandhi</h3>
                <h4>Philosophe</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Vis comme si tu devais mourir demain. Apprends comme si tu devais vivre toujours.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/Hunter-S-Thompson.webp" class="testimonial-img" alt="">
                <h3>Hunter S.Thompson</h3>
                <h4>écrivain</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  La vie ne doit pas être un voyage en aller simple vers la tombe, avec l'intention d'arriver en toute
                  sécurité dans un
                  joli corps bien conservé, mais plutôt une embardée dans les chemins de traverse, dans un nuage de
                  fumée, de laquelle on
                  ressort usé, épuisé, en proclamant bien fort : 'quelle virée'.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/mr-robot.jpg" class="testimonial-img" alt="">
                <h3>Elliot Alderson</h3>
                <h4>Mr Robot</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Un bug n’est jamais qu’une erreur. Il représente quelque chose de plus grand. Une erreur de pensée. Ça
                  fait de vous qui
                  vous êtes.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>N'hésitez pas à me contacter, je vous répondrai dans les plus brefs délais.</p>
          <!-- <img src="./assets/img/en-construction.jpg" alt=""> -->
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Adresse :</h4>
                <p>Villefranche-Sur-Saône</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email :</h4>
                <p><a href="mailto:guillaume.rebourgeon@hotmail.fr">guillaume.rebourgeon@hotmail.fr</a></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Mobile :</h4>
                <p>06 58 99 27 51</p>
              </div>

              <div class="phone">
                <i class="bi bi-github"></i>
                <h4>
                  <a target="_blank" href="https://github.com/GuillaumeReb" class="githyb">GitHub</a>
                </h4>
              </div>

            </div>
          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="/" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nom" class="form-control" id="name" placeholder="Votre Nom" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="objet" id="subject" placeholder="Objet" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control"
                  name="message" rows="5" placeholder="Message :....." required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->

              <div class="my-3">
                  <?php if (isset($class)): ?>
                      <div class="<?php echo $class; ?>">
                          <?php echo $info; ?>
                      </div>
                  <?php endif; ?>
              </div>

              
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Guillaume Rebourgeon</h3>
      <p>Merci d'avoir pris le temps de découvrir mon site web, n'hésitez pas à laisser un message. À bientôt.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a target="_blank" href="https://github.com/GuillaumeReb" class="github"><i class="bi bi-github"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- SweetAlert2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.1/dist/sweetalert2.min.js"></script>


  <script>
        // Affichage de SweetAlert après la redirection
        <?php if (isset($_SESSION['mail_status'])): ?>
            Swal.fire({
                title: '<?php echo ($_SESSION['mail_status'] == 'success' ? 'Merci' : 'Erreur'); ?>',
                text: '<?php echo $_SESSION['mail_message']; ?>',
                icon: '<?php echo ($_SESSION['mail_status'] == 'success' ? 'success' : 'error'); ?>',
                confirmButtonText: 'OK'
            });
            // Effacer les messages de session après affichage
            <?php unset($_SESSION['mail_status']); unset($_SESSION['mail_message']); ?>
        <?php endif; ?>
    </script>

</body>

</html>
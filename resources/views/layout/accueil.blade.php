<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Miam Sertem</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/ok.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy - v1.1.0
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  @include('layout.header')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Miam-Sertem<br>La platforme de restauration de Sertem Groupe</h2>
          <p data-aos="fade-up" data-aos-delay="100">Cette application vous permet de passer commande, de suivre votre commande.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#menu" class="btn-book-a-table">Menu de la semaine</a>
            <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/yassa.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    

   

   

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Les Menus par semaine</h2>
          <p><span>Les délices de Maman Yass</span></p>
        </div>
<!-- <h1><span>Lundi</span></h1> -->
        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Sénégalais</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Européens</h4>
            </a><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>Catégories</p>
              <h3>Sénégalais</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/cbon.png" class="glightbox"><img src="assets/img/menu/cbon.png" class="menu-img img-fluid" alt=""></a>
                <h4>C'est Bon</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  2000 Fcfa
                </p>
                <button type="button" class="btn btn-danger">Commander</button>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/dakhine.png" class="glightbox"><img src="assets/img/menu/dakhine.png" class="menu-img img-fluid" alt=""></a>
                <h4>Dakhine</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  2000 Fcfa
                </p>
                <button type="button" class="btn btn-danger">Commander</button>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/mafe.png" class="glightbox"><img src="assets/img/menu/mafe.png" class="menu-img img-fluid" alt=""></a>
                <h4>Mafe</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  2000 Fcfa
                </p>
                <button type="button" class="btn btn-danger">Commander</button>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/thieprouge.png" class="glightbox"><img src="assets/img/menu/thieprouge.png" class="menu-img img-fluid" alt=""></a>
                <h4>Thiep Dieun Bou Khonk</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  2000 Fcfa
                </p>
                <button type="button" class="btn btn-danger">Commander</button>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/thiepblanc.png" class="glightbox"><img src="assets/img/menu/thiepblanc.png" class="menu-img img-fluid" alt=""></a>
                <h4>Thiep Dieun Bou Wekh</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  2000 Fcfa
                </p>
                <button type="button" class="btn btn-danger">Commander</button>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/yassapoulet.jpg" class="glightbox"><img src="assets/img/menu/yassapoulet.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Yassa Poulet</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  2000 Fcfa
                </p>
                <button type="button" class="btn btn-danger">Commander</button>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <p>Categories</p>
              <h3>Europeens</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/lottes .jpg" class="glightbox"><img src="assets/img/menu/lottes .jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Lottes Pannes + Frites</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  2500 Fcfa
                </p>
                <button type="button" class="btn btn-danger">Commander</button>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/braises.jpg" class="glightbox"><img src="assets/img/menu/braises.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Poissons braises</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  2500 Fcfa
                </p>
                <button type="button" class="btn btn-danger">Commander</button>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/croquette.jpg" class="glightbox"><img src="assets/img/menu/croquette.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Croquette de viande + Sauce</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  2500 Fcfa
                </p>
                <button type="button" class="btn btn-danger">Commander</button>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/duchesses.jpg" class="glightbox"><img src="assets/img/menu/duchesses.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Poulet Pommes duchesses</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  2500 Fcfa
                </p>
                <button type="button" class="btn btn-danger">Commander</button>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/filet.jpg" class="glightbox"><img src="assets/img/menu/filet.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Filet de beauf</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  2500 Fcfa
                </p>
                <button type="button" class="btn btn-danger">Commander</button>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/couscous.jpg" class="glightbox"><img src="assets/img/menu/couscous.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Couscous au Poulet</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  2500 Fcfa
                </p>
                <button type="button" class="btn btn-danger">Commander</button>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Breakfast Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->



  

   

  </main><!-- End #main -->
    @include('layout.footer')
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>

</body>

</html>


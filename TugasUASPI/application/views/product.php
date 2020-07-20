<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BizLand Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/favicon.png') ?>" rel="icon">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/icofont/icofont.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/owl.carousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/venobox/venobox.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
</head>

<body>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
    </div>
  </div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="<?php echo site_url('welcome/index')?>">Arduino Crazyland<span>.</span></a></h1>
    </div>
  </header><!-- End Header -->

<br><br><br><br>
  <main id="main">
  <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>PRODUCT</h2>
          <h3>Arduino <span>Product</span></h3>
          <p>Tersedia berbagai macam IC dan Module yang di peruntukkan untuk Arduino.</p>
        </div>

        <div class="row">

        <?php foreach ($products as $product): ?>    
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="<?php echo base_url('upload/product/'.$product->image) ?>" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4><?php echo $product->name ?></h4>
                <span>Rp.<?php echo $product->price ?></span>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

      </div>
    </section><!-- End Team Section -->
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span><?php echo SITE_NAME ?></span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/jquery.easing/jquery.easing.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/waypoints/jquery.waypoints.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/counterup/counterup.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/owl.carousel/owl.carousel.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/venobox/venobox.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/aos/aos.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js') ?>"></script>

</body>

</html>
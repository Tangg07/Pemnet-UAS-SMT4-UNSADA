<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo SITE_NAME ?> - Index</title>
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
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo site_url('welcome/index')?>">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Products</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="<?php echo site_url('welcome/product')?>"><b style="color:#27ae60;">STORE</b></a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>Arduino Crazyland</spa>
      </h1>
      <h2>Kami Adalah Penyedia Layanan Pencetakan Desain PCB Yang di Desain oleh Anda</h2>
      <div class="d-flex">
        <a href="<?php echo site_url('welcome/product')?>" class="btn-get-started scrollto">Cek Product</a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Flexibility</a></h4>
              <p class="description">Pemesanan PCB bisa berbentuk apa saja Tergantung Desain Anda</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Save Data</a></h4>
              <p class="description">Data PCB atau Module yang kami kirim dijamin Aman</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Work Fast</a></h4>
              <p class="description">Pengerjaan PCB Cepat 1x24 Jam ketika Desain PCB Dikirim</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">World Shipping</a></h4>
              <p class="description">Pengiriman bisa ke seluruh Dunia melalui berbagai Kurir yang terpercaya</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang</h2>
          <h3>Temukan Informasi <span>Tentang Kami</span></h3>
          <p>Kami adalah perusahaan yang berjalan pada bidang Teknologi terutama Alat atau Module Arduino</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="<?php echo base_url('assets/img/about.jpg')?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>Arduino CrazyLand.</h3>
            <p class="font-italic">
            Tujuan Kami membuat Arduino CrazyLand adalah sebagai Perusahaan yang mampu membantu Komunitas untuk mengembangkan
            Produknya yang berbasis Arduino dengan mencetak PCB yang sesuai dengan kebutuhan mereka.
            </p>
            <ul>
              <li>
                <i class="bx bx-store-alt"></i>
                <div>
                  <h5>Market Share</h5>
                  <p>Menjadi Perusahaan yang dapat Menjangkau seluruh dunia</p>
                </div>
              </li>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h5>Assembly Service</h5>
                  <p>After sales yang untuk semua user yang melakukan Transaksi</p>
                </div>
              </li>
            </ul>
            <p>
              Menjadikan kepuasan konsumen sebagai tujuan yang amat penting dan selalu di utamakan 
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Service <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">After Sales <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Flexibility <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Reliable <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Cheap Price <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Problem PCB <i class="val">15%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">232</span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">521</span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">1,463</span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">15</span>
              <p>Problem</p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container" data-aos="zoom-in">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url('assets/img/clients/client-1.png')?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url('assets/img/clients/client-2.png')?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url('assets/img/clients/client-3.png')?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url('assets/img/clients/client-4.png')?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url('assets/img/clients/client-5.png')?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url('assets/img/clients/client-6.png')?>" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <h3>Check our <span>Services</span></h3>
          <p>Jika anda membeli di Arduino CrazyLand, Anda akan mendapatkan benefit.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="#">Low Minimums</a></h4>
              <p>Hampir tidak ada kecacatan dalam produk yang kami kirimkan</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="#">Best Value</a></h4>
              <p>Mendapatkan Harga terbaik dibandingkan oleh kompetitor</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">High delivery rate</a></h4>
              <p>Pengiriman yang sangat cepat dan Barang aman</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Fast Turnarounds</a></h4>
              <p>pengembalian Barang yang cepat, Jika Ada cacat</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">On-time Shipping</a></h4>
              <p>Pengiriman tepat waktu dan Keamanan Barang</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Products service</a></h4>
              <p>Service product yang terjamin, Jika ada sesuatu yang cacat.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="<?php echo base_url('assets/img/testimonials/testimonials-1.jpg')?>" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Dengan adanya Arduino CrazyLand, Saya sangat dimudahkan untuk membuat alat yang dibutuhkan oleh perusahaan kami.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?php echo base_url('assets/img/testimonials/testimonials-2.jpg')?>" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Kemudahan dalam membuat Desain PCB sendiri yang sesuai kebutuhan kita. Terima Kasih Arduino CrazyLand
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?php echo base_url('assets/img/testimonials/testimonials-3.jpg')?>" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Menjual Produk dari Arduino CrazyLand sangat menguntungkan dengan harga yang dibawah pasaran namun kualitas sangat baik
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?php echo base_url('assets/img/testimonials/testimonials-4.jpg')?>" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Dengan adanya Arduino CrazyLand sangat membantu pekerjan saya sebagai Freelance Elektronika
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?php echo base_url('assets/img/testimonials/testimonials-5.jpg')?>" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Memesan PCB di Arduinp CrazyLand sangat amat mudah dan pengiriman yang sangat cepat dan aman  
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Products</h2>
          <h3>Check our <span>Products</span></h3>
          <p>Module, IC, Arduino yang terpopuler</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Analog</li>
              <li data-filter=".filter-card">Module</li>
              <li data-filter=".filter-web">IC</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="<?php echo base_url('assets/img/portfolio/portfolio-1.jpg')?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Arduino</h4>
              <p>Analog</p>
              <a href="<?php echo base_url('assets/img/portfolio/portfolio-1.jpg')?>" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="<?php echo site_url('welcome/product')?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="<?php echo base_url('assets/img/portfolio/portfolio-2.jpg')?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Shield v1</h4>
              <p>IC</p>
              <a href="<?php echo base_url('assets/img/portfolio/portfolio-2.jpg')?>" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="<?php echo site_url('welcome/product')?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="<?php echo base_url('assets/img/portfolio/portfolio-3.jpg')?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Micro SD</h4>
              <p>Analog</p>
              <a href="<?php echo base_url('assets/img/portfolio/portfolio-3.jpg')?>" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="<?php echo site_url('welcome/product')?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="<?php echo base_url('assets/img/portfolio/portfolio-4.jpg')?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Shield Module</h4>
              <p>Module</p>
              <a href="<?php echo base_url('assets/img/portfolio/portfolio-4.jpg')?>" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="<?php echo site_url('welcome/product')?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="<?php echo base_url('assets/img/portfolio/portfolio-5.jpg')?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sound IC</h4>
              <p>IC</p>
              <a href="<?php echo base_url('assets/img/portfolio/portfolio-5.jpg')?>" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="<?php echo site_url('welcome/product')?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="<?php echo base_url('assets/img/portfolio/portfolio-6.jpg')?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Digital Count</h4>
              <p>Analog</p>
              <a href="<?php echo base_url('assets/img/portfolio/portfolio-6.jpg')?>" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="<?php echo site_url('welcome/product')?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="<?php echo base_url('assets/img/portfolio/portfolio-7.jpg')?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Amplifier 3W</h4>
              <p>Module</p>
              <a href="<?php echo base_url('assets/img/portfolio/portfolio-7.jpg')?>" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="<?php echo site_url('welcome/product')?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="<?php echo base_url('assets/img/portfolio/portfolio-8.jpg')?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Easy Shield v1</h4>
              <p>Module</p>
              <a href="<?php echo base_url('assets/img/portfolio/portfolio-8.jpg')?>" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="<?php echo site_url('welcome/product')?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="<?php echo base_url('assets/img/portfolio/portfolio-9.jpg')?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Dot Metrix</h4>
              <p>IC</p>
              <a href="<?php echo base_url('assets/img/portfolio/portfolio-9.jpg')?>" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="<?php echo site_url('welcome/product')?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <h3>Frequently Asked <span>Questions</span></h3>
          <p>Pertanyaan yang sering ditanyakan.</p>
        </div>

        <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

          <li>
            <a data-toggle="collapse" class="" href="#faq1">Kenapa Harus Arduino CrazyLand? <i class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse show" data-parent=".faq-list">
              <p>
              Arduino CrazyLand adalah produsen yang mengkhususkan diri dalam prototipe PCB, produksi volume rendah dan layanan Majelis PCB di bawah satu atap. Kami menawarkan PCB pergantian cepat dengan harga yang sangat murah. Ribuan insinyur, mahasiswa, dan penggemar menggunakan PCB kami untuk pekerjaan dan studi sehari-hari mereka. Arduino CrazyLand berusaha keras untuk menjadi produsen yang paling mudah bagi Anda untuk bekerja dengannya. Arduino CrazyLand - Prototipe PCB dengan Cara Mudah!              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">Jam berapa Anda Beroperasi? <i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
              Kami memiliki tenaga penjualan yang menanggapi permintaan email Anda atau memproses pesanan online Anda setelah kami menerimanya. Kami mulai meninjau detail Anda setiap kali pesanan atau email Anda sampai kepada kami. Kami bekerja 7/24/365.              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Bagaimana Anda bisa memproduksi PCB (Prototipe dan produksi) dengan harga murah? <i class="icofont-simple-up"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
              Visi Arduino CrazyLand adalah menjadi produsen termudah di dunia untuk semua jenis pembuatan PCB, dan ini menyiratkan bahwa Arduino CrazyLand harus bertanggung jawab untuk menghemat uang Anda, itulah sebabnya kami HARUS menjaga harga tetap rendah. Banyaknya pesanan harian kami memastikan kami dapat sangat mengurangi pengeluaran bahan dan biaya tenaga kerja. Selain itu, kami terus meningkatkan peralatan kami dan mengembangkan sistem teknis dan manajerial yang beradaptasi dengan pemasangan mesin yang fleksibel yang cocok untuk membuat jumlah PCB yang sangat kecil tanpa memengaruhi waktu, biaya, dan kualitas lead time. Semua faktor ini membuat Arduino CrazyLand tujuan lengkap Anda dari PCB dengan biaya rendah.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">Bagaimana cara kerja kebijakan privasi Anda? <i class="icofont-simple-up"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
              Kami menghormati privasi semua pelanggan kami. Kami berjanji kami tidak akan pernah membagikan informasi pribadi Anda dengan pihak ketiga mana pun.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">Apa itu ITAR?? <i class="icofont-simple-up"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
              ITAR, Peraturan Lalu Lintas Internasional dalam Senjata, mengontrol ekspor dan impor artikel dan layanan terkait pertahanan pada Daftar Munisi Amerika Serikat (USML). Mohon informasikan kepada kami jika PCB Anda memenuhi persyaratan ITAR atau tidak setelah Anda melakukan pemesanan bersama kami. Untuk detail ITAR, silakan kunjungi http://en.wikipedia.org/wiki/ITAR dan http://pmddtc.state.gov/
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">Apakah PCB Anda Sesuai RoHS? <i class="icofont-simple-up"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
              Yes. But we also offer leaded PCBs.              
            </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Hubungi Kami</span></h3>
          <p>Kami siap melayani anda sepanjang waktu oleh Customer Service kita yang handal.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat</h3>
              <p>Jl. Taman Malaka Selatan No.22, Pd. Klp., Kec. Duren Sawit, Kota Jakarta Timur</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>contact@arduinoland.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>No telpon</h3>
              <p>021-65489665486</p>
            </div>
          </div>
        </div>
      </div>
    </section>

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
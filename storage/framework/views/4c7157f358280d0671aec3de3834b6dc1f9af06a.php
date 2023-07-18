<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
      <title>DISPAPERTA | Kabupaten Batang</title>
      <meta content="" name="description">
      <meta content="" name="keywords">

      <!-- Favicons -->
      <link href="<?php echo e(url('/images/icon.png')); ?>" rel="icon">
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

      <!-- Vendor CSS Files -->
      <link href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
      <link href="<?php echo e(asset('assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('assets/vendor/icofont/icofont.min.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('assets/vendor/animate.css/animate.min.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('assets/vendor/venobox/venobox.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">
      <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
      <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.4.0/mapbox-gl.css' rel='stylesheet' />
      <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.4.0/mapbox-gl.js'></script>
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

      <!-- Template Main CSS File -->
      <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">
      <style type="text/css">
            .mapboxgl-popup {
                max-width: 400px;
                font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
            }
            .mapboxgl-popup-content {
                position: relative;
                background: #fff;
                border-radius: 3px;
                box-shadow: 0 1px 2px rgb(0 0 0 / 10%);
                padding: 10px 10px 15px;
                pointer-events: auto;
                color: #000000;
            }
            #map {
                width: 100%;
                height: 500px;
            }
            .marker {
                background-image: url('<?php echo e(asset('images/point.png')); ?>');
                background-repeat:no-repeat;
                background-size:100%;
                width: 50px;
                height: 100px;
                cursor: pointer; 
            }
            .dataTables_wrapper .dataTables_paginate .paginate_button { 
                box-sizing: border-box;
                display: inline-block;
                min-width: 1.5em;
                padding: 0px 0px;
                margin-left: 2px;
                text-align: center;
                text-decoration: none !important;
                cursor: pointer;
                *cursor: hand;
                color: #FFF !important;
                border: 1px solid transparent;
                border-radius: 2px;
            }
            table.dataTable thead {background-color:#FFF}
            .dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter, .dataTables_wrapper .dataTables_info, .dataTables_wrapper .dataTables_processing, .dataTables_wrapper .dataTables_paginate {
                  color: #FFF !important;
              }
          a {
            text-decoration: none;
          }
          #topbar {
            background-color: #7e7e7e;
          }
          .dropdown-toggle,
          .dropdown-menu {
              border-radius: 0px !important;
              background-color: #393837;
             /* color : #000;*/
          }
          /*.dropdown-item {
            color: #000;
          }*/
          .dropdown-item:hover {
              background-color: #cda45e;
          }
          .dropdown:hover>.dropdown-menu {
            display: block;
          }
          /*.dropdown-item:hover>.dropdown-submenu {
            display: block;
          }*/
          .dropdown-submenu {
            display: none;
          }
          #hdbidang {
              color: black;
              position: relative;
              margin: 10px auto;
              padding: 20px;
              max-width: 90%;
              background-color: rgba(200,200,255,.4);
              height: 120%;
          }
          .bdt {
              background-color: rgba(255,190,190,.8);
              position: absolute;
              margin-left: auto;
              margin-right: auto;
              margin-top: auto;
              margin-bottom: auto;
              left: 0;
              right: 0;
              top: 5px;
              bottom: 5px;
          }
          .spbidang1 {
              color: #FFF;
          }
          .spbidang2 {
              margin-left: 35px;
              color: #FFF;
          }
          .spbidang3 {
              margin-left: 33px;
              color: #FFF;
          }
          #header .btn-menu, #header .btn-book {
            font-weight: 600;
            font-size: 13px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            display: inline-block;
            padding: 12px 30px;
            border-radius: 50px;
            transition: 0.3s;
            line-height: 1;
            color: white;
            border: 2px solid #cda45e;
        }

              img {
                max-width: 100%;
                width: 1000px !important;
                object-fit: cover;
                object-position: center;
              }
              
            @media  only screen and (max-width: 480px) {
              img {
                width: 100%;
              }
            }
            @media  only screen and (max-width: 1080px) {
              img {
                width: 900px !important;
              }
            }
      </style>

      <!-- =======================================================
      * Template Name: Restaurantly - v1.2.1
      * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
      * Author: BootstrapMade.com
      * License: https://bootstrapmade.com/license/
      ======================================================== -->
</head>
<body class="antialiased">

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-phone"></i> (0285)391902
        <i class="icofont-envelope"></i> dispaperta@batangkab.go.id
        <i class="icofont-building"></i> Jl. Ahmad Yani No. 943 Batang, Jawa Tengah
        <span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i> Senin - Jum'at : 07:00 - 16:00</span>
      </div>
    </div>
  </div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="<?php echo e(url('/')); ?>">DISPAPERTA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="dropdown" data-toggle="dropdown-menu">
            <a href="#">
              Profil&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-down"></i>
            </a>
            <ul class="dropdown-menu">
                
                <?php if(Request::is('main/*')): ?>
              <li class="dropdown-item"><a href="<?php echo e(url('/')); ?>#tentang">Tentang</a></li>
              <li class="dropdown-item"><a href="<?php echo e(url('/')); ?>#visi">Visi Misi</a></li>
                <?php else: ?>
              <li class="dropdown-item"><a href="#tentang">Tentang</a></li>
              <li class="dropdown-item"><a href="#visi">Visi Misi</a></li>
                <?php endif; ?>
                
              <li class="dropdown-item" data-toggle="dropdown-submenu">
                <a href="#bidang">
                  Bidang&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i>
                </a>
                <ul class="dropdown-submenu">
                  <li class="dropdown-item"><a href="<?php echo e(url('/main/sekretariat')); ?>">Sekretariat</a></li>
                  <li class="dropdown-item"><a href="<?php echo e(url('/main/ketahanan-pangan')); ?>">Ketahanan Pangan</a></li>
                  <li class="dropdown-item"><a href="<?php echo e(url('/main/tanaman-pangan')); ?>">Tanaman Pangan</a></li>
                  <li class="dropdown-item"><a href="<?php echo e(url('/main/hortikultura')); ?>">Hortikultura</a></li>
                  <li class="dropdown-item"><a href="<?php echo e(url('/main/perkebunan')); ?>">Perkebunan</a></li>
                  <li class="dropdown-item"><a href="<?php echo e(url('/main/pskp')); ?>">PSKP</a></li>
                </ul>
              </li>
              
               <?php if(Request::is('main/*')): ?>
              <li class="dropdown-item"><a href="<?php echo e(url('/')); ?>#tupoksi">Tugas dan Fungsi</a></li>
              <li class="dropdown-item"><a href="<?php echo e(url('/')); ?>#struktur">Struktur Organisasi</a></li>
               <?php else: ?>
             <li class="dropdown-item"><a href="#tupoksi">Tugas dan Fungsi</a></li>
              <li class="dropdown-item"><a href="#struktur">Struktur Organisasi</a></li>
              <?php endif; ?>
            </ul>
          </li>
          <li><a href="<?php echo e(url('/main/gapoktan')); ?>">Gapoktan</a></li>
          <li><a href="<?php echo e(url('/main/download')); ?>">Download</a></li>
          <li><a href="<?php echo e(url('/main/harga')); ?>">Harga Pasar</a></li>
          <li><a href="<?php echo e(url('/main/gis')); ?>">GIS Pertanian</a></li>
          <li><a href="<?php echo e(url('/sikep')); ?>">SIKEP</a></li>
          <li><a href="<?php echo e(url('https://dispaperta.batangkab.go.id/ppid')); ?>" target="_blank">PPID</a></li>
          <li class="book-a-table text-center"><a href="<?php echo e(url('/main/login')); ?>">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <?php if(Request::is('main/*')): ?>
    <?php echo $__env->yieldContent('content'); ?>
  <?php else: ?>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-8">
              <h1>Dinas Pangan dan Pertanian<br/> <span>Kabupaten Batang</span></h1>
            </div>
            <div class="col-lg-4 d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="200">
            </div>
    
          </div>
        </div>
      </section><!-- End Hero -->

      <!-- ======= Events Section ======= -->
    <section id="artikel" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>&nbsp;</p>
        </div>

        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
              <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="swiper-slide">
                <div class="row event-item">
                  <div class="col-lg-6">
                    <img src="<?php echo $articles['images']; ?>" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3><?php echo e($articles['judul']); ?></h3>
                    <div class="price">
                      <p><span>&nbsp;</span></p>
                    </div>
                    <p class="fst-italic">
                      <?php echo $articles['content']; ?>

                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= About Section ======= -->
    <section id="tentang" class="about">
      <div class="container" data-aos="fade-up">
          
        <div class="section-title">
          <p>Profil</p>
        </div>
        
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="<?php echo e(asset('images/dispaperta2018.jpg')); ?>" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <p style="margin-top:-60px">
             
            <p>&nbsp;</p>
            
            <p>Peraturan daerah no. 8 tahun 2016 tentang pembentukan dan susunan perangkat daerah.<br />
            Peraturan Bupati no. 53 tahun 2016 tentang kedudukan suatu organisasi, tugas dan fungsi serta tatakerja Dinas Pangan dan Pertanian Kabupaten Batang Dispaperta adalah suatu bentuk perangkat daerah di bidang Pangan dan Pertanian.</p>
            
            <p>&nbsp;</p>
            
            <h3><strong>Dinas Pangan dan Pertanian (DISPAPERTA) Kab. Batang</strong></h3>
            
            <p>&nbsp;</p>
            
            <p>Alamat &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Jl. Ahmad Yani No. 943 Batang</p>
            
            <p>Telepon&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (0285)391902</p>
            
            <p>Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;dispaperta@batangkab.go.id</p>
            
            <p>WebSite &nbsp; &nbsp; &nbsp; &nbsp; dispaperta.batangkab.go.id</p>
            
            <p>Kode Pos &nbsp; &nbsp; &nbsp;&nbsp; 51216</p>
            
            <p>&nbsp;</p>
            
            <h3><strong>Pimpinan</strong></h3>
            
            <p>&nbsp;</p>
            
            <p>Nama &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ir. SUSILO HERU YUWONO,MM</p>
            
            <p>NIP &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; 1964050719900031007</p>
            
            <p>Jabatan&nbsp; &nbsp; &nbsp; &nbsp; Kepala Dinas Pangan dan Pertanian</p>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Visi Section ======= -->
    <section id="visi" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>Visi Misi</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Visi</h3>
            <p class="fst-italic">
              Menjadi Lembaga Pengelola Sektor Ketahanan Pangan dan Pertanian yang Profesional dalam melayani masyarakat, Amanah, Aspiratif dan Inovatif demi Terwujudnya Peningkatan Kesejahteraan Petani
            </p>
          </div>
          
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3 style="margin-left:30px;">Misi</h3>
            <p class="fst-italic">
              <ul style="list-style-type:none;">
              <li><i class="bi bi-check-circle"></i> Meningkatkan kualitas dan kuantitas hasil pangan dan pertanian menuju industrialisasi hasil pertanian berbasis sumberdaya lokal dan ramah lingkungan</li>
              <br>
              <li><i class="bi bi-check-circle"></i> Menciptakan sistem agribisnis yang berorientasi pasar dengan menumbuhkan usaha ekonomi produktif dan penciptaan lapangan kerja di pedesaan serta mengurangi kemiskinan</li>
              <br>
              <li><i class="bi bi-check-circle"></i> Mewujudkan kondisi pangan yang cukup, aman, beragam, bergizi, merata dan terjangkau bagi masyarakat</li>
              <br>
              <li><i class="bi bi-check-circle"></i> Meningkatkan pengetahuan, ketrampilan dan sikap petani melalui pendekatan kelompok</li>
              <br>
              <li><i class="bi bi-check-circle"></i> Meningkatkan kualitas kinerja dan pelayanan aparatur pemerintah bidang pertanian yang amanah, aspiratif dan inovatif</li>
            </ul>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Visi Section -->
    
    <!-- ======= Tupoksi Section ======= -->
    <section id="tupoksi" class="us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tugas Pokok dan Fungsi</h2>
          <p>Kepala Dinas Pangan dan Pertanian Kabupaten Batang</p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="200">

          <div class="col-md-12">
            <h3 style="margin-left:30px;">Tugas Pokok</h3>
            <p class="fst-italic" style="margin-left:30px;">
              Dispaperta mempunyai tugas membantu Bupati melaksanakan urusan pemerintahan bidang pangan dan pertanian dan tugas pembantuan yang diberikan.
            </p>
          </div>
        </div>
        <br>
        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-md-12">
            <h3 style="margin-left:30px;">Fungsi</h3>
            <p class="fst-italic">
              <ul style="list-style-type:none;">
              <li><i class="bi bi-check-circle"></i> Meningkatkan kualitas dan kuantitas hasil pangan dan pertanian menuju industrialisasi hasil pertanian berbasis sumberdaya lokal dan ramah lingkungan</li>
              <br>
              <li><i class="bi bi-check-circle"></i> Merumuskan kebijakan teknis bid pangan dan pertanian</li>
              <br>
              <li><i class="bi bi-check-circle"></i> Melaksanakan kebijakan teknis bid pangan dan pertanian</li>
              <br>
              <li><i class="bi bi-check-circle"></i> Menyelenggarakan urusan pemerintahan dan pelayanan umum di bid pangan dan pertanian</li>
              <br>
              <li><i class="bi bi-check-circle"></i> Pembinaan dan pelaksanaan tugas bid pangan dan pertanian</li>
              <br>
              <li><i class="bi bi-check-circle"></i> Pengoordinasian dan pemetaan kawasan rawan pangan</li>
              <br>
              <li><i class="bi bi-check-circle"></i> Pengelolaan rekomendasi teknis perizinan di bid Pangan dan pertanian</li>
              <br>
              <li><i class="bi bi-check-circle"></i> Penyebaran informasi di bidang Pangan dan Pertanian</li>
              <br>
              <li><i class="bi bi-check-circle"></i> Pembinaan terhadap UPTD dalam lingkup Dispaperta</li>
              <br>
              <li><i class="bi bi-check-circle"></i> Penyelenggaraan kesekretariatan Dispaperta.</li>
            </ul>
            </p>
          </div>
        </div>
      </div>
    </section><!-- End Tupoksi Section -->
    
    <!-- ======= Struktur Section ======= -->
    <section id="struktur" class="special">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Struktur Organisasi</h2>
          <p>Dinas Pangan dan Pertanian Kabupaten Batang</p>
        </div>
        <br>
        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-md-12 align-items-center">
            <img src="<?php echo e(asset('images/STRUKTUR_ORGANISASI_1.jpg')); ?>">
          </div>
        </div>
      </div>
    </section><!-- End Struktur Section -->

  <?php endif; ?>
  
  <!--<div id="preloader"></div>-->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa fa-arrow-up"></i></a>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  

  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/jquery.easing/jquery.easing.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/venobox/venobox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/jquery-ui-1.13.0.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/aos/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/php-email-form/validate.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/owl.carousel/owl.carousel.min.js')); ?>"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>      
  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script>
  function scrollTo(id) {
    var elmnt = document.getElementById(id);
    elmnt.scrollIntoView();
  }
</script>
  <script type="text/javascript">
  $(document).ready(function () {

     var swiper = new Swiper(".swiper", {
       spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
      
   $(function () {
       $('body').on('click.tab.data-api', '[data-bs-toggle="tab"], [data-toggle="pill"]', function (e) {
         e.preventDefault()
         $(this).tab('show')
         //alert(this);
       })
     })
     
      $('[data-toggle="dropdown-submenu"]').on("click", function(e){
          $('.dropdown-submenu').attr('style','display:inline-grid');
        e.stopPropagation();
        e.preventDefault();
      });
  });
</script>
    </body>
</html>
<?php /**PATH D:\xampp\htdocs\dispaperta\resources\views/main/index.blade.php ENDPATH**/ ?>
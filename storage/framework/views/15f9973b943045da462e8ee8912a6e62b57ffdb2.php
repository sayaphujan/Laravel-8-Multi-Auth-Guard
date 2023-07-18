<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>SIKEP | Kabupaten Batang</title>
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
                background-image: url('../images/point.png');
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
      <h1 class="logo mr-auto"><a href="<?php echo e(url('/')); ?>">SIKEP</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
            <li><a href="#tentang">Tentang</a></li>
            <li><a href="<?php echo e(url('/main/gapoktan')); ?>">Gapoktan</a></li>
            <li class="book-a-table text-center"><a href="<?php echo e(url('/sikep/login')); ?>">Login</a></li>
            <!--<li class="book-a-table text-center"><a href="<?php echo e(url('/sikep/register')); ?>">Register</a></li>-->
        </ul>
         
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
   <?php
   $url= '';
            $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $uri_segments = explode('/', $uri_path);
            
            if(isset($uri_segments[2]) && isset($uri_segments[3])){
                if($uri_segments[2] == 'sikep' && $uri_segments[3] == 'register'){
                    $url = "Register";
                }else if($uri_segments[2] == 'sikep' && $uri_segments[3] == 'login'){
                    $url = "Login";
                }
            }
    ?>
  <?php if($url == 'Register' || $url == 'Login'): ?>
    <?php echo $__env->yieldContent('content'); ?>
  <?php else: ?>
  <!-- ======= Hero Section ======= -->
  <section id="sikephero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-left">
      <div class="row">
        <div class="col-lg-8">
          <h1>Sistem Informasi Kelembagaan Petani<br/> <span>Kabupaten Batang</span></h1>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="200">
        </div>

      </div>
    </div>
  </section><!-- End Hero -->
  
    <!-- ======= About Section ======= -->
    <section id="tentang" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang</h2>
          <p>SIKEP</p>
        </div>
        
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#tab-1">Dasar Hukum</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Tahapan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Kelengkapan Dokumen</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active" id="tab-1">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <div align="justify">
                      <ol>
                          <li>Undang-ungang No. 16 Tahun 2006, tentang Sistem Penyuluhan Pertanian Perikanan dan Kehutanan.</li>
                          <li>Permentan No. 82 Tahun 2013, tentang Pedoman Pembentukan Kelompok Tani dan Gabungan Kelompok Tani.</li>
                      </ol>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <p>Tahapan bagaimana mendaftarkan kelompok tani ke BPP Pertanian yang ada dikelurahan ataupun kecamatan Anda, berikut adalah syarat yang harus disiapkan sebelum mendaftar.</p>
                    <ol>
                        <li>Memiliki minimal 20 Keanggotaan yang terdiri dari ketua, sekretaris, bendahara serta anggota kelompok tani</li>
                        <li>Memiliki absesnsi rapat kelompok dan berita acara dalam pembentukanya.</li>
                        <li>Menyiapkan data KTP Ketua, Sekretaris, dan Bendahara</li>
                        <li>Foto 3x4 masing-masing dua lembar bagi Ketua, Sekretaris, Bendahara</li>
                     </ol>
                     <p>Selanjutnya datang ke BPP di kecamatan dan melakukan pendaftaran, disana akan diberikan blanko yang harus anda isi sesuai data seluruh anggota kelompok tani. Setelah semua terisi dan memberikanya kembali kepada petugas BPP. Tunggu informasi diterima atau tidak. <a href="<?php echo e(url('/sikep/pembentukan')); ?>">KLIK UNTUK MELIHAT PEMBENTUKAN KELOMPOK TANI</a></p>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <div align="justify">
                    <ol>
                        <li>  Pilih beberaa orang yang menurut Anda orang tersebut bisa bertanggung jawab, dan bisa diatur dalam kelompok nantinya. Karena setiap kelompok tani memilik aturan-aturan yang sudah diputuskan bersama. Maka pilihlah anggota yang bisa bekerja sama dan berani bertanggung jawab</li>
                        <li>  Undang anggota untuk bermusyawarah bersama, guna membahas perencanaan dalam pembentukan kelompok tani yang akan direncanakan. Dari sisi ini anda sudah bisa menilai seberapa rajinkah ereka mau diajak bermusyawarah.</li>
                         <li>  Buatlah absensi rapat yang akan sangat berguna dalam pengurusan administrasi pembentukan kelompok tani.</li>
                          <li>  Buat kesepakatan bersama tentang apa yang akan dibentuk baik dibidang Tan. Pangan, Hortikultura, Perkebunan, Peternakan dsb. Dan memilih nama kelompok tani sesuai kesepakatan bersama.</li>
                           <li>  Buatlah sebuah komitmen kepada setiap anggota, bahwa dalam sebuah kelompok harus benar-benar mampu bekerja sama dan berani berkorban baik secara materil maupun moril. Dengan demikian kelompok tani akan berjalan optimal sesuai harapan</li>
                           <li>  Kemudian susunan sebuah AD-Art, yang berguna sebagai pedoman dalam melaksanakan tugas dan kewajiban sebagai anggota.</li>
                           <li>  Kumpulkan semua kartu penduduk (KTP) anggota. Selain untuk arsip bisa digunakan sebagai syarat-syarat keperluan lainya dalam kelompok tani. </li>
                      </ol>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  <?php endif; ?>
  
  <!--<div id="preloader"></div>-->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa fa-arrow-up"></i></a>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  

  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/jquery.easing/jquery.easing.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/venobox/venobox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/aos/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/php-email-form/validate.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/owl.carousel/owl.carousel.min.js')); ?>"></script>
        
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
<?php /**PATH D:\xampp\htdocs\dispaperta\resources\views/sikep/index.blade.php ENDPATH**/ ?>
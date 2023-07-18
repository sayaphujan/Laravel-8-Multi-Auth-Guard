<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e('PTA | PDAM Kendal'); ?></title>
    <link rel="icon" href="<?php echo e(asset('assets/dist/img/pdamkendal.png')); ?>">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/maps.css')); ?>" rel="stylesheet">

<!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/templatemo-chain-app-dev.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/animated.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.css')); ?>">
    
    <style type="text/css">
    
select[readonly] {
  background: #eee; /*Simular campo inativo - Sugestão @GabrielRodrigues*/
  pointer-events: none;
  touch-action: none;
}  
      #header {
          background: rgba(12, 11, 9, 0.6);
          border-bottom: 1px solid rgba(12, 11, 9, 0.6);
          transition: all 0.5s;
          z-index: 997;
          padding: 15px 0;
          top: 40px;
      }

      .fixed-top {
          position: fixed;
          top: 0;
          right: 0;
          left: 0;
          z-index: 1030;
      }

      #topbar {
          background-color: #7e7e7e;
          height: 40px;
          font-size: 14px;
          transition: all 0.5s;
      }
      .align-items-center {
          -ms-flex-align: center!important;
          align-items: center!important;
      }
      .d-flex {
          display: -ms-flexbox!important;
          display: flex!important;
      }
    </style>

  </head>

<body>

  <!-- ***** Preloader Start ***** 
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="<?php echo e(url('/')); ?>" class="logo">
              <img src="<?php echo e(asset('assets/dist/img/pdamkendal.png')); ?>" alt="Perumda Tirto Panguripan" style="width:50%!important;heigth:auto!important;">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="<?php echo e(url('/')); ?>#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="<?php echo e(url('/')); ?>#info">Informasi</a></li>
              <li class="scroll-to-section"><a href="<?php echo e(url('/')); ?>#orders">TTA (Truk Tangki-Air)</a></li>
              <li><div class="gradient-button"><a href="<?php echo e(route('masuk')); ?>"><i class="fa fa-sign-in-alt"></i> MASUK</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  
  <div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Masuk</span>
        <span cla8ss="modal_close"><i class="fa fa-times"></i></span>
    </div>
</div>

 <?php echo $__env->yieldContent('content'); ?>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
  
</body>
</html><?php /**PATH C:\xampp\htdocs\pta_multiple\resources\views/layouts/chain/layout.blade.php ENDPATH**/ ?>
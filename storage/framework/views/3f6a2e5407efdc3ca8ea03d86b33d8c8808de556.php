<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>DISPAPERTA | Kabupaten Batang</title>
      <meta content="" name="description">
      <meta content="" name="keywords">

      <!-- Favicons -->
      <link href="<?php echo e(url('/images/icon.png')); ?>" rel="icon">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" ></script>
    <style type="text/css">
        body{
          margin-top: 150px;
            background-color: #000;
        }
        .error-main{
          background-color: #fff;
          box-shadow: 0px 10px 10px -10px #5D6572;
        }
        .error-main h1{
          font-weight: bold;
          color: #444444;
          font-size: 100px;
          text-shadow: 2px 4px 5px #6E6E6E;
        }
        .error-main h6{
          color: #42494F;
        }
        .error-main p{
          color: #9897A0;
          font-size: 14px; 
        }
        img {
                max-width: 100%;
                width: 100px !important;
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
                width: 500px !important;
              }
            }
    </style>
</head>
<body>
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-6 offset-lg-3 col-sm-6 offset-sm-3 col-12 p-3 error-main">
          <div class="row">
            <div class="col-lg-8 col-12 col-sm-10 offset-lg-2 offset-sm-1">
                <img src="<?php echo e(url('/images/icon.png')); ?>">
              <h1 class="m-0">404</h1>
              <h4><b>Halaman Tidak Ditemukan</b></h4>
              <p><span class="text-info">Maaf, halaman yang anda tuju tidak dapat ditemukan. </span></p>
              <p><a href="<?php echo e(url('/')); ?>">Kembali</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html><?php /**PATH D:\xampp\htdocs\dispaperta\resources\views/errors/404.blade.php ENDPATH**/ ?>
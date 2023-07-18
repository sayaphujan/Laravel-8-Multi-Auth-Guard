<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title><?php echo e('DISPAPERTA | Kabupaten Batang'); ?></title>
        
        <!-- Favicons -->
      <link href="<?php echo e(url('/images/icon.png')); ?>" rel="icon">
      
       <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap-4.1.3.min.css')); ?>" />
        <!--<link href="<?php echo e(asset('assets/css/jquery-1.10.16.dataTables.min.css')); ?>" rel="stylesheet">-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css"/>
        <link href="<?php echo e(asset('assets/css/dataTables-1.10.19.bootstrap4.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('assets/css/mapbox-gl-v.1.4.0.css')); ?>" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

        <script src="<?php echo e(asset('assets/js/jquery-1.9.1.js')); ?>"></script>  
        <script src="<?php echo e(asset('assets/js/jquery-1.19.0.validate.js')); ?>"></script>
        <!--<script src="<?php echo e(asset('assets/js/jquery-1.10.16.dataTables.min.js')); ?>"></script>-->
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
        <script src="<?php echo e(asset('assets/js/bootstrap-4.1.3.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/dataTables.bootstrap4-1.10.19.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/mapbox-gl-v1.4.0.js')); ?>"></script>
        
        <style type="text/css">
            .mapboxgl-popup {
                max-width: 400px;
                font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
            }
            #map {
                width: 100%;
                height: 500px;
            }
            .marker {
                background-image: url('/dispaperta/public/images/point.png');
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
                color: #333 !important;
                border: 1px solid transparent;
                border-radius: 2px;
            }
            .bg-black{
                background-color: #000;
            }
            .navbar-light .navbar-brand {
                color: rgba(255,255,255);
            }
            .navbar-light .navbar-toggler {
                color: rgba(255,255,255);
                border-color: rgba(255,255,255);
            }
            .navbar-light .navbar-nav .nav-link {
                color: rgba(255,255,255);
            }
            .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .show>.nav-link {
                color: rgba(255,255,255);
            }
            .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
                color: rgba(153, 146, 146);
            }
            .input-group-addon {
                padding: 6px 12px;
                font-size: 14px;
                font-weight: 400;
                line-height: 1;
                color: #555;
                text-align: center;
                background-color: #eee;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
            
            .input-group-addon, .input-group-btn {
                width: 1%;
                white-space: nowrap;
                vertical-align: middle;
            }
            
            .input-group .form-control, .input-group-addon, .input-group-btn {
                display: table-cell;
            }
            .dataTables_wrapper .dataTables_filter {
                float: right;
                text-align: right;
                /*visibility: hidden;*/
            }

            .search_filter {
                float: right;
                color: #333;
            }
            /*
            .navbar-expand-md .navbar-nav .dropdown-sub-menu {
                position: absolute;
            }

            .navbar-nav .dropdown-sub-menu {
                position: static;
                float: none;
            }
            .dropdown-sub-menu.show {
                display: block;
            }
            .dropdown-sub-menu-right {
                right: 0;
                left: auto;
            }*/
        </style>
    </head>
    <body>
         <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-black shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/home')); ?>">

                    <?php if(Auth::user()->level == 4): ?>
                        <?php echo e('SIKEP'); ?>

                    <?php elseif(Auth::user()->level == 3): ?>
                        <?php echo e('OFFICIAL'); ?>

                    <?php elseif(Auth::user()->level == 6): ?>
                        <?php echo e('GAPOKTAN'); ?>

                    <?php else: ?>
                        <?php echo e('DISPAPERTA'); ?>

                    <?php endif; ?>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                       
                        <?php if(auth()->guard()->guest()): ?>
                           <!-- <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(url('/sikep/register/')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>-->
                        <?php else: ?>
                            <?php if(Auth::user()->level == 3): ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Official
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item"  href="<?php echo e(route('articles')); ?>"><?php echo e(__('Artikel')); ?></a>
                                    <a class="dropdown-item"  href="<?php echo e(route('pages')); ?>"><?php echo e(__('Halaman')); ?></a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('download')); ?>"><?php echo e(__('Download')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('gis')); ?>"><?php echo e(__('GIS')); ?></a>
                            </li>

                            <?php endif; ?>
                            <?php if(Auth::user()->level == 6 ): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('gapoktan.sikep')); ?>"><?php echo e(__('SIKEP')); ?></a>
                            </li>
                            <?php endif; ?>
                            <?php if(Auth::user()->level == 5 ): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('users')); ?>"><?php echo e(__('Users')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  href="<?php echo e(route('desa')); ?>"><?php echo e(__('Desa')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  href="<?php echo e(route('kios')); ?>"><?php echo e(__('Kios')); ?></a>  
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  href="<?php echo e(route('poktan')); ?>"><?php echo e(__('POKTAN')); ?></a>  
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('gapoktan')); ?>"><?php echo e(__('Gapoktan')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('gapoktan.sikep')); ?>"><?php echo e(__('SIKEP')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  href="<?php echo e(route('penyuluh')); ?>"><?php echo e(__('Penyuluh')); ?></a>  
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  href="<?php echo e(route('petani')); ?>"><?php echo e(__('Petani')); ?></a>  
                            </li>
                            <?php endif; ?>
                            <?php if(Auth::user()->level == 4 ): ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Pertanian
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item"  href="<?php echo e(route('desa')); ?>"><?php echo e(__('Desa')); ?></a>
                                    <a class="dropdown-item"  href="<?php echo e(route('kecamatan')); ?>"><?php echo e(__('Kecamatan')); ?></a>    
                                    <a class="dropdown-item"  href="<?php echo e(route('alsintan.jenis')); ?>"><?php echo e(__('Jenis Alsintan')); ?></a>  
                                    <a class="dropdown-item"  href="<?php echo e(route('alsintan')); ?>"><?php echo e(__('Alsintan')); ?></a>  
                                    <a class="dropdown-item"  href="<?php echo e(route('usaha.jenis')); ?>"><?php echo e(__('Jenis Usaha')); ?></a>  
                                    <a class="dropdown-item"  href="<?php echo e(route('komoditas')); ?>"><?php echo e(__('Komoditas')); ?></a> 
                                    <a class="dropdown-item"  href="<?php echo e(route('refkomoditas')); ?>"><?php echo e(__('Ref Komoditas')); ?></a>  
                                    <a class="dropdown-item"  href="<?php echo e(route('kios')); ?>"><?php echo e(__('Kios')); ?></a>  
                                    <a class="dropdown-item"  href="<?php echo e(route('poktan')); ?>"><?php echo e(__('POKTAN')); ?></a>  
                                    <a class="dropdown-item" href="<?php echo e(route('gapoktan')); ?>"><?php echo e(__('Gapoktan')); ?></a>
                                    <a class="dropdown-item" href="<?php echo e(route('gapoktan.sikep')); ?>"><?php echo e(__('SIKEP')); ?></a>
                                    <a class="dropdown-item"  href="<?php echo e(route('penyuluh')); ?>"><?php echo e(__('Penyuluh')); ?></a>  
                                    <a class="dropdown-item"  href="<?php echo e(route('petani')); ?>"><?php echo e(__('Petani')); ?></a>  
                                    <a class="dropdown-item"  href="<?php echo e(route('penjualan')); ?>"><?php echo e(__('Penjualan')); ?></a>  
                                    <!--<a class="dropdown-item"  href="<?php echo e(route('lahan')); ?>"><?php echo e(__('Lahan')); ?></a>  -->
                                </div>
                            </li>

                            <?php endif; ?>
                            <?php if(Auth::user()->level == 1 || Auth::user()->level == 2): ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Pertanian
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item"  href="<?php echo e(route('desa')); ?>"><?php echo e(__('Desa')); ?></a>
                                    <a class="dropdown-item"  href="<?php echo e(route('kecamatan')); ?>"><?php echo e(__('Kecamatan')); ?></a>    
                                    <a class="dropdown-item"  href="<?php echo e(route('alsintan.jenis')); ?>"><?php echo e(__('Jenis Alsintan')); ?></a>  
                                    <a class="dropdown-item"  href="<?php echo e(route('alsintan')); ?>"><?php echo e(__('Alsintan')); ?></a>  
                                    <a class="dropdown-item"  href="<?php echo e(route('usaha.jenis')); ?>"><?php echo e(__('Jenis Usaha')); ?></a>  
                                    <a class="dropdown-item"  href="<?php echo e(route('komoditas')); ?>"><?php echo e(__('Komoditas')); ?></a> 
                                    <a class="dropdown-item"  href="<?php echo e(route('refkomoditas')); ?>"><?php echo e(__('Ref Komoditas')); ?></a>  
                                    <a class="dropdown-item"  href="<?php echo e(route('kios')); ?>"><?php echo e(__('Kios')); ?></a>  
                                    <a class="dropdown-item"  href="<?php echo e(route('poktan')); ?>"><?php echo e(__('POKTAN')); ?></a>  
                                    <a class="dropdown-item" href="<?php echo e(route('gapoktan')); ?>"><?php echo e(__('Gapoktan')); ?></a>
                                    <a class="dropdown-item" href="<?php echo e(route('gapoktan.sikep')); ?>"><?php echo e(__('SIKEP')); ?></a>
                                    <a class="dropdown-item"  href="<?php echo e(route('penyuluh')); ?>"><?php echo e(__('Penyuluh')); ?></a>  
                                    <a class="dropdown-item"  href="<?php echo e(route('petani')); ?>"><?php echo e(__('Petani')); ?></a>  
                                    <a class="dropdown-item"  href="<?php echo e(route('penjualan')); ?>"><?php echo e(__('Penjualan')); ?></a>  
                                    <!--<a class="dropdown-item"  href="<?php echo e(route('lahan')); ?>"><?php echo e(__('Lahan')); ?></a>  -->
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Official
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item"  href="<?php echo e(route('articles')); ?>"><?php echo e(__('Artikel')); ?></a>
                                    <a class="dropdown-item"  href="<?php echo e(route('pages')); ?>"><?php echo e(__('Halaman')); ?></a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('users')); ?>"><?php echo e(__('Users')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('sembako')); ?>"><?php echo e(__('Sembako')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('harga')); ?>"><?php echo e(__('Harga Pasar')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('download')); ?>"><?php echo e(__('Download')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('gis')); ?>"><?php echo e(__('GIS')); ?></a>
                            </li>
                            <?php endif; ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
      </div>
<script type="text/javascript">
    function newexportaction(e, dt, button, config) {
         var self = this;
         var oldStart = dt.settings()[0]._iDisplayStart;
         dt.one('preXhr', function (e, s, data) {
             // Just this once, load all data from the server...
             data.start = 0;
             data.length = 2147483647;
             dt.one('preDraw', function (e, settings) {
                 // Call the original action function
                 if (button[0].className.indexOf('buttons-copy') >= 0) {
                     $.fn.dataTable.ext.buttons.copyHtml5.action.call(self, e, dt, button, config);
                 } else if (button[0].className.indexOf('buttons-excel') >= 0) {
                     $.fn.dataTable.ext.buttons.excelHtml5.available(dt, config) ?
                         $.fn.dataTable.ext.buttons.excelHtml5.action.call(self, e, dt, button, config) :
                         $.fn.dataTable.ext.buttons.excelFlash.action.call(self, e, dt, button, config);
                 } else if (button[0].className.indexOf('buttons-csv') >= 0) {
                     $.fn.dataTable.ext.buttons.csvHtml5.available(dt, config) ?
                         $.fn.dataTable.ext.buttons.csvHtml5.action.call(self, e, dt, button, config) :
                         $.fn.dataTable.ext.buttons.csvFlash.action.call(self, e, dt, button, config);
                 } else if (button[0].className.indexOf('buttons-pdf') >= 0) {
                     $.fn.dataTable.ext.buttons.pdfHtml5.available(dt, config) ?
                         $.fn.dataTable.ext.buttons.pdfHtml5.action.call(self, e, dt, button, config) :
                         $.fn.dataTable.ext.buttons.pdfFlash.action.call(self, e, dt, button, config);
                 } else if (button[0].className.indexOf('buttons-print') >= 0) {
                     $.fn.dataTable.ext.buttons.print.action(e, dt, button, config);
                 }
                 dt.one('preXhr', function (e, s, data) {
                     // DataTables thinks the first item displayed is index 0, but we're not drawing that.
                     // Set the property to what it was before exporting.
                     settings._iDisplayStart = oldStart;
                     data.start = oldStart;
                 });
                 // Reload the grid with the original page. Otherwise, API functions like table.cell(this) don't work properly.
                 setTimeout(dt.ajax.reload, 0);
                 // Prevent rendering of the full data to the DOM
                 return false;
             });
         });
         // Requery the server with the new one-time export settings
         dt.ajax.reload();
     }
</script>
    </body>
</html><?php /**PATH D:\xampp\htdocs\dispaperta\resources\views/layouts/user_layout.blade.php ENDPATH**/ ?>
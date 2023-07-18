<html xmlns="http://www.w3.org/1999/xhtml">
  <link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
  <link type="text/css" rel="stylesheet" id="dark-mode-general-link">
  <style lang="en" type="text/css" id="dark-mode-custom-style"></style>
  <style lang="en" type="text/css" id="dark-mode-native-style"></style>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Laporan Penyuluh</title>
    <link href="<?php echo e(url('/images/icon.png')); ?>" rel="icon">
    <link href="config/style2.css" rel="stylesheet" type="text/css">
    <style type="text/css">
      .alt { background-color: #f0f0f0; }
    </style>
  </head>
  <body bgcolor="#999999">
    <table width="90%" bgcolor="#FFFFFF" align="center">
      <tbody>
        <tr>
          <td>
            <br><br>

            <div align="center">
              <strong>
                DAFTAR KELEMBAGAAN PELAKU UTAMA DAN PELAKU USAHA<br>
                      BIDANG PERTANIAN, PERIKANAN DAN KEHUTANAN KABUPATEN BATANG
              </strong>
              <?php
                $url= '';
                $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
                $uri_segments = explode('/', $uri_path);
                
               $url = (isset($uri_segments[4])) ? $uri_segments[4] : '';
               
               switch ($url) {
                  case 'all':
                    $cat = 'Semua Data';
                    break;
                  case 'pelaku_utama':
                    $cat = 'Pelaku Utama';
                    break;
                  case 'pelaku_usaha':
                    $cat = 'Pelaku Usaha';
                    break;
                  case 'jenis_pelaku':
                    $cat = 'Jenis Pelaku';
                    break;
                  case 'kecamatan_desa':
                    $cat = 'Kec. '.$_POST['kecamatan'].' Desa '.$_POST['desa'];
                    break;
                  default:
                    $cat = ucfirst($key).' '.strtoupper($val);
                }
              ?>
              <br>Berdasarkan <?php echo e($cat); ?>

            </div>
    
	          <table width="85%" border="1" style="border-collapse:collapse" cellpadding="5" align="center" class="data">
              <thead>
                <tr class="hitam">
                  <td width="3%" rowspan="3">
                    <div align="center"><strong>No</strong></div>
                  </td>
                  <td width="11%" rowspan="3">
                    <div align="center">
                      <strong>Kecamatan<br>Desa</strong>
                    </div>
                  </td>
                  <td colspan="3">
                    <div align="center">
                      <strong>Kelembagaan</strong>
                    </div>
                    <div align="center"></div>
                    <div align="center"></div>
                  </td>
                  <td width="7%" rowspan="3">
                    <div align="center">
                      <strong>Jml Agt<br>(org/ Kel)</strong>
                    </div>      
                    <div align="center"></div>
                  </td>
                  <td width="4%" rowspan="3">
                    <div align="center">
                      <strong>Luas Areal</strong>
                    </div>      
                    <div align="center"></div>
                  </td>
                  <td colspan="3">
                    <div align="center">
                      <strong>Nama Pengurus</strong>
                    </div>      
                    <div align="center"></div>      
                    <div align="center"></div>
                  </td>
                  <td colspan="9">
                    <div align="center">
                      <strong>Jenis Usaha</strong>
                    </div>      
                    <div align="center"></div>      
                    <div align="center"></div>      
                    <div align="center"></div>      
                    <div align="center"></div>      
                    <div align="center"></div>      
                    <div align="center"></div>      
                    <div align="center"></div>      
                    <div align="center"></div>
                  </td>
                  <td width="4%" rowspan="3">
                    <div align="center">Thn</div>      
                    <div align="center"></div>
                  </td>
                </tr>
                <tr class="hitam">
                  <td width="10%" rowspan="2" class="hitam">
                    <div align="center">
                      <strong>No. Induk <br>Nama</strong>
                    </div>
                  </td>
                  <td colspan="2" class="hitam">
                    <div align="center">
                      <strong>Pelaku</strong>
                    </div>      
                    <div align="center"></div>
                  </td>
                  <td width="12%" rowspan="2" class="hitam">
                    <div align="center">
                      <strong>Ketua</strong>
                    </div>
                  </td>
                  <td width="10%" rowspan="2" class="hitam">
                    <div align="center">
                      <strong>Sekretaris</strong>
                    </div>
                  </td>
                  <td width="11%" rowspan="2" class="hitam">
                    <div align="center">
                      <strong>Bendahara</strong>
                    </div>
                  </td>
                  <td width="2%" rowspan="2" class="hitam">
                    <div align="center">
                      <strong>1</strong>
                    </div>
                  </td>
                  <td width="2%" rowspan="2" class="hitam">
                    <div align="center">
                      <strong>2</strong>
                    </div>
                  </td>
                  <td width="2%" rowspan="2" class="hitam">
                    <div align="center">
                      <strong>3</strong>
                    </div>
                  </td>
                  <td width="2%" rowspan="2" class="hitam">
                    <div align="center">
                      <strong>4</strong>
                    </div>
                  </td>
                  <td width="2%" rowspan="2" class="hitam">
                    <div align="center">
                      <strong>5</strong>
                    </div>
                  </td>
                  <td width="2%" rowspan="2" class="hitam">
                    <div align="center">
                      <strong>6</strong>
                    </div>
                  </td>
                  <td width="2%" rowspan="2" class="hitam">
                    <div align="center">
                      <strong>7</strong>
                    </div>
                  </td>
                  <td width="2%" rowspan="2" class="hitam">
                    <div align="center">
                      <strong>8</strong>
                    </div>
                  </td>
                  <td width="3%" rowspan="2" class="hitam">
                    <div align="center">
                      <strong>9</strong>
                    </div>
                  </td>
                </tr>
                <tr class="hitam">
                  <td width="5%">
                    <div align="center">
                      <strong>Utama</strong>
                    </div>
                  </td>
                  <td width="4%">
                    <div align="center">
                      <strong>Usaha</strong>
                    </div>
                  </td>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $no =1; 
                ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                      if(isset($_GET['page'])){
                        $p = $_GET['page'];
                        $no = $data['limit']*$p;
                      }else{
                        $p = $no;
                      }
                      
                    ?>
                <tr>
                  <td rowspan="2">
                    <?php echo e($no++); ?>

                  </td>
                  <td align="center">
                    Kec. <?php echo e(ucfirst($data['kecamatan_nama'])); ?><br><?php echo e(strtoupper($data['desa_nama'])); ?>

                  </td>
                  <td align="center">
                    <?php echo e($data['no_induk']); ?><br><?php echo e(strtoupper($data['nama'])); ?>

                  </td>
                  <td>
                    <?php echo e($data['utama']); ?>

                  </td>
                  <td>
                    <?php echo e($data['usaha']); ?>

                  </td>
                  <td>
                    <?php echo e($data['jumlah_anggota']); ?> <?php echo e($data['jenis_jumlah']); ?>

                  </td>
                  <td>
                    <?php echo e($data['luas_areal']); ?> <?php echo e($data['jenis_areal']); ?>

                  </td>
                  <td>
                    <?php echo e($data['ketua']); ?>

                  </td>
                  <td>
                    <?php echo e($data['sekretaris']); ?>

                  </td>
                  <td>
                    <?php echo e($data['bendahara']); ?>

                  </td>
                  <td>
                    <?php if(str_contains($data['jenis_pembentukan'], 'Tanaman Pangan')): ?> <?php echo e('V'); ?> <?php else: ?> <?php echo e('-'); ?> <?php endif; ?>
                  </td>
                  <td>
                    <?php if(str_contains($data['jenis_pembentukan'], 'Peternakan')): ?> <?php echo e('V'); ?> <?php else: ?> <?php echo e('-'); ?> <?php endif; ?>
                  </td>
                  <td>
                    <?php if(str_contains($data['jenis_pembentukan'], 'Hortikultura')): ?> <?php echo e('V'); ?> <?php else: ?> <?php echo e('-'); ?> <?php endif; ?>
                  </td>
                  <td>
                    <?php if(str_contains($data['jenis_pembentukan'], 'Perkebunan')): ?> <?php echo e('V'); ?> <?php else: ?> <?php echo e('-'); ?> <?php endif; ?>
                  </td>
                  <td>
                    <?php if(str_contains($data['jenis_pembentukan'], 'Kehutanan')): ?> <?php echo e('V'); ?> <?php else: ?> <?php echo e('-'); ?> <?php endif; ?>
                  </td>
                  <td>
                    <?php if(str_contains($data['jenis_pembentukan'], 'Budidaya Ikan')): ?> <?php echo e('V'); ?> <?php else: ?> <?php echo e('-'); ?> <?php endif; ?>
                  </td>
                  <td>
                    <?php if(str_contains($data['jenis_pembentukan'], 'Perikanan Tangkap')): ?> <?php echo e('V'); ?> <?php else: ?> <?php echo e('-'); ?> <?php endif; ?>
                  </td>
                  <td>
                    <?php if(str_contains($data['jenis_pembentukan'], 'Pengolahan Hasil')): ?> <?php echo e('V'); ?> <?php else: ?> <?php echo e('-'); ?> <?php endif; ?>
                  </td>
                  <td>
                    <?php if(str_contains($data['jenis_pembentukan'], 'Lainnya')): ?> <?php echo e('V'); ?> <?php else: ?> <?php echo e('-'); ?> <?php endif; ?>
                  </td>
                  <td>
                    <?php echo e($data['tahun_pembentukan']); ?>

                  </td>
                </tr>
                <tr>
                  <td colspan="19">
                    Kelas Kelompok : <?php echo e($data['kelas_kelompok']); ?>, HP : <?php echo e($data['hp']); ?>, Email : <?php echo e($data['email']); ?>

                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <!-- PAGINATION -->
                    <?php echo e($paging->links('pagination.pagination')); ?>

                <!-- END PAGINATION -->
                <tr>
                  <td colspan="20">
              	   Ket. Jenis Usaha : <br>1=Tanaman Pangan, 	2=Peternakan, 3=Hortikultura, 4=Perkebunan, 5=Kehutanan, 6=Budidaya Ikan, 7=Perikanan Tangkap, 8=Pengolahan, 9=Lainnya
                  </td>
                </tr>
              </tbody>
            </table>

          </td>
        </tr> 
      </tbody>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript">
            
      $(".data tr").filter(function() { 
        return $(this).children().length == 20;
      }).filter(':even').addClass('alt');

      $("tr.alt td[rowspan]").each(function() {
        $(this).parent().nextAll().slice(0, this.rowSpan - 1).addClass('alt');
      });
    </script>
  </body>
</html>
<?php /**PATH D:\xampp\htdocs\dispaperta\resources\views/main/showdata.blade.php ENDPATH**/ ?>
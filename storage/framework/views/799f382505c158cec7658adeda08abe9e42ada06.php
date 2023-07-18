<?php
//dd($trans);
?>
<html>
  <head>
    <title>Faktur Pembayaran</title>
    <style>
      #tabel
      {
        font-size:15px;
        border-collapse:collapse;
      }
      #tabel  td
      {
        padding-left:5px;
        border: 1px solid black;
      }
      label {
          font-weight: 500!important;
      }
    </style>
  </head>
  <body style='font-family:tahoma; font-size:8pt;' onload="javascript:window.print()">
  <center>
    <table style='width:680px; font-size:8pt; font-family:calibri; border-collapse: collapse;' border = '0'>
      <td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
        <span style='font-size:12pt'><b>PERUMDA AIR MINUM TIRTO PANGURIPAN KENDAL</b></span></br>
        Jl. Pemuda No.62, Kebondalem, Langenharjo, Kec. Kendal, Kab. Kendal, Jawa Tengah 51314</br>
        Telp : (0294) 381165
      </td>
      <td style='vertical-align:top' width='30%' align='left'>
        <b><span style='font-size:12pt'>FAKTUR PENJUALAN</span></b></br>
        No Trans. : 4</br>
        Tanggal :<?=date('d-m-Y');?></br>
      </td>
    </table>
<hr/>
    <table style='width:550px; font-size:8pt; font-family:calibri; border-collapse: collapse;' border = '0'>
      <td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
        Nama Pemohon : <?php echo e($trans->name); ?></br>
        Alamat Pengiriman : <?php echo e($trans->loc_address1); ?>

      </td>
      <td style='vertical-align:top' width='30%' align='left'>
        No Telp : <?php echo e($trans->trans_phone); ?>

      </td>
    </table>

    <table cellspacing='0' style='width:550px; font-size:8pt; font-family:calibri;  border-collapse: collapse;' border='1'>
      <tr align='center'>
        <td width='10%'>No. Pesanan</td>
        <td width='20%'>Nama Barang</td>
        <td width='13%'>Harga Barang</td>
        <td width='13%'>Total Harga</td>
      </tr>
      <tr>
        <td><?php echo e($trans->order_id); ?></td>
        <td>Air Tangki <?php echo e($trans->price_volume); ?> ltr.</td>
        <td style='text-align:right'>Rp.<?php echo e($trans->price_net); ?></td>
        <td style='text-align:right'>Rp.<?php echo e($trans->price_net); ?></td>
      </tr> 
      <tr>
        <td colspan = '3'><div style='text-align:right'>Biaya Pengiriman : </div></td>
        <td style='text-align:right'>Rp.<?php echo e($trans->price_deliv); ?></td>
      </tr>
      <tr>
        <td colspan = '3'><div style='text-align:right'>Total Yang Harus Di Bayar Adalah : </div></td>
        <td style='text-align:right'>Rp.<?php echo e($trans->price_sum); ?></td>
      </tr>

      <table style='width:650; font-size:7pt;' cellspacing='2'>
      <tr>
        <td align='center'>Diterima Oleh,</br></br><u>(............)</u></td>
        <!--<td style='border:1px solid black; padding:5px; text-align:left; width:30%'></td>-->
        <td align='center'>TTD,</br></br><u>(...........)</u></td>
      </tr>
      </table>
    </center>
  <script src="<?php echo e(asset( 'assets/js/jquery-1.9.1.js')); ?>"></script>
  <script src="<?php echo e(asset( 'vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script><?php /**PATH D:\xampp\htdocs\iqbal\resources\views/trans/print.blade.php ENDPATH**/ ?>
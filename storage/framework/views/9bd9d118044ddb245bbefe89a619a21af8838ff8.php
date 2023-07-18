
  
<?php $__env->startSection('content'); ?>

<style type="text/css">
label {
    font-weight: 500!important;
}    
</style>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-11">
            <h1 class="m-0">Detail Pesanan #<?php echo e($trans->order_id); ?> </h1>
          </div><!-- /.col -->
          <?php if($guard->level == 1): ?>
          <div class="col-sm-1" style="position: float-right">
            <a style="cursor:pointer; color:blue; font-weight:bold; text-decoration: underline;" onclick="window.open('resi/<?php echo e($trans->order_id); ?>','nama window','width=1000,height=500,toolbar=no,location=no,directories=no,status=no,menubar=no, scrollbars=no,resizable=yes,copyhistory=no')"><i class="fa fa-print"></i></a>
          </div><!-- /.col -->
          <?php endif; ?>
        </div><!-- /.row -->
      </div>
    </section>

      <section class="content">
        <div class="card card-outline card-info">
            <div class="card-header"></div>
                <form method="post" action="<?php echo e(route('trans.update_status', $trans->order_id)); ?>" id="myForm" class="form-horizontal">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-8">
                           <?php if($message = Session::get('success')): ?>
                              <div class="alert alert-success" role="alert">
                                <?php echo e($message); ?>

                              </div>
                            <?php endif; ?>
                        </div>
                    </div>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                    <div class="row mt-3 mb-3">
                      <div class="col-md-12">
                        <p style="float:right"><?php echo date('d-m-Y H:i:s'); ?></p>
                      </div>
                    </div>

                    <div class="row mt-3 mb-3">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="label" for="name">Jenis Peruntukan</label>
                          <select name="category" class="form-control <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="category" aria-describedby="category" required="required" readonly="readonly">
                            <option value="">-- Pilih Disini --</option>
                            <option value="Niaga" <?php echo e($trans->trans_category == 'Niaga' ? 'selected' : ''); ?>>Niaga</option>
                            <option value="Sosial" <?php echo e($trans->trans_category == 'Sosial' ? 'selected' : ''); ?>>Sosial</option>
                            <option value="Pribadi Rumah Tangga" <?php echo e($trans->trans_category == 'Pribadi Rumah Tangga' ? 'selected' : ''); ?>>Pribadi Rumah Tangga</option>
                          </select>    
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="label" for="name">Tujuan Pengiriman</label>
                          <select name="destination" class="form-control <?php $__errorArgs = ['destination'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="destination" aria-describedby="destination" required="required" readonly="readonly">
                            <option value="">-- Pilih Disini --</option>
                            <option data-id="1" value="Dalam Kota" <?php echo e($trans->trans_destination == 'Dalam Kota' ? 'selected' : ''); ?>>Dalam Kota</option>
                            <option data-id="2" value="Luar Kota" <?php echo e($trans->trans_destination == 'Luar Kota' ? 'selected' : ''); ?>>Luar Kota</option>
                            <option data-id="3" value="Pengambilan Sendiri" <?php echo e($trans->trans_destination == 'Pengambilan Sendiri' ? 'selected' : ''); ?>>Pengambilan Sendiri</option>
                          </select> 
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <input type="hidden" class="form-control" name="price_id" id="price_id"readonly="readonly" value="<?php echo e($trans->price_id); ?>">
                          <label class="label" for="name">Volume Tangki</label>
                          <select name="volume" class="form-control <?php $__errorArgs = ['volume'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="volume" aria-describedby="volume" required="required" readonly="readonly">
                            <option value="">-- Pilih Disini --</option>
                            <?php $__currentLoopData = $price; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option data-id=<?php echo e($price->price_id); ?> value=<?php echo e($price->price_volume); ?>  <?php echo e($trans->price_volume == $price->price_volume ? 'selected' : ''); ?>><?php echo e($price->price_volume); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>    
                        </div>
                      </div>
                    </div>
                
                    <div class="row mt-3 mb-3">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="label" for="name">Harga Air</label>
                          <input type="text" class="form-control <?php $__errorArgs = ['net_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="net_price" id="net_price" placeholder="Harga Air" readonly="readonly" value="<?php echo e($trans->price_net); ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="label" for="name">Biaya Pengiriman</label>
                          <input type="text" class="form-control <?php $__errorArgs = ['deliv_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="deliv_price" id="deliv_price" placeholder="Biaya Pengiriman" readonly="readonly" value="<?php echo e($trans->price_deliv); ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="label" for="name">Total</label>
                          <input type="text" class="form-control <?php $__errorArgs = ['total'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="total" id="total" placeholder="Total" readonly="readonly" value="<?php echo e($trans->price_sum); ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row mt-3 mb-3">
                      <input type="hidden" class="form-control" name="order_id" id="order_id" placeholder="No. Pesanan" readonly="readonly" value="<?php echo e($trans->order_id); ?>">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label class="label" for="subject">Nama Pemohon</label>
                          <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" id="name" placeholder="Nama Pemohon" required="required" value="<?php echo e($trans->name); ?>" readonly="readonly">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="label" for="subject">No. Telepon</label>
                          <input type="text" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="phone" id="phone" placeholder="No. Telepon" readonly="readonly" value="<?php echo e($trans->trans_phone); ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row mt-3 mb-3">
                      <div class="col-md-12">
                        <label class="label" for="#">Alamat Pengiriman</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="address" id="address" placeholder="Alamat Pengiriman" readonly="readonly" value="<?php echo e($trans->loc_address1); ?>">
                      </div>
                    </div>

                    <div class="row mt-3 mb-3" style="display: none;">
                      <div class="col-md-6">
                        <label class="label" for="#">Latitude</label>
                        <input type="text" class="form-control" name="address_latitude" id="address-latitude" value="<?php echo e($trans->loc_lat); ?>" readonly="readonly" />
                      </div>

                      <div class="col-md-6">
                        <label class="label" for="#">Longitude</label>
                        <input type="text" class="form-control" name="address_longitude" id="address-longitude" value="<?php echo e($trans->loc_lng); ?>" readonly="readonly" />
                        <!--<ul id="geoData">
                          <li>Latitude: <span id="lat-span"></span></li>
                          <li>Longitude: <span id="lon-span"></span></li>
                        </ul>-->
                      </div>
                    </div>

                    <div class="row mt-3 mb-3">
                      <div class="col-md-12">
                        <div id="address-map-container" style="width:100%;height:400px; ">
                          <div style="width: 100%; height: 100%" id="map"></div>
                        </div>
                      </div>
                    </div>

                    <div class="row mt-3 mb-3">
                      <div class="col-md-12">
                        <label class="label" for="#">Detail Lokasi Pengiriman</label>
                        <textarea name="detail" class="form-control <?php $__errorArgs = ['detail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="detail" cols="30" rows="4" placeholder="Detail Lokasi Pengiriman" value="<?php echo e($trans->loc_address2); ?>" readonly="readonly"><?php echo e($trans->loc_address2); ?></textarea>
                      </div>
                    </div>
<!---
                    <div class="row mt-3 mb-3">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label" for="#">Foto Lokasi</label>
                          <br/>
                          <?php if(!empty($trans->loc_img)): ?> <img class="zoom" src="<?php echo e(asset('upload/lokasi/'.$trans->loc_img)); ?>"  width="250px" height="auto"><?php else: ?> <p><b><i>Tidak ada foto</i></b></p> <?php endif; ?>
                        </div>
                      </div>
                    </div>
-->
                    <div class="row mt-3 mb-3">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label" for="#">Keterangan Tambahan</label>
                          <input type="text" class="form-control <?php $__errorArgs = ['noted'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="noted" id="noted" placeholder="Keterangan Tambahan" value="<?php echo e($trans->trans_note); ?>" readonly="readonly">
                        </div>
                       </div>
                    </div>

                    <div class="row mt-3 mb-3">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="label" for="name">Metode Pembayaran</label>
                          <select name="payment" class="form-control <?php $__errorArgs = ['payment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="payment" aria-describedby="payment" required="required" readonly="readonly">
                            <option value="">-- Pilih Disini --</option>
                            <option value="Tunai"  <?php echo e($trans->payment == 'Tunai' ? 'selected' : ''); ?>> Bayar di Tempat </option>
                            <?php $__currentLoopData = $bank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option data-id=<?php echo e($bank->bank_id); ?> value=<?php echo e($bank->bank_id); ?> <?php echo e($trans->payment == $bank->bank_id ? 'selected' : ''); ?>><?php echo e($bank->bank_name); ?> - <?php echo e($bank->bank_num); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="row mt-3 mb-3" id="bukti">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="label" for="name">Status Pembayaran</label>
                          <?php if($trans->payment == 'Tunai'): ?>
                          <p style="color:blue"><b><i>Pembayaran di Tempat</i></b></p>
                          <?php elseif($trans->payment_status == '0' && empty($trans->payment_photo)): ?>
                          <p style="color:red"><b><i>Belum Dibayar</i></b>
                            <?php if($guard->level == 3): ?>
                              &nbsp;&nbsp;&nbsp;<a href="#" data-target="#modal-default" data-toggle="modal">Kirim Bukti Pembayaran</a></p>
                            <?php endif; ?>
                          <?php else: ?>
                              <?php if($trans->payment_status != '2' && !empty($trans->payment_photo)): ?>
                                <p style="color:green"><b><i>Terbayar</i></b> 
                                <?php if($guard->level == 1): ?>
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href=<?php echo e(url('trans/cancel_bayar/'. $trans->order_id)); ?>><button type="button" class="btn btn-success">Cancel</button></a>
                                <?php endif; ?>
                              <?php elseif($trans->payment_status == 2 && !empty($trans->payment_photo)): ?>
                              <p style="color:gray"><b><i>Bukti Pembayaran Tidak Valid</i></b> 
                                <?php if($guard->level == 1): ?>
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href=<?php echo e(url('trans/cancel_bayar/'. $trans->order_id)); ?>><button type="button" class="btn btn-success">Cancel</button></a>
                                <?php endif; ?>
                              <?php endif; ?>
                            <br/><br/>
                           <img class="zoom" src="<?php echo e(asset('upload/bukti/'.$trans->payment_photo)); ?>"  width="250px" height="auto"><br/><br/>
                              <?php if($guard->level == 3 && $trans->payment_status != 1): ?>
                              &nbsp;&nbsp;&nbsp;<a href="#" data-target="#modal-default" data-toggle="modal">Kirim Ulang Bukti Pembayaran</a></p>
                              <?php endif; ?>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group">
                        
                          <label class="label" for="name">Petugas Pengiriman</label>
                          <select name="driver" class="form-control <?php $__errorArgs = ['driver'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" aria-describedby="driver" required="required" <?php if($trans->driver_id >0 || $guard->level !=  1): ?> readonly="readonly" <?php endif; ?>>
                            <option value="">
                            <?php if($trans->driver_id == 0 &&  $guard->level !=  1): ?>
                                Menunggu Petugas
                            <?php else: ?>
                            -- Pilih Disini --
                            <?php endif; ?>
                            </option>
                            <?php $__currentLoopData = $petugas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $petugas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php echo e($trans->driver_id == $petugas->id ? 'selected' : ''); ?> value=<?php echo e($petugas->id); ?>><?php echo e($petugas->fullname); ?> - <?php echo e($petugas->phone_number); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>   
                        </div>
                        <!--
                        <?php if($trans->driver_id >0): ?>
                        <img src="<?php echo e(asset('upload/profile/'.$trans->photo)); ?>"  width="250px" height="auto" class="zoom">
                        <?php endif; ?>
                        -->
                      </div>

                  </div>
                  <div id="verifikasi" class="card-footer">
                    <?php if($guard->level == 1): ?>
                     <?php if($trans->payment_status == 0): ?>
                      <button type="submit" class="btn btn-info">Verifikasi</button>
                      <?php endif; ?>
                    <?php endif; ?>
                    <?php if($guard->level == 4): ?>
                     <?php if($trans->trans_destination == 'Pengambilan Sendiri' && $trans->payment_status == 0): ?>
                      <a href=<?php echo e(url('trans/update_status_bayar/'. $trans->order_id)); ?>><button type="button" class="btn btn-success">Telah Dibayar</button>
                      <?php endif; ?>
                    <?php endif; ?>
                    <?php if($guard->level == 3): ?>
                        <?php if($trans->trans_delivery == '1' && $trans->trans_sent == '0'): ?>
                            <a href=<?php echo e(url('trans/update_status_kirim/'. $trans->order_id)); ?>>
                                    <button type="button" class="btn btn-success">Pesanan Diterima</button>
                            </a>
                        <?php elseif($trans->trans_sent == '1'): ?>
                                    <button type="button" class="btn btn-default">Pesanan Telah Diterima</button>
                        <?php endif; ?>
                    <?php endif; ?>
                    <a href="<?php echo e(route('trans')); ?>">
                        <button type="button" class="btn btn-warning float-right">Tutup</button>                
                    </a>
                  </div>
                </form>
        </div>
      </section>
  </div>
  <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Upload Bukti Pembayaran</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form method="post" action="<?php echo e(route('trans.update_payment', $trans->order_id)); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div>
                  <input type="file" class="form-control" name="photo" id="photo" placeholder="Bukti Pembayaran" value="<?php echo e($trans->payment_photo); ?>">
                    <p class="photo"><?php echo e($trans->payment_photo); ?></p>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<script src="<?php echo e(asset( 'assets/js/jquery-1.9.1.js')); ?>"></script>
<script src="<?php echo e(asset( 'vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script>
  
function initMap() {
    var loc_lat = <?php echo e($trans->loc_lat); ?>;
    var loc_lng = <?php echo e($trans->loc_lng); ?>;
    var myLatLng = {lat: loc_lat, lng: loc_lng};
  
    var map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      zoom: 20,
    });
  
    var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Pergi ke Lokasi',
          draggable: false,
          url : 'https://www.google.com/maps/place/'+loc_lat+','+loc_lng
        });
  
     google.maps.event.addListener(marker, 'dragend', function(marker) {
        var latLng = marker.latLng;
        $('#address-latitude').val(latLng.lat());
        $('#address-longitude').val(latLng.lng());
     });

    google.maps.event.addListener(marker, 'click', function() {
      window.location.href = marker.url;
    });
}
      window.initMap = initMap;
  
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUQaOBIQIBCIfWQb3r8-8Vv1-XWLH_aOk&callback=initMap&libraries=places&v=weekly" defer></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlte.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pta_multiple\resources\views/trans/detail.blade.php ENDPATH**/ ?>

  
<?php $__env->startSection('content'); ?>

<?php
  $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
  $orderId = substr(str_shuffle($permitted_chars), 0, 10);
  
?>

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
            <h1 class="m-0">Form Pesanan </h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
    </section>

      <section class="content">
        <div class="card card-outline card-info">
            <div class="card-header"></div>
                <form method="POST" action="<?php echo e(route('portal.order')); ?>" id="contactForm" name="contactForm" class="contactForm" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-8">
                           <?php if($message = Session::get('success')): ?>
                              <div class="alert alert-success" role="alert">
              f                  <?php echo e($message); ?>

                              </div>
                            <?php endif; ?>
                        </div>
                    </div>
                        <?php echo csrf_field(); ?>
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
unset($__errorArgs, $__bag); ?>" id="category" aria-describedby="category" required="required">
                        <option value="">-- Pilih Disini --</option>
                        <option value="Niaga" <?php echo e(old('category') == 'Niaga' ? 'selected' : ''); ?>>Niaga</option>
                        <option value="Sosial" <?php echo e(old('category') == 'Sosial' ? 'selected' : ''); ?>>Sosial</option>
                        <option value="Pribadi Rumah Tangga" <?php echo e(old('category') == 'Pribadi Rumah Tangga' ? 'selected' : ''); ?>>Pribadi Rumah Tangga</option>
                      </select>    

                      <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
unset($__errorArgs, $__bag); ?>" id="destination" aria-describedby="destination" required="required">
                        <option value="">-- Pilih Disini --</option>
                        <option data-id="1" value="Dalam Kota">Dalam Kota</option>
                        <!--<option data-id="2" value="Luar Kota">Luar Kota</option>-->
                        <option data-id="3" value="Pengambilan Sendiri">Pengambilan Sendiri</option>
                      </select> 

                      <?php $__errorArgs = ['destination'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <input type="hidden" class="form-control" name="price_id" id="price_id"readonly="readonly" value="<?php echo e(old('price_id')); ?>">
                          <label class="label" for="name">Volume Tangki</label>
                          <select name="volume" class="form-control <?php $__errorArgs = ['volume'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="volume" aria-describedby="volume" required="required">
                        <option value="">-- Pilih Disini --</option>
                        <?php $__currentLoopData = $price; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option data-id=<?php echo e($price->price_id); ?> value=<?php echo e($price->price_volume); ?>><?php echo e(number_format($price->price_volume,0)); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>

                      <?php $__errorArgs = ['volume'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>    
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
unset($__errorArgs, $__bag); ?>" name="net_price" id="net_price" placeholder="Harga Air" readonly="readonly" value="0" required="required">

                      <?php $__errorArgs = ['net_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
unset($__errorArgs, $__bag); ?>" name="deliv_price" id="deliv_price" placeholder="Biaya Pengiriman" readonly="readonly" value="0" required="required">

                      <?php $__errorArgs = ['deliv_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
unset($__errorArgs, $__bag); ?>" name="total" id="total" placeholder="Total" readonly="readonly" value="0" required="required">

                      <?php $__errorArgs = ['total'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                      </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <input type="hidden" class="form-control" name="flag" id="flag" value="1">
                     <input type="hidden" class="form-control" name="order_id" id="order_id" placeholder="No. Pesanan" readonly="readonly" value="<?php echo e($orderId); ?>">
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
unset($__errorArgs, $__bag); ?>" name="name" id="name" placeholder="Nama Pemohon" readonly="readonly" value="<?php echo e(strtoupper($guard->name)); ?>">
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
unset($__errorArgs, $__bag); ?>" name="phone" id="phone" placeholder="No. Telepon" required="required"  value="<?php echo e($guard->phone_number); ?>">

                      <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
unset($__errorArgs, $__bag); ?>" name="address" id="address" placeholder="Alamat Pengiriman" required="required"  value="<?php echo e(strtoupper($guard->address)); ?>">

                    <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                    </div>

                    <div class="row mt-3 mb-3" style="display: none;">
                  <div class="col-md-6">
                    <label class="label" for="#">Latitude</label>
                    <input type="hidden" class="form-control" name="address_latitude" id="address-latitude" value="0" readonly="readonly" />
                  </div>

                  <div class="col-md-6">
                    <label class="label" for="#">Longitude</label>
                    <input type="text" class="form-control" name="address_longitude" id="address-longitude" value="0" readonly="readonly" />
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
unset($__errorArgs, $__bag); ?>" id="detail" cols="30" rows="4" placeholder="Detail Lokasi Pengiriman" value="<?php echo e(old('detail')); ?>"><?php echo e(old('fullname')); ?></textarea>

                    <?php $__errorArgs = ['detail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                    </div>
<!--
                <div class="row mt-3 mb-3">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="label" for="#">Foto Lokasi</label>
                      <input type="file" class="form-control <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="photo" id="photo" placeholder="Foto Lokasi" value="<?php echo e(old('photo')); ?>">
                      <p class="photo"><?php echo e(old('photo')); ?></p>
                      <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
unset($__errorArgs, $__bag); ?>" name="noted" id="noted" placeholder="Keterangan Tambahan" value="<?php echo e(old('noted')); ?>">

                      <?php $__errorArgs = ['noted'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
unset($__errorArgs, $__bag); ?>" id="payment" aria-describedby="payment" required="required">
                        <option value="">-- Pilih Disini --</option>
                        <option value="Tunai"> Bayar di Tempat </option>
                        <?php $__currentLoopData = $bank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option data-id=<?php echo e($bank->bank_id); ?> value=<?php echo e($bank->bank_id); ?>><?php echo e($bank->bank_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>

                      <?php $__errorArgs = ['volume'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>    
                        </div>
                      </div>
                    </div>

                  </div>
                  <div id="verifikasi" class="card-footer">
                      <button type="submit" class="btn btn-info">Kirim</button>
                  </div>
                </form>
            </div>
        </div>
      </section>
  </div>
  
<script src="<?php echo e(asset( 'assets/js/jquery-1.9.1.js')); ?>"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  <script>
    window.onpageshow = function(event) {
      $('#volume').trigger("change");
      $('#destination').trigger("change");

      var net = parseInt($('#net_price').val());
      var deliv = parseInt($('#deliv_price').val());
      var sum = parseInt(net+deliv);
      $('#total').val(sum);
    };

  </script>
  <script type="text/javascript">
$(document).ready(function () {
  
    var txt = $("#phone");
    var func = function() {
        txt.val(txt.val().replace(/\s/g, ''));
    }
    txt.keyup(func).blur(func);

    var product = $('#volume').find(':selected').data('id'); 

    $('#destination').change(function(){
      var deliv = $('#destination').find(':selected').data('id'); 

        if(deliv == 1)
        {
          $('#deliv_price').val(0);
        }
        else if(deliv == 2)
        {
          $('#deliv_price').val(10000);
        }
        else if(deliv == 3)
        {
          $('#deliv_price').val(0);
        }
    })

    $('#volume').change(function(){
        var product = $(this).find(':selected').data('id');     
        $('#price_id').val(product);

        getPrice(product);
   });

    if( product >= 0){
        getPrice(product);
    }

    function getPrice(product){

        //alert(kecID);
        if(product){
            $.ajax({
               type:"GET",
               url:"<?php echo e(url('/getprice')); ?>/"+product,
               dataType: 'JSON',
               success:function(res){               
                console.log(res);
                
                var net = parseInt(res.price_net);
                var deliv = parseInt($('#deliv_price').val());
                var sum = parseInt(net+deliv);
                $('#total').val(sum);

                if(res){
                    $("#net_price").val(res.price_net);
                }else{
                   $("#net_price").val('0');
                }
               }
            });
        }else{
            $("#net_price").val('0');
        }    
    }

});
</script>
<script>
let map, infoWindow, marker;

function initMap() {
  var myLatLng = { lat: -6.922237839463699, lng: 110.20010403863363 };

  map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    zoom: 20
  });

  infoWindow = new google.maps.InfoWindow();

  const locationButton = document.createElement('button');
  locationButton.textContent = 'Klik untuk menemukan lokasi saya';
  locationButton.classList.add('custom-map-control-button');
  locationButton.setAttribute('type', 'button');
  map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
  locationButton.addEventListener('click', () => {
    // Try HTML5 geolocation.
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        (position) => {
          const pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          };

          if (marker) {
            // Marker already exists, update its position
            marker.setPosition(pos);
          } else {
            // Marker doesn't exist, create a new one
            marker = new google.maps.Marker({
              position: pos,
              map: map,
              title: 'Lokasi ditemukan',
              draggable: true
            });

            google.maps.event.addListener(marker, 'dragend', function () {
              var latLng = marker.getPosition();
              $('#address-latitude').val(latLng.lat());
              $('#address-longitude').val(latLng.lng());
            });
          }

          infoWindow.open(map);
          map.setCenter(pos);

            // Store latitude and longitude values in the input fields
            $('#address-latitude').val(pos.lat);
            $('#address-longitude').val(pos.lng);
        },
        () => {
          handleLocationError(true, infoWindow, map.getCenter());
        }
      );
    } else {
      // Browser doesn't support Geolocation
      handleLocationError(false, infoWindow, map.getCenter());
    }
  });
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(
    browserHasGeolocation
      ? 'Error: The Geolocation service failed.'
      : "Error: Your browser doesn't support geolocation."
  );
  infoWindow.open(map);
}

window.initMap = initMap;
  
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUQaOBIQIBCIfWQb3r8-8Vv1-XWLH_aOk&callback=initMap&libraries=places&v=weekly" defer></script>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlte.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pta_multiple\resources\views/trans/order.blade.php ENDPATH**/ ?>
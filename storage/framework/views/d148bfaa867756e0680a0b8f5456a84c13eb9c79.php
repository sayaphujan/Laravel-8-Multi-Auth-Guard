
  
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
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo e(__('Invoice')); ?></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
    </section>

      <section class="content">
        <div class="card card-outline card-info">
            <div class="card-header"></div>
                <form method="post" action="#" id="myForm" class="form-horizontal">
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
                            <option data-id="2" value="Luar Kota">Luar Kota</option>
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
                              <option data-id=<?php echo e($price->price_id); ?> value=<?php echo e($price->price_volume); ?>><?php echo e($price->price_volume); ?></option>
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
unset($__errorArgs, $__bag); ?>" name="net_price" id="net_price" placeholder="Harga Air" readonly="readonly" value="<?php echo e(old('net_price')); ?>">

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
unset($__errorArgs, $__bag); ?>" name="deliv_price" id="deliv_price" placeholder="Biaya Pengiriman" readonly="readonly" value="<?php echo e(old('deliv_price')); ?>">

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
unset($__errorArgs, $__bag); ?>" name="total" id="total" placeholder="Total" readonly="readonly" value="<?php echo e(old('total')); ?>">

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
unset($__errorArgs, $__bag); ?>" name="name" id="name" placeholder="Nama Pemohon" required="required" value="<?php echo e(old('name')); ?>">

                          <?php $__errorArgs = ['name'];
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
                          <label class="label" for="subject">No. Telepon</label>
                          <input type="text" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="phone" id="phone" placeholder="No. Telepon" required="required" value="<?php echo e(old('phone')); ?>">

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
unset($__errorArgs, $__bag); ?>" name="address" id="address" placeholder="Alamat Pengiriman" required="required" value="<?php echo e(old('address')); ?>">

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
                        <input type="hidden" class="form-control" name="address_latitude" id="address-latitude" value="<?php echo e(old('address_latitude')); ?>" readonly="readonly" />
                      </div>

                      <div class="col-md-6">
                        <label class="label" for="#">Longitude</label>
                        <input type="text" class="form-control" name="address_longitude" id="address-longitude" value="<?php echo e(old('address_longitude')); ?>" readonly="readonly" />
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
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Simpan</button>
                    <a href="<?php echo e(route('users')); ?>">
                        <button type="button" class="btn btn-default float-right">Batal</button>                
                    </a>
                  </div>
                </form>
        </div>
      </section>
  </div>
<script src="<?php echo e(asset( 'assets/js/jquery-1.9.1.js')); ?>"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script type="text/javascript">


$(document).ready(function () {
    setTimeout(() => {
      $('.alert').hide(1000);
    }, 1000);
    $.ajaxSetup({
              headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
             });

    var txt = $("#name");
    var func = function() {
        txt.val(txt.val().replace(/\s/g, ''));
    }
    txt.keyup(func).blur(func);

    var timer = null;
    $('#name').keyup(function() {
        clearTimeout(timer); 
        if($(this).val() != ''){
            timer = setTimeout(doStuff(this.id), 300)
        }
    });

    $('#email').keyup(function() {
        clearTimeout(timer); 
        if($(this).val() != ''){
            timer = setTimeout(doStuff(this.id), 300)
        }
    });

    $('#current_password').keyup(function() {
        clearTimeout(timer); 
        if($(this).val() != ''){
            timer = setTimeout(doStuff(this.id), 300)
        }
    });

    function doStuff(id){
        var uid = '<?php echo e($user->id); ?>';
        var val = $("#"+id).val();
        var key = (id == 'name') ? 'username' : (id == 'email') ? 'email' : 'password';
         $.ajax({
                  url: "<?php echo e(route('exist')); ?>",
                  type: 'post',
                  data: { key : val, "_token": "<?php echo e(csrf_token()); ?>"},
                  success: function(response)
                  {
                    //console.log(response);

                    if(response > 0){
                        if(key != 'password')
                        {
                            $("."+key).html('<span role="alert" style="color:red"><strong>'+key+' telah terdaftar</strong></span>');
                        }else{
                            $("."+key).html('');
                        }
                    }else{
                        if(key == 'password')
                        {
                            $("."+key).html('<span role="alert" style="color:red"><strong>'+key+' tidak sesuai</strong></span>');
                        }else{
                            $("."+key).html('<span role="alert" style="color:green"><strong>'+key+' tersedia</strong></span>');
                        }
                    }
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                        console.log("error");
                    }
                });
    }
});

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlte.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\kendal\resources\views/trans/invoice.blade.php ENDPATH**/ ?>
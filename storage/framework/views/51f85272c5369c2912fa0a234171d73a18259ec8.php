
  
<?php $__env->startSection('content'); ?>

<style type="text/css">
label {
    font-weight: 500!important;
}    


select[readonly] {
  background: #eee; /*Simular campo inativo - Sugestão @GabrielRodrigues*/
  pointer-events: none;
  touch-action: none;
} 
</style>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo e(__('Edit Data Harga')); ?></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
    </section>

      <section class="content">
        <div class="card card-outline card-info">
            <div class="card-header"></div>
                <form method="post" action="<?php echo e(route('prices.update', $price->price_id)); ?>" id="myForm" class="form-horizontal">
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
                            
                             <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label"><?php echo e(__('Volume')); ?></label>

                                <div class="col-md-6">
                                    <div class="input-group-prepend">
                                    <input id="volume" type="text" class="form-control <?php $__errorArgs = ['volume'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="volume" value="<?php echo e($price->price_volume); ?>" required autocomplete="volume" autofocus>
                                    <span class="input-group-text">Lt</span>
                                    </div>
                                    <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback username" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label"><?php echo e(__('Harga')); ?></label>

                                <div class="col-md-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    <input id="price" type="text" class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="price" value="<?php echo e($price->price_net); ?>" required autocomplete="price" autofocus>
                                    </div>
                                    <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback username" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Simpan</button>
                    <a href="<?php echo e(route('prices')); ?>">
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
        var uid = '<?php echo e($price->id); ?>';
        var val = (id == 'name') ? 'DRV'+$("#"+id).val() : $("#"+id).val() ;
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
<?php echo $__env->make('layouts.adminlte.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pta\resources\views/prices/edit.blade.php ENDPATH**/ ?>

  
<?php $__env->startSection('content'); ?>
<?php
    $officer->name = str_replace('DRV','',$officer->name);
?>

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
            <h1 class="m-0"><?php echo e(__('Edit Data Petugas Pengiriman')); ?></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
    </section>

      <section class="content">
        <div class="card card-outline card-info">
            <div class="card-header"></div>
                <form method="post" action="<?php echo e(route('officers.update', $officer->id)); ?>" id="myForm" class="form-horizontal">
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
                                <label for="name" class="col-md-4 col-form-label"><?php echo e(__('Nama Lengkap')); ?></label>

                                <div class="col-md-6">
                                    <input type="text" name="fullname" class="form-control" id="fullname" value="<?php echo e($officer->fullname); ?>"aria-describedby="fullname" >
                                
                                    <?php $__errorArgs = ['fullname'];
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
                            
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label"><?php echo e(__('Username')); ?></label>                    
                                <div class="col-md-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">DRV</span>
                                    </div>
                                    <input type="text" name="name" class="form-control" id="name" value="<?php echo e($officer->name); ?>" aria-describedby="name" >                
                                    <p class="username"></p>
                                    
                                    <?php $__errorArgs = ['name'];
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
                                <label for="password" class="col-md-4 col-form-label"><?php echo e(__('Current Password')); ?></label>

                                <div class="col-md-6">
                                    <input type="password" id="current_password" name="current_password" class="form-control <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter current password">
                                    <code>* Kosongkan jika tidak ingin mengganti password</code>
                                    <p class="password"></p>

                                    <?php $__errorArgs = ['current_password'];
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

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label"><?php echo e(__('New Password')); ?></label>
                                
                                <div class="col-md-6">
                                    <input type="password" name="password" id="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter the new password">
                                    
                                    <?php $__errorArgs = ['password'];
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

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label"><?php echo e(__('Confirm New Password')); ?></label>
                                
                                <div class="col-md-6">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter same password">

                                    <?php $__errorArgs = ['confirm_password'];
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

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label"><?php echo e(__('Email')); ?></label>                    
                                <div class="col-md-6">
                                    <input type="text" name="email" class="form-control" id="email" value="<?php echo e($officer->email); ?>" aria-describedby="email" >    
                                    <p class="email"></p> 
                                    
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback email" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>            
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label"><?php echo e(__('No. Telepon')); ?></label>
                                
                                <div class="col-md-6">
                                    <input type="text" name="phone_number" class="form-control" id="phone_number" value="<?php echo e($officer->phone_number); ?>" aria-describedby="phone_number" >          
                                    
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

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label"><?php echo e(__('Alamat')); ?></label>                    
                                <div class="col-md-6">
                                    <textarea name="address" class="form-control" id="address" aria-describedby="address" required="required" value="<?php echo e($officer->address); ?>"><?php echo e($officer->address); ?></textarea>
                                    
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

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label"><?php echo e(__('Hak Akses')); ?></label>                   
                                <div class="col-md-6">
                                    <select name="level" class="form-control" id="level" aria-describedby="level" readonly>
                                        <option value="1" <?php echo e($officer->level == '1' ? 'selected' : ''); ?>>Admin</option>
                                        <option value="2" <?php echo e($officer->level == '2' ? 'selected' : ''); ?>>Owner</option>
                                        <option value="3" <?php echo e($officer->level == '3' ? 'selected' : ''); ?>>User</option>
                                        <option value="4" <?php echo e($officer->level == '4' ? 'selected' : ''); ?>>Driver</option>
                                    </select>    
                               
                                    <?php $__errorArgs = ['level'];
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
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Simpan</button>
                    <a href="<?php echo e(route('officers')); ?>">
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
        var uid = '<?php echo e($officer->id); ?>';
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
<?php echo $__env->make('layouts.adminlte.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\kendal\resources\views/officers/edit.blade.php ENDPATH**/ ?>
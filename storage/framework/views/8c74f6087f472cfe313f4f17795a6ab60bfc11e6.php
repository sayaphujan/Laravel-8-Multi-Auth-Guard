<?php $__env->startSection('content'); ?>
<style type="text/css">
    label {
        font-weight: 500;
        font-size: 15px;
        color: #2a2a2a;
    }
</style>
<div id="services" class="services section">
    <div class="container">
      <div class="row">
    <section>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 offset-lg-2">
              <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                <h4>Form<em> Registrasi</em></h4>
                <img src="<?php echo e(asset('assets/images/heading-line-dec.png')); ?>" alt="">
                <p></p>
              </div>
            </div>
          </div>
        </div>
      <div class="container" data-aos="fade-up">
	      <div class="row">
	          <div class="col-lg-12">
                    <form method="POST" action="<?php echo e(route('signup')); ?>">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="level" id="level" value="3">
                        <div class="form-group row mt-2 mb-2">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nama Lengkap')); ?></label>

                            <div class="col-md-6">
                                <input id="fullname" type="text" class="form-control <?php $__errorArgs = ['fullname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="fullname" value="<?php echo e(old('fullname')); ?>" required autocomplete="fullname" autofocus>

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

                        <div class="form-group row mt-2 mb-2">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Username')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>
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

                        <div class="form-group row mt-2 mb-2">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">

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

                        <div class="form-group row mt-2 mb-2">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password Konfirmasi')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
<!--
                        <div class="form-group row mt-2 mb-2">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">
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

                        <div class="form-group row mt-2 mb-2">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('No. Telepon')); ?></label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="phone" value="<?php echo e(old('phone')); ?>" required autocomplete="phone" minlength="6" maxlength="13">

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

                        <div class="form-group row mt-2 mb-2">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Alamat')); ?></label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="address" value="<?php echo e(old('address')); ?>" required autocomplete="address">

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
-->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="float: right;">
                                    <?php echo e(__('Daftar')); ?>

                                </button>
                                <!--
                                 <?php if(Route::has('login')): ?>
                                    <a class="btn btn-link" href="<?php echo e(url('/masuk/')); ?>">
                                        <?php echo e(__('Masuk')); ?>

                                    </a>
                                <?php endif; ?>-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
      </div>
    </section>
    </div>
  </div>
</div>
<script src="<?php echo e(asset( 'assets/js/jquery-1.9.1.js')); ?>"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script type="text/javascript">
    
$(document).ready(function () {
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
            
    function doStuff(id){
        var val = $("#"+id).val();
        var key = (id == 'name') ? 'username' : 'email';
         $.ajax({
                  url: "<?php echo e(route('check')); ?>",
                  type: 'post',
                  data: { key : val},
                  success: function(response)
                  {
                    //console.log(response);

                    if(response > 0){
                        $("."+key).html('<span role="alert" style="color:red"><strong>'+key+' telah terdaftar</strong></span>');
                    }else{
                        $("."+key).html('<span role="alert" style="color:green"><strong>'+key+' tersedia</strong></span>');
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

<?php echo $__env->make('layouts.chain.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\iqbal\resources\views/main/register.blade.php ENDPATH**/ ?>
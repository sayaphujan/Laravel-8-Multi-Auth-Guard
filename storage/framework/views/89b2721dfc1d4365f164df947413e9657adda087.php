
  
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo e(__('Detail Rekening')); ?> &#64;<?php echo e(strtoupper($bank->bank_name)); ?></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>

      <section class="content">
        <div class="card card-outline card-info">
            <div class="card-header"></div>
                <form id="myForm" class="form-horizontal">
                  <div class="card-body">
                            
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label"><?php echo e(__('Nama Bank')); ?></label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e($bank->bank_name); ?>" required autocomplete="name" autofocus readonly="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label"><?php echo e(__('Nama Pemilik')); ?></label>

                                <div class="col-md-6">
                                    <input id="owner" type="text" class="form-control <?php $__errorArgs = ['owner'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="owner" value="<?php echo e($bank->bank_own); ?>" required autocomplete="owner" autofocus readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label"><?php echo e(__('No. Rekening')); ?></label>

                                <div class="col-md-6">
                                    <input id="no" type="text" class="form-control <?php $__errorArgs = ['no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="no" value="<?php echo e($bank->bank_num); ?>" required autocomplete="no" readonly>

                                </div>
                            </div>
                  </div>
                  <div class="card-footer">
                    <a href="<?php echo e(route('banks')); ?>">
                        <button type="button" class="btn btn-warning float-right">Kembali</button>                
                    </a>
                  </div>
                </form>
        </div>
      </section>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlte.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pta_multiple\resources\views/banks/detail.blade.php ENDPATH**/ ?>
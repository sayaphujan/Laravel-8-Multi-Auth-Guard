

<?php $__env->startSection('content'); ?>
  <div class="content-wrapper">
    <div class="content-header">
      
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
                <div class="card card-row card-primary mb-3" style="width: 70vw!important;">
                    <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                    <div class="card-body" style="padding: 0.75rem 1.25rem;">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>

                        <p>Selamat Datang <b><?php echo e(ucfirst(Auth::user()->name)); ?></b></p>
                        <p>Anda terdaftar sebagai <?php if(Auth::user()->level == 1): ?>
                            <b><?php echo e('ADMIN'); ?></b>
                        <?php elseif(Auth::user()->level == 2): ?>
                            <b><?php echo e('OWNER'); ?></b>
                        <?php elseif(Auth::user()->level == 3): ?>
                            <b><?php echo e('CUSTOMER'); ?></b>
                         <?php elseif(Auth::user()->level == 4): ?>
                            <b><?php echo e('DRIVER'); ?></b>
                        <?php endif; ?></p>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminlte.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\kendal\resources\views/home.blade.php ENDPATH**/ ?>
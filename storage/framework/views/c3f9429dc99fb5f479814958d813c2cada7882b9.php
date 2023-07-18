

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="margin-top: 50px">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <p>Hi, <?php echo e(Auth::user()->name); ?></p>
                    <p>Anda terdaftar sebagai <?php if(Auth::user()->level == 4): ?>
                        <b><?php echo e('ADMIN SIKEP'); ?></b>
                    <?php elseif(Auth::user()->level == 3): ?>
                        <b><?php echo e('ADMIN OFFICIAL'); ?></b>
                    <?php elseif(Auth::user()->level == 6): ?>
                        <b><?php echo e('ADMIN GAPOKTAN'); ?></b>
                    <?php elseif(Auth::user()->level == 5): ?>
                        <b><?php echo e('ADMIN DISPAPERTA'); ?>  di Kecamatan <?php echo e($kec); ?></b>
                    <?php else: ?>
                        <b><?php echo e('ADMIN DISPAPERTA'); ?></b>
                    <?php endif; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\dispaperta\resources\views/home.blade.php ENDPATH**/ ?>
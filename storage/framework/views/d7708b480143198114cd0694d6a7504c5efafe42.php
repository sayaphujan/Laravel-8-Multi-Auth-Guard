

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="margin-top: 50px">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('user_roles')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('user_roles')); ?>

                        </div>
                    <?php endif; ?>

                    <p>Hi, <?php echo e($user['user_name']); ?></p>
                    <p>Welcome to <?php echo e(auth()->user()->user_roles); ?>'s Dashboard</p>
                    <?php echo e(__('You are logged in!')); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\kendal\resources\views/admin/home.blade.php ENDPATH**/ ?>
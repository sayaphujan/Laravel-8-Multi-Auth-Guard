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
                <h4>Pesanan<em> Diterima</em></h4>
                <img src="<?php echo e(asset('assets/images/heading-line-dec.png')); ?>" alt="">
                <p></p>
              </div>
            </div>
          </div>
        </div>
      <div class="container" data-aos="fade-up">
	      <div class="row">
	          <div class="col-lg-12">
                    <form method="POST" action="<?php echo e(route('pay')); ?>" class="contactForm" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" value="<?php echo e($trans->trans_id); ?>" id="id" name="id">
                        <input type="hidden" value="<?php echo e($trans->order_id); ?>" id="order_id" name="order_id">
                        <div class="row mt-3 mb-3">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="label" for="#">Foto Bukti Pembayaran</label>
                              <input type="file" class="form-control <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="photo" id="photo" placeholder="Foto Bukti Pembayaran" value="<?php echo e(old('photo')); ?>">
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


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Kirim')); ?>

                                </button>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.chain.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\kendal\resources\views/main/notif.blade.php ENDPATH**/ ?>

  
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
            <h1 class="m-0"><?php echo e(__('Detail Akun')); ?> &#64;<?php echo e(strtoupper($user->name)); ?></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>

      <section class="content">
        <div class="card card-outline card-info">
            <div class="card-header"></div>
                <form id="myForm" class="form-horizontal">
                  <div class="card-body">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label"><?php echo e(__('Nama Lengkap')); ?></label>

                                <div class="col-md-6">
                                    <input type="text" name="fullname" class="form-control" id="fullname" value="<?php echo e($user->fullname); ?>"aria-describedby="fullname" readonly>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label"><?php echo e(__('Username')); ?></label>                    
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" id="name" value="<?php echo e($user->name); ?>" aria-describedby="name" readonly>                
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label"><?php echo e(__('Password')); ?></label>
                                
                                <div class="col-md-6">
                                    <input type="password" name="password" id="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($user->plain_password); ?>" readonly>
                                    
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label"><?php echo e(__('Email')); ?></label>                    
                                <div class="col-md-6">
                                    <input type="text" name="email" class="form-control" id="email" value="<?php echo e($user->email); ?>" aria-describedby="email" readonly>    
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label"><?php echo e(__('No. Telepon')); ?></label>
                                
                                <div class="col-md-6">
                                    <input type="text" name="phone_number" class="form-control" id="phone_number" value="<?php echo e($user->phone_number); ?>" aria-describedby="phone_number" readonly>          
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label"><?php echo e(__('Alamat')); ?></label>                    
                                <div class="col-md-6">
                                    <textarea name="address" class="form-control" id="address" aria-describedby="address" required="required" value="<?php echo e($user->address); ?>" readonly><?php echo e($user->address); ?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label"><?php echo e(__('Hak Akses')); ?></label>                   
                                <div class="col-md-6">
                                    <select name="level" class="form-control" id="level" aria-describedby="level" disabled readonlny>
                                        <option value="1" <?php echo e($user->level == '1' ? 'selected' : ''); ?>>Admin</option>
                                        <option value="2" <?php echo e($user->level == '2' ? 'selected' : ''); ?>>Owner</option>
                                        <option value="3" <?php echo e($user->level == '3' ? 'selected' : ''); ?>>User</option>
                                        <option value="4" <?php echo e($user->level == '4' ? 'selected' : ''); ?>>Petugas Pengiriman</option>
                                    </select>    
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label">Foto Profil</label>

                                <div class="col-md-6">
                                    <div class="image">
                                    <?php if(!empty($user->photo)): ?>
                                        <img class="zoom" src="<?php echo e(asset('upload/profile/'.$user->photo)); ?>"  width="250px" height="auto">
                                    <?php else: ?>
                                      <img src="<?php echo e(asset('assets/dist/img/user-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
                                    <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            
                  </div>
                  <div class="card-footer">
                      <?php
                            $url= '';
                            $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
                            $uri_segments = explode('/', $uri_path);
                                    
                            if(isset($uri_segments[1])){
                                        if($uri_segments[1] == 'profile'){
                                            $url = "profile";
                                        }else {
                                            $url = "users";
                                        }
                                    }
                        ?>
                        <?php if($url == 'profile'): ?>
                            <a href="<?php echo e(url($url.'/edit/'.$user->id)); ?>">
                                <button type="button" class="btn btn-info">Sunting Profil</button>                
                            </a>
                            <a href="<?php echo e(route('home')); ?>">
                                <button type="button" class="btn btn-warning float-right">Kembali</button>                
                            </a>
                        <?php else: ?>     
                            <a href="<?php echo e(route('users')); ?>">
                                <button type="button" class="btn btn-warning float-right">Kembali</button>                
                            </a>
                        <?php endif; ?>
                  </div>
                </form>
        </div>
      </section>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlte.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pta_multiple\resources\views/users/detail.blade.php ENDPATH**/ ?>
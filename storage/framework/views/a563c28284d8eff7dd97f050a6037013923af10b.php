
  
<?php $__env->startSection('content'); ?>
   <style>
select[readonly] {
  background: #eee; /*Simular campo inativo - Sugestão @GabrielRodrigues*/
  pointer-events: none;
  touch-action: none;
}
</style>
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Tinjau Data User
            </div>
            <div class="card-body">
                <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <form method="post" action="<?php echo e(route('users.update', $user->id)); ?>" id="myForm">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>                    
                    <input type="text" name="fullname" class="form-control" id="fullname" readonly="readonly" value="<?php echo e($user->nama_lengkap); ?>"aria-describedby="fullname" >                
                </div>
                <div class="form-group">
                    <label for="name">username</label>                    
                    <input type="text" name="name" class="form-control" id="name" readonly="readonly" value="<?php echo e($user->name); ?>" aria-describedby="name" >                
                    <p class="username"></p>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>                    
                    <input type="text" name="email" class="form-control" id="email" readonly="readonly" value="<?php echo e($user->email); ?>" aria-describedby="email" >                
                </div>
                <div class="form-group">
                    <label for="name">No. Telephone</label>                    
                    <input type="text" name="phone" class="form-control" id="phone" readonly="readonly" value="<?php echo e($user->phone); ?>" aria-describedby="phone" >                
                </div>
                <div class="form-group">
               <div class="form-group">
                    <label for="name">Jenis Kelamin</label>                    
                    <div class="row">
                        
                        <div class="input-group col-md-2">
                            <span class="input-group-addon">
                              <input type="radio" name="jk" readonly="readonly" value="L" <?php echo e($user->jenis_kelamin == 'L'? 'checked' : ''); ?>>  
                            </span>
                            <label class="form-control">L</label>
                        
                            <span class="input-group-addon">
                              <input type="radio" name="jk" readonly="readonly" value="P" <?php echo e($user->jenis_kelamin == 'P'? 'checked' : ''); ?>>  
                            </span>
                            <label class="form-control">P</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Level</label>                   
                    <select name="level" class="form-control" id="level" aria-describedby="level"  <?php if(Auth::user()->level == '5' || Auth::user()->level == '2' || Auth::user()->level == '4' ): ?> readonly="readonly" tabindex="-1" aria-disabled="true" <?php endif; ?>>
                        <option value="2" <?php echo e($user->level == '2' ? 'selected' : ''); ?>>Admin SIKEP</option>
                        <option value="3" <?php echo e($user->level == '3' ? 'selected' : ''); ?>>Admin Official</option>
                        <option value="4" <?php echo e($user->level == '4' ? 'selected' : ''); ?>>Admin Bidang</option>
                        <option value="4" <?php echo e($user->level == '5' ? 'selected' : ''); ?>>Admin Kecamatan</option>
                        <option value="4" <?php echo e($user->level == '6' ? 'selected' : ''); ?>>Admin Gapoktan</option>
                    </select>    
                </div>
                <div class="form-group">
                    <label><?php echo e(__('Kecamatan')); ?></label>
                    <div>
                        <select name="kecamatan" class="form-control" id="kecamatan" aria-describedby="kecamatan"readonly="readonly" tabindex="-1" aria-disabled="true">
                            <option value="">-- Pilih Kecamatan --</option>
                                <?php $__currentLoopData = $kecamatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kecamatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option  data-id="<?php echo e($kecamatan['kode']); ?>" <?php echo e($user->kode_kecamatan == $kecamatan['kode_cepat'] ? 'selected' : ''); ?> value=<?php echo e($kecamatan['kode_cepat']); ?>><?php echo e($kecamatan['nama']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>    
                    </div>
                </div>

                <div class="form-group">
                    <label><?php echo e(__('Desa')); ?></label>
                    <div>
                        <select name="desa" class="form-control" id="desa" aria-describedby="desa" readonly="readonly">
                            <option value="">-- Pilih Desa --</option>
                        </select>    
                    </div>
                </div>

                <div class="form-group">
                    <label for="name">Alamat Detail</label>                    
                    <textarea name="alamat" class="form-control" id="alamat" aria-describedby="alamat" readonly="readonly" value="<?php echo e($user->alamat); ?>"><?php echo e($user->alamat); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="name">Status</label>                   
                    <select name="status" class="form-control" id="status" aria-describedby="status"  <?php if(Auth::user()->level == '5'): ?> readonly="readonly" tabindex="-1" aria-disabled="true" <?php endif; ?>>
                        <option value="1" <?php echo e($user->status == '1' ? 'selected' : ''); ?>>Menunggu Peninjauan</option>
                        <option value="2" <?php echo e($user->status == '2' ? 'selected' : ''); ?>>Diterima</option>
                        <option value="3" <?php echo e($user->status == '3' ? 'selected' : ''); ?>>Ditolak</option>
                    </select>    
                </div>
                <div class="form-group">
                    <label for="name">Review Usulan</label>                    
                    <textarea name="comment" class="form-control" id="comment" aria-describedby="comment" value="<?php echo e($user->comment); ?>"><?php echo e($user->comment); ?></textarea>
                </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
            <a href="<?php echo e(route('users')); ?>"><button type="button" class="btn btn-warning">Kembali</button></a>
            </form>
            </div>
        </div>
    </div>
</div>
    <script src="<?php echo e(asset( 'assets/js/jquery-1.9.1.js')); ?>"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>-->
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

$("#name").keyup(function(){
  var id = $(this).val();

          $.ajax({
              url: "<?php echo e(route('users.check')); ?>",
              type: 'post',
              data: { username : id},
              success: function(response)
              {
                console.log(response);

                if(response > 0){
                    $(".username").html("<span style='color:red'><b>Username already exists</b></span>");
                }else{
                    $(".username").html("<span style='color:green'><b>Username available</b></span>");
                }
                
              },
              error: function(jqXHR, textStatus, errorThrown) {
                    console.log("error");
                }
            });
});

    var kecID = $('#kecamatan').find(':selected').data('id');
    var desaID = '<?php echo $user->kode_desa; ?>';
    var selected = '';
        $.ajax({
           type:"GET",
           //url:"getdesa/"+kecID,
           url:"<?php echo e(url('/petani/getdesa/')); ?>/"+kecID,
           dataType: 'JSON',
           success:function(res){               
            console.log(res);
            if(res){
                $("#desa").empty();
                $("#desa").append('<option>-- Pilih Desa --</option>');
                $.each(res,function(nama, kode_cepat){
                    var selected = (kode_cepat == desaID) ? 'selected' : '';
                    $("#desa").append('<option value="'+kode_cepat+'" '+selected+'>'+nama+'</option>');
                });
            }else{
               $("#desa").empty();
            }
           }
        });
    
    $('#kecamatan').change(function(){
    var kecID = $(this).find(':selected').data('id');
    //alert(kecID);
    if(kecID){
        $.ajax({
           type:"GET",
           //url:"getdesa/"+kecID,
           url:"<?php echo e(url('/petani/getdesa/')); ?>/"+kecID,
           dataType: 'JSON',
           success:function(res){               
            console.log(res);
            if(res){
                $("#desa").empty();
                $("#desa").append('<option>-- Pilih Desa --</option>');
                $.each(res,function(nama, kode_cepat){
                    $("#desa").append('<option value="'+kode_cepat+'">'+nama+'</option>');
                });
            }else{
               $("#desa").empty();
            }
           }
        });
    }else{
        $("#desa").empty();
    }      
   });

});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\dispaperta\resources\views/users/detail.blade.php ENDPATH**/ ?>
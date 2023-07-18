
  
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
        <div class="card" style="width: 1024rem;">
            <div class="card-header">
            Tambah Data Gapoktan
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
            <?php $__currentLoopData = $gapoktan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    print_r($g);
                ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <form method="post" action="<?php echo e(route('gapoktan.store_sikep')); ?>" id="myForm" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="name">Tanggal</label>                    
                    <label for="name"><?php echo e(date('d-m-Y H:i:s')); ?></label>         
                </div>
                
                <div class="form-group">
                    <label><?php echo e(__('Kecamatan')); ?></label>
                    <div>
                        <select name="kecamatan" class="form-control" id="kecamatan" aria-describedby="kecamatan" <?php if(Auth::user()->level == '5'): ?> readonly="readonly" tabindex="-1" aria-disabled="true" <?php endif; ?>>
                            <option value="">-- Pilih Kecamatan --</option>
                                 <?php $__currentLoopData = $kecamatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kecamatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <option data-id="<?php echo e($kecamatan['kode']); ?>" <?php echo e($getKec == $kecamatan['kode_cepat'] ? 'selected' : ''); ?> value="<?php echo e($kecamatan['kode_cepat']); ?>"><?php echo e($kecamatan['nama']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>    
                    </div>
                </div>

                <div class="form-group">
                    <label><?php echo e(__('Desa')); ?></label>
                    <div>
                        <select name="desa" class="form-control" id="desa" aria-describedby="desa">
                            <option value="">-- Pilih Desa --</option>
                        </select>    
                    </div>
                </div>
                
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-6">
                      <label for="name">No Induk</label>                    
                      <input type="text" name="no_induk" class="form-control" id="no_induk" aria-describedby="no_induk" required="required">   
                    </div>
                    
                    <div class="col-md-6">
                      <label for="name">Nama</label>                       
                      <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama" required="required">  
                    </div>
                  </div>
                </div>
                
                 <div class="form-group">
                                 
                </div>
                
                <div class="form-group">
                    <label for="name">Jenis Kelembagaan</label>  
                    <div class="row">
                        <div class="input-group col-md-6">
                            <span class="input-group-addon">
                              <input type="radio" name="pelaku" value="Pelaku Utama">  
                            </span>
                            <label class="form-control">Pelaku Utama</label>
                        </div>
                        <div class="input-group col-md-6">
                            <span class="input-group-addon">
                              <input type="radio" name="pelaku" value="Pelaku Usaha">  
                            </span>
                            <label class="form-control">Pelaku Usaha</label>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                            <label for="utama"><?php echo e(__('Utama')); ?></label>
                            <select name="utama" class="form-control" id="utama" aria-describedby="utama">
                                <option value="">-----</option>
                                <option value="GAPOKTAN">GAPOKTAN</option>
                                <option value="POKTAN">POKTAN</option>
                                <option value="POKDAKAN">POKDAKAN</option>
                                <option value="KEL. TANI IKAN">KEL. TANI IKAN</option>
                                <option value="PEMUDA TANI">PEMUDA TANI</option>
                                <option value="KWT">KWT</option>
                                <option value="KTHR">KTHR</option>
                                <option value="LMDH">LMDH</option>
                                <option value="POKNAK">POKNAK</option>
                                <option value="FMA">FMA</option>
                                <option value="POKHUT">POKHUT</option>
                                <option value="UPG">UPG</option>
                                <option value="KUB">KUB</option>
                                <option value="KTP">KTP</option>
                                <option value="P3A">P3A</option>
                                <option value="POKBUN">POKBUN</option>
                                <option value="AFINITAS / MAPAN">AFINITAS / MAPAN</option>
                                <option value="LMPA">LMPA</option>
                                <option value="LKMA">LKMA</option>
                                <option value="PAGUYUBAN">PAGUYUBAN</option>
                            </select>    
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="col-md-6">
                            <label for="usaha"><?php echo e(__('Usaha')); ?></label>
                            <select name="usaha" class="form-control" id="usaha" aria-describedby="usaha">
                                <option value="">-----</option>
                                <option value="KWT">KWT</option>
                                <option value="KUB">KUB</option>
                                <option value="ASOSIASI">ASOSIASI</option>
                                <option value="P4K">P4K</option>
                                <option value="P4S">P4S</option>
                                <option value="UPG">UPG</option>
                                <option value="P3A">P3A</option>
                                <option value="KTP">KTP</option>
                                <option value="LMDH">LMDH</option>
                                <option value="AFINITAS / MAPAN">AFINITAS / MAPAN</option>
                                <option value="LKMA">LKMA</option>
                                <option value="KEL. LEBAH">KEL. LEBAH</option>
                                <option value="PUAP">PUAP</option>
                                <option value="KPK">KPK</option>
                            </select>    
                        </div>
                      </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="kelas kelompok"><?php echo e(__('Kelas Kelompok')); ?></label>
                        <select name="kelas_kelompok" class="form-control" id="kelas_kelompok" aria-describedby="kelas_kelompok" required="required">
                            <option value="">-- Pilih Kelompok --</option>
                            <option value="Pemula">Pemula</option>
                            <option value="Lanjut">Lanjut</option>
                            <option value="Madya">Madya</option>
                            <option value="Utama">Utama</option>
                        </select> 
                </div>
                
                <div class="form-group">
                    <label for="name">Jumlah Anggota</label>                    
                    <div class="row">
                      <div class="input-group col-md-3">
                        <input type="number" name="jumlah_anggota" class="form-control" id="jumlah_anggota" aria-describedby="jumlah_anggota" required="required">
                      </div>
                        
                        <div class="input-group col-md-2">
                            <span class="input-group-addon">
                              <input type="radio" name="anggota" value="Kelompok">  
                            </span>
                            <label class="form-control">Kelompok</label>
                        </div>
                        <div class="input-group col-md-2">
                            <span class="input-group-addon">
                              <input type="radio" name="anggota" value="Orang">  
                            </span>
                            <label class="form-control">Orang</label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="name">Luas Areal</label>                    
                    <div class="row">
                      <div class="input-group col-md-3">
                        <input type="number" name="luas_areal" class="form-control" id="luas_areal" aria-describedby="luas_areal" required="required">
                      </div>
                        
                        <div class="input-group col-md-2">
                            <span class="input-group-addon">
                              <input type="radio" name="luas" value="Ha">  
                            </span>
                            <label class="form-control">Ha</label>
                        </div>
                        <div class="input-group col-md-2">
                            <span class="input-group-addon">
                              <input type="radio" name="luas" value="Unit">  
                            </span>
                            <label class="form-control">Unit</label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="name">Ketua</label>                    
                    <input type="text" name="ketua" class="form-control" id="ketua" aria-describedby="ketua" required="required">                
                </div>
                
                <div class="form-group">
                    <label for="name">Sekretaris</label>                    
                    <input type="text" name="sekretaris" class="form-control" id="sekretaris" aria-describedby="sekretaris" required="required">                
                </div>
                
                <div class="form-group">
                    <label for="name">Bendahara</label>                    
                    <input type="text" name="bendahara" class="form-control" id="bendahara" aria-describedby="bendahara" required="required">                
                </div>
                
                <div class="form-group">
                    <label for="name">Tahun Pembentukan</label>             
                      <div class="input-group col-md-2" style="margin-left:-15px">
                        <input type="number" name="tahun_pembentukan" class="form-control" id="tahun_pembentukan" aria-describedby="tahun_pembentukan" required="required">
                      </div>
                </div>
                      
                <div class="form-group"> 
                    <div class="row">

                        <?php $__currentLoopData = $jenis_pembentukan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                            <div class="input-group col-md-3">
                                <span class="input-group-addon">
                                  <input type="checkbox" name="jenis_pembentukan[]" value="<?php echo e($value); ?>">  
                                </span>
                                <label class="form-control"><?php echo e($value); ?></label>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
                
                <div class="form-group">
                    <label for="name">HP</label>             
                      <div class="input-group">
                        <input type="text" name="hp" class="form-control" id="hp" aria-describedby="hp" required="required">
                      </div>
                </div>
                
                <div class="form-group">
                    <label for="name">Email</label>             
                      <div class="input-group">
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="email" required="required">
                      </div>
                </div>
                
                <div class="form-group">
                    <label for="name">Input Dokumen</label> 
                    <input type="file" class="form-control" name="doc">
                </div>
                
            <button type="submit" class="btn btn-primary">Kirim</button>
            <a href="<?php echo e(route('gapoktan.sikep')); ?>"><button type="button" class="btn btn-warning">Kembali</button></a>
            </form>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function () { 
    var kecID = $('#kecamatan').find(':selected').data('id');     

    $('#kecamatan').change(function(){
        var kecID = $(this).find(':selected').data('id');
        getDesa(kecID);
        
    });

    if( kecID >= 0){
        getDesa(kecID);
    }

    function getDesa(kecID){
        //alert(kecID);
        if(kecID){
            $.ajax({
               type:"GET",
               //url:"getdesa/"+kecID,
               url:"<?php echo e(url('/gapoktan/getdesa/')); ?>/"+kecID,
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
    }
});
</script>
<?php echo $__env->make('layouts.user_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\dispaperta\resources\views/gapoktan/create_sikep.blade.php ENDPATH**/ ?>
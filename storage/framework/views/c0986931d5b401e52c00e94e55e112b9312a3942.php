
  
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
            Edit Data Gapoktan / Poktan
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

            <?php $__currentLoopData = $gapoktan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <form method="post" action="<?php echo e(route('gapoktan.update_sikep', $gapoktan->id)); ?>" id="myForm">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                    <div class="form-group">
                    <label for="name">Tanggal</label>                    
                    <label for="name"><?php echo e($gapoktan->updated_at); ?></label>         
                </div>
                <input type="hidden" name="nama_file" class="form-control" id="nama_file" value="<?php echo e($gapoktan->nama_file); ?>" required="required">   
                <input type="hidden" name="ext_file" class="form-control" id="ext_file" value="<?php echo e($gapoktan->extensi); ?>" required="required">   
                
                <div class="form-group">
                    <label><?php echo e(__('Kecamatan')); ?></label>
                    <div>
                        <select name="kecamatan" class="form-control" id="kecamatan" aria-describedby="kecamatan" <?php if(Auth::user()->level == '5'): ?> readonly="readonly" tabindex="-1" aria-disabled="true" <?php endif; ?>>
                            <option value="">-- Pilih Kecamatan --</option>
                                <?php $__currentLoopData = $kecamatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kecamatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option  data-id="<?php echo e($kecamatan['kode']); ?>" <?php echo e($gapoktan->id_kecamatan == $kecamatan['kode_cepat'] ? 'selected' : ''); ?> value=<?php echo e($kecamatan['kode_cepat']); ?>><?php echo e($kecamatan['nama']); ?></option>
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
                      <input type="text" name="no_induk" class="form-control" id="no_induk" aria-describedby="no_induk" value="<?php echo e($gapoktan->no_induk); ?>" required="required">   
                    </div>
                    
                    <div class="col-md-6">
                      <label for="name">Nama</label>                       
                      <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama" value="<?php echo e($gapoktan->nama); ?>" required="required">  
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
                              <input type="radio" name="pelaku" value="Pelaku Utama" <?php echo e($gapoktan->jenis_kelembagaan == 'Pelaku Utama' ? 'checked' : ''); ?> >  
                            </span>
                            <label class="form-control">Pelaku Utama</label>
                        </div>
                        <div class="input-group col-md-6">
                            <span class="input-group-addon">
                              <input type="radio" name="pelaku" value="Pelaku Usaha" <?php echo e($gapoktan->jenis_kelembagaan == 'Pelaku Usaha' ? 'checked' : ''); ?> >  
                            </span>
                            <label class="form-control">Pelaku Usaha</label>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-6">
                            <label for="utama"><?php echo e(__('Utama')); ?></label>
                            <select name="utama" class="form-control" id="utama" aria-describedby="utama">
                                <option value="" <?php echo e($gapoktan->utama == '' ? 'selected' : ''); ?> >-----</option>
                                <option value="GAPOKTAN" <?php echo e($gapoktan->utama == 'GAPOKTAN' ? 'selected' : ''); ?> >GAPOKTAN</option>
                                <option value="POKTAN" <?php echo e($gapoktan->utama == 'POKTAN' ? 'selected' : ''); ?> >POKTAN</option>
                                <option value="POKDAKAN" <?php echo e($gapoktan->utama == 'POKDAKAN' ? 'selected' : ''); ?> >POKDAKAN</option>
                                <option value="KEL. TANI IKAN" <?php echo e($gapoktan->utama == 'KEL. TANI IKAN' ? 'selected' : ''); ?> >KEL. TANI IKAN</option>
                                <option value="PEMUDA TANI" <?php echo e($gapoktan->utama == 'PEMUDA TANI' ? 'selected' : ''); ?> >PEMUDA TANI</option>
                                <option value="KWT" <?php echo e($gapoktan->utama == 'KWT' ? 'selected' : ''); ?> >KWT</option>
                                <option value="KTHR" <?php echo e($gapoktan->utama == 'KTHR' ? 'selected' : ''); ?> >KTHR</option>
                                <option value="LMDH" <?php echo e($gapoktan->utama == 'LMDH' ? 'selected' : ''); ?> >LMDH</option>
                                <option value="POKNAK" <?php echo e($gapoktan->utama == 'POKNAK' ? 'selected' : ''); ?> >POKNAK</option>
                                <option value="FMA" <?php echo e($gapoktan->utama == 'FMA' ? 'selected' : ''); ?> >FMA</option>
                                <option value="POKHUT" <?php echo e($gapoktan->utama == 'POKHUT' ? 'selected' : ''); ?> >POKHUT</option>
                                <option value="UPG" <?php echo e($gapoktan->utama == 'UPG' ? 'selected' : ''); ?> >UPG</option>
                                <option value="KUB" <?php echo e($gapoktan->utama == 'KUB' ? 'selected' : ''); ?> >KUB</option>
                                <option value="KTP" <?php echo e($gapoktan->utama == 'KTP' ? 'selected' : ''); ?> >KTP</option>
                                <option value="P3A" <?php echo e($gapoktan->utama == 'P3A' ? 'selected' : ''); ?> >P3A</option>
                                <option value="POKBUN" <?php echo e($gapoktan->utama == 'POKBUN' ? 'selected' : ''); ?> >POKBUN</option>
                                <option value="AFINITAS / MAPAN" <?php echo e($gapoktan->utama == 'AFINITAS / MAPAN' ? 'selected' : ''); ?> >AFINITAS / MAPAN</option>
                                <option value="LMPA" <?php echo e($gapoktan->utama == 'LMPA' ? 'selected' : ''); ?> >LMPA</option>
                                <option value="LKMA" <?php echo e($gapoktan->utama == 'LKMA' ? 'selected' : ''); ?> >LKMA</option>
                                <option value="PAGUYUBAN" <?php echo e($gapoktan->utama == 'PAGUYUBAN' ? 'selected' : ''); ?> >PAGUYUBAN</option>
                            </select>    
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="col-md-6">
                            <label for="usaha"><?php echo e(__('Usaha')); ?></label>
                            <select name="usaha" class="form-control" id="usaha" aria-describedby="usaha">
                                <option value="" <?php echo e($gapoktan->usaha == '' ? 'selected' : ''); ?> >-----</option>
                                <option value="KWT" <?php echo e($gapoktan->usaha == 'KWT' ? 'selected' : ''); ?> >KWT</option>
                                <option value="KUB" <?php echo e($gapoktan->usaha == 'KUB' ? 'selected' : ''); ?> >KUB</option>
                                <option value="ASOSIASI" <?php echo e($gapoktan->usaha == 'ASOSIASI' ? 'selected' : ''); ?> >ASOSIASI</option>
                                <option value="P4K" <?php echo e($gapoktan->usaha == 'P4K' ? 'selected' : ''); ?> >P4K</option>
                                <option value="P4S" <?php echo e($gapoktan->usaha == 'P4S' ? 'selected' : ''); ?> >P4S</option>
                                <option value="UPG" <?php echo e($gapoktan->usaha == 'UPG' ? 'selected' : ''); ?> >UPG</option>
                                <option value="P3A" <?php echo e($gapoktan->usaha == 'P3A' ? 'selected' : ''); ?> >P3A</option>
                                <option value="KTP" <?php echo e($gapoktan->usaha == 'KTP' ? 'selected' : ''); ?> >KTP</option>
                                <option value="LMDH" <?php echo e($gapoktan->usaha == 'LMDH' ? 'selected' : ''); ?> >LMDH</option>
                                <option value="AFINITAS / MAPAN" <?php echo e($gapoktan->usaha == 'AFINITAS / MAPAN' ? 'selected' : ''); ?> >AFINITAS / MAPAN</option>
                                <option value="LKMA" <?php echo e($gapoktan->usaha == 'LKMA' ? 'selected' : ''); ?> >LKMA</option>
                                <option value="KEL. LEBAH" <?php echo e($gapoktan->usaha == 'KEL. LEBAH' ? 'selected' : ''); ?> >KEL. LEBAH</option>
                                <option value="PUAP" <?php echo e($gapoktan->usaha == 'PUAP' ? 'selected' : ''); ?> >PUAP</option>
                                <option value="KPK" <?php echo e($gapoktan->usaha == 'KPK' ? 'selected' : ''); ?> >KPK</option>
                            </select>    
                        </div>
                      </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="kelas kelompok"><?php echo e(__('Kelas Kelompok')); ?></label>
                        <select name="kelas_kelompok" class="form-control" id="kelas_kelompok" aria-describedby="kelas_kelompok" required="required">
                            <option value="" <?php echo e($gapoktan->kelas_kelompok == '' ? 'selected' : ''); ?> >-- Pilih Kelompok --</option>
                            <option value="Pemula" <?php echo e($gapoktan->kelas_kelompok == 'Pemula' ? 'selected' : ''); ?> >Pemula</option>
                            <option value="Lanjut" <?php echo e($gapoktan->kelas_kelompok == 'Lanjut' ? 'selected' : ''); ?> >Lanjut</option>
                            <option value="Madya" <?php echo e($gapoktan->kelas_kelompok == 'Madya' ? 'selected' : ''); ?> >Madya</option>
                            <option value="Utama" <?php echo e($gapoktan->kelas_kelompok == 'Utama' ? 'selected' : ''); ?> >Utama</option>
                        </select> 
                </div>
                
                <div class="form-group">
                    <label for="name">Jumlah Anggota</label>                    
                    <div class="row">
                      <div class="input-group col-md-3">
                        <input type="number" name="jumlah_anggota" class="form-control" id="jumlah_anggota" aria-describedby="jumlah_anggota" value="<?php echo e($gapoktan->jumlah_anggota); ?>" required="required">
                      </div>
                        
                        <div class="input-group col-md-2">
                            <span class="input-group-addon">
                              <input type="radio" name="anggota" value="Kelompok" <?php echo e($gapoktan->jenis_jumlah == 'Kelompok' ? 'checked' : ''); ?> >  
                            </span>
                            <label class="form-control">Kelompok</label>
                        </div>
                        <div class="input-group col-md-2">
                            <span class="input-group-addon">
                              <input type="radio" name="anggota" value="Orang" <?php echo e($gapoktan->jenis_jumlah == 'Orang' ? 'checked' : ''); ?> >  
                            </span>
                            <label class="form-control">Orang</label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="name">Luas Areal</label>                    
                    <div class="row">
                      <div class="input-group col-md-3">
                        <input type="number" name="luas_areal" class="form-control" id="luas_areal" aria-describedby="luas_areal" value="<?php echo e($gapoktan->luas_areal); ?>" required="required">
                      </div>
                        
                        <div class="input-group col-md-2">
                            <span class="input-group-addon">
                              <input type="radio" name="luas" value="Ha"  <?php echo e($gapoktan->jenis_areal == 'Ha' ? 'checked' : ''); ?> >  
                            </span>
                            <label class="form-control">Ha</label>
                        </div>
                        <div class="input-group col-md-2">
                            <span class="input-group-addon">
                              <input type="radio" name="luas" value="Unit"  <?php echo e($gapoktan->jenis_areal == 'Unit' ? 'checked' : ''); ?> >  
                            </span>
                            <label class="form-control">Unit</label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="name">Ketua</label>                    
                    <input type="text" name="ketua" class="form-control" id="ketua" aria-describedby="ketua" value="<?php echo e($gapoktan->ketua); ?>" required="required">                
                </div>
                
                <div class="form-group">
                    <label for="name">Sekretaris</label>                    
                    <input type="text" name="sekretaris" class="form-control" id="sekretaris" aria-describedby="sekretaris" value="<?php echo e($gapoktan->sekretaris); ?>" required="required">                
                </div>
                
                <div class="form-group">
                    <label for="name">Bendahara</label>                    
                    <input type="text" name="bendahara" class="form-control" id="bendahara" aria-describedby="bendahara" value="<?php echo e($gapoktan->bendahara); ?>" required="required">                
                </div>
                
                <div class="form-group">
                    <label for="name">Tahun Pembentukan</label>             
                      <div class="input-group col-md-2" style="margin-left:-15px">
                        <input type="number" name="tahun_pembentukan" class="form-control" id="tahun_pembentukan" aria-describedby="tahun_pembentukan" value="<?php echo e($gapoktan->tahun_pembentukan); ?>" required="required">
                      </div>
                </div>
                      
                <div class="form-group"> 
                    <div class="row">

                        <?php $__currentLoopData = $jenis_pembentukan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                            <div class="input-group col-md-3">
                                <span class="input-group-addon">
                                  <input type="checkbox" name="jenis_pembentukan[]" value="<?php echo e($value); ?>" <?php if(in_array($value, $gapoktan->jenis_pembentukan)): ?> <?php echo e('checked'); ?> <?php else: ?> <?php echo e(''); ?> <?php endif; ?>>  
                                </span>
                                <label class="form-control"><?php echo e($value); ?></label>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
                
                <div class="form-group">
                    <label for="name">HP</label>             
                      <div class="input-group">
                        <input type="text" name="hp" class="form-control" id="hp" aria-describedby="hp" value="<?php echo e($gapoktan->hp); ?>" required="required">
                      </div>
                </div>
                
                <div class="form-group">
                    <label for="name">Email</label>             
                      <div class="input-group">
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="email" value="<?php echo e($gapoktan->email); ?>" required="required">
                      </div>
                </div>
                
                <div class="form-group">
                    <label for="name">Input Dokumen</label> 
                    <input type="file" class="form-control" name="doc">
                    <br>
                    <a href="<?php echo $gapoktan->fileloc; ?>" target="_blank"><?php echo e($gapoktan->nama_file); ?></a>
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
    var desaID = '<?php echo $gapoktan->id_desa; ?>';
    var selected = '';
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
   });
});
</script>
<?php echo $__env->make('layouts.user_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\dispaperta\resources\views/gapoktan/edit_sikep.blade.php ENDPATH**/ ?>
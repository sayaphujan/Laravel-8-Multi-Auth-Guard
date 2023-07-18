

<?php $__env->startSection('content'); ?>
<!-- ======= Specials Section ======= -->
    <section id="bidang" class="specials" style="margin-top:100px;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Profil</h2>
              <p>GAPOKTAN / POKTAN</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/main/showdata/all/data')); ?>" target="_blank">Semua</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#tab-kecamatan">Kecamatan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-desa">Desa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-pelaku_utama">Pelaku Utama</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-pelaku_usaha">Pelaku Usaha</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-jenis_pelaku">Jenis Pelaku</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-kecamatan_desa">Kecamatan dan Desa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-kecamatan_pelaku_utama">Kecamatan dan Pelaku Utama</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-jenis_usaha">Jenis Usaha</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-kecamatan_jenis_usaha">Kecamatan dan Jenis Usaha</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-kelas_kelompok">Kelas Kelompok</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-kecamatan_pelaku_usaha">Kecamatan dan Pelaku Usaha</a>
              </li>
              <!--
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-input_profil">Input Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-sikep">SIKEP</a>
              </li>-->
            </ul>
          </div>
          
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active" id="tab-kecamatan">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <div class="form-group">
                        <label for="kecamatan"><?php echo e(__('Kecamatan')); ?></label>
                            <select name="kecamatan" class="form-control" id="kecamatan" aria-describedby="kecamatan" required="required">
                                    <option value="">-- Pilih Kecamatan --</option>
                                        <?php $__currentLoopData = $kecamatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kecamatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option data-id="<?php echo e($kecamatan['kode']); ?>" value="<?php echo e($kecamatan['nama']); ?>"><?php echo e($kecamatan['nama']); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>    
                            <br/>
                            <button class="btn btn-primary" onclick="send('kecamatan')" type="button">Lihat Data</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              
              <div class="tab-pane" id="tab-desa">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <div class="form-group">
                        <label for="desa"><?php echo e(__('Desa')); ?></label>
                            <select name="desa" class="form-control" id="desa" aria-describedby="desa" required="required">
                                <option value="">-- Pilih Desa --</option>
                                <?php $__currentLoopData = $desa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $desa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option data-id="<?php echo e($desa->kode); ?>" value="<?php echo e($desa->nama); ?>"><?php echo e($desa->nama); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>    
                            <br/>
                            <button class="btn btn-primary" onclick="send('desa')" type="button">Lihat Data</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="tab-pane" id="tab-pelaku_utama">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <div class="form-group">
                        <label for="pelaku_utama"><?php echo e(__('Pelaku Utama')); ?></label>
                            <select name="pelaku_utama" class="form-control" id="pelaku_utama" aria-describedby="pelaku_utama" required="required">
                                <option value="">-- Pilih Pelaku Utama --</option>
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
                            <br/>
                            <button class="btn btn-primary" onclick="send('pelaku_utama')" type="button">Lihat Data</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="tab-pane" id="tab-pelaku_usaha">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <div class="form-group">
                        <label for="pelaku_usaha"><?php echo e(__('Pelaku Usaha')); ?></label>
                            <select name="pelaku_usaha" class="form-control" id="pelaku_usaha" aria-describedby="pelaku_usaha" required="required">
                                <option value="">-- Pilih Pelaku Usaha --</option>
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
                            <br/>
                            <button class="btn btn-primary" onclick="send('pelaku_usaha')" type="button">Lihat Data</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="tab-pane" id="tab-jenis_pelaku">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <div class="form-group">
                        <label for="jenis_pelaku"><?php echo e(__('Jenis Pelaku')); ?></label>
                            <select name="jenis_pelaku" class="form-control" id="jenis_pelaku" aria-describedby="jenis_pelaku" required="required">
                                <option value="">-- Pilih Jenis Pelaku --</option>
                                <option value="Pelaku Utama">Pelaku Utama</option>
                                <option value="Pelaku Usaha">Pelaku Usaha</option>
                            </select>    
                            <br/>
                            <button class="btn btn-primary" onclick="send('jenis_pelaku')" type="button">Lihat Data</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="tab-pane" id="tab-kecamatan_desa">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <div class="form-group">
                        <label for="kecamatan"><?php echo e(__('Kecamatan')); ?></label>
                            <select name="kecamatan_desa" class="form-control" id="kecamatan_desa" aria-describedby="kecamatan_desa" required="required">
                                <option value="">-- Pilih Kecamatan --</option>
                                <?php $__currentLoopData = $kec_des; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kecamatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option data-id="<?php echo e($kecamatan['kode']); ?>" value="<?php echo e(strtolower($kecamatan['kode_cepat'])); ?>"><?php echo e($kecamatan['nama']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>    
                    </div>
    
                    <div class="form-group">
                        <label for="kecamatan"><?php echo e(__('Desa')); ?></label>
                            <select name="desa_desa" class="form-control" id="desa_desa" aria-describedby="desa_desa" required="required">
                                <option value="">-- Pilih Desa --</option>
                            </select>    
                        <br/>
                            <button class="btn btn-primary" onclick="location.href='<?php echo e(url('/gapoktan/showdata/kecamatan_desa/')); ?>'" type="button">Lihat Data</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="tab-pane" id="tab-kecamatan_pelaku_utama">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <div class="form-group">
                        <label for="kecamatan"><?php echo e(__('Kecamatan')); ?></label>
                            <select name="kecamatan" class="form-control" id="kecamatan" aria-describedby="kecamatan" required="required">
                                <option value="">-- Pilih Kecamatan --</option>
                                <?php $__currentLoopData = $kec_utama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kecamatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option data-id="<?php echo e($kecamatan['kode']); ?>" value="<?php echo e(strtolower($kecamatan['kode_cepat'])); ?>"><?php echo e($kecamatan['nama']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>    
                    </div>
                    <div class="form-group">
                        <label for="pelaku_utama"><?php echo e(__('Pelaku Utama')); ?></label>
                            <select name="pelaku_utama" class="form-control" id="pelaku_utama" aria-describedby="pelaku_utama" required="required">
                                <option value="">-- Pilih Pelaku Utama --</option>
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
                            <br/>
                            <button class="btn btn-primary" onclick="location.href='<?php echo e(url('/gapoktan/showdata/kecamatan_pelaku_utama/')); ?>'" type="button">Lihat Data</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="tab-pane" id="tab-jenis_usaha">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <div class="form-group"> 
                      <?php $__currentLoopData = $jenis_pembentukan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                            <div class="input-group col-md-3">
                                <span class="input-group-addon">
                                  <input type="checkbox" name="jenis_pembentukan[]" value="<?php echo e($value); ?>">  
                                </span>
                                <label class="form-control"><?php echo e($value); ?></label>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <br/>
                            <button class="btn btn-primary" onclick="send('jenis_pembentukan')" type="button">Lihat Data</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="tab-pane" id="tab-kecamatan_jenis_usaha">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                     <div class="form-group"> 
                        <div class="row">
                            <div class="input-group col-md-3">
                                <span class="input-group-addon">
                                  <input type="checkbox" name="jenis_pembentukan" value="Tanaman Pangan">  
                                </span>
                                <label class="form-control">Tanaman Pangan</label>
                            </div>
                            <div class="input-group col-md-3">
                                <span class="input-group-addon">
                                  <input type="checkbox" name="jenis_pembentukan" value="Perkebunan">  
                                </span>
                                <label class="form-control">Perkebunan</label>
                            </div>
                            <div class="input-group col-md-3">
                                <span class="input-group-addon">
                                  <input type="checkbox" name="jenis_pembentukan" value="Prikanan Tangkap">  
                                </span>
                                <label class="form-control">Prikanan Tangkap</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group col-md-3">
                                <span class="input-group-addon">
                                  <input type="checkbox" name="jenis_pembentukan" value="Peternakan">  
                                </span>
                                <label class="form-control">Peternakan</label>
                            </div>
                            <div class="input-group col-md-3">
                                <span class="input-group-addon">
                                  <input type="checkbox" name="jenis_pembentukan" value="Kehutanan">  
                                </span>
                                <label class="form-control">Kehutanan</label>
                            </div>
                            <div class="input-group col-md-3">
                                <span class="input-group-addon">
                                  <input type="checkbox" name="jenis_pembentukan" value="Pengolahan Hasil">  
                                </span>
                                <label class="form-control">Pengolahan Hasil</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group col-md-3">
                                <span class="input-group-addon">
                                  <input type="checkbox" name="jenis_pembentukan" value="Hortikultura">  
                                </span>
                                <label class="form-control">Hortikultura</label>
                            </div>
                            <div class="input-group col-md-3">
                                <span class="input-group-addon">
                                  <input type="checkbox" name="jenis_pembentukan" value="Budidaya Ikan">  
                                </span>
                                <label class="form-control">Budidaya Ikan</label>
                            </div>
                            <div class="input-group col-md-3">
                                <span class="input-group-addon">
                                  <input type="checkbox" name="jenis_pembentukan" value="Lainnya">  
                                </span>
                                <label class="form-control">Lainnya</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kecamatan"><?php echo e(__('Kecamatan')); ?></label>
                            <select name="kec_jenis" class="form-control" id="kec_jenis" aria-describedby="kec_jenis" required="required">
                                <option value="">-- Pilih Kecamatan --</option>
                                <?php $__currentLoopData = $kec_jenis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kecamatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option data-id="<?php echo e($kecamatan['kode']); ?>" value="<?php echo e(strtolower($kecamatan['kode_cepat'])); ?>"><?php echo e($kecamatan['nama']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>    
                            <br/>
                            <button class="btn btn-primary" onclick="location.href='<?php echo e(url('/gapoktan/showdata/kecamatan_jenis_usaha/')); ?>'" type="button">Lihat Data</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="tab-pane" id="tab-kelas_kelompok">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <div class="form-group">
                    <label for="kelas kelompok"><?php echo e(__('Kelas Kelompok')); ?></label>
                        <select name="kelas_kelompok" class="form-control" id="kelas_kelompok" aria-describedby="kelas_kelompok" required="required">
                            <option value="">-- Pilih Kelompok --</option>
                            <option value="Pemula">Pemula</option>
                            <option value="Lanjut">Lanjut</option>
                            <option value="Madya">Madya</option>
                            <option value="Utama">Utama</option>
                        </select> 
                         <br/>
                            <button class="btn btn-primary" onclick="send('kelas_kelompok')" type="button">Lihat Data</button>
                </div>
                  </div>
                </div>
              </div>
              
              <div class="tab-pane" id="tab-kecamatan_pelaku_usaha">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <div class="form-group">
                        <label for="kecamatan"><?php echo e(__('Kecamatan')); ?></label>
                            <select name="kecamatan" class="form-control" id="kecamatan" aria-describedby="kecamatan" required="required">
                                <option value="">-- Pilih Kecamatan --</option>
                                <?php $__currentLoopData = $kec_usaha; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kecamatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option data-id="<?php echo e($kecamatan['kode']); ?>" value="<?php echo e(strtolower($kecamatan['kode_cepat'])); ?>"><?php echo e($kecamatan['nama']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>    
                    </div>
                    <div class="form-group">
                        <label for="pelaku_utama"><?php echo e(__('Pelaku Usaha')); ?></label>
                            <select name="pelaku_usaha" class="form-control" id="pelaku_usaha" aria-describedby="pelaku_usaha" required="required">
                                <option value="">-- Pilih Pelaku Usaha --</option>
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
                            <br/>
                            <button class="btn btn-primary" onclick="location.href='<?php echo e(url('/gapoktan/showdata/kecamatan_pelaku_usaha/')); ?>'" type="button">Lihat Data</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="tab-pane" id="tab-input_profil">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    
                  </div>
                </div>
              </div>
              
              <div class="tab-pane" id="tab-sikep">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                      <h4>Apa itu SIKEP ?</h4>
                      <br/>
                        <div class="bgsb">
                          <h5>Dasar Hukum :</h5>
                            <ol>
                              <li>Undang-ungang No. 16 Tahun 2006, tentang Sistem Penyuluhan Pertanian Perikanan dan Kehutanan.</li>
                              <li>Permentan No. 82 Tahun 2013, tentang Pedoman Pembentukan Kelompok Tani dan Gabungan Kelompok Tani.</li>
                            </ol>
                         </div>
                      <br/>     
                      <div class="col-lg-12 order-2 order-lg-1">
                          <div class="col-content bgs">
                            <h6>Tahapan bagaimana mendaftarkan kelompok tani ke BPP Pertanian yang ada dikelurahan ataupun kecamatan Anda, berikut adalah syarat yang harus disiapkan sebelum mendaftar. </h6>
                             <ol>
                                  <li>Memiliki minimal 20 Keanggotaan yang terdiri dari ketua, sekretaris, bendahara serta anggota kelompok tani</li>
                                  <li>Memiliki absesnsi rapat kelompok dan berita acara dalam pembentukanya</li>
                                  <li>Menyiapkan data KTP Ketua, Sekretaris, dan Bendahara</li>
                                 <li>Foto 3x4 masing-masing dua lembar bagi Ketua, Sekretaris, Bendahara</li>
                                </ol>
                               <p>
                                Selanjutnya datang ke BPP di kecamatan dan melakukan pendaftaran, disana akan diberikan blanko yang harus anda isi sesuai data seluruh anggota kelompok tani. Setelah semua terisi dan memberikanya kembali kepada petugas BPP. Tunggu informasi diterima atau tidak.  <a href="<?php echo e(url('main/pembentukan')); ?>" class="hds">KLIK UNTUK MELIHAT PEMBENTUKAN KELOMPOK TANI</a>
                               </p>
                      </div>  
                      <div class="col-lg-6 order-2 order-lg-1">
                      </div>  
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->
<?php $__env->stopSection(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function () { 
   $.ajaxSetup({
              headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
             });

  var kecID = '';
    $('#kecamatan_desa').change(function(){
        var kecID = $(this).find(':selected').data('id');
        //alert(kecID);
        if(kecID){
            $.ajax({
               type:"GET",
               //url:"getdesa/"+kecID,
               url:"<?php echo e(url('/main/getdesa/')); ?>/"+kecID,
               dataType: 'JSON',
               success:function(res){               
                console.log(res);
                if(res){
                $("#desa_desa").empty();
                $("#desa_desa").append('<option>-- Pilih Desa --</option>');
                $.each(res,function(desa,id_desa){
                    $("#desa_desa").append('<option value="'+id_desa+'">'+desa+'</option>');
                });
            }else{
               $("#desa_desa").empty();
            }
           }
        });
    }else{
        $("#desa_desa").empty();
    }      
    });
});
</script>
<script type="text/javascript">
      function send(cat){
   $.ajaxSetup({
              headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
             });

        var type = $("input[name="+cat+"]").attr('type');
        var check = $("input[name="+cat+"]").is('checked');

        if(type == 'checkbox' && check == 'true')
        {
          var val = $("input[name="+cat+"]").val();
        }else{
          var val = $("#"+cat).find(':selected').val();
        }

        if(val == 'undefined'){
                  val = '0';
        }

        //alert(val);
        if(val){
            $.ajax({
               type:"POST",
               url:"<?php echo e(route('main.stores')); ?>",
               data:{key : cat, val : val},
               dataType: 'JSON',
               success:function(res){               
                console.log(res);
                if(res){
                  window.location.href = res;
                }
              }
            });
        }
  }
</script>
<?php echo $__env->make('main.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\dispaperta\resources\views/main/gapoktan.blade.php ENDPATH**/ ?>
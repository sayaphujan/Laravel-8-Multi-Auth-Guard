
 
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Manajemen Desa</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="<?php echo e(route('desa.create')); ?>"> Tambah Data Desa</a>
            </div>
        </div>
    </div>
   
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
   <div class="container">
    <!--<div class="row">
    <div class="col-md-12">
        <div class="search_filter">
            Search:&nbsp;&nbsp;<input type="text" id="datatable-search">
        </div>
    </div>
    </div>-->

    <table class="table table-bordered data-table" id="tb_datatable">
      <thead>
        <tr>
            <th>Kode Cepat</th>
            <th>Desa</th>
            <th>Kecamatan</th>
            <th width="280px">Action</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
   </div>
<?php $__env->stopSection(); ?>
<script src="<?php echo e(asset( 'assets/js/jquery-1.9.1.js')); ?>"></script>
<script type="text/javascript">
var tabel = null;
    $(document).ready(function() {
            $.ajaxSetup({
              headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
             });
        $('.data-table').DataTable({
            "dom": 'Bfrtip',
                    "buttons": [
                        //'copyHtml5',
                        //'excelHtml5',
                        //'csvHtml5',
                        //'pdfHtml5',
                        {
                            "extend": 'pdf',
                            "text": 'Export PDF',
                            "titleAttr": 'PDF',
                            "exportOptions": {
                                columns: [ 0, 1, 2]
                            },
                            "action": newexportaction
                        },
                        {
                            "extend": 'excel',
                            "text": 'Export Excel',
                            "titleAttr": 'Excel',
                            "exportOptions": {
                                columns: [ 0, 1, 2]
                            },
                            "action": newexportaction
                        },
                    ],
            "processing": true,
            "serverSide": true,
            "ajax":
            {
                "url": "<?php echo e(route('desa')); ?>",
                //data: function (d) {
                //    d.search = $('#datatable-search').val();
                //}
            },
            "deferRender": true,
            "columns": [
                { "data": "kode_cepat" }, 
                { "data": "nama_desa" },
                { "data": "nama_kecamatan" },
                { "data": "action", orderable: false, searchable: false},
            ],
        });

    });
</script>
<?php echo $__env->make('layouts.user_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\dispaperta\resources\views/desa/index.blade.php ENDPATH**/ ?>
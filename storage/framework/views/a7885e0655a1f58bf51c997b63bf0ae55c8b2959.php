
 
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Manajemen Users</h2>
            </div>
            <div class="float-right my-2">
                    <?php if(Auth::user()->level == 5): ?>
                        <a class="btn btn-success" href="<?php echo e(route('users.create')); ?>"> Usulkan Admin Gapoktan</a>
                    <?php elseif(Auth::user()->level == 4): ?>
                        <a class="btn btn-success" href="<?php echo e(route('users.create')); ?>"> Tambah Data User</a>
                    <?php endif; ?>  
            </div>
        </div>
    </div>
   
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
   <div class="container">
    <table class="table table-bordered data-table">
      <thead>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>username</th>
            <th>HP</th>
            <th>Level</th>
            <th>Kecamatan</th>
            <th>Desa</th>
            <th>Status</th>
            <th>Uraian</th>
            <th width="280px">Action</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
   </div>
<?php $__env->stopSection(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function () {   
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
                                columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8]
                            },
                            "action": newexportaction
                        },
                        {
                            "extend": 'excel',
                            "text": 'Export Excel',
                            "titleAttr": 'Excel',
                            "exportOptions": {
                                columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8]
                            },
                            "action": newexportaction
                        },
                    ],
        "autoWidth": false,
        "processing": true,
        "serverSide": true,
        ajax: "<?php echo e(route('users')); ?>",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'nama_lengkap', name: 'nama_lengkap'},
            {data: 'name', name: 'name'},
            {data: 'phone', name: 'phone'},
            {data: 'level', name: 'level'},
            {data: 'kecamatan', name: 'kecamatan'},
            {data: 'desa', name: 'desa'},
            {data: 'status', name: 'status'},
            {data: 'comment', name: 'comment'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
        createdRow: function ( row, data, index ) {
                    if (data['status'] == 1) {
                        $('td', row).eq(7).html('<span style=\'background-color:yellow;color:black;\'>Menunggu Peninjauan</span>');
                        //$('td', row).eq(7).css('color','#ffffff');
                    } else if (data['status'] == 2) {
                        $('td', row).eq(7).html('<span style=\'background-color:#9cef9c;color:black;\'>Diterima</span>');
                    } else if (data['status'] == 3) {
                        $('td', row).eq(7).html('<span style=\'background-color:red;color:white;\'>Ditolak</span>');
                    }
                    $('td', row).eq(3).addClass('text-right');
                }
    });
    
  });
</script>
<?php echo $__env->make('layouts.user_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\dispaperta\resources\views/users/index.blade.php ENDPATH**/ ?>
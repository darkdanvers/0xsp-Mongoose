


  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url('storage/');?>vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url('storage/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=base_url('storage/');?>vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?=base_url('storage/');?>js/sb-admin-2.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#ibug').fadeOut(1000);
      $('#ibug').fadeIn(2000);
    });
  </script>
<?php if($this->uri->segment(2) == 'scanresult'): ?>
    <script src="<?=base_url('storage/');?>js/loader.js"></script>
<?php endif; ?>
  <script src="<?=base_url('storage/');?>js/dataTables.bootstrap.min.js"></script>
  <script src="<?=base_url('storage/');?>js/jquery.dataTables.min.js"></script>
  <?php if($this->uri->segment(1) == 'dashboard' && $this->uri->segment(2) == null): ?>
    <script type="text/javascript">
    $(document).ready(function() {
            $('#datatable').DataTable( {    
                "ajax": {
                    "url": "<?=base_url('dashboard/getwindowshosts/')?>",
                    "type": "GET"
                },            
                "processing": true,
                "serverSide": false,
                "searching": false,
                "order": [[ 1, "desc" ]],
                "pageLength": 10,
                    dom: 'Bfrtip',
                "columns": [    
                    { "data": "random_val"},
                    { "data": "host" },
                    { "data": "sys" },
                    { "data": 'random_val', "width": "10%",
                    render: function ( data, type, report ) {
                    return '<div class="text-center" ><a class="btn btn-primary btn-md" href="<?=base_url('dashboard/scanresult/');?>' + data + '"><i class="fa fa-search"></i></a></div>';
                  } },
                ],
            } );

    });
    $(document).ready(function() {
            $('#datatable2').DataTable( {    
                "ajax": {
                    "url": "<?=base_url('dashboard/getlinuxhosts/')?>",
                    "type": "GET"
                },            
                "processing": true,
                "serverSide": false,
                "searching": false,
                "order": [[ 1, "desc" ]],
                "pageLength": 10,
                    dom: 'Bfrtip',
                "columns": [    
                    { "data": "random_val"},
                    { "data": "host" },
                    { "data": "sys" },
                    { "data": 'random_val', "width": "10%",
                    render: function ( data, type, report ) {
                    return '<div class="text-center" ><a class="btn btn-primary btn-md" href="<?=base_url('dashboard/scanresult/');?>' + data + '"><i class="fa fa-search"></i></a></div>';
                  } },
                ],
            } );

    });    
   </script>
  <?php elseif($this->uri->segment(2) == 'downloadcenter'): ?>
   <script>
   
        $(document).ready(function() {
   
             var table = $('#d_center').DataTable({    
                "ajax": {
                    "url": "<?=base_url('dashboard/getDownloadCenter/')?>",
                    "type": "GET"
                },            
                "processing": true,
                "serverSide": false,
                "searching": false,
                "order": [[ 1, "desc" ]],
                "pageLength": 10,
                    dom: 'Bfrtip',
                "columns": [    
                    { "data": "file_name"},                    
                    { "data": "file_type" },
                    { "data" : "id",
                    render: function ( data, type, report ) {
                    return '<a class="btn btn-success btn-lg" href="<?=base_url('dashboard/downloadFile/');?>' + data + '"><i class="fa fa-download"></i></a>';
                    }},
                ],
            } );

    });    
   </script>
  <?php endif ; ?>
</body>

</html>

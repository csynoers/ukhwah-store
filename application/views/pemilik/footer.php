  <footer class="main-footer">
    <strong>Copyright &copy; <?php echo date('Y') ?> <a href="http://adminlte.io/">Ukhwah Store</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  <!-- /.modal -->
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url()?>/themes/adminlte/code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>/themes/adminlte/adminlte.io/themes/dev/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url()?>/themes/adminlte/cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url()?>/themes/adminlte/adminlte.io/themes/dev/adminlte/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()?>/themes/adminlte/adminlte.io/themes/dev/adminlte/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url()?>/themes/adminlte/adminlte.io/themes/dev/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()?>/themes/adminlte/adminlte.io/themes/dev/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()?>/themes/adminlte/adminlte.io/themes/dev/adminlte/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url()?>/themes/adminlte/cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="<?php echo base_url()?>/themes/adminlte/adminlte.io/themes/dev/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url()?>/themes/adminlte/adminlte.io/themes/dev/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()?>/themes/adminlte/adminlte.io/themes/dev/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url()?>/themes/adminlte/adminlte.io/themes/dev/adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>/themes/adminlte/adminlte.io/themes/dev/adminlte/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>/themes/adminlte/adminlte.io/themes/dev/adminlte/dist/js/adminlte.js"></script>
<!-- JS Pdf -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
<script>
  function getTinymce(){
    // bootstrap WYSIHTML5 - text editor
    $('#mytextarea').wysihtml5({
      toolbar: { fa: true }
    })
  }
  $(document).on('click', '.add', function(e){
    e.preventDefault()
    var title= $(this).attr('title')
    $.get($(this).attr('href'), function(data){
      $('#myModal .modal-title').html(title);
      $('#myModal .modal-body').html(data);
      $('#myModal').modal('show');
    },'html');
  });
  $('.edit').on('click', function(e){
    e.preventDefault();
    var title= $(this).attr('title')
    $.get( $(this).attr('href'), function(data){
      $('#myModal .modal-title').html(title);
      $('#myModal .modal-body').html(data);
      $('#myModal').modal('show');
    } ,'html');
  });
  $('.delete').on('click', function(e){
    e.preventDefault(); 
    $.get( $(this).attr('href'), function(data){
      alert( (data.stats=='1') ? data.msg : data.msg )
      location.reload()
    } ,'json');
  });
  $(document).on('submit', 'form#add', function(e) {
    e.preventDefault();    
    var formData = new FormData(this);
    $.ajax({
        url: $(this).attr("action"),
        type: 'POST',
        data: formData,
        success: function (data) {
          if ( data.stats==1 ) {
            alert( data.msg )
            location.reload()
          } else {
            alert( data.msg );
          }
          // console.log(data);
        },
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json'
    });
  });
  $(document).on('submit','form#edit',function(e){
    e.preventDefault();    
    var formData = new FormData(this);
    $.ajax({
        url: $(this).attr("action"),
        type: 'POST',
        data: formData,
        success: function (data) {
          // console.log(data)
            alert( (data.stats=='1') ? data.msg : data.msg )
            location.reload()
        },
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json'
    });
  });
  /* Detail Pembelian */
  $(document).on('click', '.detail-pembelian', function(e){
    e.preventDefault();
    var click_data= {
      "title" : $(this).attr('title'),
      "id" : $(this).attr('data-id'),
      "status" : $(this).attr('data-status'),
    };
    $.get($(this).attr('href'), function(data){
      $('#myModal .modal-title').html(click_data.title+'<a target="_blank" href="<?php echo base_url('pemilik/print-detail-pembelian/') ?>'+click_data.id+'/'+click_data.status+'" class="btn btn-info ml-3">Print</a>');
      $('#myModal .modal-body').html(data);
      $('#myModal').modal('show');
    },'html');
  });
</script>
</body>

</html>
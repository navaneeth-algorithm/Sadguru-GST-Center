<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SETTINGS
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Products</li>
        <li class="active">Settings</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">

            <form class="form-horizontal" method="POST" action="settings_update.php" enctype="multipart/form-data">

                  <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title"><b>Image Folder Name</b></h4>
                  </div>
                  <div class="modal-body">
                      <div class="form-group">
                          <label for="name" class="col-sm-3 control-label">Images Name</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="Imagesname" value="<?php echo $imagePath; ?>" name="Imagesname" placeholder="Image Folder" required>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title"><b>Gallery Folder Name</b></h4>
                  </div>
                  <div class="modal-body">
                      <div class="form-group">
                          <label for="name" class="col-sm-3 control-label">Gallery Image</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="Galleryname" name="Galleryname" value="<?php echo $galleryImages; ?>" placeholder="Gallery Images Folder" required>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title"><b>Director Images</b></h4>
                  </div>
                  <div class="modal-body">
                      <div class="form-group">
                          <label for="name" class="col-sm-3 control-label">Director Image</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="Directorname" name="Directorname" value="<?php echo $directorImages; ?>" placeholder="Gallery Images Folder" required>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title"><b>Report Folder Name</b></h4>
                  </div>
                  <div class="modal-body">
                      <div class="form-group">
                          <label for="name" class="col-sm-3 control-label">Report</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="Reportname" name="Reportname" value="<?php echo $reportFolder; ?>" placeholder="Report Folder" required>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title"><b>Download Folder Name</b></h4>
                  </div>
                  <div class="modal-body">
                      <div class="form-group">
                          <label for="name" class="col-sm-3 control-label">Download</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="Downloadname" name="Downloadname" value="<?php echo $downloadFolder; ?>" placeholder="Download Folder" required>
                          </div>
                      </div>
                  </div>
              </div>



              <div class="modal-footer">
              <button type="submit" class="btn btn-default btn-flat" name="update"><i class="fa fa-save"></i> UPDATE</button>
              </div>

        </form>

            </div>
          </div>
        </div>
      </div>
    </section>
     
  </div>
  	<?php include 'includes/footer.php'; ?>

</div>
<!-- ./wrapper -->

<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'report_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.catid').val(response.id);
      $('#edit_name').val(response.Head);
      $('#edit_reportfile').val(response.path);
     // $("#editor2").val(response.Description);
      CKEDITOR.instances["editor2"].setData(response.Content);
      $('.catname').html(response.Head);
    }
  });
}
</script>
</body>
</html>

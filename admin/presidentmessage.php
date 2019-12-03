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
        President Message
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Products</li>
        <li class="active">President Message</li>
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

            <form class="form-horizontal" method="POST" action="presidentmessage_update.php" enctype="multipart/form-data">

                  <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title"><b>President Message</b></h4>
                  </div>
                  <div class="modal-body">

                      <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Message</label>

                        <div class="col-sm-9">
                          <textarea id="editor2" cols=40 rows=10 name="message" value="">
                          </textarea>
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
getRow(1);
function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'profile_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
     // $("#editor2").val(response.Description);
      CKEDITOR.instances["editor2"].setData(response.Message);
    }
  });
}
</script>
</body>
</html>

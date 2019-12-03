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
        Company Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Products</li>
        <li class="active">Company Profile</li>
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

            <form class="form-horizontal" method="POST" action="mainprofile_update.php" enctype="multipart/form-data">

                  <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title"><b>About Company</b></h4>
                  </div>
                  <div class="modal-body">

                      <div class="form-group">
                          <label for="companyname" class="col-sm-3 control-label">Company Name</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="companyname" value="<?php echo $companyName; ?>" name="companyname" placeholder="Enter Company Name" required>
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="adminname" class="col-sm-3 control-label">Admin Name</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="adminname" value="<?php echo $adminName; ?>" name="adminname" placeholder="Enter Admin Name" required>
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="companyemail" class="col-sm-3 control-label">Company Email</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="companyemail" value="<?php echo $adminEmail; ?>" name="companyemail" placeholder="Enter Company Email" required>
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="companyphone" class="col-sm-3 control-label">Company Phone Number</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="companyphone" value="<?php echo $contactDetails; ?>" name="companyphone" placeholder="Enter Company Phone Number" required>
                          </div>
                      </div>

                      

                  </div>
              </div>

              <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title"><b>Company Address</b></h4>
                  </div>
                  <div class="modal-body">

                      <div class="form-group">
                          <label for="companyname" class="col-sm-3 control-label">Address 1</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="address1" value="<?php echo $address1; ?>" name="address1" placeholder="Enter Company Address 1" required>
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="companyname" class="col-sm-3 control-label">Address 2</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="address2" value="<?php echo $address2; ?>" name="address2" placeholder="Enter Company Address 2" required>
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="companyname" class="col-sm-3 control-label">Address 3</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="address3" value="<?php echo $address3; ?>" name="address3" placeholder="Enter Company Address 3" required>
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="city" class="col-sm-3 control-label">City</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="city" value="<?php echo $city; ?>" name="city" placeholder="Enter City" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="state" class="col-sm-3 control-label">State</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="state" value="<?php echo $state; ?>" name="state" placeholder="Enter State" required>
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="pincode" class="col-sm-3 control-label">PinCode</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="pincode" value="<?php echo $pincode; ?>" name="pincode" placeholder="Enter Pincode" required>
                          </div>
                      </div>

                  </div>
              </div>


              <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title"><b>Other Details</b></h4>
                  </div>
                  <div class="modal-body">

                      <div class="form-group">
                          <label for="registrationnumber" class="col-sm-3 control-label">Registration Number</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="registrationnumber" value="<?php echo $registrationnumber; ?>" name="registrationnumber" placeholder="Enter Registration Number" required>
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="workinghour" class="col-sm-3 control-label">Working Hour</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="workinghour" value="<?php echo $workinghour; ?>" name="workinghour" placeholder="Enter Working Hour" required>
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="weeklyholiday" class="col-sm-3 control-label">Enter Weekly Holiday</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="weeklyholiday" value="<?php echo $weeklyholiday; ?>" name="weeklyholiday" placeholder="Enter Weekly Holiday" required>
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="establishedin" class="col-sm-3 control-label">Established IN</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="establishedin" value="<?php echo $establishedin; ?>" name="establishedin" placeholder="Enter Established In" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="societytype" class="col-sm-3 control-label">Society Type</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="societytype" value="<?php echo $societytype; ?>" name="societytype" placeholder="Enter Society type" required>
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="dateofregistration" class="col-sm-3 control-label">Date of Registration</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="dateofregistration" value="<?php echo $dateofregistration; ?>" name="dateofregistration" placeholder="Enter Date of Registration" required>
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="domainname" class="col-sm-3 control-label">Domain Name</label>

                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="domainname" value="<?php echo $domainname; ?>" name="domainname" placeholder="Enter Domain Name" required>
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

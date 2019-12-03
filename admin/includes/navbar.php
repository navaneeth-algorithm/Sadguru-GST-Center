
<header class="main-header">
  <!-- Logo -->
  <a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>C</b>P</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b style="color:orange;">Sadhguru</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo (!empty($adminPhoto)) ? '../images/'.$adminPhoto : '../images/profile.jpg'; ?>" class="user-image" alt="User Image">
            <span class="hidden-xs"><?php echo $adminName; ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?php echo (!empty($adminPhoto)) ? '../images/'.$adminPhoto : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">

              <p>
                <?php echo $adminName; ?>
              </p>
            </li>
            <li class="user-footer">
              <div class="pull-left">
              <button class='btn btn-default btn-sm editprofile btn-flat' data-id=''>UPDATE</button>
              </div>
              <div class="pull-right">
                <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<?php include 'profile_modal.php'; ?>

<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<script>
$(function(){
  $(document).on('click', '.editprofile', function(e){
    e.preventDefault();
    $('#profile').modal('show');
    var id = $(this).data('id');
    //alert("Hello");
    getProfileRow(id);
  });

  $(document).on('click', '.deleteprofile', function(e){
    e.preventDefault();
    $('#profile').modal('show');
    var id = $(this).data('id');
    getProfileRow(id);
  });

});

function getProfileRow(id){
  $.ajax({
    type: 'POST',
    url: 'profile_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.catid').val(response.id);
      $('#edit_name').val(response.title);
      $('#edit_gallery').val(response.path);
     // $("#editor2").val(response.Description);
      CKEDITOR.instances["editor1"].setData(response.Content);
      $('.catname').html(response.title);
    }
  });
}
</script>
</body>
</html>

<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($adminPhoto)) ? '../images/'.$adminPhoto : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $adminName; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">REPORTS</li>
      <li hidden><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li hidden><a href="sales.php"><i class="fa fa-money"></i> <span>Sales</span></a></li>
      <li class="header" hidden>MANAGE</li>
      <li hidden><a href="users.php"><i class="fa fa-users"></i> <span>Users</span></a></li>


      <li class="treeview">
        <a href="#">
          <i class="fa fa-barcode"></i>
          <span>Profile</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="mainprofile.php"><i class="fa fa-circle-o"></i>Company Profile</a></li>
          <li><a href="password.php"><i class="fa fa-circle-o"></i>Password</a></li>
          <li><a href="presidentmessage.php"><i class="fa fa-circle-o"></i>President Message</a></li>
          <li><a href="settings.php"><i class="fa fa-circle-o"></i>Settings</a></li>
        </ul>
      </li>



      <li class="treeview">
        <a href="#">
          <i class="fa fa-barcode"></i>
          <span>Tools</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="loan.php"><i class="fa fa-circle-o"></i>Loan</a></li>
          <li><a href="news.php"><i class="fa fa-circle-o"></i>News</a></li>
          <li><a href="services.php"><i class="fa fa-circle-o"></i>Services</a></li>
          <li><a href="report.php"><i class="fa fa-circle-o"></i>Report</a></li>
          <li><a href="download.php"><i class="fa fa-circle-o"></i>Downloads</a></li>
          <li><a href="noticeboard.php"><i class="fa fa-circle-o"></i>Notice Board</a></li>
	        <li><a href="links.php"><i class="fa fa-circle-o"></i>Links</a></li>
	        <li><a href="branch.php"><i class="fa fa-circle-o"></i>Branch</a></li>
          <li><a href="rollingtext.php"><i class="fa fa-circle-o"></i>Rolling Text</a></li>
	        <li><a href="board.php"><i class="fa fa-circle-o"></i>Board of Directors</a></li>
          <li><a href="gallery.php"><i class="fa fa-circle-o"></i>Gallery</a></li>
          <li class="treeview">
        <a href="#">
        <i class="fa fa-circle-o"></i>
          <span>About</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="aboutname.php"><i class="fa fa-circle-o"></i>Name</a></li>
          <li><a href="aboutyear.php"><i class="fa fa-circle-o"></i>Year</a></li>
          <li><a href="aboutdata.php"><i class="fa fa-circle-o"></i>Data</a></li>
        </ul>
      </li>
        </ul>
      </li>




    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
 <?php
require('../include/db.php');
$query = "SELECT * FROM about1, aboutme,personal_info";
$run = mysqli_query($db,$query);
$user_data = mysqli_fetch_array($run);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


     <link rel="shortcut icon" type="image/x-icon" href="logofi.png">
  <title>MyCamp | Faculty Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
     
      <!-- Notifications Dropdown Menu -->
    
      <li class="nav-item">
        <a class="nav-link"  href="../include/logout.php" role="button">
          Logout
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php?profilesetting" class="brand-link">
      <img src="logofi.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Faculty Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/images/profile/<?=$user_data['profile-pic']?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="index.php?profilesetting" class="d-block"><?=$user_data['name']?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php?profilesetting=true" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Profile Setting
              </p>
            </a>
           </li>
             <li class="nav-item menu-open">
            <a href="index.php?resumesetting=true" class="nav-link">
              <i class="nav-icon fa fa-file"></i>
              <p>
                Resume Setting
              </p>
            </a>
           </li>
             <li class="nav-item menu-open">
            <a href="index.php?contactsetting=true" class="nav-link">
              <i class="nav-icon fa fa-address-book"></i>
              <p>
                Contact Setting
              </p>
            </a>
           </li>
             <li class="nav-item menu-open">
            <a href="index.php?accountsetting=true" class="nav-link">
              <i class=" nav-icon fa fa-lock"></i>

              <p>
                Account Setting
              </p>
            </a>
           </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- /.content-header -->
<br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <?php
          if(isset($_GET['profilesetting'])){
            ?>
           <div class="card card-primary col-lg-12" >
              <div class="card-header" >
                <h3 class="card-title">Update About</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <img src="../assets/images/profile/<?=$user_data['profile-pic']?>" class="col-2">
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Profile Pic</label>
                    <input type="file" class="form-control"  name="profile">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control"  name="title" value="<?=$user_data['name']?>" id="exampleInputEmail1" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">About me</label>
                    <input type="text" class="form-control" name="subtitle" value="<?=$user_data['mydesc']?>" id="exampleInputPassword1" placeholder="About me">
                  </div>
                  
                  
                  
                </div>
                <!-- /.card-body -->

                
<div class="card-footer">
                  <button type="submit" name="update_about" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
            

            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Manage Personal Info</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Personal Info</h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Type</th>

                      <th>Value</th>
                      
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$q = "SELECT * from personal_info";
$r=mysqli_query($db,$q);
$c =1;
while($pi=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      <td><?=$pi['type']?></td>
                      <td><?=$pi['value']?></td>

                      
                      <td>
<a href="../include/deletepi.php?id=<?=$pi['id']?>">Delete</a>

                      </td>
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

              <form role="form" action="../include/admin.php" method="post">
                <div class="card-body">
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Type</label>
                    <input type="text" class="form-control"  name="type">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Data</label>
                    <input type="text" class="form-control"  name="value" id="exampleInputEmail1">
                  </div>
                 
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add-pi" class="btn btn-primary">Add Personal Info</button>
                </div>
              </form>
            </div>
            <?php
          }elseif(isset($_GET['resumesetting'])){
            ?>

<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Manage Resume</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Publications and Awards</h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Type</th>
                      <th>Title</th>
                      <th>Date</th>
                      <th>Description</th>
                                        
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$q = "SELECT * from resume";
$r=mysqli_query($db,$q);
$c =1;
while($pi=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      <td><?=$pi['type']?></td>
                      <td><?=$pi['title']?></td>
                      <td><?=$pi['date']?></td>
                      <td><?=$pi['description']?></td>
                      




                      
                      <td>
<a href="../include/deleteresume.php?id=<?=$pi['id']?>">Delete</a>

                      </td>
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

              <form role="form" action="../include/admin.php" method="post">
                <div class="card-body">
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Select Type</label><br>
                    <select name="type" class="form-control">
                      <option value="Publication">Publication</option>
                      <option value="Honors and Awards">Honors and Awards</option>
                    </select>
                    
                  </div>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control"  name="title">
                  </div>
                  
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Date</label>
                    <input type="date" class="form-control"  name="date" id="exampleInputEmail1">
                  </div>
                 
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control"  name="desc" id="exampleInputEmail1">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add-resume" class="btn btn-primary">Add Details</button>
                </div>
              </form>
            </div>
            <?php

          }elseif(isset($_GET['contactsetting'])){
            ?>
<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Contact Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="../include/admin.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control"  name="address" value="<?=$user_data['address']?>" id="exampleInputEmail1" placeholder="Enter address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email Id</label>
                    <input type="email" class="form-control" name="email" value="<?=$user_data['email']?>" id="exampleInputPassword1" placeholder="Enter Email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Mobile No</label>
                    <input type="text" class="form-control" name="mobile" value="<?=$user_data['mobile']?>" id="exampleInputPassword1" placeholder="Enter mobile no">
                  </div>
                  
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-contact" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>

            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Social Media Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="../include/admin.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Twitter</label>
                    <input type="text" class="form-control"  name="twitter" value="<?=$user_data['twitter']?>" id="exampleInputEmail1" placeholder="Enter username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Facebook</label>
                    <input type="text" class="form-control" name="facebook" value="<?=$user_data['facebook']?>" id="exampleInputPassword1" placeholder="Enter Username">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Instagram</label>
                    <input type="text" class="form-control" name="instagram" value="<?=$user_data['instagram']?>" id="exampleInputPassword1" placeholder="Enter username">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Skype</label>
                    <input type="text" class="form-control" name="skype" value="<?=$user_data['skype']?>" id="exampleInputPassword1" placeholder="Enter username">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Linkedin</label>
                    <input type="text" class="form-control" name="linkedin" value="<?=$user_data['linkedin']?>" id="exampleInputPassword1" placeholder="Enter username">
                  </div>


                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-socialmedia" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
            <?php
          }elseif(isset($_GET['accountsetting'])){
            ?>
<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Account Setting</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <img src="../assets/images/profile/<?=$user_data['profile-pic']?>" class="col-2">
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Profile Pic</label>
                    <input type="file" class="form-control"  name="profilepic">
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-account" class="btn  btn-primary">Update Account</button>
                </div>
              </form>
            </div>
          
<?php
          }
?>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="https://adminlte.io">Ms. Abeera Adeel</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-rc
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>

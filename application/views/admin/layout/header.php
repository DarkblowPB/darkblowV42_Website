<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $this->getsettings->Get2()->project_name.' || '.$title ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/goodgames/assets/vendors/sweetalert2/theme-dark/dark.css">
  <script src="<?php echo base_url() ?>assets/goodgames/assets/vendors/sweetalert2/dist/sweetalert2.min.js"></script>
  <!-- jQuery -->  
  <script src="<?php echo base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>
  <!-- Custam Script -->
  <script>
    function ShowToast(timer, type, title){
      Swal.fire({
          toast: true,
          timer: timer,
          position: 'top-end',
          timerProgressBar: true,
          icon: type,
          title: title,
          showConfirmButton: false
      });
    }
  </script>
</head>
<body class="dark-mode hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="javascript:void(0)" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right text-center">
          <a href="javascript:void(0)" class="dropdown-item">Settings</a>
          <a href="<?php echo base_url('adm/dashboard/logout') ?>" class="dropdown-item">Logout</a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('adm/dashboard') ?>" class="brand-link">
      <img src="<?php echo base_url() ?>assets/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-bold">DarkblowPB Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url() ?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['admin_name'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">General Menu</li>
          <li class="nav-item">
            <a href="<?php echo base_url('adm/dashboard') ?>" class="nav-link <?php if ($this->uri->segment(2) == "dashboard"){echo "active";} ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('adm/bannedvisitor') ?>" class="nav-link <?php if ($this->uri->segment(2) == "bannedvisitor"){echo "active";} ?>">
              <i class="nav-icon fa fa-ban"></i>
              <p>
                Banned Visitor
              </p>
            </a>
          </li>
          <li class="nav-item <?php if ($this->uri->segment(2) == "settings"){echo 'menu-open';} ?>">
            <a href="javascript:void(0)" class="nav-link <?php if ($this->uri->segment(2) == "settings"){echo "active";} ?>">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('adm/settings/generalsettings') ?>" class="nav-link <?php if ($title == 'General Settings'){echo 'active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  General Settings
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('adm/settings/featuresettings') ?>" class="nav-link <?php if ($title == 'Feature Settings'){echo 'active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  Feature Settings
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Game Menu</li>
          <li class="nav-item <?php if ($this->uri->segment(2) == "playersmanagement"){echo 'menu-open';} ?>">
            <a href="javascript:void(0)" class="nav-link <?php if ($this->uri->segment(2) == "playersmanagement"){echo 'active';} ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Players Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('adm/playersmanagement') ?>" class="nav-link <?php if ($this->uri->segment(2) == "playersmanagement" && $this->uri->segment(3) == "details" || $title == "All Players"){echo 'active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Players</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('adm/playersmanagement/createcustomplayer') ?>" class="nav-link <?php if ($title == "Create Custom Player"){echo 'active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Custom Player</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item <?php if ($this->uri->segment(2) == "eventsmanagement"){echo 'menu-open';} ?>">
            <a href="javascript:void(0)" class="nav-link <?php if ($this->uri->segment(2) == "eventsmanagement"){echo 'active';} ?>">
              <i class="nav-icon fas fa-calendar-check"></i>
              <p>
                Events Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('adm/eventsmanagement/login') ?>" class="nav-link <?php if ($this->uri->segment(3) == "login"){echo 'active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login Events</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link" onclick="ShowToast(2000, 'info', 'This Feature Not Available Now.')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Map Bonus Events</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('adm/eventsmanagement/playtime') ?>" class="nav-link <?php if ($this->uri->segment(3) == "playtime"){echo 'active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Playtime Events</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link" onclick="ShowToast(2000, 'info', 'This Feature Not Available Now.')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quest Events</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('adm/eventsmanagement/rankup') ?>" class="nav-link <?php if ($this->uri->segment(3) == "rankup"){echo 'active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rankup Events</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('adm/eventsmanagement/register') ?>" class="nav-link <?php if ($this->uri->segment(3) == "register"){echo 'active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register Events</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visit Events</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Xmas Events</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('adm/clientlaunchermanagement') ?>" class="nav-link <?php if ($this->uri->segment(2) == "clientlaunchermanagement"){echo "active";} ?>">
              <i class="nav-icon fas fa-download"></i>
              <p>
                Client & Launcher Management
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('adm/redeemcodemanagement') ?>" class="nav-link <?php if ($this->uri->segment(2) == "redeemcodemanagement"){echo "active";} ?>">
              <i class="nav-icon fas fa-gift"></i>
              <p>
                Redeem Code Management
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $header ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('adm/dashboard') ?>">Dashboard</a></li>
              <?php if ($title != "DarkblowPB || Dashboard") : ?>
                <li class="breadcrumb-item active"><?php echo $header ?></li>
              <?php endif; ?>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section id="content" class="content">
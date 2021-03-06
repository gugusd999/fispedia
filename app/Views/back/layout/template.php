<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(''); ?>/template/back/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url(''); ?>/template/back/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url(''); ?>/template/back/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url(''); ?>/template/back/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(''); ?>/template/back/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url(''); ?>/template/back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url(''); ?>/template/back/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url(''); ?>/template/back/plugins/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>/template/back/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>/template/back/plugins/datatables-responsive/css/responsive.bootstrap4.min.csss">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <style>
    
        .page-title{
            background: #ffffff;
            padding: 10px 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 3px #aaaaaa;
        }
    
        .display-block{
            display: block;
            padding: 5px 0;
            font-size: 16px;
        }

    </style>

</head>

 <!-- jQuery -->
 <script src="<?= base_url(''); ?>/template/back/jquery.min.js?v=<?= date('ymdhis'); ?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url(''); ?>/template/back/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url(''); ?>/template/back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url(''); ?>/template/back/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= base_url(''); ?>/template/back/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url(''); ?>/template/back/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url(''); ?>/template/back/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url(''); ?>/template/back/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url(''); ?>/template/back/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url(''); ?>/template/back/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url(''); ?>/template/back/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?= base_url(''); ?>/template/back/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url(''); ?>/template/back/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url(''); ?>/template/back/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url(''); ?>/template/back/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url(''); ?>/template/back/dist/js/demo.js"></script>
    <script src="<?= base_url(''); ?>/template/back/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="<?= base_url(''); ?>/template/back/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(''); ?>/template/back/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url(''); ?>/template/back/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>


<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?= base_url(''); ?>/template/back/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?= base_url(''); ?>/template/back/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?= base_url(''); ?>/template/back/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="<?= base_url(''); ?>/template/back/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Fispedia</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url(''); ?>/template/back/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview">
                    <a href="<?= site_url('admin'); ?>" class="nav-link">
                            <i class="fa fa-home"></i>
                            <p>Dashboard</p>
                    </a>
                </li>
               <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tags"></i>
                                <p>
                                    Master
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                
                                <li class="nav-item has-treeview">
                                    <a href="<?= site_url('m_bank'); ?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Bank</p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="<?= site_url('m_tryout'); ?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Tryout</p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="<?= site_url('status'); ?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Status</p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="<?= site_url('type_status'); ?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Type Status</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?= site_url('type_kelompok'); ?>" class="nav-link">
                                    <i class="fa fa-tag"></i>
                                    <p>Tipe Kelompok</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?= site_url('mata_pelajaran'); ?>" class="nav-link">
                                    <i class="fa fa-file"></i>
                                    <p>Mata Pelajaran</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?= site_url('banksoal'); ?>" class="nav-link">
                                    <i class="fa fa-file-alt"></i>
                                    <p>Bank Soal</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?= site_url('rekening'); ?>" class="nav-link">
                                    <i class="fa fa-credit-card"></i>
                                    <p>Rekening</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?= site_url('kupon'); ?>" class="nav-link">
                                    <i class="fa fa-clipboard"></i>
                                    <p>Kupon</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?= site_url('user_detail'); ?>" class="nav-link">
                                    <i class="fa fa-user"></i>
                                    <p>User Detail</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?= site_url('soal'); ?>" class="nav-link">
                                    <i class="fa fa-tasks"></i>
                                    <p>Soal</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?= site_url('detail_soal'); ?>" class="nav-link">
                                    <i class="fa fa-file-word"></i>
                                    <p>Detail Soal</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?= site_url('nilai'); ?>" class="nav-link">
                                    <i class="fa fa-coins"></i>
                                    <p>Nilai</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?= site_url('kodeunik'); ?>" class="nav-link">
                                <i class="fa fa-keyboard"></i>
                                <p>Kodeunik</p>
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
            
            <!-- /.content-header -->
            <?= $this->renderSection('content'); ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.5
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

   
</body>

</html>
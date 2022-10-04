<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_title ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <!-- <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css"> -->
    <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../public/dist/css/css_thongke.css">
    <link rel="stylesheet" href="../public/dist/css/css_taobacsi.css">
    <!-- Link fanpage -->
    <?php $linkPage = 'https://business.facebook.com/latest/inbox/all?asset_id=108431441644544&nav_ref=pages_classic_isolated_section_inbox_redirect&selected_item_id=100045260773400&mailbox_id='; ?>
    <!-- Ckeditor -->
    <script src="../public/ckeditor/ckeditor.js"></script>
    <!-- Thu vien js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <style>
        .TestThu:hover {
            background-color: rgba(0, 0, 0, 0) !important;
        }
    </style>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="../public/../public/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div> -->

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="https://www.facebook.com/daoxuanmanh2001" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li> -->

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" href="<?php echo $linkPage; ?>">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                </li>
                <!-- Notifications Dropdown Menu -->
                <!-- <li class="nav-item dropdown">
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
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-slide="true" href="../../logout.php" role="button">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li> -->
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="../public/../public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Phòng khám FStack</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Admin FStack</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <!-- <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div> -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Quản lý tin hoạt động
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul id="SidebarLeft" class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="them-tin-tuc-hoat-dong" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm tin hoạt động</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="xem-danh-sach-tin-tuc-hoat-dong" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Xem tin tức hoạt động</p>
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="them-thong-tin-thuoc" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thông tin thuốc</p>
                                    </a>
                                </li> -->
                            </ul>
                            <script>
                                $(document).ready(function() {
                                    $('#SidebarLeft li a').click(function() {
                                        var page = $(this).attr('href');
                                        $("#click").load(page + '.php');
                                        return false;
                                    });
                                });
                            </script>
                        </li>
                    </ul>

                    <!-- Hue -->
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li id="Hue_ThongKe" class="nav-item">
                            <a href="thongke" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Thống kê
                                </p>
                            </a>
                            <script>
                                $(document).ready(function() {
                                    $('#Hue_ThongKe a').click(function() {
                                        var page = $(this).attr('href');
                                        $("#click").load(page + '.php');
                                        return false;
                                    });
                                });
                            </script>
                        </li>
                    </ul>

                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li id="Hue_DanhSachBacSi" class="nav-item">
                            <a href="danhsach_bacsi" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Quản lý bác sĩ
                                </p>
                            </a>
                            <script>
                                $(document).ready(function() {
                                    $('#Hue_DanhSachBacSi a').click(function() {
                                        var page = $(this).attr('href');
                                        $("#click").load(page + '.php');
                                        return false;
                                    });
                                });
                            </script>
                        </li>
                    </ul>

                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li id="Hue_DanhSachLichHen" class="nav-item">
                            <a href="danh_sach_lich_hen" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Quản lý lịch hẹn
                                </p>
                            </a>
                            <script>
                                $(document).ready(function() {
                                    $('#Hue_DanhSachLichHen a').click(function() {
                                        var page = $(this).attr('href');
                                        $("#click").load(page + '.php');
                                        return false;
                                    });
                                });
                            </script>
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
                            <h1 class="m-0"><?php echo $page_title ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"><?php echo $page_title ?></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
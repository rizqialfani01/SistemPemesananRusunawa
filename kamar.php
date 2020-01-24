<?php
    include "config.php";

    session_start();
    if($_SESSION['status']!="login_rusunawa"){
        header("location: login?pesan=belum_login");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon1.png">
    <title>Sistem Penyewaan Rusunawa</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--c3 plugins CSS -->
    <link href="assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <link href="assets/icons/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/icons/themify-icons/themify-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="dist/css/pages/dashboard1.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <link type="text/css" href="dist/css/custom.css" rel="stylesheet" />
    <script type="text/javascript">
        $(document).ready(function(){
            $("#gedung_A").change(function(){
                var gedung_A = $("#gedung_A").val();
                $.ajax({
                    type: 'POST',
                    url: "action/get.php?gedung=A",
                    data: {gedung_A: gedung_A},
                    cache: false,
                    success: function(msg){
                    $("#lantai_A").html(msg);
                    }
                });
            }).trigger("change");
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#gedung_B").change(function(){
                var gedung_B = $("#gedung_B").val();
                $.ajax({
                    type: 'POST',
                    url: "action/get.php?gedung=B",
                    data: {gedung_B: gedung_B},
                    cache: false,
                    success: function(msg){
                    $("#lantai_B").html(msg);
                    }
                });
            }).trigger("change");;
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#gedung_C").change(function(){
                var gedung_C = $("#gedung_C").val();
                $.ajax({
                    type: 'POST',
                    url: "action/get.php?gedung=C",
                    data: {gedung_C: gedung_C},
                    cache: false,
                    success: function(msg){
                    $("#lantai_C").html(msg);
                    }
                });
            }).trigger("change");;
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#gedung_D").change(function(){
                var gedung_D = $("#gedung_D").val();
                $.ajax({
                    type: 'POST',
                    url: "action/get.php?gedung=D",
                    data: {gedung_D: gedung_D},
                    cache: false,
                    success: function(msg){
                    $("#lantai_D").html(msg);
                    }
                });
            }).trigger("change");;
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#gedung_E").change(function(){
                var gedung_E = $("#gedung_E").val();
                $.ajax({
                    type: 'POST',
                    url: "action/get.php?gedung=E",
                    data: {gedung_E: gedung_E},
                    cache: false,
                    success: function(msg){
                    $("#lantai_E").html(msg);
                    }
                });
            }).trigger("change");;
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#gedung_F").change(function(){
                var gedung_F = $("#gedung_F").val();
                $.ajax({
                    type: 'POST',
                    url: "action/get.php?gedung=F",
                    data: {gedung_F: gedung_F},
                    cache: false,
                    success: function(msg){
                    $("#lantai_F").html(msg);
                    }
                });
            }).trigger("change");;
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.logout').on('click', function(){
                var action = "logout";
                $('#logout_confirm').modal('show');
                $('#action').val(action);
            });
        });
    </script>
</head>

<body class="skin-default-dark fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Sistem Penyewaan Rusunawa</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" width="40" heigth="40"/>
                            <!-- Light Logo icon -->
                            <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" width="86" height="40"/>
                         <!-- Light Logo text -->
                         <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <div class="d-flex no-block nav-text-box align-items-center">
                <span><img src="assets/images/logo-light-text1.png" alt="elegant admin template" width="200" height="45"></span>
                <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i class="ti-menu"></i></a>
                <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            </div>
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="index.php" aria-expanded="false"><i class="fa fa-home"></i><span class="hide-menu">Beranda</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="kamar.php" aria-expanded="false"><i class="fa fa-th"></i><span class="hide-menu">Pilih Kamar</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="daftar_kamar.php" aria-expanded="false"><i class="fa fa-th"></i><span class="hide-menu">Daftar Kamar</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="daftar_harga.php" aria-expanded="false"><i class="fa fa-th"></i><span class="hide-menu">Daftar Harga Kamar</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="daftar_penghuni.php" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Daftar Penghuni</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="laporan_keuangan.php" aria-expanded="false"><i class="fa fa-money"></i><span class="hide-menu"></span>Laporan Keuangan</a></li>
                        <li> <a class="waves-effect waves-dark" href="laporan_piutang.php" aria-expanded="false"><i class="fa fa-money"></i><span class="hide-menu"></span>Laporan Piutang</a></li>
                        <div class="text-center m-t-30">
                            <button class="btn waves-effect waves-light btn-danger hidden-md-down logout">Logout</button>
                        </div>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Pilih Kamar</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                                <li class="breadcrumb-item active">Pilih Kamar</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Yearly Sales -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card oh">
                            <div class="card-body">
                                <div class="d-flex m-b-30 align-items-center no-block">
                                    <h4 class="card-title ">Denah Kamar</h5>
                                </div>
                                <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#gedunga" role="tab" data-toggle="tab">Gedung A</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#gedungb" role="tab" data-toggle="tab">Gedung B</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#gedungc" role="tab" data-toggle="tab">Gedung C</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#gedungd" role="tab" data-toggle="tab">Gedung D</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#gedunge" role="tab" data-toggle="tab">Gedung E</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#gedungf" role="tab" data-toggle="tab">Gedung F</a>
                                </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="gedunga" style="width: 1100px">
                                        <div class="form-group">
                                            <label class="col-sm-2" style="margin-top: 20px;">Pilih Lantai</label>
                                            <div class="col-sm-2">
                                                <select id="gedung_A" class="form-control form-control-line">
                                                    <option value="A0">Semua Lantai</option>
                                                    <option value="A2">Lantai 2</option>
                                                    <option value="A3">Lantai 3</option>
                                                    <option value="A4">Lantai 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div id="lantai_A" class="card-body" style="padding-left: 10px;">
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="gedungb" style="width: 1200px;">
                                        <div class="form-group">
                                            <label class="col-sm-2" style="margin-top: 20px;">Pilih Lantai</label>
                                            <div class="col-sm-2">
                                                <select id="gedung_B" class="form-control form-control-line">
                                                    <option value="B0">Semua Lantai</option>
                                                    <option value="B1">Lantai 1</option>
                                                    <option value="B2">Lantai 2</option>
                                                    <option value="B3">Lantai 3</option>
                                                    <option value="B4">Lantai 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div id="lantai_B" class="card-body" style="padding-left: 10px;">
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="gedungc" style="width: 1200px;">
                                        <div class="form-group">
                                            <label class="col-sm-2" style="margin-top: 20px;">Pilih Lantai</label>
                                            <div class="col-sm-2">
                                                <select id="gedung_C" class="form-control form-control-line">
                                                    <option value="C0">Semua Lantai</option>
                                                    <option value="C1">Lantai 1</option>
                                                    <option value="C2">Lantai 2</option>
                                                    <option value="C3">Lantai 3</option>
                                                    <option value="C4">Lantai 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div id="lantai_C" class="card-body" style="padding-left: 10px;">
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="gedungd" style="width: 1200px;">
                                        <div class="form-group">
                                            <label class="col-sm-2" style="margin-top: 20px;">Pilih Lantai</label>
                                            <div class="col-sm-2">
                                                <select id="gedung_D" class="form-control form-control-line">
                                                    <option value="D0">Semua Lantai</option>
                                                    <option value="D2">Lantai 2</option>
                                                    <option value="D3">Lantai 3</option>
                                                    <option value="D4">Lantai 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div id="lantai_D" class="card-body" style="padding-left: 10px;">
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="gedunge" style="width: 900px;">
                                        <div class="form-group">
                                            <label class="col-sm-2" style="margin-top: 20px;">Pilih Lantai</label>
                                            <div class="col-sm-2">
                                                <select id="gedung_E" class="form-control form-control-line">
                                                    <option value="E0">Semua Lantai</option>
                                                    <option value="E1">Lantai 1</option>
                                                    <option value="E2">Lantai 2</option>
                                                    <option value="E3">Lantai 3</option>
                                                    <option value="E4">Lantai 4</option>
                                                    <option value="E5">Lantai 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div id="lantai_E" class="card-body" style="padding-left: 10px;">
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="gedungf" style="width: 1200px;">
                                        <div class="form-group">
                                            <label class="col-sm-2" style="margin-top: 20px;">Pilih Lantai</label>
                                            <div class="col-sm-2">
                                                <select id="gedung_F" class="form-control form-control-line">
                                                    <option value="F0">Semua Lantai</option>
                                                    <option value="F1">Lantai 1</option>
                                                    <option value="F2">Lantai 2</option>
                                                    <option value="F3">Lantai 3</option>
                                                    <option value="F4">Lantai 4</option>
                                                    <option value="F5">Lantai 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div id="lantai_F" class="card-body" style="padding-left: 10px;">                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body bg-light">
                                <div class="legenda">
                                    <div class="satu-legenda">
                                        <div class="legenda-kosong"></div>
                                        <span>Belum Berpenghuni</span>
                                    </div>
                                    <div class="satu-legenda">
                                        <div class="legenda-terisi1"></div>
                                        <span>Terdapat 1 Penghuni</span>
                                    </div>
                                    <div class="satu-legenda">
                                        <div class="legenda-terisi2"></div>
                                        <span>Terdapat 2 Penghuni</span>
                                    </div>
                                    <div class="satu-legenda">
                                        <div class="legenda-piutang"></div>
                                        <span>Terdapat Piutang</span>
                                    </div>
                                    <div class="satu-legenda">
                                        <div class="legenda-terpilih"></div>
                                        <span>Sedang Dipilih</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- News -->
                <!-- ============================================================== -->
                <div>
                    <div class="row">
                        <div class="col-md-6" id="dataPenghuni1" style="display: none;">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex m-b-30 align-items-center no-block">
                                        <h4 class="card-title ">Data Penghuni 1</h5>
                                        <div class="ml-auto">
                                            <ul class="list-inline font-12">
                                                <a class="btn btn-dark btn-circle fa fa-plus" id="tambah_penghuni"></a>
                                                <a class="btn btn-dark btn-circle fa fa-pencil" id="edit_penghuni"></a>
                                            </ul>
                                        </div>
                                    </div>
                                    <form class="form-horizontal form-material">
                                        <div class="form-group">
                                            <label class="col-md-3" style="float:left; height: 38px; padding: 10px">No. Kamar</label>
                                            <div class="col-md-9" style="float:right;">
                                                <input type="text" placeholder="Nama Penghuni" class="form-control form-control-line" id="no_kamar" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3" style="float:left; height: 38px; padding: 10px">Nama</label>
                                            <div class="col-md-9" style="float:right;">
                                                <input type="text" placeholder="Nama Penghuni" class="form-control form-control-line" id="nama" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3" style="float:left; height: 38px; padding: 10px">NIM</label>
                                            <div class="col-md-9" style="float:right;">
                                                <input type="text" placeholder="NIM Penghuni" class="form-control form-control-line" id="nim" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3" style="float:left; height: 38px; padding: 10px">No. HP</label>
                                            <div class="col-md-9" style="float:right;">
                                                <input type="text" placeholder="Nomor Telepon Penghuni" class="form-control form-control-line" id="no" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3" style="float:left; height: 38px; padding: 10px">Prodi</label>
                                            <div class="col-md-9" style="float:right;">
                                                <input type="text" placeholder="Prodi" class="form-control form-control-line" id="prodi" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3" style="float:left; height: 38px; padding: 10px">Masa Huni</label>
                                            <div class="col-md-9" style="float:right;">
                                                <input type="text" placeholder="Masa Huni" class="form-control form-control-line" id="masa_huni" readonly>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" id="dataPenghuni2" style="display: none;">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex m-b-30 align-items-center no-block">
                                        <h4 class="card-title ">Data Penghuni 2</h5>
                                        <div class="ml-auto">
                                            <ul class="list-inline font-12">
                                                <a class="btn btn-dark btn-circle fa fa-plus" id="tambah_penghuni2"></a>
                                                <a class="btn btn-dark btn-circle fa fa-pencil" id="edit_penghuni2"></a>
                                            </ul>
                                        </div>
                                    </div>
                                    <form class="form-horizontal form-material">
                                        <div class="form-group">
                                            <label class="col-md-3" style="float:left; height: 38px; padding: 10px">No. Kamar</label>
                                            <div class="col-md-9" style="float:right;">
                                                <input type="text" placeholder="Nama Penghuni" class="form-control form-control-line" id="no_kamar2" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3" style="float:left; height: 38px; padding: 10px">Nama</label>
                                            <div class="col-md-9" style="float:right;">
                                                <input type="text" placeholder="Nama Penghuni" class="form-control form-control-line" id="nama2" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3" style="float:left; height: 38px; padding: 10px">NIM</label>
                                            <div class="col-md-9" style="float:right;">
                                                <input type="text" placeholder="NIM Penghuni" class="form-control form-control-line" id="nim2" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3" style="float:left; height: 38px; padding: 10px">No. HP</label>
                                            <div class="col-md-9" style="float:right;">
                                                <input type="text" placeholder="Nomor Telepon Penghuni" class="form-control form-control-line" id="no2" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3" style="float:left; height: 38px; padding: 10px">Prodi</label>
                                            <div class="col-md-9" style="float:right;">
                                                <input type="text" placeholder="Prodi" class="form-control form-control-line" id="prodi2" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3" style="float:left; height: 38px; padding: 10px">Masa Huni</label>
                                            <div class="col-md-9" style="float:right;">
                                                <input type="text" placeholder="Masa Huni" class="form-control form-control-line" id="masa_huni2" readonly>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            Teknik Komputer Undip <br>
            Design by wrappixel.com
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- Logout Popup -->
    <div id="logout_confirm" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Logout</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="action/logout.php">
                    <div class="modal-body">
                        <input type="hidden" name="action" id="action">
                        <h5>Apakah Anda yakin ingin keluar dari sistem?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-sm btn-danger">Ya, Keluar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!-- Bootstrap popper Core JavaScript -->
    <script src="assets/node_modules/popper/popper.min.js"></script>
    <script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="assets/node_modules/raphael/raphael-min.js"></script>
    <script src="assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--c3 JavaScript -->
    <script src="assets/node_modules/d3/d3.min.js"></script>
    <script src="assets/node_modules/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="dist/js/dashboard1.js"></script>
    <!-- script src="vendor/jquery/jquery.min.js"></script -->
    <script src="js/global.js"></script>
</body>

</html>

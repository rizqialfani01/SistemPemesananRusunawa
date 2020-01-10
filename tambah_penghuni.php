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
    <script type="text/javascript">
        $(document).ready(function(){
            $("#fakultas").change(function(){
            var fakultas = $("#fakultas").val();
                $.ajax({
                    type: 'POST',
                    url: "get.php?prodi=y",
                    data: {id_fakultas: fakultas},
                    cache: false,
                    success: function(msg){
                    $("#prodi").html(msg);
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#fakultas2").change(function(){
            var fakultas = $("#fakultas2").val();
                $.ajax({
                    type: 'POST',
                    url: "get.php?prodi=y",
                    data: {id_fakultas: fakultas},
                    cache: false,
                    success: function(msg){
                    $("#prodi2").html(msg);
                    }
                });
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
                        <li class="selected"> <a class="waves-effect waves-dark active" href="kamar.php" aria-expanded="false"><i class="fa fa-th"></i><span class="hide-menu">Pilih Kamar</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="penghuni.php" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Daftar Penghuni</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="laporan.php" aria-expanded="false"><i class="fa fa-money"></i><span class="hide-menu"></span>Laporan Keuangan</a></li>
                        <div class="text-center m-t-30">
                            <a href="logout.php" class="btn waves-effect waves-light btn-danger hidden-md-down">Logout</a>
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
                        <h4 class="text-themecolor">Tambah Data Penghuni</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                                <li class="breadcrumb-item"><a href="kamar.php">Pilih Kamar</a></li>
                                <li class="breadcrumb-item active">Tambah Data Penghuni</li>
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
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="insert.php">
                                    <div class="d-flex m-b-30 align-items-center no-block">
                                        <h4 class="card-title ">Penghuni 1</h5>
                                        <div class="ml-auto">
                                            <ul class="list-inline font-12">
                                                <button class="btn btn-dark btn-circle fa fa-check" type="submit"></button>
                                                <a class="btn btn-dark btn-circle fa fa-close" href="kamar.php"></a>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Nama</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Nama Penghuni" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">NIM</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="NIM Penghuni" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Fakultas</label>
                                        <div class="col-md-8" style="float:right;">
                                            <select class="form-control form-control-line" name="fakultas" id="fakultas">
                                                <option disabled="disabled" selected>Pilih Fakultas</option>
                                                <!-- Menampilkan Fakultas dari database -->
                                                <?php
                                                    $data_prov = $conn->query("SELECT * FROM fakultas ORDER BY nama ASC");
                                                    while($row = $data_prov->fetch_assoc()) {
                                                        echo "<option value='".$row['id_fakultas']."'>".$row['nama']."</option>";
                                                    }
                                                    $data_prov->close();
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Prodi</label>
                                        <div class="col-md-8" style="float:right;">
                                            <select class="form-control form-control-line" name="prodi" id="prodi">
                                                <option disabled="disabled" selected>Silakan Pilih Fakultas Terlebih Dahulu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Tempat Lahir</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Tempat Lahir Penghuni" class="form-control form-control-line" name="tempat_lahir">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Tanggal Lahir</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Tanggal Lahir Penghuni" class="form-control form-control-line" name="tgl_lahir">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Agama</label>
                                        <div class="col-md-8" style="float:right;">
                                            <select class="form-control form-control-line" name="agama">
                                                <option disabled="disabled" selected>Pilih Agama</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Protestan">Kristen Protestan</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Biddha">Buddha</option>
                                                <option value="Konghucu">Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Alamat Asal</label>
                                        <div class="col-md-8" style="float:right; padding: 10px;">
                                            <textarea rows="3" placeholder="Alamat Asal Penghuni" class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">No. Telp</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Nomor Telepon Penghuni" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Nama Orang Tua</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Nama Orang Tua Penghuni" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Pekerjaan Orang Tua</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Pekerjaan Orang Tua Penghuni" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Alamat Orang Tua</label>
                                        <div class="col-md-8" style="float:right; padding: 10px;">
                                            <textarea rows="3" placeholder="Alamat Asal Orang Tua" class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">No. Telp Orang Tua</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Nomor Telepon Orang Tua Penghuni" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Tahun Masuk</label>
                                        <div class="col-md-8" style="float:right;">
                                            <select class="form-control form-control-line" name="tahun_masuk">
                                                <option disabled="disabled" selected>Pilih Tahun</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                                <option value="2027">2027</option>
                                                <option value="2028">2028</option>
                                                <option value="2029">2029</option>
                                                <option value="2030">2030</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Masa Huni</label>
                                        <div class="col-md-8" style="float:right;">
                                            <select class="form-control form-control-line" name="masa_huni">
                                                <option disabled="disabled" selected>Pilih Masa Huni</option>
                                                <option value="1">1 Tahun</option>
                                                <option value="2">2 Tahun</option>
                                                <option value="3">3 Tahun</option>
                                                <option value="4">4 Tahun</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Biaya</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Biaya Kamar" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Bayar</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Jumlah Bayar Dimuka (Tanpa Titik)" class="form-control form-control-line" name="bayar" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Piutang</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Jumlah Piutang (Tanpa Titik)" class="form-control form-control-line" name="piutang" required>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex m-b-30 align-items-center no-block">
                                    <h4 class="card-title ">Penghuni 1</h5>
                                    <div class="ml-auto">
                                        <ul class="list-inline font-12">
                                            <a class="btn btn-dark btn-circle fa fa-check"></a>
                                            <a class="btn btn-dark btn-circle fa fa-close"></a>
                                        </ul>
                                    </div>
                                </div>
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Nama</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Nama Penghuni" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">NIM</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="NIM Penghuni" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Fakultas</label>
                                        <div class="col-md-8" style="float:right;">
                                            <select class="form-control form-control-line" name="fakultas" id="fakultas">
                                                <option disabled="disabled" selected>Pilih Fakultas</option>
                                                <!-- Menampilkan Fakultas dari database -->
                                                <?php
                                                    $data_prov = $conn->query("SELECT * FROM fakultas ORDER BY nama ASC");
                                                    while($row = $data_prov->fetch_assoc()) {
                                                        echo "<option value='".$row['id_fakultas']."'>".$row['nama']."</option>";
                                                    }
                                                    $data_prov->close();
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Prodi</label>
                                        <div class="col-md-8" style="float:right;">
                                            <select class="form-control form-control-line" name="prodi" id="prodi">
                                                <option disabled="disabled" selected>Silakan Pilih Fakultas Terlebih Dahulu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Tempat/Tanggal Lahir</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Tempat/Tanggal Lahir Penghuni" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Agama</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Agama Penghuni" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Alamat Asal</label>
                                        <div class="col-md-8" style="float:right; padding: 10px;">
                                            <textarea rows="3" placeholder="Alamat Asal Penghuni" class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">No. Telp</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Nomor Telepon Penghuni" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Nama Orang Tua</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Nama Orang Tua Penghuni" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Pekerjaan Orang Tua</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Pekerjaan Orang Tua Penghuni" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Alamat Orang Tua</label>
                                        <div class="col-md-8" style="float:right; padding: 10px;">
                                            <textarea rows="3" placeholder="Alamat Asal Orang Tua" class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">No. Telp Orang Tua</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Nomor Telepon Orang Tua Penghuni" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Tahun Masuk</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Tahun Masuk Penghuni" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Masa Huni</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Masa Huni" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Biaya</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Biaya Kamar" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Bayar</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Jumlah Bayar Dimuka" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Piutang</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Jumlah Piutang" class="form-control form-control-line">
                                        </div>
                                    </div>
                                </form>
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
</body>

</html>
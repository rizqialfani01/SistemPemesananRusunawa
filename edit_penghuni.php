<?php
    include "config.php";

    session_start();
    if($_SESSION['status']!="login_rusunawa"){
        header("location: login?pesan=belum_login");
    }
    else{
        $stmt = $conn->prepare("SELECT * FROM penghuni WHERE id=?");
        $stmt->bind_param("i", $_GET['id']);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
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
    <!--<link href="css/main.css" rel="stylesheet">-->
    <link href="dist/css/custom.css" rel="stylesheet">
    <link href="dist/css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="dist/css/pages/dashboard1.css" rel="stylesheet">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <script src="assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#fakultas").change(function(){
                var fakultas = $("#fakultas").val();
                $.ajax({
                    type: 'POST',
                    url: "action/get_prodi.php",
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
        function Agama(val){
            var element = document.getElementById('agama');
            if (val == 'other')
                element.style.display = 'block';
            else
                element.style.display = 'none';
        }
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
                        <li class="selected"> <a class="waves-effect waves-dark active" href="kamar.php" aria-expanded="false"><i class="fa fa-th"></i><span class="hide-menu">Pilih Kamar</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="daftar_harga.php" aria-expanded="false"><i class="fa fa-th"></i><span class="hide-menu">Daftar Harga Kamar</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="daftar_penghuni.php" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Daftar Penghuni</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="laporan_keuangan.php" aria-expanded="false"><i class="fa fa-money"></i><span class="hide-menu"></span>Laporan Keuangan</a></li>
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
                                <form class="form-horizontal form-material" action="action/update_penghuni.php" method="POST">
                                    <div class="d-flex m-b-30 align-items-center no-block">
                                        <h4 class="card-title ">Penghuni 1</h5>
                                        <div class="ml-auto">
                                            <ul class="list-inline font-12">
                                                <button class="btn btn-dark btn-circle fa fa-check" type="submit"></button>
                                                <a class="btn btn-dark btn-circle fa fa-close" href="daftar_penghuni.php"></a>
                                            </ul>
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control form-control-line" name="id" value="<?php if(isset($_GET['id'])) echo $_GET['id'] ?>">
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">No. Kamar</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" class="form-control form-control-line" name="no_kamar" value="<?php if(isset($_GET['id'])) echo $row['no_kamar'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group radio">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Isi Kamar</label>
                                        <div class="col-md-4" style="float:right; padding: 10px;">
                                            <label><input type="radio" name="isi_kamar" value="1" <?php if ($row['isi_kamar'] == '1') echo 'checked' ?>> Sendiri</label>
                                        </div>
                                        <div class="col-md-4" style="float:right; padding: 10px;">
                                            <label><input type="radio" name="isi_kamar" value="2" <?php if ($row['isi_kamar'] == '2') echo 'checked' ?>> Berdua</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Nama</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Nama Penghuni" class="form-control form-control-line" name="nama" maxlength="200" oninput="this.value = this.value.replace(/[^a-z A-Z ' .]/g, '');" value="<?php if(isset($_GET['id'])) echo $row['nama'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">NIM</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="NIM Penghuni" class="form-control form-control-line" name="nim" maxlength="50" oninput="this.value = this.value.replace(/[^0-9]/g, '');" value="<?php if(isset($_GET['id'])) echo $row['nim'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Fakultas</label>
                                        <div class="col-md-8" style="float:right;">
                                            <select class="form-control form-control-line" name="id_fakultas" id="fakultas">
                                                <option disabled="disabled" selected>Pilih Fakultas</option>
                                                <!-- Menampilkan Fakultas dari database -->
                                                <?php
                                                    $fakultas = $conn->query("SELECT * FROM fakultas ORDER BY nama_fakultas ASC");
                                                    while($row_fakultas = $fakultas->fetch_assoc()) { ?>
                                                        <option value="<?php echo $row_fakultas['id_fakultas'] ?>" <?php if ($row_fakultas['id_fakultas'] == $row['id_fakultas']) echo 'selected' ?> ><?php echo $row_fakultas['nama_fakultas'] ?></option>
                                                    <?php }
                                                    $fakultas->close();
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Prodi</label>
                                        <div class="col-md-8" style="float:right;">
                                            <select class="form-control form-control-line" name="id_prodi" id="prodi">
                                                <option disabled="disabled" selected>Silakan Pilih Fakultas Terlebih Dahulu</option>
                                                <!-- Menampilkan Prodi dari database -->
                                                <?php
                                                    $prodi = $conn->prepare("SELECT * FROM prodi WHERE id_fakultas=? ORDER BY nama_prodi ASC");
                                                    $prodi->bind_param("i", $row['id_fakultas']);
                                                    $prodi->execute();
                                                    $result = $prodi->get_result();
                                                    while($row_prodi = $result->fetch_assoc()) { ?>
                                                        <option value="<?php echo $row_prodi['id_prodi'] ?>" <?php if ($row_prodi['id_prodi'] == $row['id_prodi']) echo 'selected' ?> ><?php echo $row_prodi['nama_prodi'] ?></option>
                                                    <?php }
                                                    $prodi->close();
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Tempat Lahir</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Tempat Lahir Penghuni" class="form-control form-control-line" name="tempat_lahir" maxlength="100" oninput="this.value = this.value.replace(/[^a-z A-Z ']/g, '');" value="<?php if(isset($_GET['id'])) echo $row['tempat_lahir'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Tanggal Lahir</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input class="form-control form-control-line js-datepicker" placeholder="Tanggal Lahir Penghuni" type="text" name="tgl_lahir" id="datepicker" value="<?php if(isset($_GET['id'])) echo $row['tgl_lahir'] ?>" readonly>
                                            <i class="zmdi zmdi-calendar-note input-icon-cal js-btn-calendar"></i>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Agama</label>
                                        <div class="col-md-8" style="float:right;">
                                            <select class="form-control form-control-line" name="agama" onchange="Agama(this.value)">
                                                <option disabled="disabled" selected>Pilih Agama</option>
                                                <option value="Islam" <?php if ($row['agama'] == 'Islam') echo 'selected' ?>>Islam</option>
                                                <option value="Protestan" <?php if ($row['agama'] == 'Protestan') echo 'selected' ?>>Kristen Protestan</option>
                                                <option value="Katolik" <?php if ($row['agama'] == 'Katolik') echo 'selected' ?>>Katolik</option>
                                                <option value="Hindu" <?php if ($row['agama'] == 'Hindu') echo 'selected' ?>>Hindu</option>
                                                <option value="Biddha" <?php if ($row['agama'] == 'Buddha') echo 'selected' ?>>Buddha</option>
                                                <option value="Konghucu" <?php if ($row['agama'] == 'Konghucu') echo 'selected' ?>>Konghucu</option>
                                                <option value="other" <?php if ($row['agama'] != 'Islam' and $row['agama'] != 'Protestan' and $row['agama'] != 'Katolik' and $row['agama'] != 'Hindu' and $row['agama'] != 'Buddha' and $row['agama'] != 'Konghucu') echo 'selected' ?>>Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" id="agama" <?php if ($row['agama'] != 'Islam' and $row['agama'] != 'Protestan' and $row['agama'] != 'Katolik' and $row['agama'] != 'Hindu' and $row['agama'] != 'Buddha' and $row['agama'] != 'Konghucu') {echo "style='display: block'";} else {echo "style='display: none'";} ?>>
                                        <div class="col-md-4"></div>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Agama Penghuni (Lainnya)" class="form-control form-control-line" name="agama_lainnya" maxlength="50" oninput="this.value = this.value.replace(/[^a-z A-Z]/g, '');" value="<?php if($row['agama'] != 'Islam' and $row['agama'] != 'Protestan' and $row['agama'] != 'Katolik' and $row['agama'] != 'Hindu' and $row['agama'] != 'Buddha' and $row['agama'] != 'Konghucu') echo $row['agama'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Alamat Asal</label>
                                        <div class="col-md-8" style="float:right; padding: 10px;">
                                            <textarea rows="3" placeholder="Alamat Asal Penghuni" class="form-control form-control-line" name="alamat" maxlength="200" required><?php if(isset($_GET['id'])) echo $row['alamat'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">No. Telp</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Nomor Telepon Penghuni" class="form-control form-control-line"  name="no" maxlength="30" oninput="this.value = this.value.replace(/[^0-9 +]/g, '');" value="<?php if(isset($_GET['id'])) echo $row['no'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Nama Orang Tua</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Nama Orang Tua Penghuni" class="form-control form-control-line" name="nama_ortu" maxlength="200" oninput="this.value = this.value.replace(/[^a-z A-Z ' .]/g, '');" value="<?php if(isset($_GET['id'])) echo $row['nama_ortu'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Pekerjaan Orang Tua</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Pekerjaan Orang Tua Penghuni" class="form-control form-control-line" name="pekerjaan_ortu" maxlength="200" oninput="this.value = this.value.replace(/[^a-z A-Z ' .]/g, '');" value="<?php if(isset($_GET['id'])) echo $row['pekerjaan_ortu'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Alamat Orang Tua</label>
                                        <div class="col-md-8" style="float:right; padding: 10px;">
                                            <textarea rows="3" placeholder="Alamat Asal Orang Tua" class="form-control form-control-line" name="alamat_ortu" maxlength="200" required><?php if(isset($_GET['id'])) echo $row['alamat_ortu'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">No. Telp Orang Tua</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Nomor Telepon Orang Tua Penghuni" class="form-control form-control-line" name="no_ortu" maxlength="30" oninput="this.value = this.value.replace(/[^0-9 +]/g, '');" value="<?php if(isset($_GET['id'])) echo $row['no_ortu'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Tanggal Masuk</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input class="form-control form-control-line js-datepicker" placeholder="Tanggal Masuk Penghuni" type="text" name="tahun_masuk" id="datepicker" value="<?php if(isset($_GET['id'])) echo $row['tahun_masuk'] ?>" readonly>
                                            <i class="zmdi zmdi-calendar-note input-icon-cal js-btn-calendar"></i>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Masa Huni</label>
                                        <div class="col-md-8" style="float:right;">
                                            <select class="form-control form-control-line" name="masa_huni">
                                                <option disabled="disabled" selected>Pilih Masa Huni</option>
                                                <option value="1" <?php if ($row['masa_huni'] == '1') echo 'selected' ?>>1 Tahun</option>
                                                <option value="2" <?php if ($row['masa_huni'] == '2') echo 'selected' ?>>2 Tahun</option>
                                                <option value="3" <?php if ($row['masa_huni'] == '3') echo 'selected' ?>>3 Tahun</option>
                                                <option value="4" <?php if ($row['masa_huni'] == '4') echo 'selected' ?>>4 Tahun</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group radio">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Kategori</label>
                                        <div class="col-md-4" style="float:right; padding: 10px;">
                                            <label><input type="radio" name="kategori" value="Bidikmisi" <?php if ($row['kategori'] == 'Bidikmisi') echo 'checked' ?>> Bidikmisi</label>
                                        </div>
                                        <div class="col-md-4" style="float:right; padding: 10px;">
                                            <label><input type="radio" name="kategori" value="Non-Bidikmisi" <?php if ($row['kategori'] == 'Non-Bidikmisi') echo 'checked' ?>> Non-Bidikmisi</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Harga Sewa Kamar</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" class="form-control form-control-line" name="biaya" value="<?php if(isset($_GET['id'])) echo $row['biaya'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Bayar</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Jumlah Bayar Dimuka (Tanpa Titik)" class="form-control form-control-line" name="bayar" maxlength="30" oninput="this.value = this.value.replace(/[^0-9 .]/g, '');" value="<?php if(isset($_GET['id'])) echo $row['bayar'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4" style="float:left; height: 38px; padding: 10px">Piutang</label>
                                        <div class="col-md-8" style="float:right;">
                                            <input type="text" placeholder="Jumlah Piutang (Tanpa Titik)" class="form-control form-control-line" name="piutang" maxlength="30" oninput="this.value = this.value.replace(/[^0-9 .]/g, '');" value="<?php if(isset($_GET['id'])) echo $row['piutang'] ?>" required>
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
	<script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <script src="js/global.js"></script>
</body>

</html>
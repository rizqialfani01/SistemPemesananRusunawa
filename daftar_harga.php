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

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>
        #dataTable_filter{
            padding-top: 5px;
            padding-right: 5px;
        }
        #dataTable_length{
            padding-top: 5px;
        }
    </style>

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
                        <li> <a class="waves-effect waves-dark" href="daftarkamar.php" aria-expanded="false"><i class="fa fa-th"></i><span class="hide-menu">Daftar Kamar</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="daftar_harga.php" aria-expanded="false"><i class="fa fa-th"></i><span class="hide-menu">Daftar Harga Kamar</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="penghuni.php" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Daftar Penghuni</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="laporan.php" aria-expanded="false"><i class="fa fa-money"></i><span class="hide-menu"></span>Laporan Keuangan</a></li>
                        <li> <a class="waves-effect waves-dark" href="laporanpiutang.php" aria-expanded="false"><i class="fa fa-money"></i><span class="hide-menu"></span>Laporan Piutang</a></li>
                        <div class="text-center m-t-30">
                            <a href="action/logout.php" class="btn waves-effect waves-light btn-danger hidden-md-down">Logout</a>
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
                        <h4 class="text-themecolor">Daftar Harga Kamar</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                                <li class="breadcrumb-item active">Daftar Harga Kamar</li>
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
                                <div class="table-responsive" id="tabel_harga">
                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th class='text-center'>No</th>
                                            <th class='text-center'>Gedung</th>
                                            <th class='text-center'>Lantai</th>
                                            <th class='text-center'>Harga per Bulan</th>
                                            <th class='text-center'>Harga per Tahun</th>
                                            <th class='text-center'>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no = 1;
                                                //$harga = $conn->query("SELECT kamar.gedung, harga.lantai, harga.harga FROM harga OUTER JOIN kamar ON harga.lantai=kamar.lantai");
                                                $harga = $conn->query("SELECT * FROM harga");
                                                while ($row = $harga->fetch_assoc()) {
                                                    echo
                                                    "<tr>
                                                        <td class='text-center'>".$no++."</td>
                                                        <td class='text-center'>Gedung ".$row['gedung']."</td>
                                                        <td class='text-center'>Lantai ".$row['lantai']."</td>
                                                        <td class='text-center'>Rp. ".number_format($row['harga'], 0, ',', '.')."</td>
                                                        <td class='text-center'>Rp. ".number_format($row['harga']*12, 0, ',', '.')."</td>
                                                        <td class='text-center'><input type='button' class='btn btn-sm btn-info edit_harga' value='Edit' name='edit' id='".$row['lantai']."'/></td>
                                                    </tr>";

                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-body bg-light">
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
    
    <!-- Edit Popup Form -->
    <div id="edit_harga_Modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal form-material" method="POST" id="update_form">
                                <div class="d-flex m-b-30 align-items-center no-block">
                                    <h4 class="card-title ">Edit Harga</h5>
                                    <div class="ml-auto">
                                        <ul class="list-inline font-12">
                                            <button type="submit" class="btn btn-dark btn-circle fa fa-check" name="update" id="update"></button>
                                            <button type="button" class="btn btn-dark btn-circle fa fa-close" data-dismiss="modal"></button>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-6" style="float:left; height: 38px; padding: 10px">Gedung</label>
                                    <div class="col-md-6" style="float:right;">
                                        <input type="text" class="form-control form-control-line" name="gedung" id="gedung" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-6" style="float:left; height: 38px; padding: 10px">Lantai</label>
                                    <div class="col-md-6" style="float:right;">
                                        <input type="text" class="form-control form-control-line" name="lantai" id="lantai" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-6" style="float:left; height: 38px; padding: 10px">Harga Awal (per Bulan)</label>
                                    <div class="col-md-6" style="float:right;">
                                        <input type="text" class="form-control form-control-line" id="harga_awal" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-6" style="float:left; height: 38px; padding: 10px">Harga Baru (per Bulan)</label>
                                    <div class="col-md-6" style="float:right;">
                                        <input type="text" placeholder="Harga Baru" class="form-control form-control-line" name="harga" id="harga_baru" maxlength="30" required>
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
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>



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
    
    <script>
    $(document).ready(function(){
        $('.edit_harga').on('click', function(){
            var lantai = $(this).attr("id");
            $.ajax({
                url:"action/get_harga.php",
                method:"POST",
                data:{lantai:lantai},
                dataType:"json",
                success:function(data){
                    $('#gedung').val(data.gedung);
                    $('#lantai').val(data.lantai);
                    $('#harga_awal').val(data.harga);
                    $('#harga_baru').val(data.harga);
                    $('#edit_harga_Modal').modal('show');
                }
            });
        });
        $('#update_form').on("submit", function(event){
            event.preventDefault();
            $.ajax({
                url:"action/update_harga.php",
                method:"POST",
                data:$('#update_form').serialize(),
                // beforeSend:function(){
                //     $('#insert').val("Memperbarui");
                // },
                success:function(data){
                    $('#update_form')[0].reset();
                    $('#edit_harga_Modal').modal('hide');
                    $('#tabel_harga').html(data);
                }
            });
        });
    });
    </script>
</body>

</html>

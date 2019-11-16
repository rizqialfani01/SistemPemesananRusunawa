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
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
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
            $("#gedung_A").change(function(){
            var gedung_A = $("#gedung_A").val();
                $.ajax({
                    type: 'POST',
                    url: "get_lantai_A.php",
                    data: {gedung_A: gedung_A},
                    cache: false,
                    success: function(msg){
                    $("#lantai_A").html(msg);
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        function selectedRoom(){
            $(".room").on("click", function() {
                $(this).toggleClass('selected');
            });
        }    
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
                            <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item hidden-sm-up"> <a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="fa fa-times"></i></a>
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="img-circle" width="30"></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
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
                <span><img src="assets/images/logo-icon.png" alt="elegant admin template"></span>
                <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i class="ti-menu"></i></a>
                <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            </div>
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="index.php" aria-expanded="false"><i class="fa fa-home"></i><span class="hide-menu">Daftar Kamar</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="pages-profile.html" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Daftar Penghuni</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="table-basic.html" aria-expanded="false"><i class="fa fa-money"></i><span class="hide-menu"></span>Laporan Keuangan</a></li>
                        <li> <a class="waves-effect waves-dark" href="pages-error-404.html" aria-expanded="false"><i class="fa fa-question-circle"></i><span class="hide-menu"></span>404</a></li>
                        <div class="text-center m-t-30">
                            <a href="#" class="btn waves-effect waves-light btn-danger hidden-md-down"> Logout</a>
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
                        <h4 class="text-themecolor">Dashboard</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
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
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="gedunga" style="width: 1100px">
                                    <div class="form-group">
                                        <label class="col-sm-2" style="margin-top: 20px;">Pilih Lantai</label>
                                        <div class="col-sm-2">
                                            <select id="gedung_A" class="form-control form-control-line">
                                                <option disabled="disabled" selected="selected">Pilih Lantai</option>
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
                                            <select class="form-control form-control-line">
                                                <option disabled="disabled" selected="selected">Pilih Lantai</option>
                                                <option value="semualantai">Semua Lantai</option>
                                                <option value="lantai1">Lantai 1</option>
                                                <option value="lantai2">Lantai 2</option>
                                                <option value="lantai3">Lantai 3</option>
                                                <option value="lantai4">Lantai 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="card-body" style="padding-left: 10px;">
                                        <?php
                                            $server = "localhost";
                                            $user = "root";
                                            $password = "";
                                            $wilayah = "rusunawa";
                                            $conn = mysqli_connect($server, $user, $password, $wilayah);

                                            $seat = mysqli_query($conn,"SELECT * FROM kamar WHERE lantai='B2'");
                                            while ($row = mysqli_fetch_assoc($seat)) {
                                                //echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                                                echo "<div class='room available2' id='div-inline' onclick='selectedRoom()'>" . $row['no_kamar'] . "</div>";
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="gedungc">
                                    <div class="form-group">
                                        <label class="col-sm-2" style="margin-top: 20px;">Pilih Lantai</label>
                                        <div class="col-sm-2">
                                            <select class="form-control form-control-line">
                                                <option disabled="disabled" selected="selected">Pilih Lantai</option>
                                                <option value="semualantai">Semua Lantai</option>
                                                <option value="lantai1">Lantai 1</option>
                                                <option value="lantai2">Lantai 2</option>
                                                <option value="lantai3">Lantai 3</option>
                                                <option value="lantai4">Lantai 4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="gedungd">
                                    <div class="form-group">
                                        <label class="col-sm-2" style="margin-top: 20px;">Pilih Lantai</label>
                                        <div class="col-sm-2">
                                            <select class="form-control form-control-line">
                                                <option disabled="disabled" selected="selected">Pilih Lantai</option>
                                                <option value="semualantai">Semua Lantai</option>
                                                <option value="lantai2">Lantai 2</option>
                                                <option value="lantai3">Lantai 3</option>
                                                <option value="lantai4">Lantai 4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="gedunge">
                                    <div class="form-group">
                                        <label class="col-sm-2" style="margin-top: 20px;">Pilih Lantai</label>
                                        <div class="col-sm-2">
                                            <select class="form-control form-control-line">
                                                <option disabled="disabled" selected="selected">Pilih Lantai</option>
                                                <option value="semualantai">Semua Lantai</option>
                                                <option value="lantai1">Lantai 1</option>
                                                <option value="lantai2">Lantai 2</option>
                                                <option value="lantai3">Lantai 3</option>
                                                <option value="lantai4">Lantai 4</option>
                                                <option value="lantai5">Lantai 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="card-body bg-light">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- News -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- To do chat and message -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
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
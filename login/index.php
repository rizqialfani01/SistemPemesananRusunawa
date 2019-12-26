<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon1.png">
        <title>Login - Sistem Pemesanan Rusunawa</title>

        <!-- Styles -->
        <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
        <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/lib/helper.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body class="bg-primary">
        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content">
                            <div class="login-form">
                                <h4>Administrator Login</h4>
                                <form method="POST" action="check_login.php">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    </div>
                                    <div>
                                        <?php
                                        if (isset($_GET['pesan'])){
                                            $pesan = $_GET['pesan'];
                                            if ($pesan == "belum_login"){
                                                echo "<div class='alert alert-danger'>Silakan login terlebih dahulu.</div>";
                                            }
                                            else if ($pesan == "logout"){
                                                echo "<div class='alert alert-success'>Berhasil logout dari sistem.</div>";
                                            }
                                            else if ($pesan == "gagal"){
                                                echo "<div class='alert alert-danger'>Username dan Password tidak cocok. Silakan coba kembali.</div>";
                                            }
                                        }
                                        ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-20"><span class='ti-arrow-right'></span> Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

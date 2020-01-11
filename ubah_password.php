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
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon1.png">
        <title>Login - Sistem Pemesanan Rusunawa</title>

        <!-- Styles -->
        <link href="../login/assets/css/lib/font-awesome.min.css" rel="stylesheet">
        <link href="../login/assets/css/lib/themify-icons.css" rel="stylesheet">
        <link href="../login/assets/css/lib/bootstrap.min.css" rel="stylesheet">
        <link href="../login/assets/css/lib/helper.css" rel="stylesheet">
        <link href="../login/assets/css/style.css" rel="stylesheet">
    </head>
    <body class="bg-primary">
        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content">
                            <div class="login-form">
                                <h4>Ubah Password</h4>
                                <form method="POST" action="action/update_password.php">
                                    <div class="form-group">
                                        <label>Password Lama</label>
                                        <input type="password" class="form-control" name="old_password" placeholder="Password Lama" required>
                                    </div>
                                    <div>
                                        <?php
                                        if (isset($_GET['pesan'])){
                                            $pesan = $_GET['pesan'];
                                            if ($pesan == "password_salah"){
                                                echo "<div class='alert alert-danger'>Password tidak sesuai, silakan coba kembali</div>";
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Password Baru</label>
                                        <input type="password" class="form-control" name="new_password" placeholder="Password Baru" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Konfirmasi Password Baru</label>
                                        <input type="password" class="form-control" name="confirm_new_password" placeholder="Konfirmasi Password Baru" required>
                                    </div>
                                    <div>
                                        <?php
                                        if (isset($_GET['pesan'])){
                                            $pesan = $_GET['pesan'];
                                            if ($pesan == "konfirmasi_password_salah"){
                                                echo "<div class='alert alert-danger'>Konfirmasi Password tidak sesuai, silakan coba kembali.</div>";
                                            }
                                            else if ($pesan == "berhasil"){
                                                echo "<div class='alert alert-success'>Password berhasil diubah.</div>";
                                            }
                                        }
                                        ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-20">Ubah Password</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

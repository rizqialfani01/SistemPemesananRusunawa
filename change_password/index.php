<?php
    include "../config.php";

    session_start();
    if($_SESSION['status']!="login_rusunawa"){
        header("location: login?pesan=belum_login");
    }

    if (isset($_POST['old_password'])){
        $stmt = $conn->prepare("SELECT * FROM admin WHERE username=? AND password=?");
        $stmt->bind_param("ss", $_SESSION['username'], $_POST['old_password']);
        $stmt->execute();

        if($stmt->num_rows == 0){
            header("location: change_password?pesan=password_salah");
        }
        
        else{
            if ($_POST['new_password'] == $_POST['confirm_new_password']){
                $stmt = $conn->prepare("UPDATE admin set password=? WHERE username=? AND password=?");
                $stmt->bind_param("sss", $_POST['new_password'], $_SESSION['username'], $_POST['old_password']);
                $stmt->execute();
                $stmt->close();
                header("location: change_password?pesan=password_berhasil_diubah");
            }
            else{
                header("location: change_password?pesan=konfirmasi_password_salah");
            }
        }

        $stmt->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon1.png">
        <title>Ubah Password - Sistem Pemesanan Rusunawa</title>

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
                                <form method="POST" action="change.php">
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

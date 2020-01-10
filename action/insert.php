<?php
    include "../config.php";

    session_start();
    if($_SESSION['status']!="login_rusunawa"){
        header("location: login?pesan=belum_login");
    }

    else {
        $stmt = $conn->prepare("INSERT INTO penghuni SET id_kamar=?, nama=?, nim=?, id_fakultas=?, id_prodi=?, tempat_lahir=?, tgl_lahir=?, agama=?, alamat=?, no=?, nama_ortu=?, pekerjaan_ortu=?, alamat_ortu=?, no_ortu=?, tahun_masuk=?, masa_huni=?, kategori=?, biaya=?, bayar=?, piutang=?, status=?");
        $stmt->bind_param("sssiissssssssssisiiis", $_POST['id_kamar'], $_POST['nama'], $_POST['nim'], $_POST['id_fakultas'], $_POST['id_prodi'], $_POST['tempat_lahir'], $_POST['tgl_lahir'], $_POST['agama'], $_POST['alamat'], $_POST['no'], $_POST['nama_ortu'], $_POST['pekerjaan_ortu'], $_POST['alamat_ortu'], $_POST['no_ortu'], $_POST['tahun_masuk'], $_POST['masa_huni'], $_POST['kategori'], $_POST['biaya'], $_POST['bayar'], $_POST['piutang'], $_POST['status']);
        $stmt->execute();

        if ($stmt->execute()){
            echo "New record inserted successfully";
        }
        else {
            echo "Error: $stmt->error";
        }

        $stmt->close();
    }
?>
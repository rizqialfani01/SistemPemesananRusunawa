<?php
    include "../config.php";

    session_start();
    if ($_SESSION['status']!="login_rusunawa"){
        header("location: ../login?pesan=belum_login");
    }
    else {
        if (isset($_POST['no_kamar'])){
            $stmt = $conn->prepare("SELECT * FROM penghuni INNER JOIN prodi ON prodi.id_prodi=penghuni.id_prodi WHERE id_kamar=?");
            $stmt->bind_param("s", $_POST['no_kamar']);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            echo json_encode($row);
            $stmt->close();
        }
    }
?>
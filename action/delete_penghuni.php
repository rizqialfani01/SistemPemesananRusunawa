<?php
    include "../config.php";

    session_start();
    if($_SESSION['status']!="login_rusunawa"){
        header("location: ../login?pesan=belum_login");
    }

    else {
        $stmt = $conn->prepare("DELETE FROM penghuni WHERE id=?");
        $stmt->bind_param("i", $_POST['id_penghuni']);
        $stmt->execute();

        if ($stmt->affected_rows == 1){
            //echo "New record deleted successfully";
            header('location: ../daftarkamar.php');
        }
        else {
            echo "Error: $stmt->error";
        }

        $stmt->close();
    }
?>

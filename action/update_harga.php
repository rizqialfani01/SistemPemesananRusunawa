<?php
    include "../config.php";

    session_start();
    if($_SESSION['status']!="login_rusunawa"){
        header("location: ../login?pesan=belum_login");
    }
    
    else {
        $harga = filter_var($_POST['harga'], FILTER_SANITIZE_NUMBER_INT);
        $stmt = $conn->prepare("UPDATE harga SET harga=? WHERE lantai=?");
        $stmt->bind_param("is", $harga, $_GET['lantai']);

        if ($stmt->execute()){
            echo "New record updated successfully";
        }
        else {
            echo "Error: $stmt->error";
        }

        $stmt->close();
    }
?>
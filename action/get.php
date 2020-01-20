<?php
	include "../config.php";

    session_start();
    if ($_SESSION['status']!="login_rusunawa"){
        header("location: ../login?pesan=belum_login");
    }
    
    else {
        if (isset($_GET['prodi'])){
            if ($_GET['prodi'] == 'y'){
                echo "<option disabled='disabled' selected='selected'>Pilih Prodi</option>";
            
                $stmt = $conn->prepare("SELECT * FROM prodi WHERE id_fakultas=? ORDER BY nama_prodi ASC");
                $stmt->bind_param("i", $_POST['id_fakultas']);
                $stmt->execute();
                $result = $stmt->get_result();
                while($row = $result->fetch_assoc()) {
                    echo "<option value='".$row['id_prodi']."'>".$row['nama_prodi']."</option>";
                }
                $stmt->close();
            }
        }
        else if (isset($_GET['gedung'])){
            if ($_GET['gedung'] == 'A'){
                if ($_POST['gedung_A'] == 'A0'){
                    $stmt = $conn->prepare("SELECT * FROM kamar WHERE gedung='A'");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='room ". $row['status']."' id=".$row['no_kamar'].">". $row['no_kamar']."</div>";
                    }
                    $stmt->close();
                }
                else {
                    $stmt = $conn->prepare("SELECT * FROM kamar WHERE lantai=?");
                    $stmt->bind_param("s", $_POST['gedung_A']);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='room ". $row['status']."'  id=".$row['no_kamar'].">". $row['no_kamar']."</div>";
                    }
                    $stmt->close();
                }
            }
            else if ($_GET['gedung'] == 'B'){
                if ($_POST['gedung_B'] == 'B0'){
                    $stmt = $conn->prepare("SELECT * FROM kamar WHERE gedung='B'");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='room ". $row['status']."' id=".$row['no_kamar'].">". $row['no_kamar']."</div>";
                    }
                    $stmt->close();
                }
                else {
                    $stmt = $conn->prepare("SELECT * FROM kamar WHERE lantai=?");
                    $stmt->bind_param("s", $_POST['gedung_B']);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='room ". $row['status']."' id=".$row['no_kamar'].">". $row['no_kamar']."</div>";
                    }
                    $stmt->close();
                }
            }
            else if ($_GET['gedung'] == 'C'){
                if ($_POST['gedung_C'] == 'C0'){
                    $stmt = $conn->prepare("SELECT * FROM kamar WHERE gedung='C'");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='room ". $row['status']."' id=".$row['no_kamar'].">". $row['no_kamar']."</div>";
                    }
                    $stmt->close();
                }
                else {
                    $stmt = $conn->prepare("SELECT * FROM kamar WHERE lantai=?");
                    $stmt->bind_param("s", $_POST['gedung_C']);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='room ". $row['status']."' id=".$row['no_kamar'].">". $row['no_kamar']."</div>";
                    }
                    $stmt->close();
                }
            }
            else if ($_GET['gedung'] == 'D'){
                if ($_POST['gedung_D'] == 'D0'){
                    $stmt = $conn->prepare("SELECT * FROM kamar WHERE gedung='D'");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='room ". $row['status']."' id=".$row['no_kamar'].">". $row['no_kamar']."</div>";
                    }
                    $stmt->close();
                }
                else {
                    $stmt = $conn->prepare("SELECT * FROM kamar WHERE lantai=?");
                    $stmt->bind_param("s", $_POST['gedung_D']);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='room ". $row['status']."' id=".$row['no_kamar'].">". $row['no_kamar']."</div>";
                    }
                    $stmt->close();
                }
            }
            else if ($_GET['gedung'] == 'E'){
                if ($_POST['gedung_E'] == 'E0'){
                    $stmt = $conn->prepare("SELECT * FROM kamar WHERE gedung='E'");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='room ". $row['status']."' id=".$row['no_kamar'].">". $row['no_kamar']."</div>";
                    }
                    $stmt->close();
                }
                else {
                    $stmt = $conn->prepare("SELECT * FROM kamar WHERE lantai=?");
                    $stmt->bind_param("s", $_POST['gedung_E']);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='room ". $row['status']."' id=".$row['no_kamar'].">". $row['no_kamar']."</div>";
                    }
                    $stmt->close();
                }
            }
        }
    }

?>

<script>
    $(document).ready(function() {
        $(".room").click(function () {
            $(".room").removeClass("terpilih");
            $(this).addClass("terpilih");
            var no_kamar = $(this).attr("id");
            $.ajax({
                url: "detail_penghuni.php",
                method: "POST",
                data: {no_kamar: no_kamar},
                success: function(data){
                    $('#nama').val(data.nama);
                    $('#nim').val(data.nim);
                    $('#no').val(data.no);
                    $('#prodi').val(data.prodi);
                    $('#masa_huni').val(data.masa_huni);
                    //$('#dataModal').modal('show');
                    document.getElementById("dataPenghuni").style.display = "block";
                }
            });
            
        });
    });
</script>
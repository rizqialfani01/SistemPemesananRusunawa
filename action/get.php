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
            document.getElementById("dataPenghuni").style.display = "block";
            var no_kamar = $(this).attr("id");
            $('#no_kamar').val(no_kamar);
            $('#no_kamar2').val(no_kamar);
            $.ajax({
                url: "action/detail_kamar.php?penghuni=1",
                method: "POST",
                data: {no_kamar: no_kamar},
                dataType: "json",
                success: function(data){
                    if(!data) {
                        $('#tambah_penghuni').attr("href", "tambah_penghuni.php?kamar=" + no_kamar);
                        $('#edit_penghuni').removeAttr("href");
                        $('#nama').val('Belum ada penghuni');
                        $('#nim').val('Belum ada penghuni');
                        $('#no').val('Belum ada penghuni');
                        $('#prodi').val('Belum ada penghuni');
                        $('#masa_huni').val('Belum ada penghuni');
                    }
                    else {
                        $('#tambah_penghuni').removeAttr("href");
                        $('#edit_penghuni').attr("href", "edit_penghuni.php?id=" + data.id);
                        $('#nama').val(data.nama);
                        $('#nim').val(data.nim);
                        $('#no').val(data.no);
                        $('#prodi').val(data.nama_prodi);
                        $('#masa_huni').val(data.masa_huni + " Tahun");
                    }
                }
            });
            $.ajax({
                url: "action/detail_kamar.php?penghuni=2",
                method: "POST",
                data: {no_kamar: no_kamar},
                dataType: "json",
                success: function(data){
                    if(!data) {
                        $('#tambah_penghuni2').attr("href", "tambah_penghuni.php?kamar=" + no_kamar);
                        $('#edit_penghuni2').removeAttr("href");
                        $('#nama2').val('Belum ada penghuni');
                        $('#nim2').val('Belum ada penghuni');
                        $('#no2').val('Belum ada penghuni');
                        $('#prodi2').val('Belum ada penghuni');
                        $('#masa_huni2').val('Belum ada penghuni');
                    }
                    else {
                        $('#tambah_penghuni2').removeAttr("href");
                        $('#edit_penghuni2').attr("href", "edit_penghuni.php?id=" + data.id);
                        $('#nama2').val(data.nama);
                        $('#nim2').val(data.nim);
                        $('#no2').val(data.no);
                        $('#prodi2').val(data.nama_prodi);
                        $('#masa_huni2').val(data.masa_huni + " Tahun");
                    }
                }
            });
        });
    });
</script>
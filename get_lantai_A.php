<?php
	include 'config.php';
	$gedung_A = $_POST['gedung_A'];

    if ($gedung_A=='A0'){
        $seat = mysqli_query($conn,"SELECT * FROM kamar WHERE gedung='A'");
        while ($row = mysqli_fetch_assoc($seat)) {
            echo "<div class='outer-seat' id='div-inline'><div class='inner-seat' style='text-align: center;'>" . $row['no_kamar'] . "</div></div>";
        }
    }
    else{
        $seat = mysqli_query($conn,"SELECT * FROM kamar WHERE lantai='$gedung_A'");
        while ($row = mysqli_fetch_assoc($seat)) {
            echo "<div class='outer-seat' id='div-inline'><div class='inner-seat' style='text-align: center;'>" . $row['no_kamar'] . "</div></div>";
        }
    }
?>
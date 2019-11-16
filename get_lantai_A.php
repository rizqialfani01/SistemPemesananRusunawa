<?php
	include 'config.php';
	$gedung_A = $_POST['gedung_A'];

    if ($gedung_A=='A0'){
        $seat = mysqli_query($conn,"SELECT * FROM kamar WHERE gedung='A'");
        while ($row = mysqli_fetch_assoc($seat)) {
            echo "<div class='room ". $row['status']."' id='div-inline' onclick='selectedRoom()'>". $row['no_kamar']."</div>";
        }
    }
    else{
        $seat = mysqli_query($conn,"SELECT * FROM kamar WHERE lantai='$gedung_A'");
        while ($row = mysqli_fetch_assoc($seat)) {
            echo "<div class='room ". $row['status']."' id='div-inline' onclick='selectedRoom()'>". $row['no_kamar']."</div>";
        }
    }
?>
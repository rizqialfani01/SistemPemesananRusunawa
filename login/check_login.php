<?php
	session_start();
	include("../config.php");

	$stmt = $conn->prepare("SELECT * FROM admin WHERE username=? AND password=?");
	$stmt->bind_param("ss", $_POST['username'], sha1($_POST['password']));
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_assoc();
	//$admin = $result->fetch_assoc();

	if ($row > 0){
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['status'] = "login_rusunawa";
		header("location: ../index.php");
	}else{
		header("location: ../login?pesan=gagal");
	}

	$stmt->close();
?>
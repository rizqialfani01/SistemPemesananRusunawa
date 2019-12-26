<?php
	session_start();
	include("../config.php");

	$admin = $conn->prepare("SELECT * FROM admin WHERE username=? AND password=?");
	$admin->bind_param("ss", $_POST['username'], sha1($_POST['password']));
	$admin->execute();
	$result = $admin->get_result();
	$row = $result->fetch_row();

	if ($row > 0){
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['status'] = "login_rusunawa";
		header("location: ../index.php");
	}else{
		header("location: ../login?pesan=gagal");
	}

	$admin->close();
?>
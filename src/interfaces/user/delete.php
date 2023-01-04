<?php
session_start();
include('../../data/conn.php');

//delete user
if (isset($_POST['btn_delete'])) {
	$id = $_POST['id'];
	echo $id;

	$query = "DELETE FROM users WHERE id_user = '$id';";
	if (mysqli_query($conn, $query)) {
		//$_SESSION['msg'] = 'Account Deleted';
		echo '<script>window.location.href="../shared/logout.php"</script>';
	} else {
		//$_SESSION['msg'] = 'Account NOT Deleted';
	}
}

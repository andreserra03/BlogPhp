<?php
session_start();
include('../../data/conn.php');

//Update User
if (isset($_POST['btn_update'])) {

	$username = $_POST['username'];
	$role = $_POST['user_role'];
	$id = $_POST['id_user'];

	$sql2 = "UPDATE users SET name_user = '$username', role = '$role' WHERE id_user = '$id';";

	if ($res2 = mysqli_query($conn, $sql2)) {
		//array_push($success, "Record was updated successfully.");
		$_SESSION['msg'] = "Record was updated successfully.";
	} else {
		//array_push($errors, "Record was NOT updated successfully. " . $conn->error);
		$_SESSION['msg'] = "Record was NOT updated successfully. " . $conn->error;
	}
	echo '<script> window.location.href="edit.php?id=' . $id . '"</script>';
	mysqli_close($conn);
}

<?php
session_start();
include('../../data/conn.php');

//Update User
if (isset($_POST['btn_hide'])) {

	$id = $_POST['id_post'];
	if ($_POST['post_hide'] == '0') {
		$hide = 1;
	} else {
		$hide = 0;
	}
	$sql2 = "UPDATE posts SET hide = '$hide' WHERE id_post = '$id';";

	if ($res2 = mysqli_query($conn, $sql2)) {
		//array_push($success, "Record was updated successfully.");
		$_SESSION['msg'] = "Record was updated successfully.";
	} else {
		//array_push($errors, "Record was NOT updated successfully. " . $conn->error);
		$_SESSION['msg'] = "Record was NOT updated successfully. " . $conn->error;
	}
	echo '<script> window.location.href="posts.php"</script>';
	mysqli_close($conn);
}

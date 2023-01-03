<?php
session_start();
include('../../data/conn.php');

//Update User
if (isset($_POST['btn_create'])) {

	$title = $_POST['title_post'];
	$desc = $_POST['desc_post'];
	$id_user = $_POST['id_user'];

	$sql2 = "INSERT INTO posts(title, description, id_user, hide) VALUES('$title', '$desc', '$id_user', 0);";
	if ($res2 = mysqli_query($conn, $sql2)) {
		//array_push($success, "Record was updated successfully.");
		$_SESSION['msg'] = "Record was updated successfully.";
	} else {
		//array_push($errors, "Record was NOT updated successfully. " . $conn->error);
		$_SESSION['msg'] = "Record was NOT updated successfully.";
	}
	echo '<script> window.location.href="posts.php"</script>';
	mysqli_close($conn);
}

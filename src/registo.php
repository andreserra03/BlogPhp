<?php
session_start();
require_once('data/conn.php');

$title = 'Registo';
include('interfaces/shared/head.php');

$errors = [];
$success = [];

if (isset($_POST['btn_registo'])) {
	$name = $_POST['name'];
	$user = $_POST['username'];
	$pw = $_POST['password'];

	if (empty($name) || empty($user) || empty($pw)) {
		array_push($errors, "All inputs must be filled.");
	}

	$query = "SELECT id_user from users WHERE name_user='$user';";
	$res = mysqli_query($conn, $query);

	if (mysqli_num_rows($res) > 0) {
		array_push($errors, "User already exists.");
	} else {
		$query = "INSERT INTO users (name, name_user, password, role, status) VALUES ('$name', '$user', '$pw', 'User', 1);";
		if (!mysqli_query($conn, $query)) {
			array_push($errors, "Could not create account.");
		} else {
			$_SESSION['msg'] = "Account Created!";
			echo '<script> window.location.href="index.php"</script>';
		}
	}
}

?>
<!-- Body -->
<div class="vh-100 d-flex justify-content-center align-items-center">
	<div class="col-md-4 p-5 shadow-sm border rounded-3">
		<h2 class="text-center mb-4 text-primary">Register Form</h2>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="mb-3">
				<label for="exampleInputUsername" class="form-label">Name</label>
				<input name="name" type="text" class="form-control border border-primary" id="exampleInputUsername">
			</div>
			<div class="mb-3">
				<label for="exampleInputUsername" class="form-label">Username</label>
				<input name="username" type="text" class="form-control border border-primary" id="exampleInputUsername">
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword" class="form-label">Password</label>
				<input name="password" type="password" class="form-control border border-primary" id="exampleInputPassword">
			</div>
			<?php include "interfaces/shared/error.php" ?>
			<div class="d-grid">
				<button class="btn btn-primary" name="btn_registo" type="submit">Register</button>
			</div>
		</form>
		<div class="mt-3 text-center">
			<a href="index.php">Login</a>
		</div>
	</div>
</div>

<?php
include('interfaces/shared/scripts.php');
?>
<?php
session_start();
require_once('data/conn.php');

$title = 'Login';
include('interfaces/shared/head.php');

$errors = [];
$success = [];

//Se pressionou no botao de login
if (isset($_POST['btn_login'])) {
	$user = $_POST['username'];
	$pw = $_POST['password'];

	//verificar se estao preenchidos
	if (empty($user)) {
		array_push($errors, "Username not filled");
	}
	if (empty($pw)) {
		array_push($errors, "Password not filled");
	}

	if (empty($errors)) {
		//query sql
		$sql = "SELECT * FROM users WHERE name_user = '$user' AND password = '$pw'; ";
		$result = mysqli_query($conn, $sql);

		//erros na query
		if (!$result) {
			array_push($errors, "Errors: " . mysqli_error($conn));
		}

		if ($row = mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);

			if ($row['name_user'] === $user && $row['password'] === $pw) {
				//criar sessoes
				$_SESSION['id_user'] = $row['id_user'];
				$_SESSION['user'] = $row['name_user'];
				$_SESSION['role'] = $row['role'];
				//ir para a pagina inicial
				echo '<script> window.location.href="/interfaces/shared/home.php"</script>';
				//header("Location: interfaces/shared/home.php");
				//exit;
			} else {
				array_push($errors, "Username or Password incorrect");
				//exit;
			}
		} else {
			array_push($errors, "Incorrect Data");
		}
	}
}
?>
<!-- Body -->
<div class="vh-100 d-flex justify-content-center align-items-center">
	<div class="col-md-4 p-5 shadow-sm border rounded-3">
		<h2 class="text-center mb-4 text-primary">Login Form</h2>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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
				<button class="btn btn-primary" name="btn_login" type="submit">Login</button>
			</div>
		</form>
	</div>
</div>

<?php
include('interfaces/shared/scripts.php');
?>
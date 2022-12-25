<?php
session_start();
include('../../data/conn.php');
$title = 'Edit User';
include('../shared/head.php');
include('../shared/sidebar.php');

$userId = $_GET['id'];

$sql = "Select * from users where id_user = $userId";
$res = mysqli_query($conn, $sql);

if ($row = mysqli_num_rows($res) > 0) {
	$row = mysqli_fetch_assoc($res);
}
?>

<div class="container mt-5">

	<div class="mb-3">
		<div class="row">
			<div class="col-4">
				<label for="exampleFormControlInput1" class="form-label">User Name</label>
				<input name="username" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['name_user'] ?>">
			</div>
			<div class="col-4">
				<label for="exampleFormControlInput2" class="form-label">Role : <?php echo $row['role'] ?></label>
				<div class="input-group mb-3">
					<select name="user_role" class="form-select" id="exampleFormControlInput2">
						<option <?php if ($row['role'] == 'Admin') {
											echo 'selected="selected"';
										} ?> value="Admin">Admin</option>
						<option <?php if ($row['role'] == 'Manager') {
											echo 'selected="selected"';
										} ?> value="Manager">Manager</option>
						<option <?php if ($row['role'] == 'User') {
											echo 'selected="selected"';
										} ?> value="User">User</option>
					</select>
				</div>
			</div>
		</div>
		<div class="col-4">
			<a id="btn_save href=" #" class="btn btn-success">Save</a>
		</div>
	</div>


</div>

<!-- parte de sidebar -->
</main>
<?php
include('../shared/scripts.php');
?>
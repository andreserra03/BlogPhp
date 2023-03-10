<?php
session_start();
include('../../data/conn.php');
$title = 'Feedback';
$active_page = 'Feedback';
include('../shared/head.php');
include('../shared/sidebar.php');
include('../../middleware/session.php');

$sql = "Select feedback.*, users.* from feedback inner join users on feedback.id_user = users.id_user;";
$res = mysqli_query($conn, $sql);
$feeds = [];

if ($row = mysqli_num_rows($res) > 0) {
	while ($row = mysqli_fetch_assoc($res)) {
		array_push($feeds, $row);
	}
}
?>

<div class="container mt-5">
	<h1>Feedback</h1>
	<hr>

	<div class="row">
		<?php foreach ($feeds as $feed) : ?>
			<div class="col-4">
				<h6>User: <?php echo $feed['name_user'] ?></h6>
				<div class="form-floating">
					<textarea readonly class="form-control" id="floatingTextarea2" style="height: 100px"><?php echo $feed['message'] ?></textarea>
					<label for="floatingTextarea2">Message</label>
				</div>
			</div>
		<?php endforeach; ?>
	</div>

</div>

<!-- parte de sidebar -->
</main>
<?php
include('../shared/scripts.php');
?>
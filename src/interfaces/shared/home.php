<?php
session_start();
include('../../data/conn.php');
$title = 'Home';
$active_page = 'Home';
include('head.php');
include('sidebar.php');

$sql = "SELECT posts.*, users.* FROM posts INNER JOIN users ON posts.id_user = users.id_user;";
$res = mysqli_query($conn, $sql);
$posts = [];
if ($row = mysqli_num_rows($res) > 0) {
	while ($row = mysqli_fetch_assoc($res)) {
		array_push($posts, $row);
	}
}
?>

<div class="container mt-5">
	<h1>Home</h1>
	<h2>-- Posts -- </h2>
	<hr>
	<div class="row">
		<?php foreach ($posts as $post) : ?>
			<div class="col-4">
				<h5><?php echo $post['title'] ?></h5>
				<div class="form-floating">
					<textarea readonly class="form-control" id="floatingTextarea2" style="height: 100px"><?php echo $post['description'] ?></textarea>
					<label for="floatingTextarea2">Message</label>
				</div>
				<p class="mb-5 text-muted">Author: <?php echo $post['name_user'] ?></p>
			</div>
		<?php endforeach; ?>
	</div>
</div>


<!-- parte de sidebar -->
</main>
<?php
include('scripts.php');
?>
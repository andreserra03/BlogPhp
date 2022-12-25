<main class="d-flex flex-nowrap" style="height: 100vh;">

	<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
		<a href="home.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
			<span class="fs-4">Welcome
				<?php echo $_SESSION['user'] ?>
			</span>
		</a>
		<hr>
		<ul class="nav nav-pills flex-column mb-auto">
			<li class="nav-item">
				<a href="#" class="nav-link active" aria-current="page">
					Home
				</a>
			</li>
			<?php if ($_SESSION['role'] == 'Admin') : ?>
				<li>
					<a href="#" class="nav-link link-dark">
						Users
					</a>
				</li>
			<?php endif; ?>

			<?php if ($_SESSION['role'] == 'Manager') : ?>
				<li>
					<a href="#" class="nav-link link-dark">
						Posts
					</a>
				</li>
			<?php endif; ?>

			<?php if ($_SESSION['role'] == 'User') : ?>
				<li>
					<a href="#" class="nav-link link-dark">
						Posts
					</a>
				</li>
			<?php endif; ?>
		</ul>
		<hr>
		<button class="btn btn-danger">Logout</button>
	</div>
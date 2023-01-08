<?php
session_start();
include('../../data/conn.php');
$title = 'Perfil';
$active_page = 'Perfil';
include('../../middleware/session.php');
include('../shared/head.php');
include('../shared/sidebar.php');
?>

<div class="container mt-5">
	<h1>Perfil</h1>
	<hr>
	<hp>Utilizador: <?php echo $_GET['u']; ?></hp>
	<hr>
</div>

<?php
include('../shared/scripts.php');
?>
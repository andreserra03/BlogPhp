<?php
session_start();
include('../../data/conn.php');
$title = 'Perfil';
$active_page = 'Perfil';
include('../shared/head.php');
include('../shared/sidebar.php');
?>

<div class="container mt-5">
	<h1>Posts</h1>
	<hr>
    <hp>Utilizador: <?php echo $_GET['u']; ?></hp>
</div>

<?php
include('../shared/scripts.php');
?>
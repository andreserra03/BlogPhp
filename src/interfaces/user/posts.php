<?php
session_start();
include('../../data/conn.php');
$title = 'Posts';
$active_page = 'Posts';
include('../shared/head.php');
include('../shared/sidebar.php');
?>

<div class="container mt-5">
	<h1>Posts</h1>
	<hr>
</div>

<?php
include('../shared/scripts.php');
?>
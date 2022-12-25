<?php
session_start();
include('../../data/conn.php');
$title = 'Posts';
$active_page = 'Posts';
include('../shared/head.php');
include('../shared/sidebar.php');
?>

<h1>Posts Manager</h1>

<?php
include('../shared/scripts.php');
?>
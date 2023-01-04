<?php
session_start();

if (!$_SESSION['id_user'] and !$_SESSION['user']) {
	echo '<script>window.location.href="../../index.php"</script>';
}

<?php

	session_start();

	/*For the SESSION test*/
	/*session_destroy();*/

	defined("DB_HOST") ? null : define("DB_HOST", "localhost");

	defined("DB_USER") ? null : define("DB_USER", "root");

	defined("DB_PASS") ? null : define("DB_PASS", "");

	defined("DB_NAME") ? null : define("DB_NAME", "eshop");

	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	mysqli_query($conn,'set names utf8');

	require_once("functions.php");

	require_once("cart.php");

	date_default_timezone_set('Japan');

?>
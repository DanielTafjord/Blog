<?php 

	include_once('resources/init.php'); 

if ( ! isset($_GET['id']) ) {
	header('location: lindexadmin.php');
	die();
}

delete('categories', $_GET['id']);

header('location: category_list.php');
die();

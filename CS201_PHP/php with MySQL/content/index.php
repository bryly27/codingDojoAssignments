<?php
	$name = "Henry";
	include('content.php');
	$name = "Joe";
	include('content.php');
	$name = "Kay";
	include('content.php');

	include_once('function.php');

	print_name('Randall');
	print_name('Jose');
	print_name('Carry');

	require('names.php'); //requires this file
	include('names.php'); //will still process data

	echo 'I made it here';

?>
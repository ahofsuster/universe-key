<?php 
	include_once "config.php";
/*
	==============================
		Destroy session and 
		redirects to home page
	==============================
*/
	unset($_SESSION["a"]);
	header("location: index.php");
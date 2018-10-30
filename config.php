<?php 

session_start();
$appName = "Universe key";


switch($_SERVER["HTTP_HOST"]){
	    case "localhost":
		    $pathAPP="/Moj_zavrsni1.0/Moj_zavrsni/";
		    $connect = new PDO("mysql:host=localhost;dbname=baza","edunova","edunova");
	    break;
	    case "andrejh.byethost14.com":
		    $pathAPP="/Moj_zavrsni1.0/Moj_zavrsni/";
		    $connect = new PDO("mysql:host=sql310.byethost.com;port=3306;dbname=b14_22889944_baza","b14_22889944","kohorta1988");
	    break;
}

	$connect->exec("set names utf8;");
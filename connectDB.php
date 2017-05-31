<?php 
 	$DB_host = "localhost";
 	$DB_user = "u13570110";
 	$DB_pass = "T8Bg3tkTVn";
 	$DB_name = "db13570110";

 	$mysqli = new mysqli($DB_host,$DB_user,$DB_pass,$DB_name) OR die("Connection Error!");

 	mysqli_set_charset($mysqli,"utf8");

 ?>

<?php

$conn_error = 'Could not connect';
$mysql_host = $_SERVER['HTTP_HOST'];
$mysql_user = 'username';
$mysql_pass = '';
$mysql_db = 'godex';

$link = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);

if(!$link){
	die($conn_error);
}

mysqli_query ($link, "SET NAMES 'utf8' COLLATE 'utf8_unicode_ci'");

?>
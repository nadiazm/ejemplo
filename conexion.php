<?php
// PDO conexion data base
function connect() {
	$hostname = '127.0.0.1';
	$name = 'pruebas';
	$user = 'root';
	$password = '';
    return new PDO('mysql:host='.$hostname.';dbname='.$name, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
?>
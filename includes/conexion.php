<?php

//Conexión

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'blog_master';
$port = '3308';
$db = mysqli_connect($server, $username, $password, $database, $port);

mysqli_query($db, "SET NAMES 'utf8'");

//Iniciar la sesión
if(!isset($_SESSION)) {
    session_start();
}

?>
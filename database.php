<?php

$server = 'localhost';
$user = 'lesnik';
$pass = 'jebemtimatr';
$db_name = 'lesnik1';

$link = mysqli_connect($server, $user, $pass, $db_name);

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($link, "SET NAMES 'utf8'");
$salt = 'dglkn349346$%dfh';
?>
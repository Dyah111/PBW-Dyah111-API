<?php
//Pastikan script PHP disimpan di htdocs folder "rest"
//Aplikasi android akan melakukan reuest ke http://10.0.3.2/rest/

$server = 'localhost';
$user = 'root';
$pass = 'dyah1112$';
$db = 'basasunda';

$conn = mysqli_connect($server, $user, $pass, $db);
if (!$conn) {
    die('Connection error: ' . mysqli_connect_error());
}
?>
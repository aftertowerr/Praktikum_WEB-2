<?php
$host = "localhost";
$dbname = "dbpuskesmas";
$user = "root";
$pass = "";

$dsn = "mysql:host=$host;dbname=$dbname";

$dbh = new PDO($dsn,$user,$pass);

?>
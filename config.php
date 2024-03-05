<?php
$host = 'localhost';
$userdb = 'root';
$passdb = '';
$db = 'yt_nilai1';

//Procedural Style
$con = mysqli_connect($host, $userdb, $passdb, $db);
// Check connection
if (mysqli_connect_errno()) {
    echo "Keselahan pada koneksi MySQL: " . mysqli_connect_error();
    exit();
}

//Object-oriented Style
//$con = new mysqli($host, $userdb, $passdb, $db);
// if ($mysqli -> connect_errno)
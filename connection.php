<?php

$host = 'localhost';
$username = 'shkurtim_test';
$passwd = 'Mateo2001!!$';
$dbname = 'shkurtim_MyDatabase';
$conn = mysqli_connect($host, $username, $passwd, $dbname);

if (empty($conn)) {
    die("Connection failed" . mysqli_connect_error());
}



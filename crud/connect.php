<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'crud';
$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    echo "failed connect" . mysqli_connect_error();
}

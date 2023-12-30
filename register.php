<?php
require 'config.php';
$username = $_POST["username"];
$password = $_POST["password"];
$nama = $_POST["nama"];

$query_sql = "INSERT INTO user (username, password, nama)
            VALUES ('$username','$password','$nama')";


if (mysqli_query($conn, $query_sql)){
    header ("Location: login.html");
}else{
    echo"pendaftaran gagal: " . mysqli_error($conn);
}

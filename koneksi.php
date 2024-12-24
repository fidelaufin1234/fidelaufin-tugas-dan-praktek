<?php
$koneksi = mysqli_connect("localhost", "root", "" , "dbmahasiswa");

if (mysqli_connect_error()) {
    echo "Koneksi databse gagal : " . mysqli_connect_error();
}
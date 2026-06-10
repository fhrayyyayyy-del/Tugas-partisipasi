<?php 
//menyimpan server,username,password, dan database pada variabel
$host ="localhost";
$username ="root";
$password ="";
$database = "db_psb";

//membuat koneksi ke database
$koneksi = mysqli_connect($host,$username,$password,$database);

//informasi terkait koneksi
    if(!$koneksi){
    die("koneksi gagal: ". mysqli_connect_error());

    }
    echo "";
    
?> 
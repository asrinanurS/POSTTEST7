<?php 

$ server = " host lokal ";
$ namapengguna = " akar ";
$ kata sandi = "";
$ db_name = " pemesanan ";

$ db = mysqli_connect( $ server , $ username , $ password , $ db_name );

jika (! $ db ){
    die(" Gagal terhubung ");
}
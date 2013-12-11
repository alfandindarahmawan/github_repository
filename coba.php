<?php

//mulai session
session_start();

//cek lagi apakah session telah terdaftar untuk username tersebut
if(session_is_registered("username")){

//dan jika terdaftar
echo "Selamat Datang, session anda telah terdaftar. Dan hanya akan terhapus jika anda melakukan logout.";

}
else{

//jika tidak terdaftar, kembalikan user ke login.html
header( "Location: login.php" );
}

?>
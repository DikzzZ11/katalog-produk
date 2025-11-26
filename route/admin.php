<?php 
$_GET ['page'];
$page =$_GET['page'] ?? 'dasboard';

switch ($page){ 
    case 'dasboard' : include "page/dasboard.php";break;
    case 'genre' : include "page/input_genre.phh";break;
    default : echo "halaman tidak ditemukan";
}



?>
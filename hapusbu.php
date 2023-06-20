<?php
require 'fungsibu.php';
$id =$_GET["id"];

if(hapus($id)>0){
    echo "<script>alert('Data berhasil dihapus.');window.location='hasilbu.php';</script>";
}
else{
    echo "<script>alert('Data gagal dihapus.');window.location='hasilbu.php';</script>";
}
?>
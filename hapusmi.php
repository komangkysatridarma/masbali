<?php
require 'fungsimi.php';
$id =$_GET["id"];

if(hapus($id)>0){
    echo "<script>alert('Data berhasil dihapus.');window.location='hasilmi.php';</script>";
}
else{
    echo "<script>alert('Data gagal dihapus.');window.location='hasilmi.php';</script>";
}
?>
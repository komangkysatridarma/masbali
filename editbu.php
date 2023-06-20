<?php
require 'fungsibu.php';

$id= $_GET["id"];

$valo= query("SELECT * FROM bumbu WHERE id= $id")[0];

if(isset($_POST["submit"])){

    if( ubah($_POST) > 0){
        echo "<script>alert('Data berhasil diubah.');window.location='hasilbu.php';</script>";
    }
    else{
         echo "<script>alert('Data gagal diubah.');window.location='hasilbu.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        *{
    font-family:'Popins', sans-serif;
}
body{
    background-image:url("img/wave-haikei (1).svg");
    background-size:cover;
    background-repeat:repeat;
}
.box{
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:90vh;
}
.container{
    width:350px;
    display:flex;
    flex-direction:column;
    padding:0 15px 0 15px;
}
header{
    color:#fff;
    font-size:30px;
    display:flex;
    justify-content:center;
    padding:10px 0 10px 0;
}
.input-field{
    display:flex;
    flex-direction:column;
    margin:10px 0;
}
.input-field1{
    display:flex;
    flex-direction:column;
    margin-left:30px;
}
.input{
    height:45px;
    width:100%;
    border:none;
    outline:none;
    padding:0 0 0 45px;
    border-radius:30px;
    color:#fff;
    background: rgba(255,255,255,0.1);
}
::-webkit-input-placeholder{
    color:#fff;
}
.submit{
    border:none;
    border-radius:30px;
    font-size:15px;
    height:45px;
    outline:none;
    width:89%%;
    background:rgba(255,255,255,0.7);
    cursor:pointer;
    transition:.3s;
}
.submit:hover{
    box-shadow:1px 5px 7px 1px rgba(0,0,0,0.2);
}
    </style>
    
<div class="box">
        <div class="container">
            <div class="top-header">
                <header>Edit!</header>
            </div>
            <form action="" method="post">
            <div class="input-field">
            <input type="hidden" name="id" value=" <?= $valo["id"]; ?>">
                    <input type="text" name="nama" class="input" placeholder="Nama" required value="<?= $valo['nama'] ?>">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-field">
                    <input type="number" name="royco" class="input" placeholder="royco" required value="<?= $valo['royco'] ?>">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-field">
                    <input type="number" name="masako" class="input" placeholder="masako" required value="<?= $valo['masako'] ?>">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="number" name="kecap" class="input" placeholder="kecap" required value="<?= $valo['kecap'] ?>">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="number" name="saos" class="input" placeholder="saos" required value="<?= $valo['saos'] ?>">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="number" name="boncabe" class="input" placeholder="boncabe" required value="<?= $valo['boncabe'] ?>">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="number" name="sasa" class="input" placeholder="sasa" required value="<?= $valo['sasa'] ?>">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="number" name="jinten" class="input" placeholder="jinten" required value="<?= $valo['jinten'] ?>">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="number" name="ladaku" class="input" placeholder="ladaku" required value="<?= $valo['ladaku'] ?>">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field1">
                <button type="submit" name="submit" class="submit">Edit!</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
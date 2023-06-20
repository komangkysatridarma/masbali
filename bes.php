<?php
include 'fungsie.php';
// $jumlah = new jumlah();

if(isset($_POST["submit"])){

    if( tambah($_POST) > 0){
        echo "<script>alert('Data berhasil disimpan.');window.location='hasiles.php';</script>";
    }
    else{
         echo "<script>alert('Data gagal disimpan.');window.location='hasiles.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli Es Aice</title>
</head>
<body>
    <style>
        *{
    font-family:'Popins', sans-serif;
}
body{
    background-image:url("img/bulett.svg");
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
                <header>Beli!</header>
            </div>
            <?php
                        // if (isset($_POST['submit'])) {
                        //     $jmlaoka = $_POST['aoka'];
                        //     $jmlnabati = $_POST['nabati'];
                        //     $jmlbengbeng = $_POST['bengbeng'];
                        //     $jmlwafello = $_POST['wafello'];
                        //     $jmlcho = $_POST['cho'];
                        //     $jmlpotato = $_POST['potato'];
                        //     $jmlclic = $_POST['clic'];
                        //     $jmlsosis = $_POST['sosis'];
                        //     if ($jmlaoka == null) {
                        //         $jumlah->getJumlah(0, $jmlnabati , $jmlbengbeng, $jmlwafello, $jmlcho, $jmlpotato,$jmlclic,$jmlsosis);
                        //     } elseif ($jmlnabati == null) {
                        //         $jumlah->getJumlah($jmlaoka, 0 , $jmlbengbeng, $jmlwafello, $jmlcho, $jmlpotato,$jmlclic,$jmlsosis);
                        //     } elseif ($jmlbengbeng == null) {
                        //         $jumlah->getJumlah($jmlaoka, $jmlnabati , 0 ,  $jmlwafello, $jmlcho, $jmlpotato,$jmlclic,$jmlsosis);
                        //     }
                        //      elseif ($jmlwafello == null) {
                        //         $jumlah->getJumlah($jmlaoka, $jmlnabati , $jmlbengbeng, 0, $jmlcho, $jmlpotato,$jmlclic,$jmlsosis);
                        //     }
                        //      elseif ($jmlcho == null) {
                        //         $jumlah->getJumlah($jmlaoka, $jmlnabati , $jmlbengbeng, $jmlwafello, 0, $jmlpotato,$jmlclic,$jmlsosis);
                        //     }
                        //      elseif ($jmlpotato == null) {
                        //         $jumlah->getJumlah($jmlaoka, $jmlnabati , $jmlbengbeng, $jmlwafello, $jmlcho, 0,$jmlclic,$jmlsosis);
                        //     }
                        //      elseif ($jmlclic == null) {
                        //         $jumlah->getJumlah($jmlaoka, $jmlnabati , $jmlbengbeng, $jmlwafello, $jmlcho, $jmlpotato,0,$jmlsosis);
                        //     }
                        //      elseif ($jmlsosis == null){
                        //         $jumlah->getJumlah($jmlaoka, $jmlnabati , $jmlbengbeng, $jmlwafello, $jmlcho, $jmlpotato,$jmlclic,0);
                        //     }
                        //     $jumlah->setHarga();
                        //     $jumlah->cetakStruk();
                        // }
                        // ?>
            <form action="" method="post">
            <div class="input-field">
                    <input type="text" name="nama" class="input" placeholder="Nama" required>
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-field">
                    <input type="number" name="jagung" class="input" placeholder="Jagung" required>
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-field">
                    <input type="number" name="semangka" class="input" placeholder="Semangka" required>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="number" name="nanas" class="input" placeholder="Nanas" required>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="number" name="coffee" class="input" placeholder="Coffee" required>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="number" name="mochi" class="input" placeholder="Mochi" required>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="number" name="cup" class="input" placeholder="Cup" required>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="number" name="mangga" class="input" placeholder="Mangga" required>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="number" name="binggo" class="input" placeholder="Binggo" required>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field1">
                <button type="submit" name="submit" class="submit">Beli!</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
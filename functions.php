<?php
$conn = mysqli_connect("sql205.infinityfree.com", "if0_34462523", "eOlpM3RtQna", "if0_34462523_toko");

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $wadah = [];
    while($baju = mysqli_fetch_assoc($result)){
        $wadah[] = $baju;
    }
    return $wadah;
}

function tambah($data){
    global $conn;
    //htmlspecialchars untuk blog tag elemen html
    //simpan data ke dalam variable superglobal $_post
    $nama=($data["nama"]);
    $aoka=($data["aoka"]);
    $nabati=($data["nabati"]);
    $bengbeng=($data["bengbeng"]);
    $wafello=($data["wafello"]);
    $chocolatos=($data["chocolatos"]);
    $potato=($data["potato"]);
    $klik=($data["klik"]);
    $sosis=($data["sosis"]);

    //data yang disimpam di $_POST masukan ke databse
    $query ="INSERT INTO jajanan
         VALUES('', '$nama', '$aoka', '$nabati','$bengbeng','$wafello','$chocolatos','$potato','$klik','$sosis')";
        
        mysqli_query($conn, $query);

    //yang akan dikembalikan nilai 1 atau -1 untuk menghasilkan pesan
    return mysqli_affected_rows($conn);
}
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM jajanan WHERE id= $id");

    return mysqli_affected_rows($conn);
}
function ubah($data){
    global $conn;
    $id= $data["id"];
    $nama= $data["nama"];
    $aoka= $data["aoka"];
    $nabati= $data["nabati"];
    $bengbeng= $data["bengbeng"];
    $wafello= $data["wafello"];
    $chocolatos= $data["chocolatos"];
    $potato= $data["potato"];
    $klik= $data["klik"];
    $sosis= $data["sosis"];
    
    $query ="UPDATE jajanan SET
            nama ='$nama',
            aoka='$aoka',
            nabati='$nabati',
            bengbeng='$bengbeng',
            wafello='$wafello',
            chocolatos='$chocolatos',
            potato='$potato',
            klik='$klik',
            sosis='$sosis'
            WHERE id= $id";
        
        mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query="SELECT * FROM jajanan WHERE
            nama LIKE '%$keyword%'OR
            aoka LIKE '%$keyword%'OR
            nabati LIKE '%$keyword%'OR
            bengbeng LIKE '%$keyword%'OR
            wafello LIKE '%$keyword%'OR
            chocolatos LIKE '%$keyword%'OR
            potato LIKE '%$keyword%'OR
            klik LIKE '%$keyword%'OR
            sosis LIKE '%$keyword%'";
    return query($query);
}

function register($data){
    global $conn;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE
    username = '$username'");

    if(mysqli_fetch_assoc($result)){
        echo "<script>
        alert('Username sudah terdaftar! Ganti yang lain.');
        </script>";
        return false;
    }

    //cek konfirmasi password
    if($password !== $password2){
        echo "<script>
        alert('Password anda tidak sesuai, Cek dengan benar!');
        </script>";
        return false;
    } 

    //enkripsi password (amankan)
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user baru ke database
    mysqli_query($conn,"INSERT INTO user VALUES('','$username',
    '$password')");

    return mysqli_affected_rows($conn);
    
}
class Jajanan {
    public $aoka;
    public $nabati;
    public $bengbeng;
    public $wafello;
    public $coku;
    public $potato;
    public $clic;
    public $sosis;
    public $jmlAoka;
    public $jmlNabati;
    public $jmlBengbeng;
    public $jmlWafello;
    public $jmlCoku;
    public $jmlPotato;
    public $jmlClic;
    public $jmlSosis;
    public $hargaAoka;
    public $hargaNabati;
    public $hargaBengbeng;
    public $hargaWafello;
    public $hargaCoku;
    public $hargaPotato;
    public $hargaClic;
    public $hargaSosis;
    public $totalSeluruh;
    public $totalHargaAoka;
    public $totalHargaNabati;
    public $totalHargaBengbeng;
    public $totalHargaWafello;
    public $totalHargaCoku;
    public $totalHargaPotato;
    public $totalHargaClic;
    public $totalHargaSosis;

    public function __construct() {
        $this->hargaAoka = 3000;
        $this->hargaNabati = 2000;
        $this->hargaBengbeng = 2000;
        $this->hargaWafello = 2000;
        $this->hargaCoku = 1000;
        $this->hargaPotato = 500;
        $this->hargaClic = 500;
        $this->hargaSosis = 1000;
    }
}
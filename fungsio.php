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
    $bodrex=($data["bodrex"]);
    $oskadon=($data["oskadon"]);
    $ultraflu=($data["ultraflu"]);
    $paramex=($data["paramex"]);
    $mixagrip=($data["mixagrip"]);
    $panadol=($data["panadol"]);
    $tolakangin=($data["tolakangin"]);
    $diapet=($data["diapet"]);

    //data yang disimpam di $_POST masukan ke databse
    $query ="INSERT INTO obat
         VALUES('', '$nama', '$bodrex', '$oskadon','$ultraflu','$paramex','$mixagrip','$panadol','$tolakangin','$diapet')";
        
        mysqli_query($conn, $query);

    //yang akan dikembalikan nilai 1 atau -1 untuk menghasilkan pesan
    return mysqli_affected_rows($conn);
}
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM obat WHERE id= $id");

    return mysqli_affected_rows($conn);
}
function ubah($data){
    global $conn;
    $id= $data["id"];
    $nama= $data["nama"];
    $bodrex= $data["bodrex"];
    $oskadon= $data["oskadon"];
    $ultraflu= $data["ultraflu"];
    $paramex= $data["paramex"];
    $mixagrip= $data["mixagrip"];
    $panadol= $data["panadol"];
    $tolakangin= $data["tolakangin"];
    $diapet= $data["diapet"];
    
    $query ="UPDATE obat SET
            nama ='$nama',
            bodrex='$bodrex',
            oskadon='$oskadon',
            ultraflu='$ultraflu',
            paramex='$paramex',
            mixagrip='$mixagrip',
            panadol='$panadol',
            tolakangin='$tolakangin',
            diapet='$diapet'
            WHERE id= $id";
        
        mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query="SELECT * FROM obat WHERE
            nama LIKE '%$keyword%'OR
            bodrex LIKE '%$keyword%'OR
            oskadon LIKE '%$keyword%'OR
            ultraflu LIKE '%$keyword%'OR
            paramex LIKE '%$keyword%'OR
            mixagrip LIKE '%$keyword%'OR
            panadol LIKE '%$keyword%'OR
            tolakangin LIKE '%$keyword%'OR
            diapet LIKE '%$keyword%'";
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
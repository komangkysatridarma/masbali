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
    $downy=($data["downy"]);
    $soklin=($data["soklin"]);
    $lantai=($data["lantai"]);
    $proclin=($data["proclin"]);
    $rinso=($data["rinso"]);
    $rinso=($data["rinso"]);
    $daia=($data["daia"]);
    $jaz1=($data["jaz1"]);

    //data yang disimpam di $_POST masukan ke databse
    $query ="INSERT INTO cair
         VALUES('', '$nama', '$downy', '$soklin','$lantai','$proclin','$rinso','$rinso','$daia','$jaz1')";
        
        mysqli_query($conn, $query);

    //yang akan dikembalikan nilai 1 atau -1 untuk menghasilkan pesan
    return mysqli_affected_rows($conn);
}
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM cair WHERE id= $id");

    return mysqli_affected_rows($conn);
}
function ubah($data){
    global $conn;
    $id= $data["id"];
    $nama= $data["nama"];
    $downy= $data["downy"];
    $soklin= $data["soklin"];
    $lantai= $data["lantai"];
    $proclin= $data["proclin"];
    $rinso= $data["rinso"];
    $rinso= $data["rinso"];
    $daia= $data["daia"];
    $jaz1= $data["jaz1"];
    
    $query ="UPDATE cair SET
            nama ='$nama',
            downy='$downy',
            soklin='$soklin',
            lantai='$lantai',
            proclin='$proclin',
            rinso='$rinso',
            rinso='$rinso',
            daia='$daia',
            jaz1='$jaz1'
            WHERE id= $id";
        
        mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query="SELECT * FROM cair WHERE
            nama LIKE '%$keyword%'OR
            downy LIKE '%$keyword%'OR
            soklin LIKE '%$keyword%'OR
            lantai LIKE '%$keyword%'OR
            proclin LIKE '%$keyword%'OR
            rinso LIKE '%$keyword%'OR
            rinso LIKE '%$keyword%'OR
            daia LIKE '%$keyword%'OR
            jaz1 LIKE '%$keyword%'";
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
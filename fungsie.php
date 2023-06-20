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
    $jagung=($data["jagung"]);
    $semangka=($data["semangka"]);
    $nanas=($data["nanas"]);
    $coffee=($data["coffee"]);
    $mochi=($data["mochi"]);
    $cup=($data["cup"]);
    $mangga=($data["mangga"]);
    $binggo=($data["binggo"]);

    //data yang disimpam di $_POST masukan ke databse
    $query ="INSERT INTO es
         VALUES('', '$nama', '$jagung', '$semangka','$nanas','$coffee','$mochi','$cup','$mangga','$binggo')";
        
        mysqli_query($conn, $query);

    //yang akan dikembalikan nilai 1 atau -1 untuk menghasilkan pesan
    return mysqli_affected_rows($conn);
}
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM es WHERE id= $id");

    return mysqli_affected_rows($conn);
}
function ubah($data){
    global $conn;
    $id= $data["id"];
    $nama= $data["nama"];
    $jagung= $data["jagung"];
    $semangka= $data["semangka"];
    $nanas= $data["nanas"];
    $coffee= $data["coffee"];
    $mochi= $data["mochi"];
    $cup= $data["cup"];
    $mangga= $data["mangga"];
    $binggo= $data["binggo"];
    
    $query ="UPDATE es SET
            nama ='$nama',
            jagung='$jagung',
            semangka='$semangka',
            nanas='$nanas',
            coffee='$coffee',
            mochi='$mochi',
            cup='$cup',
            mangga='$mangga',
            binggo='$binggo'
            WHERE id= $id";
        
        mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query="SELECT * FROM es WHERE
            nama LIKE '%$keyword%'";
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
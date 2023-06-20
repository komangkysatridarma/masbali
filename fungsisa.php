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
    $dettol=($data["dettol"]);
    $giv=($data["giv"]);
    $lifebouy=($data["lifebouy"]);
    $nuvo=($data["nuvo"]);
    $fres=($data["fres"]);
    $lux=($data["lux"]);
    $zen=($data["zen"]);

    //data yang disimpam di $_POST masukan ke databse
    $query ="INSERT INTO sabunbatang
         VALUES('', '$nama', '$dettol', '$giv','$lifebouy','$nuvo','$fres','$lux','$zen')";
        
        mysqli_query($conn, $query);

    //yang akan dikembalikan nilai 1 atau -1 untuk menghasilkan pesan
    return mysqli_affected_rows($conn);
}
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM sabunbatang WHERE id= $id");

    return mysqli_affected_rows($conn);
}
function ubah($data){
    global $conn;
    $id= $data["id"];
    $nama= $data["nama"];
    $dettol= $data["dettol"];
    $giv= $data["giv"];
    $lifebouy= $data["lifebouy"];
    $nuvo= $data["nuvo"];
    $fres= $data["fres"];
    $lux= $data["lux"];
    $zen= $data["zen"];
    
    $query ="UPDATE sabunbatang SET
            nama ='$nama',
            dettol='$dettol',
            giv='$giv',
            lifebouy='$lifebouy',
            nuvo='$nuvo',
            fres='$fres',
            lux='$lux',
            zen='$zen'
            WHERE id= $id";
        
        mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query="SELECT * FROM sabunbatang WHERE
            nama LIKE '%$keyword%'OR
            dettol LIKE '%$keyword%'OR
            giv LIKE '%$keyword%'OR
            lifebouy LIKE '%$keyword%'OR
            nuvo LIKE '%$keyword%'OR
            fres LIKE '%$keyword%'OR
            lux LIKE '%$keyword%'OR
            zen LIKE '%$keyword%'";
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
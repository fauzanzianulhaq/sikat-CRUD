<?php


$nyambung = mysqli_connect("localhost", "root", "", "polisi");

function penjahat($penjahat){
    global $nyambung;
     $result = mysqli_query($nyambung, $penjahat);
     $baik=[];
     while($jahat = mysqli_fetch_assoc($result)){
        $baik[]=$jahat;
     }
     return $baik;
}

function tambah($data){
    global $nyambung;

    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $umur = htmlspecialchars($data["umur"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $penjahat = "INSERT INTO penjara (nama, alamat, umur, gambar) VALUES ('$nama', '$alamat', '$umur', '$gambar')";

    mysqli_query($nyambung, $penjahat);
    return mysqli_affected_rows($nyambung);
}

function edit($data){
    global $nyambung;
    $id = htmlspecialchars($data["id"]);
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $umur = htmlspecialchars($data["umur"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $penjahat = "UPDATE penjara SET
    nama = '$nama',
    alamat = '$alamat',
    umur = '$umur',
    gambar = '$gambar'
    WHERE id = $id";

    mysqli_query($nyambung, $penjahat);

    return mysqli_affected_rows($nyambung);
}

function hapus($id){
    global $nyambung;

    mysqli_query( $nyambung, "DELETE FROM penjara WHERE id = $id");
    return mysqli_affected_rows($nyambung);
}

?>

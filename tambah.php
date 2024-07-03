<?php
require 'function.php';
if(isset($_POST["submit"])){
    if(tambah($_POST) > 0){

        echo"
        <script>
        alert('Data berhasil ditambahkan');
        document.location.href='indexx.php';
        </script>
        ";
    }else{
        echo"
        <script>
        alert('Data gagal ditambahkan');
        document.location.href='indexx.php';
        </script>
        ";   
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Tambah data</title>
    <!-- <style> 
input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid red;
  border-radius: 4px;
}
</style> -->
</head>
<body>
    <h1 class="tambahdata2">Tambah data</h1>
    <!-- <form action="" method="POST">
        <ul>
            
            <label for="nama">Nama</label>
            <input type="text" id="name" name="name" required>
            
            <li>
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" id="alamat" required>
            </li>
            <li>
                <label for="umur">Umur :</label>
                <input type="text" name="umur" id="umur" required>
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="file" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tekan ini!</button>
            </li>
        </ul>
    </form> -->

    <form action="" method="POST">
        <fieldset>
        <p>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama"placeholder="nama..." required>
        </p>
        <p>
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" placeholder="alamat..." required >
        </p>
        <p>
            <label for="umur">Umur</label>
            <input type="text" name="umur" id="umur" placeholder="umur..." required >
        </p>
        <p>
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" id="gambar" required >
        </p>
        <p>
        <button type="submit" name="submit">Tekan ini!</button>
        </p>
        </fieldset>
    </form>

    
</body>
</html>
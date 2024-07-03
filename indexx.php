<?php
require_once('flogin.php');

// Periksa apakah pengguna sudah login
if (!is_logged_in()) {
    // Jika tidak, arahkan kembali ke halaman login
    header('Location: login.html');
    exit;
}
// Ambil username dari session
$username = $_SESSION['username'];
?>

<?php
require 'function.php';
$penjara = penjahat("SELECT * FROM penjara");
$i = 1;


?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
    <p>You have successfully logged in.</p>
    <a href="process_login.php?action=logout">Logout</a>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
a, button,input[type=submit],input[type=reset] {
    font-family: sans-serif;
    font-size: 15px;
    background: #22a4cf;
    color: white;
    border: white 3px solid;
    border-radius: 5px;
    padding: 10px 20px;
    margin-top: 10px;
}
a {
    text-decoration: none;
}
a:hover, button:hover, input[type=submit]:hover, input[type=reset]:hover{
    opacity:0.9;
}
</style>

<style>
.logout {
    margin: 0;
    position: absolute;
    top: 24%;
    margin-left: 1215px;
}
</style>
</head>
<body>
    <h1 class="datapenjara">Data penjara</h1>
    <a href="tambah.php" class="tambahdata">Tambah data</a>
    <a href="process_login.php?action=logout" class="logout">Logout</a>
    <table border="1" cellpadding="10" class="table1">
         <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>Gambar</th>
         </tr>
        


         <?php foreach($penjara as $jahat) : ?>
            
        <tr>
            <td><?= $i++; ?></td>
            <td>
                <a href="edit.php?id=<?= $jahat['id']; ?>">Edit</a>
                <a href="hapus.php?id=<?= $jahat['id']; ?>" onclick="return confirm('yakin?')">Hapus</a>
            </td>
            <td><?= $jahat['nama']; ?></td>
            <td><?= $jahat['alamat']; ?></td>
            <td><?= $jahat['umur']; ?></td>
            <td><img src="img/<?= $jahat['gambar']; ?>" width="90px"></td>
        </tr>
    <?php endforeach; ?>
    </table>
    
</body>
</html>

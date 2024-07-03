<?php
session_start();

// Simulasi data pengguna dari database atau hardcoded
$users = [
    'admin' => 'password123',
    'user' => 'pass123'
];

// Fungsi untuk memeriksa kredensial pengguna
function login($username, $password) {
    global $users;

    // Periksa kredensial
    if (isset($users[$username]) && $users[$username] === $password) {
        // Simpan informasi pengguna dalam session
        $_SESSION['username'] = $username;
        return true;
    } else {
        return false;
    }
}

// Fungsi untuk memeriksa apakah pengguna sudah login
function is_logged_in() {
    return isset($_SESSION['username']);
}

// Fungsi untuk logout pengguna
function logout() {
    // Hapus semua data session
    session_destroy();
    // Redirect kembali ke halaman login
    header('Location: index.html');
    exit;
}
?>
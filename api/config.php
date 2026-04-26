<<<<<<< HEAD
<?php
$host = "localhost";
$dbname = "bromo_tracking";   // ganti sesuai nama database kamu
$username = "root";           // default XAMPP
$password = "";               // default XAMPP kosong

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
=======
<?php
$host = "localhost";
$dbname = "bromo_tracking";   // ganti sesuai nama database kamu
$username = "root";           // default XAMPP
$password = "";               // default XAMPP kosong

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
>>>>>>> aac3205f2d5243290c2a81b58cb995c4d55a0b9e

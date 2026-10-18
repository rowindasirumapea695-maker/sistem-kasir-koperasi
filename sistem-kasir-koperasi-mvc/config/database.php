<?php
declare(strict_types=1);

$host = 'localhost';
$db   = 'sistem_kasir_koperasi';
$user = 'root';
$pass = '';

$dsn = "mysql:host={$host};dbname={$db};charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
} catch (PDOException $e) {
    error_log($e->getMessage());
    http_response_code(500);
    exit('Koneksi database gagal. Periksa config/database.php dan pastikan database sudah dibuat.');
}

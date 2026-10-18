# Sistem Kasir Koperasi — MVC Dasar

Proyek ini disesuaikan dengan modul **Praktikum MVC Dasar — Membuat Sistem Toko Sederhana**: PHP Native + MySQL/MariaDB tanpa framework.

## Alur MVC
Browser → `public/index.php` (routing) → `AuthMiddleware` bila perlu → Controller → Model → Database → View → Layout.

## Halaman/menu
- Home / Dashboard
- Login / Logout
- Produk
- Kategori
- Stok
- Anggota Koperasi
- Pengguna
- Transaksi
- Laporan

## Menjalankan dengan PHP built-in server
1. Pastikan PHP 8.1+ dan MySQL/MariaDB aktif.
2. Buat database dengan mengimpor `database/schema.sql` melalui phpMyAdmin.
3. Periksa `config/database.php` (default XAMPP: host `localhost`, user `root`, password kosong).
4. Buka terminal di folder proyek dan jalankan:
   `php -S localhost:8000 -t public`
5. Buka `http://localhost:8000`.

Jika memakai XAMPP, folder dapat ditempatkan di `C:\xampp\htdocs\sistem-kasir-koperasi-mvc`, lalu buka `http://localhost/sistem-kasir-koperasi-mvc/public/`. Untuk URL yang benar pada subfolder, sesuaikan `BASE_URL` di `config/app.php`.

## Membuat akun pertama
Halaman daftar akun tersedia di `?page=register`. Akun baru diberi role `kasir`. Untuk proyek tugas lokal, daftar akun pertama melalui halaman tersebut. Untuk aplikasi yang dipakai sungguhan, pendaftaran role admin sebaiknya dibatasi.

## BCrypt
`AuthController::register()` memakai `password_hash($password, PASSWORD_BCRYPT)`. Login memakai `password_verify()`. Kolom database bernama `password_hash`, panjang 255 karakter; password asli tidak disimpan.

## Catatan
Kerangka MVC, routing, login/session/logout, middleware, daftar produk/kategori/stok/anggota, dan struktur database tersedia. Form CRUD, penyimpanan transaksi lengkap, serta laporan penjualan masih berupa tahap lanjutan praktikum dan belum diimplementasikan penuh. Gunakan prepared statements dan jangan tampilkan detail error database kepada pengguna.

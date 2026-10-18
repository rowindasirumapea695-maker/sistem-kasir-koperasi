<nav class="navbar">
    <?php if (isset($_SESSION['user_id'])): ?>
        <a href="<?= e(url('home')) ?>">Dashboard</a>
        <a href="<?= e(url('products')) ?>">Produk</a>
        <a href="<?= e(url('categories')) ?>">Kategori</a>
        <a href="<?= e(url('stock')) ?>">Stok</a>
        <a href="<?= e(url('members')) ?>">Anggota</a>
        <a href="<?= e(url('transactions')) ?>">Kasir</a>
        <a href="<?= e(url('reports')) ?>">Laporan</a>
        <a href="<?= e(url('users')) ?>">Pengguna</a>
        <a class="nav-logout" href="<?= e(url('logout')) ?>">Logout</a>
    <?php else: ?>
        <a href="<?= e(url('login')) ?>">Login</a>
        <a href="<?= e(url('register')) ?>">Daftar Akun</a>
    <?php endif; ?>
</nav>

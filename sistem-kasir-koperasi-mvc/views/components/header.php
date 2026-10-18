<header class="site-header">
    <div class="brand-mark">SK</div>
    <div><h1><?= e(APP_NAME) ?></h1><p>Sistem Manajemen Koperasi</p></div>
    <?php if (isset($_SESSION['user_id'])): ?>
        <div class="signed-in">Login sebagai <strong><?= e($_SESSION['user_name'] ?? 'Pengguna') ?></strong></div>
    <?php endif; ?>
</header>

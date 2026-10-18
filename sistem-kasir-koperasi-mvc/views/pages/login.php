<section class="auth-card">
    <h2>Login</h2><p class="muted">Masuk ke aplikasi Sistem Kasir Koperasi.</p>
    <?php if (!empty($error)): ?><div class="alert error"><?= e($error) ?></div><?php endif; ?>
    <form method="post" action="<?= e(url('login')) ?>">
        <label for="username">Username</label><input id="username" name="username" required autocomplete="username">
        <label for="password">Password</label><input id="password" type="password" name="password" required autocomplete="current-password">
        <button type="submit">Masuk</button>
    </form>
    <p>Belum punya akun? <a href="<?= e(url('register')) ?>">Daftar di sini</a>.</p>
</section>

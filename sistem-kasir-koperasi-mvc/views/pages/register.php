<section class="auth-card">
    <h2>Daftar akun</h2><p class="muted">Password disimpan menggunakan BCrypt.</p>
    <?php if (!empty($error)): ?><div class="alert error"><?= e($error) ?></div><?php endif; ?>
    <?php if (!empty($success)): ?><div class="alert success"><?= e($success) ?> <a href="<?= e(url('login')) ?>">Login sekarang</a></div><?php endif; ?>
    <form method="post" action="<?= e(url('register')) ?>">
        <label for="name">Nama lengkap</label><input id="name" name="name" required autocomplete="name">
        <label for="username">Username</label><input id="username" name="username" required autocomplete="username">
        <label for="password">Password (minimal 8 karakter)</label><input id="password" type="password" name="password" minlength="8" required autocomplete="new-password">
        <button type="submit">Buat akun</button>
    </form>
</section>

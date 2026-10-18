<section class="panel">
    <h2>Pengguna Aplikasi</h2><p class="muted">Daftar akun yang terdaftar. Password hash tidak ditampilkan.</p>
    <?php if (!$users): ?><p>Belum ada pengguna.</p><?php else: ?>
    <div class="table-wrap"><table><thead><tr><th>Nama</th><th>Username</th><th>Peran</th><th>Dibuat</th></tr></thead><tbody>
    <?php foreach ($users as $u): ?><tr><td><?= e($u['name']) ?></td><td><?= e($u['username']) ?></td><td><?= e($u['role']) ?></td><td><?= e($u['created_at']) ?></td></tr><?php endforeach; ?>
    </tbody></table></div><?php endif; ?>
</section>

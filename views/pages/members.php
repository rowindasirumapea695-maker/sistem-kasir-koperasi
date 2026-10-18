<section class="panel">
    <h2>Anggota Koperasi</h2><p class="muted">Daftar anggota yang terdaftar.</p>
    <?php if (!$members): ?><p>Belum ada data anggota. Tambahkan data melalui database.</p><?php else: ?>
    <div class="table-wrap"><table><thead><tr><th>Kode Anggota</th><th>Nama</th><th>Telepon</th><th>Alamat</th></tr></thead><tbody>
    <?php foreach ($members as $m): ?><tr><td><?= e($m['member_code']) ?></td><td><?= e($m['name']) ?></td><td><?= e($m['phone'] ?? '-') ?></td><td><?= e($m['address'] ?? '-') ?></td></tr><?php endforeach; ?>
    </tbody></table></div><?php endif; ?>
</section>

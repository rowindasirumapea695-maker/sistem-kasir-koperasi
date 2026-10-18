<section class="hero">
    <span class="eyebrow">DASHBOARD</span>
    <h2>Selamat datang, <?= e($_SESSION['user_name'] ?? 'Pengguna') ?>!</h2>
    <p>Kelola produk, stok barang, anggota, dan transaksi koperasi dari satu tempat.</p>
</section>
<section class="stats">
    <article class="stat"><span>Total Produk</span><strong><?= (int)$stats['products'] ?></strong></article>
    <article class="stat"><span>Anggota</span><strong><?= (int)$stats['members'] ?></strong></article>
    <article class="stat"><span>Transaksi Tercatat</span><strong><?= (int)$stats['transactions'] ?></strong></article>
</section>
<section class="panel">
    <h2>Transaksi terbaru</h2>
    <?php if (!$recentTransactions): ?><p class="muted">Belum ada transaksi tersimpan.</p><?php else: ?>
    <div class="table-wrap"><table><thead><tr><th>No. Invoice</th><th>Kasir</th><th>Total</th><th>Tanggal</th></tr></thead><tbody>
    <?php foreach ($recentTransactions as $row): ?><tr><td><?= e($row['invoice_number']) ?></td><td><?= e($row['cashier_name']) ?></td><td><?= e(rupiah($row['total'])) ?></td><td><?= e($row['created_at']) ?></td></tr><?php endforeach; ?>
    </tbody></table></div><?php endif; ?>
</section>

<section class="panel">
    <h2>Kasir / Transaksi</h2><p class="muted">Riwayat transaksi terbaru.</p>
    <?php if (!$transactions): ?><p>Belum ada transaksi. Form transaksi dan penyimpanan detail merupakan tahap pengembangan berikutnya.</p><?php else: ?>
    <div class="table-wrap"><table><thead><tr><th>Invoice</th><th>Kasir</th><th>Total</th><th>Tanggal</th></tr></thead><tbody>
    <?php foreach ($transactions as $t): ?><tr><td><?= e($t['invoice_number']) ?></td><td><?= e($t['cashier_name']) ?></td><td><?= e(rupiah($t['total'])) ?></td><td><?= e($t['created_at']) ?></td></tr><?php endforeach; ?>
    </tbody></table></div><?php endif; ?>
</section>

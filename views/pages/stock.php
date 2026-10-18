<section class="panel">
    <h2>Stok Barang</h2><p class="muted">Pantau jumlah stok setiap produk.</p>
    <?php if (!$products): ?><p>Belum ada data produk.</p><?php else: ?>
    <div class="table-wrap"><table><thead><tr><th>Kode</th><th>Produk</th><th>Stok</th><th>Status</th></tr></thead><tbody>
    <?php foreach ($products as $p): ?><tr><td><?= e($p['product_code']) ?></td><td><?= e($p['name']) ?></td><td><?= (int)$p['stock'] ?></td><td><span class="pill <?= ((int)$p['stock'] <= 5) ? 'low' : 'ok' ?>"><?= ((int)$p['stock'] <= 5) ? 'Perlu restock' : 'Tersedia' ?></span></td></tr><?php endforeach; ?>
    </tbody></table></div><?php endif; ?>
</section>

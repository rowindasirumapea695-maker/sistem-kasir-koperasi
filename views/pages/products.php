<section class="panel">
    <h2>Daftar Produk</h2><p class="muted">Data barang yang dijual di koperasi.</p>
    <?php if (!$products): ?><p>Belum ada data produk. Isi tabel <code>products</code> di database untuk melihat daftar.</p><?php else: ?>
    <div class="table-wrap"><table><thead><tr><th>Kode</th><th>Nama Produk</th><th>Kategori</th><th>Harga</th><th>Stok</th></tr></thead><tbody>
    <?php foreach ($products as $p): ?><tr><td><?= e($p['product_code']) ?></td><td><?= e($p['name']) ?></td><td><?= e($p['category_name'] ?? '-') ?></td><td><?= e(rupiah($p['price'])) ?></td><td><?= (int)$p['stock'] ?></td></tr><?php endforeach; ?>
    </tbody></table></div><?php endif; ?>
</section>

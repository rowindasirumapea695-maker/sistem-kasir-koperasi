<section class="panel">
    <h2>Kategori Produk</h2><p class="muted">Kelompok barang yang tersedia di koperasi.</p>
    <?php if (!$categories): ?><p>Belum ada kategori. Tambahkan kategori melalui database.</p><?php else: ?>
    <ul class="category-list"><?php foreach ($categories as $category): ?><li><?= e($category['name']) ?></li><?php endforeach; ?></ul><?php endif; ?>
</section>

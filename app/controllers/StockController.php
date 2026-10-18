<?php
declare(strict_types=1);

final class StockController
{
    public function __construct(private PDO $db) {}

    public function index(): void
    {
        require_once BASE_PATH . '/app/models/Product.php';
        $products = (new Product($this->db))->all();
        render('stock', ['title' => 'Stok Barang', 'products' => $products]);
    }
}

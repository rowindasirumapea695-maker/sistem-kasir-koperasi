<?php
declare(strict_types=1);

final class ProductController
{
    public function __construct(private PDO $db) {}

    public function index(): void
    {
        require_once BASE_PATH . '/app/models/Product.php';
        $products = (new Product($this->db))->all();
        render('products', ['title' => 'Produk', 'products' => $products]);
    }
}

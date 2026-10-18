<?php
declare(strict_types=1);

final class Product
{
    public function __construct(private PDO $db) {}

    public function all(): array
    {
        return $this->db->query(
            'SELECT p.id, p.product_code, p.name, p.price, p.stock, c.name AS category_name
             FROM products p LEFT JOIN categories c ON c.id = p.category_id ORDER BY p.id DESC'
        )->fetchAll();
    }

    public function count(): int
    {
        return (int)$this->db->query('SELECT COUNT(*) FROM products')->fetchColumn();
    }
}

<?php
declare(strict_types=1);

final class Category
{
    public function __construct(private PDO $db) {}

    public function all(): array
    {
        return $this->db->query('SELECT id, name FROM categories ORDER BY name')->fetchAll();
    }
}

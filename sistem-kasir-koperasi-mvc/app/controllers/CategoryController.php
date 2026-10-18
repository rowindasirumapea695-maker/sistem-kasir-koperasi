<?php
declare(strict_types=1);

final class CategoryController
{
    public function __construct(private PDO $db) {}

    public function index(): void
    {
        require_once BASE_PATH . '/app/models/Category.php';
        $categories = (new Category($this->db))->all();
        render('categories', ['title' => 'Kategori', 'categories' => $categories]);
    }
}

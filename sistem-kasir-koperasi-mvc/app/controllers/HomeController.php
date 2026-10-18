<?php
declare(strict_types=1);

final class HomeController
{
    public function __construct(private PDO $db) {}

    public function index(): void
    {
        require_once BASE_PATH . '/app/models/Product.php';
        require_once BASE_PATH . '/app/models/Member.php';
        require_once BASE_PATH . '/app/models/Transaction.php';

        $stats = [
            'products' => (new Product($this->db))->count(),
            'members' => (new Member($this->db))->count(),
            'transactions' => (new Transaction($this->db))->count(),
        ];
        $recentTransactions = (new Transaction($this->db))->recent();
        render('home', ['title' => 'Dashboard', 'stats' => $stats, 'recentTransactions' => $recentTransactions]);
    }
}

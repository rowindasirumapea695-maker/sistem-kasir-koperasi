<?php
declare(strict_types=1);

final class ReportController
{
    public function __construct(private PDO $db) {}

    public function index(): void
    {
        require_once BASE_PATH . '/app/models/Transaction.php';
        $transactions = (new Transaction($this->db))->recent();
        render('reports', ['title' => 'Laporan Penjualan', 'transactions' => $transactions]);
    }
}

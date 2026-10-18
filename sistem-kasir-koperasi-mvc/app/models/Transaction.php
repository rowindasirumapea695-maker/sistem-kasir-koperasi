<?php
declare(strict_types=1);

final class Transaction
{
    public function __construct(private PDO $db) {}

    public function recent(): array
    {
        return $this->db->query(
            'SELECT t.id, t.invoice_number, t.total, t.created_at, u.name AS cashier_name
             FROM transactions t JOIN users u ON u.id = t.user_id
             ORDER BY t.id DESC LIMIT 10'
        )->fetchAll();
    }

    public function count(): int
    {
        return (int)$this->db->query('SELECT COUNT(*) FROM transactions')->fetchColumn();
    }
}

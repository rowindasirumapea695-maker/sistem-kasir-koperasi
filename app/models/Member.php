<?php
declare(strict_types=1);

final class Member
{
    public function __construct(private PDO $db) {}

    public function all(): array
    {
        return $this->db->query('SELECT id, member_code, name, phone, address FROM members ORDER BY id DESC')->fetchAll();
    }

    public function count(): int
    {
        return (int)$this->db->query('SELECT COUNT(*) FROM members')->fetchColumn();
    }
}

<?php
declare(strict_types=1);

final class User
{
    public function __construct(private PDO $db) {}

    public function findByUsername(string $username): array|false
    {
        $stmt = $this->db->prepare('SELECT id, name, username, password_hash, role FROM users WHERE username = ? LIMIT 1');
        $stmt->execute([$username]);
        return $stmt->fetch();
    }

    public function create(string $name, string $username, string $password): bool
    {
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $this->db->prepare('INSERT INTO users (name, username, password_hash, role) VALUES (?, ?, ?, ?)');
        return $stmt->execute([$name, $username, $hash, 'kasir']);
    }

    public function usernameExists(string $username): bool
    {
        $stmt = $this->db->prepare('SELECT id FROM users WHERE username = ? LIMIT 1');
        $stmt->execute([$username]);
        return (bool)$stmt->fetch();
    }

    public function all(): array
    {
        return $this->db->query('SELECT id, name, username, role, created_at FROM users ORDER BY id DESC')->fetchAll();
    }
}

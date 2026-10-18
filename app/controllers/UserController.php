<?php
declare(strict_types=1);

final class UserController
{
    public function __construct(private PDO $db) {}

    public function index(): void
    {
        require_once BASE_PATH . '/app/models/User.php';
        $users = (new User($this->db))->all();
        render('users', ['title' => 'Pengguna', 'users' => $users]);
    }
}

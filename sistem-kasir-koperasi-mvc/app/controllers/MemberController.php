<?php
declare(strict_types=1);

final class MemberController
{
    public function __construct(private PDO $db) {}

    public function index(): void
    {
        require_once BASE_PATH . '/app/models/Member.php';
        $members = (new Member($this->db))->all();
        render('members', ['title' => 'Anggota Koperasi', 'members' => $members]);
    }
}

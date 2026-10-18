<?php
declare(strict_types=1);

final class AuthMiddleware
{
    public static function handle(): void
    {
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        }
    }
}

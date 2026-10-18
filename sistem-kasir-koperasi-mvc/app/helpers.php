<?php
declare(strict_types=1);

function e(mixed $value): string
{
    return htmlspecialchars((string)($value ?? ''), ENT_QUOTES, 'UTF-8');
}

function rupiah(int|float|string $value): string
{
    return 'Rp ' . number_format((float)$value, 0, ',', '.');
}

function url(string $page = 'home'): string
{
    return BASE_URL . '/index.php?page=' . rawurlencode($page);
}

function redirect(string $page): never
{
    header('Location: ' . url($page));
    exit;
}

function render(string $page, array $data = []): void
{
    extract($data, EXTR_SKIP);
    $title = $title ?? ucfirst($page);
    ob_start();
    require BASE_PATH . '/views/pages/' . $page . '.php';
    $content = ob_get_clean();
    require BASE_PATH . '/views/layouts/main.php';
}

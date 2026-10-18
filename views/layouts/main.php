<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($title ?? APP_NAME) ?> - <?= e(APP_NAME) ?></title>
    <link rel="stylesheet" href="<?= e(BASE_URL) ?>/css/style.css">
</head>
<body>
<?php require BASE_PATH . '/views/components/header.php'; ?>
<?php require BASE_PATH . '/views/components/navbar.php'; ?>
<main class="container">
    <?= $content ?>
</main>
<?php require BASE_PATH . '/views/components/footer.php'; ?>
<script src="<?= e(BASE_URL) ?>/js/app.js"></script>
</body>
</html>

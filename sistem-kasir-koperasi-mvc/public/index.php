<?php
declare(strict_types=1);

session_start();

require_once __DIR__ . '/../config/app.php';
require_once __DIR__ . '/../app/helpers.php';
require_once __DIR__ . '/../config/database.php';
require_once BASE_PATH . '/app/middleware/AuthMiddleware.php';

$page = $_GET['page'] ?? 'home';

$publicPages = ['login', 'register'];
if (!in_array($page, $publicPages, true) && $page !== 'logout') {
    AuthMiddleware::handle();
}

require_once BASE_PATH . '/app/controllers/HomeController.php';
require_once BASE_PATH . '/app/controllers/AuthController.php';
require_once BASE_PATH . '/app/controllers/ProductController.php';
require_once BASE_PATH . '/app/controllers/CategoryController.php';
require_once BASE_PATH . '/app/controllers/StockController.php';
require_once BASE_PATH . '/app/controllers/MemberController.php';
require_once BASE_PATH . '/app/controllers/UserController.php';
require_once BASE_PATH . '/app/controllers/TransactionController.php';
require_once BASE_PATH . '/app/controllers/ReportController.php';

switch ($page) {
    case 'login': (new AuthController($pdo))->login(); break;
    case 'register': (new AuthController($pdo))->register(); break;
    case 'logout': (new AuthController($pdo))->logout(); break;
    case 'products': (new ProductController($pdo))->index(); break;
    case 'categories': (new CategoryController($pdo))->index(); break;
    case 'stock': (new StockController($pdo))->index(); break;
    case 'members': (new MemberController($pdo))->index(); break;
    case 'users': (new UserController($pdo))->index(); break;
    case 'transactions': (new TransactionController($pdo))->index(); break;
    case 'reports': (new ReportController($pdo))->index(); break;
    case 'home':
    case 'dashboard':
    default: (new HomeController($pdo))->index(); break;
}

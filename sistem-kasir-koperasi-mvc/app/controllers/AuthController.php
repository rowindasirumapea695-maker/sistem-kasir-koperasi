<?php
declare(strict_types=1);

require_once BASE_PATH . '/app/models/User.php';

final class AuthController
{
    public function __construct(private PDO $db) {}

    public function login(): void
    {
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username'] ?? '');
            $password = $_POST['password'] ?? '';
            $user = (new User($this->db))->findByUsername($username);

            if ($user && password_verify($password, $user['password_hash'])) {
                session_regenerate_id(true);
                $_SESSION['user_id'] = (int)$user['id'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['user_role'] = $user['role'];
                redirect('home');
            }
            $error = 'Username atau password tidak sesuai.';
        }
        render('login', ['title' => 'Login', 'error' => $error]);
    }

    public function register(): void
    {
        $error = '';
        $success = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['name'] ?? '');
            $username = trim($_POST['username'] ?? '');
            $password = $_POST['password'] ?? '';

            if ($name === '' || $username === '' || strlen($password) < 8) {
                $error = 'Isi semua data. Password minimal 8 karakter.';
            } else {
                $model = new User($this->db);
                if ($model->usernameExists($username)) {
                    $error = 'Username sudah digunakan.';
                } else {
                    try {
                        $model->create($name, $username, $password);
                        $success = 'Pendaftaran berhasil. Silakan login.';
                    } catch (PDOException $e) {
                        $error = 'Pendaftaran gagal. Coba gunakan username lain.';
                    }
                }
            }
        }
        render('register', ['title' => 'Daftar Akun', 'error' => $error, 'success' => $success]);
    }

    public function logout(): void
    {
        $_SESSION = [];
        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
        }
        session_destroy();
        header('Location: ' . url('login'));
        exit;
    }
}

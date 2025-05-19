<?php
class AuthController {
    public function login() {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user_id = $_POST['user_id'];
            $password = $_POST['password'];
            // Lógica de autenticación...
        }
        require_once __DIR__ . '/../views/auth/login.php'; // Carga la vista
    }
    // ... (métodos para registro y logout)
}
?>
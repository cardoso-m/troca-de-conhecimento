<?php

require_once __DIR__ . '/../service/UserService.php';
require_once __DIR__ . '/../dao/UserDAO.php';
require_once __DIR__ . '/../generic/MysqlSingleton.php';

use service\UserService;

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $service = new UserService();
    $usuario = $service->login($email, $senha);
    
    if ($usuario) {
        $_SESSION['usuario'] = $usuario;
        header("Location: ../public/cadastro.php");
        exit();
    } else {
    
        $erro = "Email ou senha incorretos";
        if (!$service->emailExiste($email)) {
            $erro = "Email não cadastrado";
        }
        header("Location: ../public/signin.php?erro=" . urlencode($erro));
        exit();
    }
}
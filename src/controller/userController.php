
<?php

require_once __DIR__ . '/../service/UserService.php';
require_once __DIR__ . '/../dao/UserDAO.php';
require_once __DIR__ . '/../generic/MysqlSingleton.php';

use service\UserService;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $service = new UserService();
    $mensagem = $service->register($nome, $email, $senha);
    
    echo $mensagem;
}

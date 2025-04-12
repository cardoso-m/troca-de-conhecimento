<?php
namespace service;

use dao\UserDAO;

class UserService {

    private $userDAO;

    public function __construct() {
        $this->userDAO = new UserDAO();
    }

    public function register($nome, $email, $senha) {
        if ($this->userDAO->findByEmail($email)) {
            return "E-mail já cadastrado.";
        }

        $this->userDAO->create($nome, $email, $senha);
        return "Usuário cadastrado com sucesso!";
    }
}

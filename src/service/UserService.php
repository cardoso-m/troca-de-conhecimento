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
    
        
        if ($this->userDAO->create($nome, $email, $senha)) {
            return "Usuário cadastrado com sucesso!";
        } else {
            return "Erro ao cadastrar usuário.";
        }
    }

    public function emailExiste($email) {
        $usuario = $this->userDAO->findByEmail($email);
        return $usuario !== null;
    }

    public function login($email, $senha) {
        $usuario = $this->userDAO->findByEmail($email);
        
        if (!$usuario) {
            return false;
        }
        
        if (!password_verify($senha, $usuario['password'])) {
            return false;
        }
        
        return $usuario;
    }
}
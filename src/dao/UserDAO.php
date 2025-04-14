<?php
namespace dao;

use generic\MysqlSingleton;

class UserDAO {

    private $db;

    public function __construct() {
        $this->db = MysqlSingleton::getInstance();
    }

    public function create($nome, $email, $senha) {
        $query = "INSERT INTO usuarios (nome, email, password) VALUES (:nome, :email, :senha)";
        $result = $this->db->executar($query, [
            ':nome' => $nome,
            ':email' => $email,
            ':senha' => password_hash($senha, PASSWORD_DEFAULT)
        ]);
        
        return $result !== false;
    }

    public function findByEmail($email) {
        $query = "SELECT * FROM usuarios WHERE email = :email LIMIT 1";
        $result = $this->db->executar($query, [':email' => $email]);
        
        return !empty($result) ? $result[0] : null;
    }
}